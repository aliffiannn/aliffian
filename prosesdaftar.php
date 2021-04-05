

 <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">FORMULIR</sup></div>
            </a

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
           

          
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

  <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                 
 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">DAFTAR</h5>
              </div>
              <div class="card-body">
                 <form method="POST" action="proses_daftar.php" enctype="multipart/form-data" >
                  <section class="base">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>username</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                      </div>
                        <input type="text" class="form-control" name="username" autofocus="" required="" />
                      </div>
                    </div>
                       <div class="form-group">
                        <label>password</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-lock"></i></div>
                      </div>
                        <input type="password" class="form-control" name="password" autofocus="" required="" />
                      </div>
                    </div>
                      <div class="form-group">
                        <label>Nama Pengguna</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-users"></i></div>
                      </div>
                        <input type="text" class="form-control" name="nama" autofocus="" required="" />
                      </div>
                    </div>
                       <div class="form-group">
                        <label>level</label>
                      <div class="input-group">
                     <div class="col-lg-12 col-md-12">
                     <select  class="form-control" name="level">
                      <?php
                       $idpetugasyangdipilih=$data['id_petugas']; 
                          // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                          $query = "SELECT * FROM petugas ORDER BY level ASC";
                          $result = mysqli_query($koneksi, $query);
                          //mengecek apakah ada error ketika menjalankan query
                          if(!$result){
                            die ("Query Error: ".mysqli_errno($koneksi).
                               " - ".mysqli_error($koneksi));
                          }

                          //buat perulangan untuk element tabel dari data mahasiswa
                          $no = 1; //variabel untuk membuat nomor urut
                          // hasil query akan disimpan dalam variabel $data dalam bentuk array
                          // kemudian dicetak dengan perulangan while
                          while($row = mysqli_fetch_assoc($result))
                          {
                          ?>
                      <option class="bg-light" value="<?php echo $row['id_petugas']; ?>" <?php if($row['id_petugas']=="$idpetugasyangdipilih"){?> selected="selected" <?php } ?>><?php echo $row['level']; ?></option>
                     <?php
                            $no++; //untuk nomor urut terus bertambah 1
                          }
                          ?>  
                     </select>
                     </div>
                     </div>
                   </section>
                      <button type="submit" class="btn btn-fill btn-primary"><i class="fas fa-check"></i></button>
               </div>
                </form>  
            </div>
              </div>
            </div>
          </div>
                      <br><br>

                 
                