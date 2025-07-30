add_action( 'wp_footer', function() {
    ?>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      
        var widget = document.getElementById('finwave_search-1');
        if ( widget ) {
           
            var searchInput = widget.querySelector('input.form-control');
            if ( searchInput ) {
                searchInput.placeholder = 'Αναζήτηση...';
            }
         
            var btnLabel = widget.querySelector('span.btn-label');
            if ( btnLabel ) {
                btnLabel.textContent = 'Αναζήτηση';
            }
        }
    });
    </script>
    <?php
});
