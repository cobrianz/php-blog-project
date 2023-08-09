<?php
require "config/constants.php";

//destroy all sessions and redirect the user to home page
session_destroy();
header("Location: " . ROOT_URL);
die();

?>