<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <title>Form Berita</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/wahyuumoko/web-pendaftaran-rs-online@main/pages/style.css">

    <!-- Include Summernote CSS/JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">

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
            max-width: 1000px;
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

        /* Tambahan CSS untuk Summernote */
        .note-editor.note-frame {
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: none;
            font-size: 14px;
        }

        .note-editing-area .note-editable {
            padding: 10px;
            font-size: 14px;
        }

        .note-editor .note-toolbar .btn {
            font-size: 12px !important;
            padding: 4px 6px !important;
            line-height: 1.2 !important;
        }

        .note-editor .note-toolbar {
            padding: 4px 6px;
        }
    </style>
</head>

<body>