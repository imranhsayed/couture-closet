/**
 * product management
 */
const ProductManagement = {
    categoryMultiSelect() {
        $('#category-optgroup').multiselect({
            enableFiltering: true,
            maxHeight: 300,
            buttonContainer: '<div class="btn-group w-100" />',
            buttonText: function(options, select) {
                // First consider the simple cases, i.e. disabled and empty.
                if (this.disabledText.length > 0
                    && (this.disableIfEmpty || select.prop('disabled'))
                    && options.length == 0) {

                    return this.disabledText;
                }
                else if (options.length === 0) {
                    return this.nonSelectedText;
                }

                var $select = $(select);
                var $optgroups = $('optgroup', $select);

                var delimiter = this.delimiterText;
                var text = '';

                // Go through groups.
                $optgroups.each(function() {
                    var $selectedOptions = $('option:selected', this);
                    var $options = $('option', this);

                    if ($selectedOptions.length == $options.length) {
                        text += $(this).attr('label') + delimiter;
                    }
                    else {
                        $selectedOptions.each(function() {
                            text += $(this).text() + delimiter;
                        });
                    }
                });

                var $remainingOptions = $('option:selected', $select).not('optgroup option');
                $remainingOptions.each(function() {
                    text += $(this).text() + delimiter;
                });

                return text.substr(0, text.length - 2);
            }
        });
    }
}

// invoke
ProductManagement.categoryMultiSelect();
