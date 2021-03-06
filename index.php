<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Meow+Script&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel="stylesheet" href="style.css">
    <title>Lougane Rose</title>
</head>

<body>
    <!--NAVBAR / NAVBAR MOBILE / HEADER -->

  <?php
    include 'php/navHeader.php';
  ?>

    <!-- AUTHOR -->

    <section class="container" id="author">
        <div class="columns is-multiline is-centered">
            <div class="column is-4-widescreen is-12 has-text-centered">
                <img id="authorPicture" src="images/author.png" alt="Lougane Rose">
            </div>
            <div class="column is-7-widescreen is-12">
                <h2 class="cpink is-size-3">A propos de l'auteure</h2>
                <p class="mt-5 is-size-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Turpis egestas sed
                    tempus urna et pharetra pharetra massa massa. Amet luctus venenatis lectus
                    magna fringilla urna porttitor rhoncus dolor. Amet consectetur adipiscing elit
                    pellentesque habitant. Sagittis vitae et leo duis ut diam quam nulla. Libero nunc
                    consequat interdum varius sit. Posuere morbi leo urna molestie at elementum. </p>
            </div>
        </div>
        </div>
    </section>

    <!-- QUOTE -->
    <section class="hero is-fullheight quoteBlock has-text-centered p-6">
        <blockquote class="quoteText cpink is-size-1-mobile">"Il n???y a pas de r??gles ?? suivre, notre histoire est hors
            normes."</blockquote>
        <p class="cpink is-size-4">A trois je vous aime - Tome 1</p>
    </section>

    <!-- CARDS -->
    <section class="container" id="mobileBookMenu">
        <div class="columns is-centered">
            <div class="column is-4">
                <div class="card left">
                    <div class="card-image">
                        <img class="book-cover" src="images/ATJVA1.png" alt="A trois je vous aime tome 1">
                    </div>
                    <div class="card-title">
                        <h3 class="cpink is-size-4">A trois je vous aime</h3>
                        <h3 class="cpink is-size-4">Tome 1 - Pr??lude</h4>
                        </div>
                    <div class="card-content">
                        <p>L??andre et Valentyn sont deux amis
                            d???enfance, deux fr??res de c??ur li??s
                            par un pacte qui les emp??che de tomber
                            amoureux de la m??me femme. Tant
                            mieux, tomber amoureux ne fait pas
                            partie de leurs projets. Lilie, petite tornade
                            brune, vient s???installer pour travailler sur
                            son nouveau roman, chez les deux
                            hommes ?? Londres. Elle va bouleverser
                            leur vie, leurs sentiments et leur amiti?????
                            entre d??sir, fraternit?? et jalousie, les trois
                            amis n???en sortiront pas indemnes.
                            Foutu pacte.
                        </p>
                    </div>
                    <div class="card-footer">
                        <button onclick="window.location.href = 'ATJVA1.php';" class="button1">Voir le livre</button>
                    </div>
                </div>
</div>
                <div class="column is-4">
                <div class="card right">
                    <div class="card-image">
                        <img class="book-cover" src="images/ATJVA2.png" alt="A trois je vous aime tome 2">
                    </div>
                    <div class="card-title">
                        <h3 class="cpink is-size-4">A trois je vous aime</h3>
                        <h3 class="cpink is-size-4">Tome 2 - Interlude</h4>
                        </div>
                    <div class="card-content">
                        <p>C'est avec difficult?? que Lilie tente de
                            s'??loigner de Valentyn et L??andre afin de les
                            pr??server. La jeune femme fait tout pour
                            lutter contre ses sentiments, taire ses
                            d??sirs et ses besoins, mais son bonheur ne
                            peut exister loin des deux hommes de sa
                            vie. Surtout quand ces derniers refusent de
                            respecter ses volont??s et restent plus
                            pr??sents que jamais. Cependant, les r??gles
                            du jeu semblent avoir chang??, et il n'est plus
                            question d'amiti?? entre les deux colocataires
                            qui se consid??raient pourtant comme des
                            fr??res. Partager Lilie? Plus jamais ! Dans cette
                            lutte acharn??e pour les faveurs de la belle,
                            qui sait s'il peut vraiment y avoir un
                            gagnant? Vouloir tout avoir, c'est ??galement
                            prendre le risque de tout perdre...

                        </p>
                    </div>
                    <div class="card-footer">
                    <button onclick="window.location.href = 'ATJVA2.php';" class="button1">Voir le livre</button>
                    </div>
                </div>
</div>
</div>
</section>
                

<section class="container">
    <div class="columns is-centered elements">
        <div class="column is-4">
            <div class="card left">
                <div class="card-image">
                    <img class="book-cover" src="images/ATJVA3.png" alt="A trois je vous aime tome 3">
                </div>
                <div class="card-title">
                    <h3 class="cpink is-size-4">A trois je vous aime</h4>
                    <h3 class="cpink is-size-4">Tome 3</h3>
                    </div>
                <div class="card-content">
                    <p>Lilie semble plus ??panouie que jamais,
                        et pourtant, une ombre qu???elle n???arrive
                        pas ?? chasser se pr??cise au fil des jours.
                        Dans une histoire d???amour, il est difficile de
                        fermer les yeux sur ce que l???on ressent
                        vraiment. La jeune femme doute.Cette vie
                        ne lui convient peut-??tre pas, elle craint de
                        ne jamais pouvoir combler tous ses espoirs
                        et son besoin d???amour.Ann??e apr??s ann??e,
                        les interrogations restent, m??me si les
                        sentiments ??voluent.Mais aujourd???hui les trois
                        amis n???ont plus droit ?? l???erreur. De Valentyn
                        ou de L??andre, il n???est plus question que l???un
                        d???eux souffre.Comment d??cider de son avenir
                        quand l???avis commun s???en m??le ? Dans ce
                        tourbillon d?????motions enivrantes, entre passion
                        et morale qui l???emportera d??finitivement ?

                    </p>
                </div>
                <div class="card-footer">
                <button onclick="window.location.href = 'ATJVA3.php';" class="button1">Voir le livre</button>
                </div>
            </div>
</div>
            <div class="column is-4">
            <div class="card right">
                <div class="card-image">
                    <img class="book-cover" src="images/runaway.png" alt="Run away with me">
                </div>
                <div class="card-title">
                    <h3 class="cpink is-size-4">Runaway with me</h3>
                    </div>
                <div class="card-content">
                    <p>Fougueuse et r??veuse, Willow est une
                        artiste qui sourit ?? la vie. Tandis que
                        Milo, riche h??ritier et fils ?? papa, ne
                        peut s???emp??cher de suivre sa voie toute
                        trac??e.Elle le trouve suffisant et minable,
                        lui ne pense qu????? en faire sa femme.
                        Attraction in??vitable de deux corps en fusion.
                        Jusqu???au jour o?? les jeunes gens d??cident
                        que ??a sera eux contre le reste du monde.
                        Doigt d???honneur monumental ?? des familles
                        bien trop manipulatrices pour ??tre honn??tes
                        et d??sir fou de libert??, tout simplement.
                        Un road trip ?? travers l???Am??rique, une
                        v??ritable course poursuite pour ce couple qui
                        compte d??sormais son temps. La passion m??ne
                        ici son plus beau combat, mais ?? quel prix ?
                    </p>
                </div>
                <div class="card-footer">
                <button onclick="window.location.href = 'runaway.php';" class="button1">Voir le livre</button>
                </div>
            </div>
</div>
</div>
</section>


    <!-- QUOTE -->
    <section class="hero is-fullheight quoteBlock has-text-centered p-6">
        <blockquote class="quoteText cpink is-size-1-mobile">"Sa petite fille l???a transform??, il semble avoir pris vie ??
            son contact, et sous mes yeux j???ai vu son c??ur , en hibernation depuis des ann??es, se r??chauffer."
        </blockquote>
        <p class="cpink is-size-4">Derni??re Danse</p>
    </section>

    <!-- NAV MOBILE -->
    <nav class="navbar is-fixed-bottom mobile">
    <ul>
        <li class="list active">
            <a href="index.php">
                <span class="text">Accueil</span>
                <span class="icon"><i class="fas fa-home"></i></span>
            </a>
        </li>
        <li class="list">
            <a href="menuBook.php">
                <span class="icon"><i class="fas fa-book-open"></i></span>
                <span class="text">Livres</span>
            </a>
        </li>
        <li class="list">
            <a href="presse.php">
                <span class="icon"><i class="fas fa-newspaper"></i></span>
                <span class="text">Presse</span>
            </a>
        </li>
        <li class="list">
            <a href="contact.php">
                <span class="icon"><i class="fas fa-envelope"></i></span>
                <span class="text">Contact</span>
            </a>
        </li>
        
    </ul>
</nav>

<!-- FOOTER -->

<?php include 'php/footer.php';?>


<!-- Scripts  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>

</html>