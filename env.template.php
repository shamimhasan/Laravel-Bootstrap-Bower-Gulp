<?php
/**
 * UTC timezone: In order to prevent database localization of dates, set
 * db.app.timezone to UTC offset (+00:00) and pass only UTC date/time to
 * ORM.
 *
 * app/config/database.php MySQL section needs:
 *
 * 'options'   => [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET time_zone = \'' . getenv('db.app.timezone') . '\'']
 *
 * Vagrant/VM/MAMP/Sequel Pro and DB Exports/Backups: Be sure to check/
 * verify that local DB server is running in UTC before command line or
 * Sequel Pro direct editing of DB data to avoid incorrect date/time.
 */

return [

  /* LARAVEL =========================================================== */

  // app/config/app.php
  'app.env' => 'production',
  'app.debug' => true,
  'app.url' => 'http://example.com',
  'app.timezone' => 'UTC',
  'app.locale' => 'en',
  'app.key' => '', 

  // app/config/database.php
  'db.app.driver' => 'mysql',
  'db.app.host' => '',
  'db.app.name' => '',
  'db.app.user' => '',
  'db.app.pass' => '',
  'db.app.timezone' => '+00:00',

  /* APPLICATION ======================================================= */

  
];