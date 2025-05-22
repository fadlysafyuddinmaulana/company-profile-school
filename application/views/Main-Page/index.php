<!-- banner -->
<section class="banner">
  <h2>WELCOME TO PAUD JAMI ASSOFA</h2>
</section>

<!-- profil -->
<section class="profil">
  <div class="container">
    <h3>PROFIL</h3>

    <h2>Indentitas Satuan Pendidikan</h2>
    <table>
      <tr>
        <th>NPSN</th>
        <th>69855901</th>
      </tr>
      <tr>
        <td>Nama Sekolah</td>
        <td>PAUD JAMI ASSOFA</td>
      </tr>
      <tr>
        <td>Naungan</td>
        <td>Kementerian Pendidikan dan Kebudayaan</td>
      </tr>
      <tr>
        <td>Tanggal Berdiri</td>
        <td>1 Juli 2007</td>
      </tr>
      <tr>
        <td>No. SK Operasional</td>
        <td>421.1/1215/05/14</td>
      </tr>
      <tr>
        <td>Jenjang Pendidikan</td>
        <td>KB</td>
      </tr>
      <tr>
        <td>Status Sekolah</td>
        <td>Swasta</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>BANGKIR LEGA</td>
      </tr>
      <tr>
        <td>Desa / Kelurahan</td>
        <td>Cinyawang</td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td>Kec. Patimuan</td>
      </tr>
      <tr>
        <td>Kabupaten</td>
        <td>Kab. Cilacap</td>
      </tr>
      <tr>
        <td>Provinsi</td>
        <td>Jawa Tengah</td>
      </tr>
      <tr>
        <td>Facebook</td>
        <td>Paud Jami Assofa</td>
      </tr>
      <tr>
        <td>Kepala Sekolah</td>
        <td>Pungky Purwati</td>
      </tr>
    </table>
</section>
<h3>MISI</h3>
<p align="left">1. Memberikan stimulasi yang tepat berdarasarkan tahap perkembagan anak</p>
<p align="left">2. Menciptakan kondisi belajar mengajar yang nyaman dan menyenangkan bagi anak</p>
<p align="left">3. Mengedukasi orang tua dalam tangka menyelaraskan pembelajaran di rumah dan di sekolah</p>
<p align="left">4. Mengembangkan pembelajaran berdasarkan pada budaya lokal</p>
<p align="left">5. Menjalin kerjasama yang baik dengan instansi terkait dan kelompok masyarakat sekitar</p>
<h3>TUJUAN</h3>
<p align="left">1. Memberikan layanan pendidikan bagi anak usia dini yang mencakup semua aspek perkembangan anak</p>
<p align="left">2. Membentuk anak yang beriman, bermartabat, pintar, ceria dan mandiri</p>
<p align="left">3. Memberikan pengetahuan tentang pendidikan anak usia dini kepada orang tua wali murid</p>

<section class="berita">
  <!--card-->
  <h3>
    <p align="center">Galeri Foto</p>
  </h3>
  <div class="bg-card">
    <?php foreach ($foto as $key => $value): ?>
      <a href="#">
        <div class="card">
          <div class="gambar">
            <img src="<?= base_url() ?>assets/img/gallery/<?= $value['file_image'] ?>">
          </div>
          <div class="des-card">
            <h4><strong><?= $value['judul_foto'] ?></strong></h4>
            <p align="left">Deskripsi</p>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
    </a>
  </div>
</section>