<?php
/**
 * Admin Module
 *
 * @package blesta
 * @subpackage blesta.language.el_gr
 * @copyright Copyright (c) 2024, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['AdminModule.getoptionalfunctions.tooltip_cancelService'] = 'Καλείται για την εκτέλεση ενεργειών της ενότητας κατά την ακύρωση της υπηρεσίας.';
$lang['AdminModule.getoptionalfunctions.tooltip_suspendService'] = 'Καλείται για την εκτέλεση ενεργειών της μονάδας κατά την αναστολή της υπηρεσίας.';
$lang['AdminModule.getoptionalfunctions.tooltip_unsuspendService'] = 'Καλείται για την εκτέλεση ενεργειών της μονάδας κατά τη διακοπή της υπηρεσίας.';
$lang['AdminModule.getoptionalfunctions.tooltip_renewService'] = 'Καλείται για την εκτέλεση ενεργειών της μονάδας όταν ανανεώνεται μια υπηρεσία.';
$lang['AdminModule.getoptionalfunctions.tooltip_addPackage'] = 'Εκτελεί οποιαδήποτε ενέργεια απαιτείται για την προσθήκη του πακέτου στον απομακρυσμένο διακομιστή. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, αποτρέποντας την προσθήκη του πακέτου.';
$lang['AdminModule.getoptionalfunctions.tooltip_editPackage'] = 'Εκτελεί οποιαδήποτε ενέργεια απαιτείται για την επεξεργασία του πακέτου στον απομακρυσμένο διακομιστή. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, εμποδίζοντας την επεξεργασία του πακέτου.';
$lang['AdminModule.getoptionalfunctions.tooltip_deletePackage'] = 'Διαγράφει το πακέτο στον απομακρυσμένο διακομιστή. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, εμποδίζοντας τη διαγραφή του πακέτου.';
$lang['AdminModule.getoptionalfunctions.tooltip_deleteModuleRow'] = 'Διαγράφει τη σειρά ενότητας στον απομακρυσμένο διακομιστή. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, αποτρέποντας τη διαγραφή της γραμμής.';
$lang['AdminModule.getoptionalfunctions.tooltip_manageAddRow'] = 'Επιστρέφει την απεικονιζόμενη προβολή της σελίδας προσθήκης γραμμής ενότητας.';
$lang['AdminModule.getoptionalfunctions.tooltip_manageEditRow'] = 'Επιστρέφει την απεικονιζόμενη προβολή της σελίδας γραμμής μονάδας επεξεργασίας.';
$lang['AdminModule.getoptionalfunctions.tooltip_upgrade'] = 'Πραγματοποιεί τη μετάβαση δεδομένων από την τρέχουσα έκδοση $current_version (την τρέχουσα εγκατεστημένη έκδοση) στη δεδομένη έκδοση του συνόλου αρχείων. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, αποτρέποντας την αναβάθμιση της ενότητας.';
$lang['AdminModule.getoptionalfunctions.tooltip_getGroupOrderOptions'] = 'Επιστρέφει έναν πίνακα των διαθέσιμων μεθόδων παραγγελίας ανάθεσης υπηρεσιών. Η ενότητα θα καθορίσει τον τρόπο ορισμού κάθε μεθόδου. Για παράδειγμα, η μέθοδος "first" μπορεί να υλοποιηθεί έτσι ώστε να επιστρέφει τη σειρά της ενότητας με τον μικρότερο αριθμό υπηρεσιών που της έχουν ανατεθεί.';
$lang['AdminModule.getoptionalfunctions.tooltip_selectModuleRow'] = 'Καθορίζει ποια σειρά ενότητας θα πρέπει να επιχειρείται κατά την παροχή υπηρεσίας για τη δεδομένη ομάδα με βάση τη μέθοδο παραγγελίας που έχει οριστεί για την εν λόγω ομάδα.';
$lang['AdminModule.getoptionalfunctions.tooltip_getAdminServiceInfo'] = 'Λαμβάνει το περιεχόμενο HTML που θα εμφανίζεται κατά την προβολή των πληροφοριών της υπηρεσίας στο περιβάλλον διαχείρισης.';
$lang['AdminModule.getoptionalfunctions.tooltip_getClientServiceInfo'] = 'Λαμβάνει το περιεχόμενο HTML που θα εμφανίζεται κατά την προβολή των πληροφοριών υπηρεσίας στη διεπαφή πελάτη.';
$lang['AdminModule.getoptionalfunctions.tooltip_checkAvailability'] = 'Ελέγχει αν ένα όνομα τομέα είναι διαθέσιμο ή όχι, επιστρέφει boolean.';
$lang['AdminModule.getoptionalfunctions.tooltip_checkTransferAvailability'] = 'Ελέγχει αν ένα όνομα τομέα μπορεί να μεταφερθεί, επιστρέφει boolean.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainInfo'] = 'Συλλέγει τις πληροφορίες ενός συγκεκριμένου ονόματος τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_getExpirationDate'] = 'Επιστρέφει την ημερομηνία λήξης ενός συγκεκριμένου ονόματος τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_getTldPricing'] = 'Επιστρέφει έναν πίνακα που περιέχει την τιμή κόστους όλων των διαθέσιμων TLDs';
$lang['AdminModule.getoptionalfunctions.tooltip_registerDomain'] = 'Εκτελεί οποιαδήποτε ενέργεια απαιτείται για την καταχώριση ενός νέου ονόματος τομέα. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, αποτρέποντας την καταχώριση ονόματος τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_renewDomain'] = 'Εκτελεί οποιαδήποτε ενέργεια απαιτείται για την ανανέωση ενός υπάρχοντος ονόματος τομέα. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, αποτρέποντας την ανανέωση του ονόματος τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_transferDomain'] = 'Εκτελεί οποιαδήποτε ενέργεια απαιτείται για τη μεταφορά ενός ονόματος τομέα. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, εμποδίζοντας τη μεταφορά του ονόματος τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainContacts'] = 'Επιστρέφει έναν πίνακα που περιέχει όλες τις επαφές που σχετίζονται με το όνομα τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainIsLocked'] = 'Επιστρέφει αν ο τομέας είναι κλειδωμένος ή όχι, επιστρέφει boolean.';
$lang['AdminModule.getoptionalfunctions.tooltip_getDomainNameServers'] = 'Επιστρέφει τους διακομιστές ονομάτων του τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_lockDomain'] = 'Εκτελεί οποιαδήποτε ενέργεια απαιτείται για το κλείδωμα του τομέα. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, αποτρέποντας το κλείδωμα του τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_unlockDomain'] = 'Πραγματοποιεί οποιαδήποτε ενέργεια απαιτείται για να ξεκλειδώσει τον τομέα. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, εμποδίζοντας το ξεκλείδωμα του τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_updateEppCode'] = 'Εκτελεί οποιαδήποτε ενέργεια απαιτείται για την ενημέρωση του κωδικού EPP ή του κωδικού εξουσιοδότησης του τομέα. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, εμποδίζοντας την ενημέρωση του κωδικού.';
$lang['AdminModule.getoptionalfunctions.tooltip_restoreDomain'] = 'Εκτελεί οποιαδήποτε ενέργεια απαιτείται για την αποκατάσταση ενός τομέα. Ορίζει σφάλματα εισόδου σε περίπτωση αποτυχίας, εμποδίζοντας την αποκατάσταση του τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_setNameserverIps'] = 'Ορίζει τους διακομιστές ονομάτων για ένα δεδομένο όνομα τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_sendEppEmail'] = 'Εκτελεί οποιαδήποτε ενέργεια απαιτείται για την αποστολή ενός email που περιέχει τον κωδικό EPP.';
$lang['AdminModule.getoptionalfunctions.tooltip_resendTransferEmail'] = 'Στέλνει εκ νέου το email επαλήθευσης της μεταφοράς domain.';
$lang['AdminModule.getoptionalfunctions.tooltip_setDomainContacts'] = 'Ενημερώνει τη λίστα των επαφών που σχετίζονται με έναν τομέα.';
$lang['AdminModule.getoptionalfunctions.tooltip_setDomainNameservers'] = 'Εκχωρεί νέους διακομιστές ονομάτων στον τομέα.';
$lang['AdminModule.index.page_title'] = 'Γεννήτρια επέκτασης - %1$s';
$lang['AdminModule.index.boxtitle_extension_generator'] = 'Γεννήτρια επέκτασης - Ενότητα';
$lang['AdminModule.basic.heading_basic'] = 'Βασικές πληροφορίες';
$lang['AdminModule.basic.heading_authors'] = 'Συγγραφείς';
$lang['AdminModule.basic.heading_tlds'] = 'Υποστηριζόμενοι TLDs';
$lang['AdminModule.basic.description'] = 'Περιγραφή';
$lang['AdminModule.basic.logo'] = 'Λογότυπο';
$lang['AdminModule.basic.module_row'] = 'Όνομα γραμμής ενότητας';
$lang['AdminModule.basic.module_row_plural'] = 'Όνομα γραμμής ενότητας (πληθυντικός)';
$lang['AdminModule.basic.module_group'] = 'Ετικέτα ομάδας μονάδων';
$lang['AdminModule.basic.module_type'] = 'Τύπος μονάδας';
$lang['AdminModule.basic.module_type_generic'] = 'Γενικό';
$lang['AdminModule.basic.module_type_registrar'] = 'Καταχωρητής';
$lang['AdminModule.basic.author_name'] = 'Όνομα συγγραφέα';
$lang['AdminModule.basic.author_url'] = 'Συγγραφέας URL';
$lang['AdminModule.basic.text_options'] = 'Επιλογές';
$lang['AdminModule.basic.author_row_add'] = 'Προσθήκη συγγραφέα';
$lang['AdminModule.basic.text_remove'] = 'Αφαιρέστε το';
$lang['AdminModule.basic.static_tlds'] = 'Στατικός ορισμός TLDs';
$lang['AdminModule.basic.tlds'] = 'TLDs';
$lang['AdminModule.basic.placeholder_tlds'] = '.com,.net,.org';
$lang['AdminModule.basic.tooltip_description'] = 'Η περιγραφή που εμφανίζεται στην καταχώριση της ενότητας';
$lang['AdminModule.basic.tooltip_logo'] = 'Το λογότυπο που εμφανίζεται στην καταχώριση της ενότητας';
$lang['AdminModule.basic.tooltip_module_row'] = 'Ο όρος με τον οποίο γίνεται αναφορά σε μία μόνο γραμμή μονάδας για αυτή την ενότητα';
$lang['AdminModule.basic.tooltip_module_row_plural'] = 'Ο όρος με τον οποίο γίνεται αναφορά σε πολλαπλές σειρές ενότητας για αυτή την ενότητα';
$lang['AdminModule.basic.tooltip_module_group'] = 'Ο όρος με τον οποίο γίνεται αναφορά στις ομάδες γραμμών της ενότητας για αυτή την ενότητα';
$lang['AdminModule.basic.tooltip_module_type'] = 'Εάν η ενότητα είναι γενική ενότητα ή ενότητα καταχωρητή τομέων';
$lang['AdminModule.basic.tooltip_static_tlds'] = 'Ορίστε τους TLD που υποστηρίζονται από αυτή την ενότητα ως λίστα με διαχωρισμό κόμματος (π.χ. .com,.net,.org)';
$lang['AdminModule.basic.placeholder_module_row'] = 'π.χ. Διακομιστής';
$lang['AdminModule.basic.placeholder_module_row_plural'] = 'π.χ. διακομιστές';
$lang['AdminModule.basic.placeholder_module_group'] = 'π.χ. Ομάδα διακομιστών';
$lang['AdminModule.basic.placeholder_author_name'] = 'π.χ. Blesta';
$lang['AdminModule.basic.placeholder_author_url'] = 'π.χ. https://blesta.com/';
$lang['AdminModule.basic.fields'] = 'Επόμενο - Πεδία ενότητας';
$lang['AdminModule.basic.confirm'] = 'Επόμενο - Επιβεβαίωση';
$lang['AdminModule.fields.heading_module_row_fields'] = 'Πεδία γραμμής ενότητας';
$lang['AdminModule.fields.heading_package_fields'] = 'Πεδία Πακέτου';
$lang['AdminModule.fields.heading_service_fields'] = 'Πεδία υπηρεσιών';
$lang['AdminModule.fields.name'] = 'Όνομα';
$lang['AdminModule.fields.label'] = 'Ετικέτα';
$lang['AdminModule.fields.type'] = 'Τύπος';
$lang['AdminModule.fields.tooltip'] = 'Κείμενο tooltip';
$lang['AdminModule.fields.name_key'] = 'Κλειδί ονόματος';
$lang['AdminModule.fields.tooltip_name'] = 'Το όνομα του πεδίου στη βάση κώδικα';
$lang['AdminModule.fields.tooltip_label'] = 'Το όνομα εμφάνισης του πεδίου';
$lang['AdminModule.fields.tooltip_type'] = 'Ο τύπος του πεδίου που θα δημιουργηθεί (πλαίσιο ελέγχου, κείμενο κ.λπ.)';
$lang['AdminModule.fields.tooltip_tooltip'] = 'Το κείμενο του tooltip που θα εμφανίζεται δίπλα στο πεδίο (αφήστε το κενό για να μην υπάρχει tooltip)';
$lang['AdminModule.fields.tooltip_name_key'] = 'Το πεδίο με το οποίο η Blesta προσδιορίζει το όνομα μιας σειράς πακέτων/υπηρεσιών/μοντέλων';
$lang['AdminModule.fields.placeholder_module_name'] = 'π.χ. module_field';
$lang['AdminModule.fields.placeholder_module_label'] = 'π.χ. Πεδίο ενότητας';
$lang['AdminModule.fields.placeholder_package_name'] = 'π.χ. package_field';
$lang['AdminModule.fields.placeholder_package_label'] = 'π.χ. Package Field';
$lang['AdminModule.fields.placeholder_service_name'] = 'π.χ. service_field';
$lang['AdminModule.fields.placeholder_service_label'] = 'π.χ. Πεδίο εξυπηρέτησης';
$lang['AdminModule.fields.module_row_add'] = 'Προσθήκη πεδίου γραμμής ενότητας';
$lang['AdminModule.fields.package_row_add'] = 'Προσθήκη πεδίου πακέτου';
$lang['AdminModule.fields.service_row_add'] = 'Προσθήκη πεδίου υπηρεσίας';
$lang['AdminModule.fields.text_options'] = 'Επιλογές';
$lang['AdminModule.fields.text_remove'] = 'Αφαιρέστε το';
$lang['AdminModule.fields.features'] = 'Επόμενο - Πρόσθετες λειτουργίες';
$lang['AdminModule.fields.package_fields_epp_code_label'] = 'Κωδικός EPP';
$lang['AdminModule.fields.package_fields_epp_code_tooltip'] = 'Εάν θέλετε να επιτρέπετε στους χρήστες να ζητούν έναν κωδικό EPP μέσω της διασύνδεσης υπηρεσίας Blesta.';
$lang['AdminModule.fields.service_fields_domain_label'] = 'Τομέας';
$lang['AdminModule.features.heading_features'] = 'Πρόσθετα χαρακτηριστικά';
$lang['AdminModule.features.heading_service_tabs'] = 'Καρτέλες διαχείρισης υπηρεσιών';
$lang['AdminModule.features.heading_cron_tasks'] = 'Εργασίες Cron';
$lang['AdminModule.features.heading_optional_functions'] = 'Προαιρετικές λειτουργίες';
$lang['AdminModule.features.method_name'] = 'Όνομα μεθόδου';
$lang['AdminModule.features.label'] = 'Ετικέτα';
$lang['AdminModule.features.level'] = 'Επίπεδο';
$lang['AdminModule.features.name'] = 'Όνομα';
$lang['AdminModule.features.description'] = 'Περιγραφή';
$lang['AdminModule.features.type'] = 'Τύπος';
$lang['AdminModule.features.time'] = 'Ώρα έναρξης/Διάστημα';
$lang['AdminModule.features.tooltip_method_name'] = 'Το όνομα της μεθόδου που θα δημιουργηθεί για αυτή την καρτέλα στη βάση κώδικα (με τη μορφή camelCaseMethodName)';
$lang['AdminModule.features.tooltip_tab_label'] = 'Το όνομα εμφάνισης της καρτέλας υπηρεσίας';

