<?php
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', 'password');
  define('DB_NAME', 'ecoleman');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/ecoleman');
  // Site Name
  define('SITENAME', 'Geschool | Logiciel web de gestion decoles scolaire (école, lycée, établissement). Outils de gestion des notes, absences, vie scolaire, facturation, gestion des salles');


// page given in URL parameter, default page is one
// $page = isset($_GET['page']) ? $_GET['page'] : 1;

// set number of records per page
// $records_per_page = 5;

// calculate for the query LIMIT clause
// $from_record_num = ($records_per_page * $page) - $records_per_page;