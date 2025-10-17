<?php
echo "Mi IP es: " . $_SERVER['SERVER_ADDR'];
echo("<br>Mi Hostname es: " . gethostname());
echo("<br>Mi versión de PHP es: " . phpversion());
echo("<br>Mi sistema operativo es: " . php_uname());
echo("<br>Mi usuario actual es: " . get_current_user());
echo("<br>Mi directorio actual es: " . getcwd());
?>
