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
    .article-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .article-header {
      margin-bottom: 30px;
    }

    .article-title {
      font-size: 32px;
      color: #42227d;
      margin-bottom: 15px;
      line-height: 1.2;
      font-weight: bold;
    }

    .article-meta {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
    }

    .article-meta span {
      margin-right: 15px;
    }

    .article-featured-image {
      margin-bottom: 30px;
      position: relative;
    }

    .article-featured-image img {
      width: 100%;
      height: auto;
      display: block;
    }

    .article-content {
      line-height: 1.8;
      font-size: 16px;
      color: #333;
      margin-bottom: 30px;
    }

    .article-content p {
      margin-bottom: 20px;
    }

    .article-author {
      font-style: italic;
      margin-top: 40px;
      padding-top: 20px;
      border-top: 1px solid #eaeaea;
    }

    @media screen and (max-width: 768px) {
      .article-container {
        padding: 15px;
      }

      .article-title {
        font-size: 26px;
      }

      .image-title {
        font-size: 32px;
      }

      .image-subtitle {
        font-size: 18px;
      }
    }

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

    /* News Card Styles */
    .news-card {
      display: flex;
      margin-bottom: 30px;
      border-bottom: 1px solid #eaeaea;
      max-width: 1200px;
    }

    .news-card-image {
      width: 35%;
      min-width: 300px;
      overflow: hidden;
    }

    .news-card-image img {
      width: 100%;
      height: auto;
      transition: transform 0.3s ease;
    }

    .news-card-image img:hover {
      transform: scale(1.05);
    }

    .news-card-content {
      width: 65%;
      padding: 0 20px;
    }

    .news-card-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #000;
    }

    .news-card-meta {
      font-size: 14px;
      color: #666;
      margin-bottom: 15px;
    }

    .news-card-text {
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .news-card-link {
      display: inline-block;
      padding: 8px 16px;
      background-color: #222;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
      margin: 15px 0;
      font-weight: 500;
    }

    .news-card-link:hover {
      background-color: #333;
    }

    .news-card-divider {
      height: 1px;
      background-color: #eaeaea;
      margin: 25px 0;
      width: 100%;
      max-width: 800px;
    }

    /* Responsive adjustments */
    @media screen and (max-width: 768px) {
      .news-card {
        flex-direction: column;
      }

      .news-card-image,
      .news-card-content {
        width: 100%;
        min-width: auto;
      }

      .news-card-content {
        padding: 15px 0;
      }
    }
  </style>