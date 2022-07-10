<?php

use yii\helpers\Url;
?>

<h2>halaman <?= $page ?></h2>

<a href="<?= Url::to(['data/add']) ?>" class="btn btn-success">Tambah</a>

<table class="table">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Link</th>
            <th>Text</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $d) : ?>
            <tr>
                <td><?= $d->judul ?></td>
                <td><?= $d->link ?></td>
                <td><?= $d->text ?></td>
                <td>
                    <a href="<?= Url::to(['data/upd', 'id' => $d->id]) ?>" class="btn btn-primary">Update</a>
                    <a href="<?= Url::to(['data/del', 'id' => $d->id]) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>