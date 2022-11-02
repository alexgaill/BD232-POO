<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <title>SuperBlog</title>
</head>
<body>
    <header></header>
    <main class="container">
        <h1 class="text-center">Nos articles</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Categorie</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $post): ?>
                    <tr>
                        <td><?= $post->id ?></td>
                        <td><?= $post->title ?></td>
                        <td><?= substr($post->content, 0, 100) . " ..." ?></td>
                        <td><?= $post->name ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <footer></footer>
</body>
</html>