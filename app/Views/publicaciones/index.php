<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>

<table class="table table-stripped table-justify table-bordered">
    <thead>
        <th>ID</th>
        <th>Publicación</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($publicaciones as $publicacion) : ?>

            <td><?= $publicacion['id'] ?></td>
            <td>
                <p class="text-primary"><?= $publicacion['nombre'] ?></p>
                <p>Autor: <span class="text-primary"><?= $publicacion['autor'] ?></span></p>
                <p class=""><?= $publicacion['descripcion'] ?></p>
                <p class="text-muted">Publicado en: <?= $publicacion['created_at'] ?>
            </td>
            <td>
                ver | editar | eliminar
            </td>

            <?php endforeach; ?>
        </tr>
    </tbody>
    <tfoot>
        <th>ID</th>
        <th>Publicación</th>
        <th>Acciones</th>
    </tfoot>
</table>




<?= $this->endSection(); ?>