<link rel="stylesheet" href="../styles/formConfirm.css">
<?php
require_once '../config/connection.php';
require_once '../functions/adresseFunctions.php';

if (isset($_POST)) {
    $imax = $_POST["number"];
    for ($i = 1; $i <= $imax; $i++) {
        $dataAdress = [
            'street' => $_POST['street' . $i],
            'street_nb' => (int)$_POST['street_nb' . $i],
            'type' => $_POST['type' . $i],
            'city' => $_POST['city' . $i],
            'zipcode' => $_POST['zipcode' . $i]
        ];
        $allAddress[$i] = $dataAdress;
    }
    $_SESSION['data'] = $allAddress;
    if (isset($_SESSION['data'])) {
        $globaldata = $_SESSION['data'];
    }
    foreach ($globaldata as $data) {
        showData($data);
        createAdresse($data);
    }
}
?>
<a href="../utils/index.php">Retour</a>