<div class="container my-4">
        <p class="display-4">
            Bienvenue dans le backOffice <strong>Dans les books</strong>...
        </p>

        <div class="row mt-5">
            <div class="col-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-dark">Liste des catégories</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php foreach ($category_home_back_office as $categoryObject): ?>
                                    <th scope="row"><?= $categoryObject->getId() ?></th>
                                    <td><?= $categoryObject->getName() ?></td>
                                    <td class="text-end">
                                        <a href="" class="btn btn-sm btn-dark">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Oui, je veux supprimer</a>
                                                <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                               
                            </tbody>
                        </table>
                        <div class="d-grid gap-2">
                            <a href="<?= $router->generate('category-list')?>" class="btn btn-dark">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-dark">Liste des produits</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($product_home_back_office as $productObject): ?>
                                <tr>
                                    <th scope="row"><?= $productObject->getId() ?></th>
                                    <td><?= $productObject->getName()?></td>
                                    <td class="text-end">
                                        <a href="" class="btn btn-sm btn-dark">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-danger dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Oui, je veux supprimer</a>
                                                <a class="dropdown-item" href="#" data-toggle="dropdown">Oups !</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                   <?php endforeach; ?>
                                       
                   </tbody>
                        </table>
                        <div class="d-grid gap-2">
                            <a href="<?= $router->generate('product-list')?>" class="btn btn-dark">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
                           