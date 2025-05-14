<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/profile-paud/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 80%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

    form {
      background-color: #1e1e1e;
      /* Latar belakang form */
      padding: 20px;
      border-radius: 8px;
      width: 300px;
      text-align: center;
    }

    input {
      width: calc(100% - 20px);
      /* Menghindari overflow */
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #444;
      /* Border input */
      border-radius: 5px;
      background-color: #222;
      /* Latar belakang input */
      color: white;
      /* Warna teks input */
    }

    button {
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #00faff;
      color: #121212;
      cursor: pointer;
      transition: background-color 0.3s;
      margin-top: 10px;
      /* Tambahkan jarak atas */
    }

    button:hover {
      background-color: #007f9a;
    }

    .error {
      color: red;
    }

    .back-button {
      background-color: #ffcc00;
      /* Warna latar belakang tombol kembali */
      color: #121212;
      /* Warna teks tombol kembali */
      margin-top: 10px;
      /* Tambahkan jarak atas */
    }

    .back-button:hover {
      background-color: #e6b800;
      /* Warna saat hover tombol kembali */
    }

    .pendaftaran {
      text-align: center;
    }

    .pendaftaran p {
      text-align: left;
      /* Optional: override only the paragraph about "Syarat dan Ketentuan" */
    }

    .pdf-container iframe {
      display: block;
      margin: 0 auto;
      border: none;
    }
  </style>