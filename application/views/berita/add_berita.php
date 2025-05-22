<div class="main-content">
    <div class="container-a">
        <form method="post" action="<?= base_url() ?>insert-news" enctype="multipart/form-data">
            <h1>Form Input Berita</h1>
            <div id="login" class="tab-content active">
                <p class="description">Form Input Berita</p>
                <div class="form-group">
                    <label>Judul Berita <span class="required">*</span></label>
                    <input type="text" placeholder="Masukkan Nomor Pasien" name="judul_berita" id="judul_berita" required>
                </div>
                <div class="form-group">
                    <label>Isi Berita <span class="required">*</span></label>
                    <textarea id="summernote" name="isi_berita" id="isi_berita"></textarea>
                </div>
                <div class="form-group">
                    <label>Kategori <span class="required">*</span></label>
                    <select name="kategori_berita" id="kategori_berita" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Event" selected>Event</option>
                        <option value="Kompetisi">Kompetisi</option>
                        <option value="Perpustakaan">Perpustakaan</option>
                        <option value="Pelatihan">Pelatihan</option>
                        <option value="Beasiswa">Beasiswa</option>
                        <option value="Prestasi">Prestasi</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Inovasi">Inovasi</option>
                        <option value="Akademik">Akademik</option>
                        <option value="Budaya">Budaya</option>
                    </select>
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