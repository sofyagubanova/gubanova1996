<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    echo header('Location:index.php');
} else {
    $sum = 0;
    for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
        $sum = $sum + $_SESSION['price' . $i] * $_SESSION['quantity' . $i];
        file_put_contents('files/ordersitems9hQ8Iwd2J3F2dsQRsvV2.txt', '<tr><td>' . $_SESSION['item' . $i] . '</td><td>' . $_SESSION['item_name' . $i] . '</td><td>' . $_SESSION['quantity' . $i] . '</td><td>' . $_SESSION['price' . $i] * $_SESSION['quantity' . $i] . ' руб.</td></tr><br>', FILE_APPEND);
    }
    file_put_contents('files/ordersitems9hQ8Iwd2J3F2dsQRsvV2.txt', '<tr><td style="background:#e6e6fa;"><b>Итого к оплате: </b></td><td style="background:#e6e6fa; text-align: right; padding-right:40px;" colspan="4"><b>' . $sum . ' руб.</b></td></tr>' . "\n", FILE_APPEND);
    $login       = !empty($_SESSION['login']) ? $_SESSION['login'] : '';
    $fullname    = !empty($_GET['fullname']) ? htmlspecialchars($_GET['fullname']) : '';
    $phonenumber = !empty($_GET['phonenumber']) ? htmlspecialchars($_GET['phonenumber']) : '';
    $email       = !empty($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
    $address     = !empty($_GET['address']) ? htmlspecialchars($_GET['address']) : '';
    $date        = !empty($_GET['date']) ? htmlspecialchars($_GET['date']) : '';
    $orderingdate = date("d.m.y H:i");
    file_put_contents('files/orderslogins9hQ8Iwd2J3F2dsQRsvV2.txt', $login . "\n", FILE_APPEND);
	file_put_contents('files/orderscurrentdates9hQ8Iwd2J3F2dsQRsvV2.txt', $orderingdate . "\n", FILE_APPEND);
    file_put_contents('files/ordersfullnames9hQ8Iwd2J3F2dsQRsvV2.txt', $fullname . "\n", FILE_APPEND);
    file_put_contents('files/ordersphonenumbers9hQ8Iwd2J3F2dsQRsvV2.txt', $phonenumber . "\n", FILE_APPEND);
    file_put_contents('files/ordersemails9hQ8Iwd2J3F2dsQRsvV2.txt', $email . "\n", FILE_APPEND);
    file_put_contents('files/ordersaddresses9hQ8Iwd2J3F2dsQRsvV2.txt', $address . "\n", FILE_APPEND);
    file_put_contents('files/ordersdates9hQ8Iwd2J3F2dsQRsvV2.txt', $date . "\n", FILE_APPEND);
    $_SESSION['basketcounter'] = 0;
    echo '<script>location.href="thankyou.php"</script>';
}
?>