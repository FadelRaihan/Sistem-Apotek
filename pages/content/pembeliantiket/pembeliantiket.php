<?php

  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__)  . $ds . '../../../') . $ds;
  require_once("{$base_dir}pages{$ds}core{$ds}header.php");
  require_once("{$base_dir}pages{$ds}content{$ds}pembeliantiket{$ds}process-pembeliantiket.php");
  
?>
  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pembelian Tiket</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../dashboard/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Pembelian Tiket</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Start Ngoding Disini -->

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data User</h5>
              <p>Data ini adalah data semua pengguna aplikasi <b>KAI Karawang</b>.</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIK</th>
                    <th scope="col">NAME</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">GENDER</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 0;
                    while($row=mysqli_fetch_array($QueryGetListUser)){
                      $no++;

                      echo "<tr>";
                        echo "<th scope='row'>".$no."</th>";
                        echo "<td>".$row["nik_tmu"]."</td>";
                        echo "<td>".$row["name_tmu"]."</td>";
                        echo "<td>".$row["address_tmu"]."</td>";
                        echo "<td>".$row["gender_tmu"]."</td>";
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

      </div>
    </section>

  </main><!-- End #main -->


<?php
  require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?> 