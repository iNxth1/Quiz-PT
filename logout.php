<?php
session_start();
session_destroy();
header("Location: /pt10_quiz");
exit;
?>