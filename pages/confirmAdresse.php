<h2>Veuillez Confirmer vos adresses</h2>


<form method="post" action="./resultatAdresse.php">

    <?php

    if (isset($_POST) && (!empty($_POST))) {

        $imax = (int)$_POST["number"];
        for ($i = 1; $i <= $imax; $i++) {
            $data = [
                "street" => $_POST["street$i"],
                "street_nb" => $_POST["street_nb$i"],
                "type" => $_POST["type$i"],
                "city" => $_POST["city$i"],
                "zipcode" => $_POST["zipcode$i"]
            ];

    ?>
            <label for="streetName">Nom Rue</label>
            <input type="text" id="streetName" name="street" value="<?php echo $data["street"] ?>">
            <br />
            <label for="streetNum">Numero Rue</label>
            <input type="number" id="streetNum" name="street_nb" value="<?php echo $data["street_nb"] ?>">
            <br />
            <label for="typeAd">Type D'adresse</label>
            <input type="text" id="typeAd" name="type" value="<?php echo $data["type"] ?>">
            <br />
            <label for="cityAd">Ville</label>
            <input type="text" id="cityAd" name="city" value="<?php echo $data["city"] ?>">
            <br />
            <label for="postalcode">Code Postal</label>
            <input type="text" id="postalcode" name="zipcode" value="<?php echo $data["zipcode"] ?>">
            <br />
            <br />
    <?php
        };
    };
    ?>
    <button type="button"><a href="infoAdresse.php">Retour</a></button>
    <button type="submit">Confirmer</button>
</form>