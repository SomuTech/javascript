<!DOCTYPE html>
<?php
$cookie_servername = "servername";
$cookie_username = "root";
setcookie($cookie_servername,$cookie_servername, time() + (86400 * 30), "/");
setcookie($cookie_username,$cookie_username, time() + (86400 * 30), "/");

?>

<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_servername])) {
  echo "Cookie named '" . $cookie_servername . "' is not set!";
} else {
  echo "Cookie '" . $cookie_servername . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_servername];

  
}

echo "Value is: " . $_COOKIE[$cookie_username];
?>

</body>
</html>