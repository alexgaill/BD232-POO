<h1 class="text-center">Nos catégories</h1>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?= $category->getId() ?></td>
                <td><?= $category->getName() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>