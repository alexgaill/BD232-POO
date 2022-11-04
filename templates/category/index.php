<h1 class="text-center">Nos catégories</h1>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?= $category->getId() ?></td>
                <td><?= $category->getName() ?></td>
                <td><a href="/?page=category_show&id=<?= $category->getId() ?>"><button class="btn btn-info">Voir plus</button></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>