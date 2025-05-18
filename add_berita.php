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
    <!-- header -->
    <div class="medsos">
        <div clas="container">
            <ul>
                <li>
                    <a=href="#">WEBSITE PROFILE SEKOLAH</a=href=>
                </li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.html">PAUD JAMI ASSOFA</a></h1>
            <ul>
                <li class="<?php if ($active == 'beranda') {
                                echo 'active';
                            } ?>"><a href="<?= base_url() ?>Main_Portal">Home</a>
                </li>
                <li class="<?php if ($active == 'program') {
                                echo 'active';
                            } ?>"><a href="<?= base_url() ?>program">Program</a>
                </li>
                <li class="<?php if ($active == 'Gallery') {
                                echo 'active';
                            } ?>"><a href="<?= base_url() ?>news">Gallery</a>
                </li>
                <li class="<?php if ($active == 'berita') {
                                echo 'active';
                            } ?>"><a href="<?= base_url() ?>news">Berita</a>
                </li>
                <li class="<?php if ($active == 'pendaftaran') {
                                echo 'active';
                            } ?>"><a href="<?= base_url() ?>pendaftaran">Pendaftaran</a>
                </li>
                <li><a href="wa.me/62">Contact</a></li>
                <li><a href="<?= base_url() ?>auth">Login</a></li>
            </ul>
        </div>
    </header>
    <!--kontak-->
    <section class="kontak">
        <div class="container">
            <h3>KONTAK</h3>

            <div class="box">
                <div class="col-4">
                    <div class="icon"><i class="fa-brands fa-instagram"></i></div>
                    <h4>
                        <p align="center">INSTAGRAM</p>
                        <p align="center"> IG</p>
                    </h4>
                </div>


                <div class="box">
                    <div class="col-4">
                        <div class="icon"><i class="fa-brands fa-facebook"></i></i></div>
                        <h4>
                            <p align="center">FACEBOOK</p>
                            <p align="center">FB</p>
                        </h4>
                    </div>

                    <div class="box">
                        <div class="col-4">
                            <div class="icon"><i class="fa-brands fa-youtube"></i></i></div>
                            <h4>
                                <p align="center">YOUTUBE</p>
                                <p align="center">YT</p>
                            </h4>
                        </div>


                        <div class="box">
                            <div class="col-4">
                                <div class="icon"><i class="fa-brands fa-twitter"></i></i></div>
                                <h4>
                                    <p align="center">TWITER</p>
                                    <p align="center">TWIT</p>
                                </h4>
                            </div>

    </section>
    <!-- footer -->
    <footer>
        <div class="container"></div>
        <small>Copyright&copy;2025-PAUD Jami Assofa.All Rights Reserved.</small>
    </footer>



    <!-- PDF.js scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script>
        // The workerSrc property needs to be specified
        pdfjsLib.GlobalWorkerOptions.workerSrc =
            'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

        // PDF file path
        const url = 'formulir-pendaftaran.pdf';

        let pdfDoc = null,
            pageNum = 1,
            pageRendering = false,
            pageNumPending = null,
            scale = 1.0,
            canvas = document.getElementById('pdf-canvas'),
            ctx = canvas.getContext('2d'),
            container = document.getElementById('pdf-container');

        document.getElementById('loading').style.display = 'block';

        /**
         * Render the page
         */
        function renderPage(num) {
            pageRendering = true;

            // Update the current page input
            document.getElementById('current-page').value = num;

            // Get page
            pdfDoc.getPage(num).then(function(page) {
                const viewport = page.getViewport({
                    scale: scale
                });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF page into canvas context
                const renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };

                const renderTask = page.render(renderContext);

                // Wait for rendering to finish
                renderTask.promise.then(function() {
                    pageRendering = false;

                    if (pageNumPending !== null) {
                        // New page rendering is pending
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });
            });
        }

        /**
         * If another page rendering in progress, wait until the rendering is
         * finished. Otherwise, execute rendering immediately.
         */
        function queueRenderPage(num) {
            if (pageRendering) {
                pageNumPending = num;
            } else {
                renderPage(num);
            }
        }

        /**
         * Display previous page
         */
        function onPrevPage() {
            if (pageNum <= 1) {
                return;
            }
            pageNum--;
            queueRenderPage(pageNum);
        }
        document.getElementById('prev-page').addEventListener('click', onPrevPage);

        /**
         * Display next page
         */
        function onNextPage() {
            if (pageNum >= pdfDoc.numPages) {
                return;
            }
            pageNum++;
            queueRenderPage(pageNum);
        }
        document.getElementById('next-page').addEventListener('click', onNextPage);

        /**
         * Zoom in
         */
        function zoomIn() {
            scale += 0.25;
            queueRenderPage(pageNum);
            updateZoomDisplay();
        }
        document.getElementById('zoom-in').addEventListener('click', zoomIn);

        /**
         * Zoom out
         */
        function zoomOut() {
            if (scale <= 0.25) return;
            scale -= 0.25;
            queueRenderPage(pageNum);
            updateZoomDisplay();
        }
        document.getElementById('zoom-out').addEventListener('click', zoomOut);

        /**
         * Update zoom percentage display
         */
        function updateZoomDisplay() {
            document.querySelector('.zoom-value').textContent = Math.round(scale * 100) + '%';
        }

        /**
         * Handle page input
         */
        document.getElementById('current-page').addEventListener('change', function() {
            const pageNumber = parseInt(this.value);

            if (pageNumber >= 1 && pageNumber <= pdfDoc.numPages) {
                pageNum = pageNumber;
                queueRenderPage(pageNum);
            } else {
                this.value = pageNum;
            }
        });

        /**
         * Download PDF
         */
        document.getElementById('download-pdf').addEventListener('click', function() {
            // Create a temporary link
            const link = document.createElement('a');
            link.href = url;
            link.download = url.split('/').pop();
            link.target = '_blank';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

        /**
         * Print PDF
         */
        document.getElementById('print-pdf').addEventListener('click', function() {
            const printWindow = window.open(url);
            printWindow.addEventListener('load', function() {
                printWindow.print();
            });
        });

        /**
         * Toggle fullscreen
         */
        document.getElementById('fullscreen').addEventListener('click', function() {
            if (!document.fullscreenElement) {
                document
                    .querySelector('.pdf-viewer-container')
                    .requestFullscreen()
                    .catch((err) => {
                        console.error(
                            `Error attempting to enable full-screen mode: ${err.message}`
                        );
                    });
            } else {
                document.exitFullscreen();
            }
        });

        /**
         * Toggle sidebar (placeholder functionality)
         */
        document.getElementById('toggle-sidebar').addEventListener('click', function() {
            alert('Sidebar functionality would be implemented here.');
        });

        /**
         * Load the PDF
         */
        pdfjsLib
            .getDocument(url)
            .promise.then(function(pdfDoc_) {
                pdfDoc = pdfDoc_;
                document.getElementById('total-pages').textContent = pdfDoc.numPages;
                document.getElementById('loading').style.display = 'none';

                // Initial render of the first page
                renderPage(pageNum);
            })
            .catch(function(error) {
                // Display error
                const loadingDiv = document.getElementById('loading');
                loadingDiv.textContent = 'Error loading PDF: ' + error.message;
                loadingDiv.style.display = 'block';
                console.error(error);
            });
    </script>

</body>

</html>