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
});
