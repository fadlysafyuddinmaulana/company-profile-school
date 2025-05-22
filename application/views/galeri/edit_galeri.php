<div class="main-content">
    <div class="container-a">
        <form method="post" action="<?= base_url() ?>update-gallery/<?= $berita->id_gallery ?>" enctype="multipart/form-data">
            <h1>Form Edit Galeri</h1>
            <div id="login" class="tab-content active">
                <p class="description">Form Edit Galeri</p>
                <div class="form-group">
                    <label>Judul Foto <span class="required">*</span></label>
                    <input type="hidden" placeholder="Masukkan Nomor Pasien" name="id_foto" id="id_foto" value="<?= $berita->id_gallery ?>" required>
                    <input type="text" placeholder="Masukkan Nomor Pasien" name="judul_foto" id="judul_foto" required>
                </div>
                <div class="form-group">
                    <label>Upload Foto <span class="required">*</span></label>
                    <input type="file" name="foto" id="foto" required>
                </div>
            </div>
            <button style="display: inline-block;width: 100%;padding: 16px 0;border: none;border-radius: 6px;font-weight: bold;color: white;font-size: 16px;cursor: pointer;text-align: center;text-decoration: none;transition: background-color 0.3s ease;" type="submit" class="submit-btn">
                Submit
            </button>
            <a href="<?= base_url() ?>dashboard"
                style="display: inline-block; text-align: center; background-color: #dc3545; color: white; padding: 16px 0; width: 100%; border-radius: 6px; font-weight: bold; text-decoration: none; margin-bottom: 20px;"
                class="submit-btn">
                Kembali
            </a>
        </form>
    </div>
</div>