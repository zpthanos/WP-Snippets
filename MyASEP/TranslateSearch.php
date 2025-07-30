add_action( 'wp_footer', function() { 
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      var searchInputs = document.querySelectorAll('input[placeholder="Search ..."]');
      
      searchInputs.forEach(function(input) {
        input.setAttribute('placeholder', 'Αναζήτηση ...');
      });
    });
    </script>
    <?php
}, 999 );