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
        <blockquote class="quoteText cpink is-size-1-mobile">"Il n’y a pas de règles à suivre, notre histoire est hors
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
                        <h3 class="cpink is-size-4">Tome 1 - Prélude</h4>
                        </div>
                    <div class="card-content">
                        <p>Léandre et Valentyn sont deux amis
                            d’enfance, deux frères de cœur liés
                            par un pacte qui les empêche de tomber
                            amoureux de la même femme. Tant
                            mieux, tomber amoureux ne fait pas
                            partie de leurs projets. Lilie, petite tornade
                            brune, vient s’installer pour travailler sur
                            son nouveau roman, chez les deux
                            hommes à Londres. Elle va bouleverser
                            leur vie, leurs sentiments et leur amitié…
                            entre désir, fraternité et jalousie, les trois
                            amis n’en sortiront pas indemnes.
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
                        <p>C'est avec difficulté que Lilie tente de
                            s'éloigner de Valentyn et Léandre afin de les
                            préserver. La jeune femme fait tout pour
                            lutter contre ses sentiments, taire ses
                            désirs et ses besoins, mais son bonheur ne
                            peut exister loin des deux hommes de sa
                            vie. Surtout quand ces derniers refusent de
                            respecter ses volontés et restent plus
                            présents que jamais. Cependant, les règles
                            du jeu semblent avoir changé, et il n'est plus
                            question d'amitié entre les deux colocataires
                            qui se considéraient pourtant comme des
                            frères. Partager Lilie? Plus jamais ! Dans cette
                            lutte acharnée pour les faveurs de la belle,
                            qui sait s'il peut vraiment y avoir un
                            gagnant? Vouloir tout avoir, c'est également
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
                    <p>Lilie semble plus épanouie que jamais,
                        et pourtant, une ombre qu’elle n’arrive
                        pas à chasser se précise au fil des jours.
                        Dans une histoire d’amour, il est difficile de
                        fermer les yeux sur ce que l’on ressent
                        vraiment. La jeune femme doute.Cette vie
                        ne lui convient peut-être pas, elle craint de
                        ne jamais pouvoir combler tous ses espoirs
                        et son besoin d’amour.Année après année,
                        les interrogations restent, même si les
                        sentiments évoluent.Mais aujourd’hui les trois
                        amis n’ont plus droit à l’erreur. De Valentyn
                        ou de Léandre, il n’est plus question que l’un
                        d’eux souffre.Comment décider de son avenir
                        quand l’avis commun s’en mêle ? Dans ce
                        tourbillon d’émotions enivrantes, entre passion
                        et morale qui l’emportera définitivement ?

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
                    <p>Fougueuse et rêveuse, Willow est une
                        artiste qui sourit à la vie. Tandis que
                        Milo, riche héritier et fils à papa, ne
                        peut s’empêcher de suivre sa voie toute
                        tracée.Elle le trouve suffisant et minable,
                        lui ne pense qu’à en faire sa femme.
                        Attraction inévitable de deux corps en fusion.
                        Jusqu’au jour où les jeunes gens décident
                        que ça sera eux contre le reste du monde.
                        Doigt d’honneur monumental à des familles
                        bien trop manipulatrices pour être honnêtes
                        et désir fou de liberté, tout simplement.
                        Un road trip à travers l’Amérique, une
                        véritable course poursuite pour ce couple qui
                        compte désormais son temps. La passion mène
                        ici son plus beau combat, mais à quel prix ?
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
        <blockquote class="quoteText cpink is-size-1-mobile">"Sa petite fille l’a transformé, il semble avoir pris vie à
            son contact, et sous mes yeux j’ai vu son cœur , en hibernation depuis des années, se réchauffer."
        </blockquote>
        <p class="cpink is-size-4">Dernière Danse</p>
    </section>

<!-- FOOTER -->

<?php include 'php/footer.php';?>


<!-- Scripts  -->
<script src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>