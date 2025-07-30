
function custom_replace_registration_text() {
    ?>
    <script>
    jQuery(document).ready(function($) {
        // Έλεγχος κάθε 500ms
        var interval = setInterval(function() {
            var $fields = $('.register-field');
            
            if ($fields.length > 0) {
                $fields.each(function() {
                    var $p = $(this);
                    var $link = $p.find('.register-link');

                 
                    if ($link.length > 0) {
                      
                        var href = $link.attr('href');
                        $p.html(
                            '<a class="register-link" href="' + href + '" style="white-space: nowrap;">' +
                            'ΔΗΜΙΟΥΡΓΙΑ ΛΟΓΑΡΙΑΣΜΟΥ' +
                            '</a>'
                        );
                    }
                });

             
                clearInterval(interval);
            }
        }, 500);
    });
    </script>
    <?php
}
add_action('wp_footer', 'custom_replace_registration_text');
