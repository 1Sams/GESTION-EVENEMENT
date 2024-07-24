
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">

    <title>Document</title>
</head>
<body class="row">
    <header class="header">
        <nav class="navbar">

            <a href="school.php">Accueil</a>
            <a href="evenement.php">Evénements</a>
            <a href="A_propos .php">A propos</a>
            <a href="Nous_contacter.html">Contact</a>


        </nav>

    </header>

    <h1>VOS CATEGORIES D'EVENEMENTS POUR CE MOIS</h1>

    <div class="carre">
        <div class="details">
          <div class="titre">SPORT</div>
          <p>
        Ce mois-ci,plongez dans le vive de l'action <br>
        avec une série passionnante d'évènemnts sportifs qui captiveront <br>
        votre esprit compétitif et votre passion pour le sport.
            <br>
        <a href="evenement.php">voir les évènements associés</a>
          </p>
        </div>
        <div class="image">
          <img src="{{ asset('image/concept-equipement-sport_1284-13034.jpg') }}" alt="Sport">
        </div>
      </div>

      <div class="carre1">
        <div class="details">
          <div class="titre">DISTRACTION</div>
          <p>
            Préparez-vous à une explosion de divertissement ce mois-ci avec une gamme éclectique d'évènements <br>
            qui promettent de captiver et divertir. des spectacles en direct aux festivals vibrants, notre calendrier d'évènement <br>
            de distraction offre une variété de choix pour tous les goûts et tous les âges. <br>

        <a href="evenement.php">voir les évènements associés</a>
          </p>
        </div>
        <div class="image">
          <img src="{{ asset('image/jeux-4.jpg') }}" alt="Distraction">
        </div>
      </div>

      <div class="carre2">
        <div class="details">
          <div class="titre">EDUCATION</div>
          <p>
        Explorez les opportunités éducatives passionnantes qui enrichissent notre communauté ce moi-ci. <br>
        Des conférences inspirantes aux ateliers interactifs, notre calandrier d'évènements éducatifs propose une <br>
        multitude d'occasions pour apprendre, partager et grandir ensemble. <br>

        <a href="evenement.php">voir les évènements associés</a>
          </p>
        </div>
        <div class="image">
          <img src="{{ asset('image/Difference-Between-School-and-Education_Education.jpg') }}" alt="Education">
        </div>
      </div>
      <footer>

      </footer>
</body>
</html>
