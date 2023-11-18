<link rel="stylesheet" href="../styles/formConfirm.css">
<?php
require_once "../functions/addressValidations.php";
echo "<h2>Veuillez Confirmer vos adresses</h2>";
if (isset($_POST)) {
    $imax = (int)$_POST["number"];
    //Validations Des Datas dans $_Post
    $isValid = true;

    for ($i = 1; $i <= $imax; $i++) {
        if (!isset($_POST["city$i"])) {
            echo "<b/>Veuillez selectioner une ville! <br/>";
            $isValid = false;
        }
        if (isset($_POST["street$i"])) {
            $streetNameIsValid = streetNameIsValid($_POST["street$i"]);
            echo "$streetNameIsValid.$i <br/>";
            $isValid = false;
        }
        if (isset($_POST["street_nb$i"])) {
            $streetNumberIsValid = streetNumberIsValid($_POST["street_nb$i"]);
            echo "$streetNumberIsValid.$i<br/>";
            $isValid = false;
        }
        if (isset($_POST["zipcode$i"])) {
            $zipcodeIsValid = zipcodeIsValid($_POST["zipcode$i"]);
            echo "$zipcodeIsValid.$i<br/>";
            $isValid = false;
        }
        if (typeIsNotSelected($_POST["type$i"])) {
            $typeIsNotSelected = typeIsNotSelected($_POST["type$i"]);
            echo "$typeIsNotSelected.$i<br/>";
            $isValid = false;
        }
    }
    if (!$isValid) {
        //Separation des valeurs pour la confirmation
?>
        <form class="formConfirm" method="post" action="./resultatAdresse.php">
            <fieldset>
                <legend> Vos Adresses</legend>
                <input hidden name="number" value=<?php echo $imax ?>>
                <?php
                for ($i = 1; $i <= $imax; $i++) {
                    $data = [
                        "street$i" => $_POST["street$i"],
                        "street_nb$i" => $_POST["street_nb$i"],
                        "type$i"  => $_POST["type$i"],
                        "city$i" => $_POST["city$i"],
                        "zipcode$i" => $_POST["zipcode$i"]
                    ];
                    $globaldata[$i] = $data;
                ?>
                    <label for="streetName">Nom Rue</label>
                    <input type="text" id="streetName" name="street<?php echo $i ?>" value="<?php echo $data["street$i"] ?>">
                    <br />
                    <label for="streetNum">Numero Rue</label>
                    <input type="number" id="streetNum" name="street_nb<?php echo $i ?>" value="<?php echo $data["street_nb$i"] ?>">
                    <br />
                    <label for="typeAd">Type D'adresse</label>
                    <input type="text" id="typeAd" name="type<?php echo $i ?>" value="<?php echo $data["type$i"] ?>">
                    <br />
                    <label for="cityAd">Ville</label>
                    <input type="text" id="cityAd" name="city<?php echo $i ?>" value="<?php echo $data["city$i"] ?>">
                    <br />
                    <label for="postalcode">Code Postal</label>
                    <input type="text" id="postalcode" name="zipcode<?php echo $i ?>" value="<?php echo $data["zipcode$i"] ?>">
                    <br />
                    <br /><?php
                        };
                            ?>

                <button type="submit">Confirmer</button>
            </fieldset>
        </form><?php
            }
        } else {
            header('Location:../pages/infoAdresse.php');
        }
                ?>
<input type="button" value="Retour" onclick="history.back()" />