<?php
require_once("admin_hash.php");

ini_set('display_errors', 0);
$flag = "CHH{fake_flag}";

if(!isset($_COOKIE['tebak_cookie'])) {
    exit;
}

if (($_COOKIE['tebak_cookie'] !== $adminhash)){
	header('Location: /index.php', true, 302);
}
else{
	echo $flag;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Flag</title>
</head>
<body>
Selamat kamu berhasil menebak hash-nya!
<?= flag; ?>
</body>
</html>