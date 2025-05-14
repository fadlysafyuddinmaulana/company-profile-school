  <!-- header -->
  <div class="medsos">
  	<div clas="container">
  		<ul>
  			<li>
  				<a=href="#">WEBSITE ADMIN PROFILE SEKOLAH</a=href=>
  			</li>
  		</ul>
  	</div>
  </div>
  <header>
  	<div class="container">
  		<h1><a href="index.html">PAUD JAMI ASSOFA</a></h1>
  		<ul>
  			<li class="<?php if ($active == 'berita') {
								echo 'active';
							} ?>"><a style="color: black;" href="<?= base_url() ?>Berita">Berita</a></li>
  			<li class="<?php if ($active == 'galeri') {
								echo 'active';
							} ?>><a style=" color: black;" href="<?= base_url() ?>Berita">Galeri</a></li>
  			<li><a style=" color: black;" href="<?= base_url() ?>logout">Logout</a></li>
  		</ul>
  	</div>
  </header>