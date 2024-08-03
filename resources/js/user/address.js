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

$(document).ready(function () {
    // to activate the tab
    let activeTab = localStorage.getItem('activeTab');
    if (activeTab) {
        let tabTrigger = $('#' + activeTab + '-tab');
        tabTrigger.trigger('click');
    } else {
        // default active tab
        $('#orders-tab').trigger('click');
    }

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
});
