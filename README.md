# TennisApp

Description
============
Ολοκλήρωση της λειτουργικότητας της σελίδας των 2 πρώτων εργασιών ως πλήρη εφαρμογή ιστού, υλοποιώντας τα ακόλουθα:

* Αρχικό setup δήλωσης σταθερών στοιχείων αθλητή.

* Εισαγωγή προοδευτικά αυξανόμενων δεδομένων μέσω αντίστοιχων στοιχείων.

* Εισαγωγή απλών φίλτρων εμφάνισης μεμονωμένων δεδομένων πινάκων. Π.χ. dropdown αυτόματο φίλτρο επιλογής αντιπάλου για εμφάνιση αποτελεσμάτων μόνον απέναντι αυτού.

* Δημιουργία PWA: ανάρτηση στο github (ή οποιοδήποτε https secure context site), δημιουργία manifest και service workers, έτσι ώστε να μπορεί να γίνει “εγκαταστάσιμο” (installable). Αποθήκευση όλων των δεδομένων στο localStorage.

* Άλλες προαιρετικές ιδέες μόνον αν σας εξυπηρετούν:

* Επικοινωνία με οποιαδήποτε μορφή backend

* Δημιουργία γραφημάτων

* Εμφάνιση συνολικών στατιστικών (ποσοστά, μέσοι όροι κ.λπ.)

Tools
============
* PHP
* Javascript, HTML, CSS
* Phpmyadmin

Tables of Database
============
* Database: testing
* registration
  CREATE TABLE registration (
    Id int,
    firstname varchar(55),
    email varchar(55),
    country varchar(55),
    age varchar(55),
    ranking varchar(55),
    backhand varchar(55),
    forehand varchar(55),
    service varchar(55),
    volley varchar(55),
    gender varchar(55)
);
* tbl_name: Dynamiccallable table
  CREATE TABLE tbl_name (
    Id int,
    name varchar(55),
 );
 
Installation
============
* PWA


