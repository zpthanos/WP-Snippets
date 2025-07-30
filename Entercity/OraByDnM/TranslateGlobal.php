
function custom_woocommerce_translation_text( $translated, $text, $domain ) {
    $translations = array(
        'Your cart is empty' => 'Το καλάθι σας είναι άδειο',
        'No items in your cart. Go on, fill it up with something you love!' => 'Δεν υπάρχουν προϊόντα στο καλάθι σας. Συνεχίστε και γεμίστε το με κάτι που αγαπάτε!',
        'START SHOPPING NOW' => 'Ξεκινήστε τα ψώνια σας τώρα',
        'Start shopping now'   => 'Ξεκινήστε τώρα',
		'Products'   => 'Προϊόντα',
		'WISHLIST'   => 'Αγαπημένα',
		'Ask a question'   => 'Φόρμα επικοινωνίας',
		'Απορίες'   => 'Ερωτήσεις',
		'Filter'   => 'Φίλτρα',
		'End of content'   => 'Τέλος προϊόντων',
    );
    if ( isset( $translations[ $text ] ) ) {
        $translated = $translations[ $text ];
    }
    return $translated;
}
add_filter( 'gettext', 'custom_woocommerce_translation_text', 20, 3 );
 
// 2. Inject JavaScript to update the mini-cart button text robustly.
function custom_mini_cart_translation_script() {
    ?>
    <script type="text/javascript">
    (function(){
        var targetText = 'start shopping now'; 
        
        function updateMiniCartButtonText() {
            var button = document.querySelector('.woocommerce-mini-cart__empty-message a.button');
            if (button && button.textContent.trim().toLowerCase() === targetText) {
                button.textContent = 'Ξεκινήστε τα ψώνια σας τώρα';
            }
        }
        
        document.addEventListener('DOMContentLoaded', function(){
            updateMiniCartButtonText();.
            var intervalCount = 0;
            var interval = setInterval(function(){
                updateMiniCartButtonText();
                intervalCount++;
                if (intervalCount >= 20) {
                    clearInterval(interval);
                }
            }, 500);
        });
    })();
    </script>
    <?php
}
add_action('wp_footer', 'custom_mini_cart_translation_script');
