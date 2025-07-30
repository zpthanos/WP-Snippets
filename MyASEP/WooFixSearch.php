add_filter( 'woocommerce_product_single_add_to_cart_text', 'myasep_custom_single_add_to_cart_text' );
function myasep_custom_single_add_to_cart_text( $button_text ) {
    return __( 'Πληρωμή τώρα', 'woocommerce' );
}

add_filter( 'gettext', 'myasep_translate_strings', 20, 3 );
function myasep_translate_strings( $translated_text, $original_text, $domain ) {


    if ( 'Your order' === $original_text ) {
        $translated_text = 'Η παραγγελία σας';
    }


    if ( 'Home' === $original_text ) {
        $translated_text = 'Αρχική';
    }

    
    if ( strpos( $original_text, 'Φόρμα υποβολής α ...' ) !== false ) {
        // Replace with the full text you actually want:
        $translated_text = 'Φόρμα υποβολής αίτησης';
    }

   
    if ( 'Edit options' === $original_text ) {
        $translated_text = 'Επεξεργασία παραγγελίας';
    }

    return $translated_text;
}
