<?php
session_start();
session_destroy();
header("Location: 4.index.php");
exit();
?>
