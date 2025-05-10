<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <title>Pendaftaran Online</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Using jsDelivr CDN instead of raw GitHub URL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/wahyuumoko/web-pendaftaran-rs-online@main/pages/style.css">

    <!-- Fallback inline CSS in case the external CSS fails to load -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            height: 100vh;
            /* Full viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-content {
            width: 100%;
            max-width: 500px;
            /* Control the width of the card */
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
        input[type="password"] {
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