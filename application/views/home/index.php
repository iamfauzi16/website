
  	<!-- Navbar Menu website -->
    <nav class="navbar  navbar-expand-lg navbar-light bg-light " >
    	<div class="container text-right">
			  <a class="navbar-brand font-weight-bold" href="#">Antrian-e</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			      <a class="nav-item nav-link active" href="#">Tentang Kami <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="#">Cara Penggunaan</a>
			      <a class="nav-item nav-link" href="#">Kunjungi Web</a>
			      <button class="btn btn-primary mr-3"  type="submit">Login</button>
			      <button class="btn btn-primary"  type="submit">Daftar</button>
	  		</div>
	    </div>
	  </div>
	</nav>
		<!-- Header Website antrian web -->
		<div class="jumbotron jumbotron-fluid">
		  <div class="container">
		    <h1 class="display-4">Hello, Selamat Datang </h1>
		    <p class="lead">melayani anda dengan sepenuh hati dan menjamin kesehatan anda</p>
		  </div>
		</div>
		<!-- end -->
		<!-- tabel dashboard -->
		<div class="container">
			<titleHead>
				<h1 class="titleUtama text-center"> Silahkan Melihat Antrian Anda</h1>
			</titleHead>
			<table class="table table-hover">
			  <thead>
			  	
			  	<tr>
			      <th scope="col">Nomer Anda</th>
			      <th scope="col">Nama Anda</th>
			      <th scope="col">NIK Anda</th>
			      <th scope="col">Nomer BPJS</th>
			      <th scope="col">Tempat Tanggal Lahir</th>
			      <th scope="col">Alamat</th>
			    </tr>
			  	 
			  </thead>
			  <tbody>
			  	<?php foreach ( $daftar as $dft ) : ?>
			    <tr>
			      <th><?php echo $dft['id_user'];?></th>
			      <td><?=  $dft['nama_user'];?></td>
			      <td><?=  $dft['nik_user'];?></td>
			      <td><?=  $dft['no_bpjs'];?></td>
			      <td><?=  $dft['ttl'];?></td>
			      <td><?=  $dft['alamat'];?></td>
			    </tr>
			    <?php endforeach; ?>
			   
			  </tbody>
			</table>
		</div>
		<!-- end -->

    