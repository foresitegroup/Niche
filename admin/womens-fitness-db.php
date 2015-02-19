<?php
include "../inc/dbconfig.php";

switch ($_REQUEST['a']) {
  case "delete":
    $query = "DELETE FROM womensfitness WHERE id = '" . $_GET['id'] . "'";
    break;
  case "deleteall":
    $query = "TRUNCATE TABLE womensfitness;";
    break;
  case "deleteexp":
    $query = "DELETE FROM womensfitness WHERE exported = 'on'";
    break;
  case "exported":
    // Get the current export state and toggle it
    $result = mysql_query("SELECT * FROM womensfitness WHERE id = '" . $_GET['id'] . "'");
    $row = mysql_fetch_array($result);
    $exported = (empty($row['exported'])) ? "on" : "";
    
    $query = "UPDATE womensfitness SET exported = '" . $exported . "' WHERE id = '" . $_GET['id'] . "'";
    break;
  case "markexp":
    $query = "UPDATE womensfitness SET exported = 'on'";
    break;
  case "markunexp":
    $query = "UPDATE womensfitness SET exported = ''";
    break;
}

mysql_query($query);

mysql_close();

header( "Location: womens-fitness-index.php" );
?>