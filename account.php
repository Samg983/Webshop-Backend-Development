<!doctype html>
<html lang="nl">
    <?php
    require_once './Head.php';
    ?>

    <body class="hansHendrick">
        <?php
        require_once './Upper.php';
        ?>


        <main class="wrapper">

            <div class="row" style="margin-top:1em">
                <h4 class="col s12 red-border">Log-in</h4>

            </div>

            <div class="row valign-wrapper">
                <div class="col s12 m6 pull-m3 ">
                    <form method="post">
                        <div class="input-field">
                            <input id="user_name" type="text" class="validate" placeholder="">
                            <label for="user_name">Gebruikersnaam</label>
                        </div>
                        <div class="input-field">
                            <input id="password" type="password" class="validate" placeholder="">
                            <label for="password">Password</label>
                        </div>
                        <a href="index.php" class="btn waves-effect waves-light red darken-4 full-width">Send</a>
                        <!--<button id="logInAdmin" class="btn waves-effect waves-light red darken-4 full-width" type="submit" name="action">Log-in
                            <i class="material-icons right">send</i>
                        </button>-->
                    </form>
                </div>
            </div>



            <div class="row" style="margin-top:1em">
                <h4 class="col s12 red-border">Account aanmaken</h4>
                <p>Indien geen account, maak een account aan.</p>
            </div>

            <div class="row">
                <form method="post">
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input id="name" type="text" class="validate" placeholder="John Doe" name="naamGebruiker">
                            <label for="name">Naam</label>
                        </div>
                        <div class="input-field">
                            <input id="email" type="email" class="validate" placeholder="john.doe@example.com" name="emailadresGebruiker">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input id="password" type="password" class="validate" placeholder="****" name="password1">
                            <label for="password">Paswoord</label>
                        </div>
                        <div class="input-field">
                            <input id="password2" type="password" class="validate" placeholder="****" name="password2">
                            <label for="password2">Paswoord opnieuw</label>
                        </div>
                        <a href="index.php" class="btn waves-effect waves-light red darken-4 full-width">Maak account aan</a>
                        <!--<button id="logInAdmin" class="btn waves-effect waves-light red darken-4 full-width" type="submit" name="action">Log-in
                            <i class="material-icons right">send</i>
                        </button>-->
                    </div>
                </form> 
            </div>

        </main>

        <?php require_once './Footer.php'; ?>
    </body>

</html>