<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Meow+Script&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>

<body>

    <!-- NAV / NAV MOBILE / HEADER -->
    <?php include 'php/navHeader.php'; ?>


    <!-- CONTACT FORM -->
<?php if (isset($_POST['email'])) {
   include('forminfos.php');
}?>

<div class="cpink is-size-2 has-text-centered" style="margin-top: 100px;">
<?php if(isset($messageSent)){
    echo $messageSent;
} 
?></div>
    <section class="container article-container">
        <div class="columns">
            <div class="column is-6" style="display: flex; align-items: center;"> 
                <img src="images/drawing.png" alt="dessin">
            </div>
            <div class="column is-6">
                <form class="form" action="" method="post" id="contact-form" role="form">
                    <div class="divider"></div>
                    <h2 class="cpink is-size-3">Contactez-moi !</h2>
                    <div class="dividerBottom mb-6"></div>
                    <div class="field">
                        <label for="name" class="label">Nom / Prénom <span class="cpink"> *</span></label>
                        <div class="control">
                            <input type="text" id="name" name="name" class="input" placeholder="Votre nom et prénom">
                        </div>
                        <p class="comment cpink mt-3"></p>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email <span class="cpink"> *</span></label>
                        <div class="control">
                            <input type="text" id="email" name="email" class="input" placeholder="Votre adresse e-mail">
                        </div>
                        <p class="comment cpink mt-3"></p>
                    </div>

                    <div class="field">
                        <label for="message" class="label">Message<span class="cpink"> *</span></label>
                        <div class="control">
                            <textarea type="text" id="message" name="message" class="input" placeholder="Votre message" style="height: 300px; resize:none;"></textarea>
                        </div>
                        <p class="comment cpink mt-3"></p>
                    </div>
                    <p class="cpink is-left">* Ces informations sont requises</p>
                    <input type="submit" class="button1 mt-5 px-6 py-2" value="Envoyer"></input>
</form>
            </div>
        </div>
    </section>

    <section class="container article-container onMobile p-0 pt-2">
    <div class="column is-2 has-text-centered">
        <h2 class="cpink is-size-4 mb-3">Retrouvez-moi sur les réseaux !</h2>
                <ul>
                    <li><a href="https://www.facebook.com/louganeroseauteure"><i class="fab fa-facebook-square is-size-2 mb-4"></i></a></li>
                    <li><a href="https://www.instagram.com/louganerose/"><i class="fab fa-instagram is-size-2 mb-4"></i></a></li>
                </ul>
            </div>
    </section>




    <!-- FOOTER -->
    <?php include 'php/footer.php'; ?>

    <!-- Scripts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>