<link rel="stylesheet" href="../styles/formInfo.css">
<a href="../utils/index.php">Accueil</a>
<?php

if (isset($_POST) && !empty($_POST["number"])) {
    $nom = $_POST["name"];
    $imax = (int)$_POST["number"];

    echo " <h1>Bienvenue {$nom}</h1>";
?>
    <form class="forminfo" method="post" action="../pages/confirmAdresse.php">
        <fieldset>
            <legend>
                <h1>Enregistrement</h1>
            </legend>
            <label for="addnumber">Nombre d'addresse <input type="number" id="addnumber" name="number" value=<?php echo $imax ?>></label>
            <?php
            for ($i = 1; $i <= $imax; $i++) {
            ?>
                <h3>Adresse <?php echo $i; ?></h3>
                <label for="streetNo">Numero Rue <input type="number" id="streetNo" name="street_nb<?php echo $i ?>" value=""></label>
                <br />
                <label for="streetName">Nom Rue<input type="text" id="streetName" name="street<?php echo $i ?>" value=""></label>
                <br />
                <label for="adcity">Type D'adresse</label>
                <br />
                <input type="checkbox" id="adcity" name="type<?php echo $i ?>" value="Domicile">Domicile
                <br />
                <input type="checkbox" id="adcity" name="type<?php echo $i ?>" value="Livraison">Livraison
                <br />
                <input type="checkbox" id="adcity" name="type<?php echo $i ?>" value="Facturation">Facturation
                <br>
                <input type="checkbox" id="adcity" name="type<?php echo $i ?>" value="Professionelle">Professionelle
                <br />
                <br />
                <input type="radio" id="adcity1" name="city<?php echo $i ?>" value="Montréal">Montréal
                <input type="radio" id="adcity2" name="city<?php echo $i ?>" value="Laval">Laval
                <input type="radio" id="adcity2" name="city<?php echo $i ?>" value="Lassalle">Lassalle
                <input type="radio" id="adcity2" name="city<?php echo $i ?>" value="Lachine">Lachine
                <input type="radio" id="adcity2" name="city<?php echo $i ?>" value="Sheerbrooke">Sheerbrooke
                <input type="radio" id="adcity2" name="city<?php echo $i ?>" value="Québec">Québec
                <br />
                <label for="code">Code Postal<input type="text" id="code" name="zipcode<?php echo $i ?>" value=""></label>
                <br />
                <br />

            <?php
            }
            ?>
            <button type="submit">Enregistrer</button>

        </fieldset>
    </form>
<?php
} else {
    echo "Veuillez remplir le champ ";
}
