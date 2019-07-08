<?php /** @noinspection ALL */ ?>
<div class="container">

    <div class="card">
        <div class="card-header">
            Liste des articles
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Contenu</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($models['articles'] as $article): ?>
                    <tr>
                        <td><?= $article['name'] ?></td>
                        <td><?= substr($article['content'], 0, 100) . "..." ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            Créer un article
        </div>
        <div class="card-body">
            <form action="/administration" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nom de l'article</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nom de l'article" aria-label="Username"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Contenu de l'article</span>
                    </div>
                    <textarea class="form-control" aria-label="Contenu de l'article"></textarea>
                </div>
                <button class="mt-3 btn btn-success" name="modify_article">Créer l'article :)</button>
            </form>
        </div>
    </div>
</div>


<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            Modifier un article
        </div>
        <div class="card-body">
            <select name="" id="">
                <?php foreach ($models['articles'] as $article): ?>
                    <option value="<?= $article['id']?>"><?= $article['name']?></option>
                <?php endforeach; ?>
            </select>
            <form class="mt-3" action="/administration" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nom de l'article</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nom de l'article" aria-label="Username"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Contenu de l'article</span>
                    </div>
                    <textarea class="form-control" aria-label="Contenu de l'article"></textarea>
                </div>
                <button class="mt-3 btn btn-warning" name="modify_article">Modifier l'article :|</button>
            </form>
        </div>
    </div>
</div>

<div class="container mt-3 mb-3">
    <div class="card">
        <div class="card-header">
            Supprimer un article
        </div>
        <div class="card-body">
            <form action="/administration" method="post">
                <div class="form-group">
                    <select class="custom-select">
                        <?php foreach ($models['articles'] as $article): ?>
                            <option value="<?= $article['id']?>"><?= $article['name']?></option>
                        <?php endforeach; ?>
                    </select>
                    <button class="mt-3 btn btn-danger" name="delete_article">Supprimer l'article :(</button>
                </div>
            </form>
        </div>
    </div>
</div>