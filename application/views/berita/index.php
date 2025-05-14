<div class="container">
    <div class="wrapper">
        <a href="<?= base_url() ?>add-news">
            <button type="button" style="width: 100%; font-weight: bold;">Tambah Berita</button>
        </a>
        <!-- Tabel Data Berita -->
        <section>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">No</th>
                            <th class="text-center" width="25%">Judul Berita</th>
                            <th class="text-center" width="15%">Kategori</th>
                            <th class="text-center" width="15%">Gambar</th>
                            <th class="text-center" width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php



                        $no = 1;

                        foreach ($berita as $key => $value): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value['judul'] ?></td>
                                <td><?= $value['category'] ?></td>
                                <td><?= $value['file_image'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url() ?>edit-news/<?= $value['id_berita'] ?>" class="btn btn-effect-ripple btn-s btn-success"><i class="fa fa-pen"></i></a>
                                    <a href="<?= base_url() ?>delete-news/<?= $value['id_berita'] ?>" class="btn btn-effect-ripple btn-s btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

    </div>
</div>