<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
	file_put_contents('files/orderscurrentdates9hQ8Iwd2J3F2dsQRsvV2.txt', '');
    file_put_contents('files/orderslogins9hQ8Iwd2J3F2dsQRsvV2.txt', '');
    file_put_contents('files/ordersfullnames9hQ8Iwd2J3F2dsQRsvV2.txt', '');
    file_put_contents('files/ordersphonenumbers9hQ8Iwd2J3F2dsQRsvV2.txt', '');
    file_put_contents('files/ordersemails9hQ8Iwd2J3F2dsQRsvV2.txt', '');
    file_put_contents('files/ordersaddresses9hQ8Iwd2J3F2dsQRsvV2.txt', '');
    file_put_contents('files/ordersdates9hQ8Iwd2J3F2dsQRsvV2.txt', '');
    file_put_contents('files/ordersitems9hQ8Iwd2J3F2dsQRsvV2.txt', '');
    echo '<script>location.href="new_orders.php"</script>';
} else
    header('Location:index.php');
?>