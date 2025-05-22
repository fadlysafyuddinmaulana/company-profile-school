<div class="container">
    <div class="wrapper">
        <a href="<?= base_url() ?>add-gallery">
            <button type="button" style="width: 100%; font-weight: bold;">Tambah Foto</button>
        </a>
        <!-- Tabel Data Berita -->
        <section>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">No</th>
                            <th class="text-center" width="25%">Judul Foto</th>
                            <th class="text-center" width="15%">Gambar</th>
                            <th class="text-center" width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($foto as $key => $value): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value['judul_foto'] ?></td>
                                <td><?= $value['file_image'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url() ?>edit-gallery/<?= $value['id_foto'] ?>" class="btn btn-effect-ripple btn-s btn-success"><i class="fa fa-pen"></i></a>
                                    <a href="<?= base_url() ?>delete-gallery/<?= $value['id_foto'] ?>" class="btn btn-effect-ripple btn-s btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

    </div>
</div>