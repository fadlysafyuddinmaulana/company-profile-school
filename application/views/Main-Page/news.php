    <section class="berita">
      <div class="container">
        <h3>BERITA TERBARU</h3>
        <?php
        $no = 1;

        foreach ($berita as $key => $value): ?>
          <!-- News Card like in the screenshot -->
          <div class="news-card">
            <div class="news-card-image">
              <img src="<?= base_url() ?>assets/profile-paud/img/<?= $value['file_image'] ?>" alt="<?= $value['file_image'] ?>">
            </div>
            <div class="news-card-content">
              <h2 class="news-card-title"><?= $value['judul'] ?></h2>
              <div class="news-card-meta"><?= $value['created_at'] ?></div>
              <div class="news-card-text">
                <div class="news-card-text">
                  <?= word_limiter($value['isi_berita'], 50) ?>
                </div>
              </div>
              <a href="<?= base_url() ?>berita/detail_berita/<?= $value['judul'] ?>" class="news-card-link">Selengkapnya</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>