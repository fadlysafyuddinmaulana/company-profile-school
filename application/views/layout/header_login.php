<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - FINDxDataTrace</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../assets/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/AdminLTE-3.2.0/dist/css/adminlte.min.css">

</head>

<style>
    body {
        background-color: #121212;
        color: white;
        font-family: 'Chakra Petch', sans-serif;
    }

    header {
        background-color: #4e4e4e;
        padding: 10px 0;
        position: relative;
    }

    .header-content {
        position: relative;
        text-align: center;
    }

    .header-content h1 {
        margin: 0;
    }

    h1 {
        margin: 0;
    }

    /* .container {
            display: flex;
        } */

    /* .wrapper {
            width: 50%;
        } */

    button {
        padding: 5px 10px;
        font-family: 'Chakra Petch', sans-serif;
        border: none;
        border-radius: 5px;
        background-color: #00faff;
        color: #121212;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #007f9a;
    }

    /* Style untuk tombol logout */
    .logout-button {
        position: absolute;
        right: 20px;
        /* Jarak dari tepi kanan */
        top: 50%;
        transform: translateY(-50%);
        /* Agar tombol vertikal sejajar tengah */
        background-color: #ff4d4d;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .logout-button:hover {
        background-color: #cc0000;
    }
</style>

<body>