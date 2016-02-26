<?php
/**
 * Created by PhpStorm.
 * User: heath
 * Date: 23/02/16
 * Time: 10:08 AM
 */

$mysqli = mysqli_connect("127.0.0.1", "root", "65Yellow", "sugarcrm");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
