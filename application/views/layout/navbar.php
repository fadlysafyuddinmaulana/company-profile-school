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
  			<li class="<?php if ($active == 'berita') {
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