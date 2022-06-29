<?php
    include "header.php";
?>

    <section class="secondP">
        <form class="contact-form" action="">
            <h2>Nous Contactez</h2>

            <div class="firstChamps">
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="Email" id="Email">
                </div>
                <div>
                    <label for="name">Nom: </label>
                    <input type="text" name="name" id="name">
                </div>
            </div>

            <div class="firstChamps">
                <div>
                    <label for="fName">Prénom: </label>
                    <input type="text" name="fName" id="fName">
                </div>
                <div>
                    <label for="sujet">Sujet</label>
                    <input type="text" name="sujet" id="sujet">
                </div>
            </div>

            <div>
                <label for="MSG">Votre message: </label>
                <textarea name="MSG" id="MSG" cols="30" rows="10"></textarea>
            </div>

            <div class="valide">
                <input class="btn" type="reset" value="annuler">
                <input class="btn" type="submit" value="envoyer">
            </div>

        </form>
    </section>

<?php
    include "footer.php";
?>