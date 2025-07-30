add_action( 'wp_footer', function() {
    ?>
    <style>
        #wpforms-1179-field_50-container fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }

        #wpforms-1179-field_50-container ul {
            list-style: none; 
            margin: 0;
            padding: 0;
        }

        #wpforms-1179-field_50-container ul li {
            display: flex; 
            align-items: center;
            margin-bottom: 10px;
        }

        #wpforms-1179-field_50-container input[type="radio"] {
            display: inline-block;
            margin-right: 10px;
        }

        #wpforms-1179-field_50-container label {
            font-size: 14px;
            cursor: pointer;
        }

        .wpforms-field-radio.wpforms-conditional-trigger input[type="radio"]:not(.wpforms-field-radio input) {
            display: none;
        }

        .wpforms-datepicker-wrap input {
            display: block;
            width: 100%;
            padding: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wpformsRadios = document.querySelectorAll('#wpforms-1179-field_50-container input[type="radio"]');
            
            wpformsRadios.forEach(function(radio) {
                radio.addEventListener('click', function(event) {
                    event.stopPropagation();
                });
            });

            const dateInputs = document.querySelectorAll('.wpforms-datepicker-wrap input.flatpickr-input');
            
            dateInputs.forEach(function(input) {
                input.addEventListener('focus', function() {
                    if (typeof flatpickr !== 'undefined') {
                        flatpickr(input, {
                            dateFormat: 'd/m/Y',
                            allowInput: true,
                        });
                    }
                });
            });
        });
    </script>
    <?php
});
