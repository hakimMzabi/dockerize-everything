<!DOCTYPE html>
<html lang="en">
<head>
    <title>quizz.io</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
</head>
<body>
<<<<<<< HEAD
<header>
    <!-- Contains the header of the application -->
</header>

=======
>>>>>>> architecture
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <a class="navbar-brand">quizz.io</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<<<<<<< HEAD

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <?php
            if (!($_SESSION['connected'] === true)) { ?>
=======

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
            </li>
            <?php if (($_SESSION['connected'] === true) && ($_SESSION['level'] === 99)) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/administration">Administration</a>
                </li>
            <?php endif ?>
        </ul>
        <ul class="navbar-nav">

            <?php if (!($_SESSION['connected'] === true)) : ?>
>>>>>>> architecture
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
<<<<<<< HEAD
                <?php
            }
            ?>
            <?php
            if ($_SESSION['connected'] === true) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>

=======
            <?php endif ?>
            <?php if ($_SESSION['connected'] === true) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
>>>>>>> architecture
                <li class="nav-item">
                    <a class="nav-link disabled"
                       href="/logout">Bonjour <b><?= $_SESSION['first_name'] . " " . $_SESSION['last_name'] ?></b></a>
                </li>
<<<<<<< HEAD
                <?php
            }
            ?>
=======
            <?php endif ?>
>>>>>>> architecture
        </ul>
    </div>
</nav>


<?= /** @noinspection PhpUndefinedVariableInspection */
$content ?>

<footer>
<<<<<<< HEAD
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
=======
    <script src="/public/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/public/js/popper.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
>>>>>>> architecture
</footer>
</body>
</html>