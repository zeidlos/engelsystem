<?php
include ("../includes/config.php");

// Die Session zerstoeren...
session_start();
session_destroy ();
// und eine neue erstellen, damit kein Erzengelmenü angezeigt wird (falls sich ein Erzengel abmeldet...)
session_start();

header("HTTP/1.1 302 Moved Temporarily");
header("Location: ". $url. $ENGEL_ROOT);

?>
