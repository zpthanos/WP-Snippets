add_action( 'wp_footer', function() {
    ?>
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function() {
        
          var breadcrumbElements = document.querySelectorAll('.entry-breadcrumb [property="name"]');
          breadcrumbElements.forEach(function(el) {
         
              var text = el.textContent;
           
              text = text.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
           
              text = text.toLocaleUpperCase('el');
            
              el.textContent = text;
          });
      });
    </script>
    <?php
});
