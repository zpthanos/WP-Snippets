<script type="text/javascript">

      (function () {
         if ( typeof flatpickr === 'undefined' ) {
            return;
         }

         if ( ! flatpickr.hasOwnProperty( 'l10ns' ) ) {
            return;
         }

         var flatpickrL10n = flatpickr.l10ns.default;

         if ( typeof wpforms_settings !== 'undefined' && wpforms_settings.hasOwnProperty( 'locale' ) ) {
            flatpickrL10n = Object.assign( {}, flatpickrL10n )
            flatpickr.l10ns[wpforms_settings.locale] = flatpickrL10n;
         }

         flatpickrL10n.firstDayOfWeek = 1;

         flatpickrL10n.weekdays       = {
            shorthand: [ 'Κυρ', 'Δευ', 'Τρι', 'Τετ', 'Πεμ', 'Παρ', 'Σαβ' ],
            longhand : [ 'Κυριακή', 'Δευτέρα', 'Τρίτη', 'Τετάρτη', 'Πέμπτη', 'Παρασκευή', 'Σάββατο' ]
         };

         flatpickrL10n.months         = {
            shorthand: [ 'Ιαν', 'Φεβ', 'Μαρ', 'Απρ', 'Μάι', 'Ιούν', 'Ιούλ', 'Αύγ', 'Σεπ', 'Οκτ', 'Νοέ', 'Δεκ' ],
            longhand : [ 'Ιανουάριος', 'Φεβρουάριος', 'Μάρτιος', 'Απρίλιος', 'Μάιος', 'Ιούνιος', 'Ιούλιος', 'Αύγουστος', 'Σεπτέμβριος', 'Οκτώβριος', 'Νοέμβριος', 'Δεκέμβριος' ]
         };

      })();

   </script>
   <?php
}
add_action( 'wpforms_wp_footer_end', 'wpforms_flatpickr_l10_strings_customization' );
