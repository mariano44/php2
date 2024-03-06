<?php
include 'footer.php';

session_start();
$_SESSION["favcolor"] = "verde";

echo $_SESSION["favcolor"];
?>