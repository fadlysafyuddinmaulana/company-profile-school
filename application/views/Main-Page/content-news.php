<section class="article-container">
    <!-- <div class="breadcrumb">
        <a href="<?= base_url() ?>">Beranda</a> / <a href="<?= base_url() ?>berita">Berita</a>
    </div> -->

    <article>
        <div class="article-header">
            <h1 class="article-title"> <?= $berita->judul ?></h1>
            <div class="article-meta">
                <span><?= $berita->created_at ?></span>
                <!-- <span>Berita</span> -->
            </div>
        </div>

        <div class="article-featured-image">
            <img src="<?= base_url() ?>assets/img/berita/<?= $berita->file_image ?>" alt="Hijrah Digital: Menjaga Akhlak di Media Sosial">
            <!-- <div class="image-overlay">
                <div class="image-title">HIJRAH DIGITAL</div>
                <div class="image-subtitle">MENJAGA AKHLAK DI MEDIA SOSIAL</div>
            </div> -->
        </div>

        <div class="article-content">
            <?= $berita->isi_berita ?>
        </div>

        <!-- <div class="article-author">
            <p>Oleh: Bayu Dwi Cahyono, M.Pd. / Dosen FAI UMP</p>
        </div> -->
    </article>
</section>