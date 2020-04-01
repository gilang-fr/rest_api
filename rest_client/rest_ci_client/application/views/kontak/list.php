<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view("kontak/_partials/head.php") ?>
  </head>
  <body>
    <?php $this->load->view("kontak/_partials/navbar.php") ?>
    <main role="main" class="container">
      <div class="jumbotron">
        <font color="orange">
        <?php echo $this->session->flashdata('hasil'); ?>
        </font>
        <table border="1">
            <tr><th>ID</th><th>NAMA</th><th>NOMOR</th><th></th></tr>
            <?php
            foreach ($datakontak as $kontak){
                echo "<tr>
                      <td>$kontak->id</td>
                      <td>$kontak->nama</td>
                      <td>$kontak->nomor</td>
                      <td>".anchor('kontak/edit/'.$kontak->id,'<span class="fas fa-edit"></span>')."  | 
                          ".anchor('kontak/delete/'.$kontak->id,'<span class="fas fa-trash"></span>')."</td>
                      </tr>";
            }
            ?>
        </table>
        <a href="http://localhost/rest_ci_client/index.php/kontak/create"><span class="fas fa-folder-plus"></span> Tambah data<a>
      </div>
    </main>
    <?php $this->load->view("kontak/_partials/js.php") ?>
  </body>
</html>