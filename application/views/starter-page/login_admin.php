    <div class="main-content">
        <div class="container-a">
            <form action="<?= base_url() ?>authentication_admin" method="post" enctype="multipart/form-data">
                <h1>Login Admin</h1>
                <div id="login" class="tab-content active">
                    <div class="form-group">
                        <label>Username <span class="required">*</span></label>
                        <input type="text" name="username" placeholder="Masukkan Nomor Pasien" value="admin">
                    </div>
                    <div class="form-group">
                        <label>Password<span class="required">*</span></label>
                        <input type="password" name="password" placeholder="Masukkan Password" value="12345">
                    </div>
                    <button type="submit" class="submit-btn">Login</button>
                </div>
            </form>
        </div>
    </div>