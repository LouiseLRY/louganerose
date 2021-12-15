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
    <title>A trois je vous aime - Tome 3</title>
</head>

<body>

    <!-- NAV / NAV MOBILE / HEADER -->
    <?php include 'php/navHeader.php'; ?>

    <!-- MAIN SECTION -->

    <section>
        <div class="container article-container">
            <div class="columns">
                <div class="bookInfosHeading column is-2">
                    <img class="image book-cover-page" src="images/ATJVA3.png" alt="a trois je vous aime - tome 3">
                    <aside class="buyingLinks">
                            <p class="cpink is-size-4 has-text-centered">Mars 2022</p>
                    </aside>
                </div>
                <div class="column is-10">
                    <div class="bookInfosTitle has-text-centered">
                        <h2 class="cpink is-size-3">A trois je vous aime</h2>
                        <h3 class="cpink is-size-4">Tome 3</h3>
                        <div class="divider"></div>
                        <h4 class="cpink is-size-6">Sortie en Mars 2022 aux éditions So Romance </h4>
                    </div>
                    <div class="bookSinopsis">
                        <p class="m-6">Lilie semble plus épanouie que jamais, et pourtant, une ombre qu’elle n’arrive pas à chasser se précise au fil des jours. Dans une histoire d’amour, il est difficile de fermer les yeux sur ce que l’on ressent vraiment. La jeune femme doute.Cette vie ne lui convient peut-être pas, elle craint de ne jamais pouvoir combler tous ses espoirs et son besoin d’amour.Année après année, les interrogations restent, même si les sentiments évoluent.Mais aujourd’hui les trois amis n’ont plus droit à l’erreur. De Valentyn ou de Léandre, il n’est plus question que l’un d’eux souffre.Comment décider de son avenir quand l’avis commun s’en mêle ? Dans ce tourbillon d’émotions enivrantes, entre passion et morale qui l’emportera définitivement ?</p>
                    </div>
                    <div class="dividerBottom"></div>
                    <div class="bookDescription">
                        <p class="m-6">« Il me souffle qu’en amour, il n’existe aucune loi, qu’aimer n’est pas un choix mais une liberté... dont le seul maître est le cœur. »</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- QUOTE -->
 <section class="hero is-fullheight quoteBlock has-text-centered">
        <blockquote class="quoteText cpink is-size-1-mobile p-6">« Est-il vraiment possible d’être excessivement heureuse et comblée, et pourtant si vide à la fois ? »
        </blockquote>
        <p class="cpink is-size-4">A trois je vous aime - Tome 3</p>
    </section>


    <!-- FOOTER -->
    <?php include 'php/footer.php'; ?>




    <!-- Scripts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/glider.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>