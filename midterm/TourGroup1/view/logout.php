logout.php

<?php
session_start();
session_destroy();
  header('location:/../midterm/view/home.html');

 ?>
