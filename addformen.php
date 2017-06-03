<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    $productarticle  = $_POST['productarticle'];
	$productname  = $_POST['productname'];
    $productdesc  = $_POST['productdesc'];
    $productprice = (float) $_POST['productprice'];
    $productimg   = $_FILES['productimg']['name'];
    copy($_FILES['productimg']['tmp_name'], 'products/' . $_FILES['productimg']['name']);
	file_put_contents('files/formenarticles.txt', $productarticle . "\n", FILE_APPEND);
    file_put_contents('files/formennames.txt', $productname . "\n", FILE_APPEND);
    file_put_contents('files/formendescs.txt', $productdesc . "\n", FILE_APPEND);
    file_put_contents('files/formenprices.txt', $productprice . "\n", FILE_APPEND);
    file_put_contents('files/formenimgs.txt', $productimg . "\n", FILE_APPEND);
    echo '<script>location.href="clothes_for_men.php"</script>';
} else
    header('Location:index.php');
?>