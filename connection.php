<?php
/*
* Change the value of $password if you have set a password on the root userid
* Change NULL to port number to use DBMS other than the default using port 3306
*
*/

  $server_name = $_SERVER['SERVER_NAME'];

  switch ($server_name) {
    case 'mikiromans.epizy.com':
      $user     = 'epiz_25468458';
      $password = 'wY0W6raeU3izYbR'; //To be completed if you have set a password to root
      $database = 'epiz_25468458_romans'; //To be completed to connect to a database. The database must exist.
      $port     = NULL; //Default must be NULL to use default port
      $host     = 'sql212.epizy.com';    
      break;
    
    default:
      $user     = 'root';
      $password = ''; //To be completed if you have set a password to root
      $database = 'romans'; //To be completed to connect to a database. The database must exist.
      $port     = NULL; //Default must be NULL to use default port
      $host     = '127.0.0.1';
      break;
  }

  $mysqli = new mysqli($host, $user, $password, $database, $port);

  if ($mysqli->connect_error) {
      die('Connect Error (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }
  //echo '<p>Connection OK '. $mysqli->host_info.'</p>';
  //echo '<p>Server '.$mysqli->server_info.'</p>';

?>
