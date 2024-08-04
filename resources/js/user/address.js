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
    user_address_province() {
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
    user_address() {
        // user's address
        $('#user_address').submit(function (e) {
            e.preventDefault();

            // reset the error
            $('.user_address_error').empty();

            $.ajax({
                url: '/user/address',
                method: 'POST',
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
    }
}

// invoke event
EventManager.user_address_province();
EventManager.user_address();
