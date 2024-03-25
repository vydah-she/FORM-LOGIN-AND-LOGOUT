<?php
session_strart();
session_unset();
session_destroy();
header('location:../views/login.php');