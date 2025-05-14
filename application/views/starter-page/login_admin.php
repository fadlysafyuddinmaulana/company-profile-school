<div class="main-content">
    <div class="container-a">
        <form action="<?= base_url() ?>authentication_admin" method="post" enctype="multipart/form-data">
            <h1>Login Admin</h1>
            <div id="login" class="tab-content active">
                <p class="description">Masukan Nomor Pasien dan Tanggal Lahir</p>
                <div class="form-group">
                    <label>Username <span class="required">*</span></label>
                    <input type="text" placeholder="Masukkan Nomor Pasien" name="username" value="admin" required>
                </div>
                <div class="form-group">
                    <label>Password<span class="required">*</span></label>
                    <input type="password" placeholder="Masukkan Password" name="password" value="12345" required>
                </div>
                <button type="submit" class="submit-btn">Login</button>
            </div>
        </form>
    </div>
</div>