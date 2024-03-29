<div class="container my-4 bg-dark text-light">
    <a href="<?= $router->generate('category-list')?>" class="btn btn-dark float-end">Retour</a>
    <h2>Ajouter une catégorie</h2>

    <form action="" method="POST" class="mt-5">
    <input type="hidden" name="token" value="<?= $token ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" placeholder="Nom de la catégorie" name="name">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sous-titre</label>
            <input type="text" class="form-control" id="subtitle" placeholder="Sous-titre" aria-describedby="subtitleHelpBlock" name="subtitle">
            <small id="subtitleHelpBlock" class="form-text text-muted">
                Sera affiché sur la page d'accueil comme bouton devant l'image
            </small>
        </div>
        <div class="mb-3">
            <label for="picture" class="form-label">Image</label>
            <input type="text" class="form-control" id="picture" placeholder="image jpg, gif, svg, png" aria-describedby="pictureHelpBlock" name="picture">
          
        </div>
        <div class="row">
            <button type="submit" class="btn btn-dark mt-5">Valider</button>
        </div>
    </form>
</div>