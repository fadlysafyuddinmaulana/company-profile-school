<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/wahyuumoko/web-pendaftaran-rs-online@main/pages/style.css">

    <!-- Summernote CSS (tanpa integrity agar tidak error) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" />

    <!-- CodeMirror CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/theme/monokai.min.css" />

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- Inline Styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-content {
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .container-a {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .description {
            margin-bottom: 20px;
            color: #666;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .required {
            color: red;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 14px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            width: 100%;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
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
                            Place <em>some</em> <u>text</u> <strong>here</strong>
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
                        <input type="file" name="foto" required>
                    </div>
                    <button type="submit" class="submit-btn">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

    <!-- CodeMirror JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/htmlmixed/htmlmixed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/css/css.min.js"></script>

    <script>
        $(function() {
            // Inisialisasi Summernote
            $('#summernote').summernote({
                height: 200
            });

            // Inisialisasi CodeMirror jika element tersedia
            const codeMirrorEl = document.getElementById("codeMirrorDemo");
            if (codeMirrorEl) {
                CodeMirror.fromTextArea(codeMirrorEl, {
                    mode: "htmlmixed",
                    theme: "monokai"
                });
            }
        });
    </script>
</body>

</html>