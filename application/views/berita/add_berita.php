<div class="main-content">
    <div class="container-a">
        <form action="<?= base_url() ?>insert-news" method="post" enctype="multipart/form-data">
            <h1>Login Admin</h1>
            <div id="login" class="tab-content active">
                <p class="description">Masukan Nomor Pasien dan Tanggal Lahir</p>
                <div class="form-group">
                    <label>Judul Berita <span class="required">*</span></label>
                    <input type="text" placeholder="Masukkan Nomor Pasien" name="judul_berita" id="judul_berita" value="test judul" required>
                </div>
                <div class="form-group">
                    <label>Isi Berita <span class="required">*</span></label>
                    <textarea id="summernote" name="isi_berita" id="isi_berita">
                        </textarea>
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
                    <input type="file" name="foto">
                </div>
                <button type="submit" class="submit-btn">Login</button>
            </div>
            <a href="<?= base_url() ?>dashboard" class="submit-btn">Login</a>
        </form>
    </div>
</div>