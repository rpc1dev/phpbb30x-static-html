<?php
// Database connection details
$dbms = 'mysqli';
$dbhost = 'localhost';
$dbport = '';
$dbname = 'phpbb3';
$dbuser = 'phpbb3';
$dbpasswd = '';
$table_prefix = 'phpbb_';

// Ignore
$acm_type = 'file';
$load_extensions = '';
@define('IN_PHPBB', true);
@define('PHPBB_INSTALLED', true);
$style_data = array();

// Name of the folder to output all of the files to
$out_folder = 'out';

// List of forum IDs to convert or leave as array() to convert all guest viewable forums
$forums = array();