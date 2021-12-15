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
    <link rel="stylesheet" href="glider.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Runaway with me</title>
</head>

<body>

    <!-- NAV / NAV MOBILE / HEADER -->
    <?php include 'php/navHeader.php'; ?>

    <!-- MAIN SECTION -->

    <section>
        <div class="container article-container">
            <div class="columns">
                <div class="bookInfosHeading column is-2">
                    <img class="image book-cover-page" src="images/runaway.png" alt="runaway with me">
                    <aside class="buyingLinks">
                        <ul>
                            <p class="cpink is-size-4 has-text-centered">Je le veux !</p>
                            <li><a href="https://www.amazon.fr/RUN-AWAY-ME-LOUGANE-ROSE/dp/B08D4H2WHC/ref=sr_1_1?_encoding=UTF8&keywords=Run+Away+With+Me+LouGane+Rose&linkCode=xm2&qid=1639417429&s=books&sr=1-1" target="_blank"><img src="images/amazon-icon-1.svg" alt="amazon">Amazon</a></li>
                            <li><a href="https://fr.shopping.rakuten.com/offer/buy/3568565895/run-away-with-me.html" target="_blank"><img src="images/rakuten.svg" alt="rakuten">Rakuten</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="column is-10">
                    <div class="bookInfosTitle has-text-centered">
                        <h2 class="cpink is-size-3">Runaway with me</h2>
                        <div class="divider"></div>
                    </div>
                    <div class="bookSinopsis">
                        <p class="m-6">Fougueuse et rêveuse, Willow est une artiste qui sourit à la vie. Tandis que Milo, riche héritier et fils à papa, ne peut s’empêcher de suivre sa voie toute tracée.Elle le trouve suffisant et minable, lui ne pense qu’à en faire sa femme. Attraction inévitable de deux corps en fusion. Jusqu’au jour où les jeunes gens décident que ça sera eux contre le reste du monde. Doigt d’honneur monumental à des familles bien trop manipulatrices pour être honnêtes et désir fou de liberté, tout simplement. Un road trip à travers l’Amérique, une véritable course poursuite pour ce couple qui compte désormais son temps. La passion mène ici son plus beau combat, mais à quel prix ?</p>
                    </div>
                    <div class="dividerBottom"></div>
                    <div class="bookDescription">
                        <p class="m-6">"Cette vie ne me correspondait pas de toute façon, car moi, j’étais une colombe, une artiste, un esprit libre et voyageur. J’avais compris ce jour-là que jamais par amour je ne me laisserais enfermer à nouveau, mettre en cage par un homme. Et pour me préserver, je devais commencer par fuir ces prédateurs démoniaques : les fils à papa !"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- QUOTE -->
 <section class="hero is-fullheight quoteBlock has-text-centered">
        <blockquote class="quoteText cpink is-size-1-mobile p-6">"Elle fuit si vite qu’elle n’entend pas la déflagration de mon cœur qui explose dans ma poitrine derrière elle."
        </blockquote>
        <p class="cpink is-size-4">Runaway with me</p>
    </section>


    <!-- FOOTER -->
    <?php include 'php/footer.php'; ?>




    <!-- Scripts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/glider.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>