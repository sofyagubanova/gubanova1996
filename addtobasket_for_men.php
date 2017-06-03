<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
    echo header('Location:index.php');
} else {
	$productarticles  = file('files/formenarticles.txt', FILE_IGNORE_NEW_LINES);
    $productnames  = file('files/formennames.txt', FILE_IGNORE_NEW_LINES);
    $productprices = file('files/formenprices.txt', FILE_IGNORE_NEW_LINES);
    $formennumber = '';
    for ($i = 0; $i < count($productarticles); $i++) {
        if (!empty($_GET['formen' . $i])) {
            $formennumber = $_GET['formen' . $i];
            if ($formennumber != '') {
                $formennumber = $i;
                break;
            }
        } else {
            continue;
        }
    }
	$_SESSION['item' . $_SESSION['basketcounter']]     = $productarticles[$formennumber];
    $_SESSION['item_name' . $_SESSION['basketcounter']]     = $productnames[$formennumber];
    $_SESSION['price' . $_SESSION['basketcounter']]    = $productprices[$formennumber];
    $_SESSION['quantity' . $_SESSION['basketcounter']] = 1;
    $_SESSION['basketcounter']++;
    echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
}
?>