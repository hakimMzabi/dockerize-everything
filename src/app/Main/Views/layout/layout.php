<!DOCTYPE html>
<html lang="en">
<head>
    <title>quizz.io</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <a class="navbar-brand">quizz.io</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

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
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['connected'] === true) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled"
                       href="/logout">Bonjour <b><?= $_SESSION['first_name'] . " " . $_SESSION['last_name'] ?></b></a>
                </li>
            <?php endif ?>
        </ul>
    </div>
</nav>


<?= /** @noinspection PhpUndefinedVariableInspection */
$content ?>

<footer>
    <script src="/public/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/public/js/popper.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
</footer>
</body>
</html>