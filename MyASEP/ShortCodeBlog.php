function asep_shortcode() {
    $content = '
    <div style="border: 2px solid #00adef; padding: 15px; margin: 20px 0; line-height: 1.5; text-align: left;">
        <h3 style="margin-top: 0; text-align: center; font-weight: bold;">Το myASEP.gr κάνει την αίτησή σας εύκολα και σωστά!</h3>
        <p>Το myASEP.gr αναλαμβάνει τη διεκπεραίωση αιτήσεων για μόνιμους διορισμούς και προσλήψεις στο Δημόσιο, καθώς και τη δημιουργία του ηλεκτρονικού Μητρώου ΑΣΕΠ, το οποίο είναι απαραίτητο για την επιτυχία σε οποιαδήποτε διαδικασία πρόσληψης ή διορισμού.</p>
        <h4>Τι προσφέρουμε:</h4>
        <ul>
            <li>Ανάλυση και καθοδήγηση: Μελετάμε προσεκτικά τις προκηρύξεις και σας ενημερώνουμε για όλα τα απαιτούμενα δικαιολογητικά.</li>
            <li>Ανεξάρτητη διεκπεραίωση: Αναλαμβάνουμε τη συμπλήρωση και την υποβολή της αίτησής σας στην πλατφόρμα του κάθε φορέα, χωρίς λάθη και έγκαιρα.</li>
            <li>Σιγουριά και αξιοπιστία: Εξασφαλίζουμε ότι η αίτησή σας πληροί όλες τις προϋποθέσεις για να κλειδώσετε τη θέση που σας ενδιαφέρει.</li>
        </ul>
        <h4>Γιατί να επιλέξετε το myASEP.gr;</h4>
        <p>Το myASEP.gr είναι η κορυφαία πλατφόρμα διεκπεραίωσης υποθέσεων του Δημοσίου και του ΑΣΕΠ, εξυπηρετώντας χιλιάδες ενδιαφερόμενους.</p>
        <p>Επιλέξτε παρακάτω την υπηρεσία που σας ενδιαφέρει: <a href="/ypovoli-aitisis-asep/"><strong>Υποβολή αίτησης στον ΑΣΕΠ</strong></a> και <a href="/dimiourgia-mitroou-asep/"><strong>Δημιουργία ή Έλεγχος μητρώου στον ΑΣΕΠ</strong></a> και ολοκληρώστε με την οnline <a href="/pay/"><strong>Πληρωμή των υπηρεσιών του ΑΣΕΠ</strong></a> που επιλέξατε με την χρήση χρεωστικής ή πιστωτικής κάρτας.</p>
        
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="pt-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <a href="/ypovoli-aitisis-asep/" style="
                        display: inline-block;
                        background-color: #00a0e3;
                        color: white;
                        font-size: 16px;
                        font-weight: bold;
                        padding: 12px 24px;
                        text-decoration: none;
                        border-radius: 8px;
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        transition: background-color 0.3s, transform 0.2s;"
                        onmouseover="this.style.backgroundColor=\'#0056b3\'; this.style.transform=\'scale(1.05)\';" 
                        onmouseout="this.style.backgroundColor=\'#007BFF\'; this.style.transform=\'scale(1)\';">
                        Υποβολή αίτησης του ΑΣΕΠ
                    </a>
                </div>

                <div class="pt-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <a href="/dimiourgia-mitroou-asep/" style="
                        display: inline-block;
                        background-color: #00a0e3;
                        color: white;
                        font-size: 16px;
                        font-weight: bold;
                        padding: 12px 24px;
                        text-decoration: none;
                        border-radius: 8px;
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        transition: background-color 0.3s, transform 0.2s;"
                        onmouseover="this.style.backgroundColor=\'#0056b3\'; this.style.transform=\'scale(1.05)\';" 
                        onmouseout="this.style.backgroundColor=\'#007BFF\'; this.style.transform=\'scale(1)\';">
                        Δημιουργία ή Έλεγχος μητρώου του ΑΣΕΠ
                    </a>
                </div>

                <div class="pt-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <a href="/pay/" style="
                        display: inline-block;
                        background-color: #00a0e3;
                        color: white;
                        font-size: 16px;
                        font-weight: bold;
                        padding: 12px 24px;
                        text-decoration: none;
                        border-radius: 8px;
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        transition: background-color 0.3s, transform 0.2s;"
                        onmouseover="this.style.backgroundColor=\'#0056b3\'; this.style.transform=\'scale(1.05)\';" 
                        onmouseout="this.style.backgroundColor=\'#007BFF\'; this.style.transform=\'scale(1)\';">
                        Πληρωμή υπηρεσιών του ΑΣΕΠ
                    </a>
                </div>
            </div>
        </div>
    </div>';

    return $content;
}
add_shortcode('asep', 'asep_shortcode');
