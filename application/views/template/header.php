<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <title>DPM Polinema</title>
        <link rel="icon" href="favicon.png" type="image/png">
        <link href="<?= base_url()?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url()?>js/bootstrap.min.js" rel="stylesheet" type="text/css">
        <link href="<?= base_url()?>js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?= base_url()?>css/style.css" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link href="<?= base_url()?>css/font-awesome.css" rel="stylesheet" type="text/css">  -->
        <link href="<?= base_url()?>css/animate.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="top_wrapper">
            <div class="container">
                <div class="header_box">
                    <!--<div class="logo"><a href="#">Resume</a></div>-->
                    <div class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div id="main-nav" class="collapse navbar-collapse navStyle">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?= base_url()?>">Home</a></li>
                                <li><a href="<?= base_url(); ?>anggota">Anggota</a></li>
                                <li><a href="">Sejarah</a></li> 
                                <li><a href="">Berita</a></li>
                                <li><a href="">Agenda</a></li> 
                                <li><a href="<?= base_url(); ?>aspirasi">Aspirasi</a></li> 
                                <li><a href="">Kontak</a></li>
                                <li><a href="" type="button" data-toggle="modal" data-target="#exampleModalCenter">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" name="modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="modal-footer">
        <small><a href="">Belum punya akun? Silahkan Daftar Sekarang</small></a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </form>
      </div>
    </div>
  </div>
</div>