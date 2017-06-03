<?
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
	$productarticles  = file('files/formenarticles.txt', FILE_IGNORE_NEW_LINES);
    $productnames  = file('files/formennames.txt', FILE_IGNORE_NEW_LINES);
    $productdescs  = file('files/formendescs.txt', FILE_IGNORE_NEW_LINES);
    $productprices = file('files/formenprices.txt', FILE_IGNORE_NEW_LINES);
    $productimgs   = file('files/formenimgs.txt', FILE_IGNORE_NEW_LINES);
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
    file_put_contents('files/formenarticles.txt', '');
    file_put_contents('files/formennames.txt', '');
    file_put_contents('files/formendescs.txt', '');
    file_put_contents('files/formenprices.txt', '');
    file_put_contents('files/formenimgs.txt', '');
    for ($i = $formennumber; $i < count($productarticles); $i++) {
        if(!empty($productarticles[$i])  && !empty($productarticles[$i + 1])){
            $productarticles[$i]  = $productarticles[$i + 1];
        }
		if(!empty($productnames[$i])  && !empty($productnames[$i + 1])){
            $productnames[$i]  = $productnames[$i + 1];
        }
        if(!empty($productdescs[$i])  && !empty($productdescs[$i + 1])){
			$productdescs[$i]   = $productdescs[$i + 1];
        }
        if(!empty($productprices[$i])  && !empty($productprices[$i + 1])){
			$productprices[$i] = $productprices[$i + 1];
        }
        if(!empty($productimgs[$i])  && !empty($productimgs[$i + 1])){
			$productimgs[$i]   = $productimgs[$i + 1];
        }
    }
    for ($i = 0; $i < count($productarticles) - 1; $i++) {
		file_put_contents('files/formenarticles.txt', $productarticles[$i] . "\n", FILE_APPEND);
        file_put_contents('files/formennames.txt', $productnames[$i] . "\n", FILE_APPEND);
        file_put_contents('files/formendescs.txt', $productdescs[$i] . "\n", FILE_APPEND);
        file_put_contents('files/formenprices.txt', $productprices[$i] . "\n", FILE_APPEND);
        file_put_contents('files/formenimgs.txt', $productimgs[$i] . "\n", FILE_APPEND);
    }
    echo '<script>location.href="clothes_for_men.php"</script>';
} else
    header('Location:index.php');
?>