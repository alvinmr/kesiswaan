<?php 
require_once('koneksi.php');
include('./pages/dist/header.php');

error_reporting(0);

session_start();

//apakah user sudah melakukan login atau belum_login
if(!$_SESSION['username'] ){
  header("location:login.php?pesan=belum_login");
}
?>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      
      <?php include('./pages/dist/sidebar.php') ?>
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">          
          <?php include('./pages/dist/topbar.php') ?>
          <!-- Begin Page Content -->
          <div class="container-fluid">
            
          <?php 
              if (!empty($_GET['page'])) {
                include("pages/".$_GET['page'].".php");
              }else { ?>
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <h1 class="text-center" id="jam"></h1>                
                <div class="card px-5 py-5">
                  <div class="text-center"><p style="font-size:32px!important;"> Halo <?= $_SESSION['username'] ?>, Selamat <span id="waktu"></span></p></div>
                </div>
              <?php } ?>
            <!-- Page Heading -->                                    
          </div>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Aplikasi Kesiswaan 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    
    <?php   include('./pages/dist/footer.php') ?>
