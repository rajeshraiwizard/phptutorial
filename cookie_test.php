<?php
// Set a cookie
setcookie("user", "John Doe", time() + (86400 * 30), "/"); // 86400 = 1 day
echo "Cookie 'user' is set!<br>";

// Check if the cookie is set
if(isset($_COOKIE["user"])) {
    echo "User is " . $_COOKIE["user"];
} else {
    echo "Cookie is not set!";
}
?>
