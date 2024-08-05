/**
 * get tab functions
 */
import {activateTab, setActiveTab} from "../store/actions.js";

/**
 * cities for Canada's provinces
 * @type {{AB: string[], BC: string[], QC: string[], NB: string[], MB: string[], NS: string[], PE: string[], SK: string[], NL: string[], ON: string[]}}
 */
const cities = {
    AB: ["Calgary", "Edmonton", "Red Deer", "Lethbridge", "St. Albert"],
    BC: ["Vancouver", "Victoria", "Kelowna", "Nanaimo", "Kamloops"],
    MB: ["Winnipeg", "Brandon", "Steinbach", "Thompson", "Portage la Prairie"],
    NB: ["Fredericton", "Saint John", "Moncton", "Dieppe", "Miramichi"],
    NL: ["St. John's", "Mount Pearl", "Corner Brook", "Conception Bay South", "Grand Falls-Windsor"],
    NS: ["Halifax", "Dartmouth", "Sydney", "Truro", "New Glasgow"],
    ON: ["Toronto", "Ottawa", "Mississauga", "Hamilton", "London"],
    PE: ["Charlottetown", "Summerside", "Stratford", "Cornwall", "Montague"],
    QC: ["Montreal", "Quebec City", "Laval", "Gatineau", "Longueuil"],
    SK: ["Saskatoon", "Regina", "Prince Albert", "Moose Jaw", "Swift Current"]
};

/**
 * tab manager
 * @param name
 */
const TabManager = {
    activate() {
        // activate tab
        activateTab();
    },
    init() {
        // add click listener
        document.addEventListener('click', (event) => {
            const tabButton = event.target.closest('.tab-button');
            if (tabButton) {
                const tabName = tabButton.dataset.tabName;
                setActiveTab(tabName);
            }
        });
    }
};

//init tab manager
TabManager.activate();
TabManager.init();

/**
 * event manager
 * @type {{user_address(): void, user_address_province(): void}}
 */
const EventManager = {
    show_user_address_province() {
        // cities from each province
        $('#user_address #province').change(function () {
            const selectedProvince = $(this).val();
            const citySelect = $('#city');

            citySelect.empty().append('<option value="">Select a city</option>');

            if (selectedProvince) {
                cities[selectedProvince].forEach(function (city) {
                    citySelect.append($('<option></option>').attr('value', city).text(city));
                });
                citySelect.prop('disabled', false);
            } else {
                citySelect.prop('disabled', true);
            }
        });
    },
    add_user_address() {
        // user's address
        $('#user_address').submit(function (e) {
            e.preventDefault();

            // reset the error
            $('.user_address_error').empty();

            // url
            let url = '/user/address';
            let method = 'POST';
            if ($('#user_address').find('#address_id').length > 0) {
                let addressId = $('#address_id').val();
                url = '/user/address/' + addressId;
                method = 'PUT';
            }

            $.ajax({
                url: url,
                method: method,
                data: $(this).serialize(),
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    if (response.success) {
                        $('#addressModal').modal('hide');
                        //reset the form's data
                        document.getElementById('user_address').reset();
                        window.location.href = '/user/profile';
                    }
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        displayErrors(errors);
                    }
                }
            });
        });

        // show errors
        function displayErrors(errors) {
            $.each(errors, function (field, messages) {
                const errorElement = $('#' + field + '_error');
                errorElement.empty();
                errorElement.html(messages.join('<br>'));
            });
        }
    },
    address_modal_listener() {
        let modal = $('#addressModal');
        // on show
        modal.on('show.bs.modal', function (event) {
            // get related button
            let button = $(event.relatedTarget);
            let addressId = button.data('id');
            // append address id
            $('#user_address').append(`<input type="hidden" id="address_id" name="address_id" value="${addressId}">`)
            // change title
            $('#modal_title').text('Edit Address');
            // set form values
            $('#street').val(button.data('street'));
            $('#postal_code').val(button.data('postal-code'));
            $('#province').val(button.data('province'));
            let citySelect = $('#city');
            if (button.data('province')) {
                cities[button.data('province')].forEach(function (city) {
                    if (city === button.data('city')) {
                        citySelect.append($('<option selected></option>').attr('value', city).text(city));
                    } else {
                        citySelect.append($('<option></option>').attr('value', city).text(city));
                    }
                });
                citySelect.prop('disabled', false);
            } else {
                citySelect.prop('disabled', true);
            }
            $('#country').val(button.data('country'));
        });
        // on hide
        modal.on('hide.bs.modal', function () {
            $('#address_id').remove();
        })
    }
}

// invoke event
EventManager.show_user_address_province();
EventManager.add_user_address();
EventManager.address_modal_listener();

