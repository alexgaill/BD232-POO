<h1 class="text-center">Nos articles</h1>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Categorie</th>
            <th>Date de sortie</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post) : ?>
            <tr>
                <td><?= $post->getId() ?></td>
                <td><?= $post->getTitle() ?></td>
                <td><?= substr($post->getContent(), 0, 100) . " ..." ?></td>
                <td><?= $post->getCategory()->getName() ?></td>
                <td><?= $post->getCreatedAt() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>