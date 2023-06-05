<?php
// include language configuration file based on selected language
$lng = "sp";
if (isset($_GET['lang'])) {
   $lng = $_GET['lang'];
    $_SESSION['lang'] = $lng;
}
if( isset( $_SESSION['lang'] ) ) {
    $lng = $_SESSION['lang'];
}else {
    $lng = "sp";
}
require_once ("vistas/assets/lang/" . $lng . ".php");
?>