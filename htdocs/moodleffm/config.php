<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodleffm';
$CFG->dbuser    = 'ffm';
$CFG->dbpass    = '21246813';
$CFG->prefix    = 'cocoon_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 8889,
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'http://moodleffm.herokuapp.com/htdocs/moodleffm/';
//$CFG->wwwroot   = 'http://192.168.163.231:8888/moodleffm';
$CFG->dataroot  = '/data/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
