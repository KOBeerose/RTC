<?php
function get_ip()
{
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}
$ip = get_ip();
$query = @unserialize(file_get_contents('http://ip-api.com/php/' . $ip));

$host = 'localhost';
$dbusername = 'dbusername';
$dbpassword = 'dbpassword';
$dbname = 'rtc';
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
$centre = mysqli_real_escape_string($conn, $_POST['CPGE']);
$icon = "sdnt-icon";
$referer = $_SERVER['HTTP_REFERER'];

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_errno();
} else {
    $sql = "INSERT INTO centre(ip, centres) VALUES('$ip', '$centre')";
    setcookie("kokiza", "1", time() + 86400 * 30);

    if (mysqli_query($conn, $sql)) {

        header("Location: $referer");

    } else {
        echo 'query error:' . mysqli_error($conn);

    }
}
