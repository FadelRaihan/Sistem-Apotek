<?php

  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__)  . $ds . '../../../') . $ds;
  require_once("{$base_dir}pages{$ds}core{$ds}header.php");
  require_once("{$base_dir}pages{$ds}content{$ds}master{$ds}process-data-obat.php");
  
?>
  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Obat</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../dashboard/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Data Obat</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Start Ngoding Disini -->

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Obat</h5>
              <p>Data ini adalah data semua obat di <b>Apotek Mitra Galuh</b>.</p>

              <div class="my-2"></div>
                  <a href="modal-e-obat" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModalCenter"> 
                    <span class="icon text-white-50">
                      <i class="fas fa-folder-open"></i>
                    </span>
                    <span class="text"></span><strong>Tambah Data</strong>
                  </a><p />
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">Kode</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Supplier</th>
                      <th scope="col">Harga Beli</th>
                      <th scope="col">Harga Jual</th>
                      <th scope="col">Stok</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 0;
                      while($row=mysqli_fetch_array($QueryGetListUser)){
                        $no++;

                        echo "<tr>";
                          echo "<td>".$row["kode"]."</td>";
                          echo "<td>".$row["nama"]."</td>";
                          echo "<td>".$row["supplierid"]."</td>";
                          echo "<td>".$row["beli"]."</td>";
                          echo "<td>".$row["jual"]."</td>";
                          echo "<td>".$row["stok"]."</td>";
                          echo "<td>".$row["status"]."</td>";
                        echo "</tr>";
                        
                      }
                    ?>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
              
            </div>
          </div>

        </div>
        
        <!-- End Ngoding Disini -->

      
    </section>
    <!-- Form Add Data Obat -->
  
  </main><!-- End #main -->


<?php
  require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?> 