<?php

if (isset($_POST) && !empty($_POST["number"])) {
    $nom = $_POST["name"];
    $imax = (int)$_POST["number"];

    echo " <h1>Bienvenue {$nom}</h1>";
?>
    <form class="forminfo" method="post" action="">
        <fieldset>
            <legend>
                <h1>Enregistrement</h1>
            </legend>
            <?php
            for ($i = 1; $i <= $imax; $i++) {
            ?>
                <h3>Adresse <?php echo $i; ?></h3>
                <label for="streetNo">Numero Rue <input type="number" id="streetNo" name="street_nb" value=""></label>
                <br />
                <label for="streetName">Nom Rue<input type="text" id="streetName" name="street" value=""></label>
                <br />
                <input type="checkbox" id="adcity" name="type1" value="Domicile">Domicile
                <br />
                <input type="checkbox" id="adcity" name="type2" value="Livraison">Livraison
                <br />
                <input type="checkbox" id="adcity" name="type3" value="Facturation">Facturation
                <br>
                <input type="checkbox" id="adcity" name="type4" value="Professionelle">Professionelle
                <br />
                <br />
                <input type="radio" id="adcity1" name="city" value="Montréal">Montréal
                <input type="radio" id="adcity2" name="city" value="Laval">Laval
                <input type="radio" id="adcity2" name="city" value="Lassalle">Lassalle
                <input type="radio" id="adcity2" name="city" value="Lachine">Lachine
                <input type="radio" id="adcity2" name="city" value="Sheerbrooke">Sheerbrooke
                <input type="radio" id="adcity2" name="city" value="Québec">Québec
                <br />
                <label for="code">Code Postal<input type="text" id="code" name="zipcode" value=""></label>

            <?php
            }
            ?>
            <br />
            <br />
            <button type="submit">Enregistrer</button>
        </fieldset>
    </form>
<?php
} else {
    echo "Veuillez remplir le champ ";
}
