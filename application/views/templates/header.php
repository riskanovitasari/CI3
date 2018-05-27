<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Riska Novitasari</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    </head>
  <body>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Riska</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url()?>about/">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url()?>V_Blog/">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url()?>Category/">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url()?>Datatablesctr/">Artikel</a>
      </li>
    
    </ul>
    <?php if(!$this->session->userdata('logged_in')) : ?>
        <div class="btn-group" role="group" aria-label="Data baru">
          <?php echo anchor('User/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
          <?php echo anchor('User/login', 'Login', array('class' => 'btn btn-outline-light')); ?>
        </div>
      <?php endif; ?>

      <?php if($this->session->userdata('logged_in')) : ?>
        <div class="btn-group" role="group" aria-label="Data baru">
          <?php echo anchor('V_blog/add', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?>
          <?php echo anchor('Category/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?>
          <?php echo anchor('User/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
        </div>
      <?php endif; ?>
  </div>
</nav>  
    <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>
        
    <br><br><br><br>
            </div>
        </nav>
        
        <!-- akhir Header -->