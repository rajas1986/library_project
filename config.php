<?php
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DB','digital_library');
/*

echo HOST."<br>";
echo USER."<br>";
echo PASSWORD."<br>";
echo DB."<br>";
*/
$conn=mysqli_connect(HOST,USER,PASSWORD,DB);
//print_r($conn);



?>