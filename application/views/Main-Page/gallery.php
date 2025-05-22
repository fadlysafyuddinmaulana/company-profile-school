 <h3>
     <p align="center">Galeri Foto</p>
 </h3>
 <div class="bg-card">
     <?php foreach ($foto as $key => $value): ?>
         <a href="#">
             <div class="card">
                 <div class="gambar">
                     <img src="<?= base_url() ?>assets/img/gallery/<?= $value['file_image'] ?>">
                 </div>
                 <div class="des-card">
                     <h4><strong><?= $value['judul_foto'] ?></strong></h4>
                     <p align="left">Deskripsi</p>
                 </div>
             </div>
         </a>
     <?php endforeach; ?>
 </div>