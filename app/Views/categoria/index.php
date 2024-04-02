<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>

<body>
    <h1>Listado de categorias</h1>

    <a href="/categoria/new">Nueva</a>

    <table>
        <tr>
            <th>id</th>
            <th>Titulo</th>
        </tr>
        <?php foreach ($categorias as $key => $value) : ?>
            <tr>
                <td> <?= $value['id'] ?> </td>
                <td> <?= $value['titulo'] ?> </td>
                <td>
                    <a href="/categoria/show/<?= $value['id'] ?>">Show</a>
                    <a href="/categoria/edit/<?= $value['id'] ?>">Edit</a>

                    <form action="/categoria/delete/<?= $value['id'] ?>" method="post">
                        <button type="submit">Borrar</button>
                    </form>

                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>