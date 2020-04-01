<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view("kontak/_partials/head.php") ?>
  </head>
  <body>
    <?php $this->load->view("kontak/_partials/navbar.php") ?>
    <main role="main" class="container">
      <div class="jumbotron">
        <?php echo form_open_multipart('kontak/create');?>
		<table>
		    <tr><td>NAMA</td><td><?php echo form_input('nama');?></td></tr>
		    <tr><td>NOMOR</td><td><?php echo form_input('nomor');?></td></tr>        
		    <tr><td colspan="2">
		        <?php echo form_submit('submit','Simpan');?>
		        <?php echo anchor('kontak','Kembali');?></td></tr>
		</table>
		<?php
		echo form_close();
		?>
      </div>
    </main>
    <?php $this->load->view("kontak/_partials/js.php") ?>
  </body>
</html>
