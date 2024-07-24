<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gest-Events</title>
    <!-- Inclure votre fichier CSS personnalisé -->
    <link rel="stylesheet" href="{{ asset('css/acceuil.css') }}">
    <!-- Inclure les icônes Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Inclure Bootstrap CSS depuis un CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
</head>

<body class="row">
    <header class="header">
        <nav class="navbar">
            <a href="school.php">Accueil</a>
            <a href="A_propos.php">A propos</a>
            <a href="Nous_contacter.html">Contact</a>
            <a href="admin.php">Admin</a>
        </nav>
    </header>

    <div class="background"></div>


    <div class="container">
        <div class="content">
            <h2 class="logo"><i class='bx bxl-firebase'></i>Gest-Events</h2>
            <div class="text-sci">
                <h2>Bienvenu!<br><span>Sur notre siteweb</span></h2>
                <p>Découvrez notre gamme variée d'événements sur notre site, incluant des ateliers éducatifs, des
                    séminaires et des conférences pour enrichir vos connaissances, ainsi que des événements sportifs
                    tels que des tournois, marathons et des compétitions pour les amateurs et les athlètes.
                    <br>Evadez-vous de la routine quotidienne avec nos événements de divertissement et de loisirs,
                    conçus pour vous offrir des moments inoubliables. Des concerts en plein air aux festivals culturels,
                    en passant par les projections de films, nous proposons des activités pour tous les goûts.</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form method="post" action="{{ route('auth.login') }}">
                    @csrf
                    <h2>Se connecter</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required value="{{ old('email') }}">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="password" required>
                        <label>Mot de passe</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Se souvenir de moi</label>
                        <a href="#">Mot de passe oublié?</a>
                    </div>
                    <button type="submit" name="ok" class="btn btn-success">Se connecter</button>
                    @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <i style="color:red">
                        <?php if (isset($message)) {
                            echo $message;
                        } ?>
                    </i>
                    <div class="login-register">
                        <p>Vous n'avez pas de compte? <a href="#" class="register-link">S'inscrire</a></p>
                    </div>
                </form>
            </div>
            <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                    {{ Auth::user()->name }}
                @endauth
                @guest
                    <a href="{{ route('auth.login') }}">Se connecter</a>
                @endguest
            </div>

            <div class="form-box register">


                <form method="POST" action="{{ route('inscription') }}">
                    @csrf
                    <h2>S'inscrire</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="nom" required value="{{ old('nom') }}">
                        <label>Nom</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="prenom" required value="{{ old('prenom') }}">
                        <label>Prénoms</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required value="{{ old('email') }}">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="password" required >
                        <label>Mot de passe</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" name="type">J'accepte les termes et conditions</label>
                    </div>
                    <button type="submit" name="soumettre" class="btn btn-success">S'inscrire</button>
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="login-register">
                        <p>Vous avez déjà un compte?<a href="#" class="login-link">Se connecter</a></p>
                    </div>
                </form>
            </div>
        </div>

        <script>
            const logregBox = document.querySelector('.logreg-box');
            const loginLink = document.querySelector('.login-link');
            const registerLink = document.querySelector('.register-link');

            registerLink.addEventListener('click', () => {
                logregBox.classList.add('active');
            });

            loginLink.addEventListener('click', () => {
                logregBox.classList.remove('active');
            });
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
