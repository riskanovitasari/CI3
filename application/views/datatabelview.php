<!doctype html>
<html lang="en">
<head>
    <base href="<?=base_url()?>">
    <meta charset="UTF-8">
    <title>Add Blog</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
    <script src="<?php echo base_url()?>assets/css/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-1.9.1.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-fixed-top">
    <a class= "navbar-brand" href="#">WEB RISKA</a> 
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                     
                </button>
            </div>   
            <div class="single-page-nav sticky-wrapper" id="tmNavbar">
                <ul class="nav navbar-nav">
                    <li><a class="page-scroll" href="<?php echo site_url()?>Home/">Home</a></li>
                    <li><a class="page-scroll" href="<?php echo site_url()?>about/">About</a></li>
                    <li><a class="page-scroll" href="<?php echo site_url()?>V_Blog/">Blog</a></li>
                    <li><a class="page-scroll" href="<?php echo site_url()?>Category/">Category</a></li>
                    <li><a class="page-scroll" href="<?php echo site_url()?>Datatablesctr/">Artikel</a></li>
                    
                </ul>
            </div>   
        </div>
    </nav>  
    <br><br><br>

    <header class=" text-center d-flex">
      <div class="container my-auto">
        <div class="row">
          
          <div class="col-lg-10 mx-auto">
            <h3 class="text-uppercase">
              <strong>Data Tables</strong>
            </h3><hr>
          </div>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-basic" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id_blog</th>
                            <th>judul_blog</th>
                             <th>isi_blog</th>
                            <th>tggl_blog</th>
                            <th>authot_blog</th>
                            <th>email_author</th>
                            <th>alamat_author</th>
                            <th>action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?php echo $d->id_blog ?></td>
                            <td><?php echo $d->judul_blog ?></td>
                            <td><?php echo $d->isi_blog ?></td>
                            <td><?php echo $d->tggl_blog ?></td>
                            <td><?php echo $d->author_blog ?></td>
                            <td><?php echo $d->email_author ?></td>
                            <td><?php echo $d->alamat_blog ?></td>
                            <td>
                                <a href="<?php echo base_url('/blog/edit/') . $d->id_blog ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/blog/delete/') . $d->id_blog ?>" class="btn btn-sm btn-outline-danger">Delete</a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
    <script>
        jQuery(document).ready(function(){

            // Contoh inisialisasi Datatable tanpa konfigurasi apapun
            // #dt-basic adalah id html dari tabel yang diinisialisasi
            $('#dt-basic').DataTable();
        });

    </script>
  </body>
</html>