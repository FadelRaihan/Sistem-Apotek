<?php

  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__)  . $ds . '../../../') . $ds;
  require_once("{$base_dir}pages{$ds}core{$ds}header.php");
  require_once("{$base_dir}pages{$ds}content{$ds}masteruser{$ds}process-masteruser.php");
  
?>
  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Master User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../dashboard/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Master User</li>
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
              <p>Data ini adalah data semua pengguna aplikasi <b>SIAGA</b>.</p>
              <!-- Modal Dialog Scrollable -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add-user">
              <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Add User</span>
              </button>
              <div class="modal fade" id="modal-add-user" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Buat Akun Baru</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Multi Columns Form -->
                      <form action="process-masteruser" method="POST" class="row g-3">
                        <div class="col-md-6">
                          <label for="inputName5" class="form-label">Nama Lengkap</label>
                          <input type="text" name="nama" class="form-control" id="inputName5">
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustomUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                              Please choose a username.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="inputState" class="form-label">Jenis Kelamin</label>
                          <select id="inputState" name="jenis_kelamin" class="form-select">
                            <option selected>Pilih...</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="inputEmail5" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="inputEmail5">
                        </div>
                        <div class="col-md-4">
                          <label for="inputPassword5" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="inputPassword5">
                        </div>
                        <div class="col-6">
                          <label for="inputAddress5" class="form-label">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="inputAddres5s" placeholder="1234 Main St">
                        </div>
                        <div class="col-6">
                          <label for="inputAddress2" class="form-label">Domisili</label>
                          <input type="text" name="domisili" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button class="btn btn-primary" name="save" type="submit" onclick="showSaveSuccessAlert()">Save</button>
                    </div>
                    </form><!-- End Multi Columns Form -->
                  </div>
                </div>
              </div><!-- End Modal Dialog Scrollable-->              
              <div class="alert-container" id="saveSuccessAlert"></div>
              <div class="modal modal-blur fade" id="modal-report" tabindex="-1" style="display: none;" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">New report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
                    </div>
                    <label class="form-label">Report type</label>
                    <div class="form-selectgroup-boxes row mb-3">
                      <div class="col-lg-6">
                        <label class="form-selectgroup-item">
                          <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked="">
                          <span class="form-selectgroup-label d-flex align-items-center p-3">
                            <span class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </span>
                            <span class="form-selectgroup-label-content">
                              <span class="form-selectgroup-title strong mb-1">Simple</span>
                              <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                            </span>
                          </span>
                        </label>
                      </div>
                      <div class="col-lg-6">
                        <label class="form-selectgroup-item">
                          <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                          <span class="form-selectgroup-label d-flex align-items-center p-3">
                            <span class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </span>
                            <span class="form-selectgroup-label-content">
                              <span class="form-selectgroup-title strong mb-1">Advanced</span>
                              <span class="d-block text-secondary">Insert charts and additional advanced analyses to be inserted in the report</span>
                            </span>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="mb-3">
                          <label class="form-label">Report url</label>
                          <div class="input-group input-group-flat">
                            <span class="input-group-text">
                              https://tabler.io/reports/
                            </span>
                            <input type="text" class="form-control ps-0" value="report-01" autocomplete="off">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label class="form-label">Visibility</label>
                          <select class="form-select">
                            <option value="1" selected="">Private</option>
                            <option value="2">Public</option>
                            <option value="3">Hidden</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label class="form-label">Client name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label class="form-label">Reporting period</label>
                          <input type="date" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div>
                          <label class="form-label">Additional information</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                      Cancel
                    </a>
                    <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                      <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                      Create new report
                    </a>
                  </div>
                </div>
              </div>
            </div>
              <!-- Table with stripped rows -->
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Assigned</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Priority</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Budget</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no = 0;
                        while($row=mysqli_fetch_array($QueryGetListUser)){
                          $no++;

                          echo "<tr>";
                            echo "<th scope='row'>".$no."</th>";
                            echo "<td>".$row["username"]."</td>";
                            echo "<td>".$row["nama"]."</td>";
                            echo "<td>".$row["alamat"]."</td>";
                            echo "<td>".$row["jenis_kelamin"]."</td>" ?>
                            <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">
                            <span>
                              <i class="ti ti-pencil"></i>
                            </span>
                            <span class="hide-menu">Edit</span>
                            </button>
                            </td>
                            <td>
                            <button type="button" class="btn btn-danger"><a href="../../../backend/delete.php?id=<?=$row['id'];?>" style="color:white">
                            <span>
                              <i class="ti ti-trash"></i>
                            </span>
                            <span class="hide-menu">Delete</span></a></button>

                            </td>
                      <?php } ?>
                      
                    </tbody>
                  </table>
                  <!-- Edit Modal-->
                  <div class="modal fade" id="editModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Informasi Akun</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- Multi Columns Form -->
                      <form action="process-masteruser" method="POST" class="row g-3">
                        <div class="col-md-6">
                          <label for="inputName5" class="form-label">Nama Lengkap</label>
                          <input type="text" name="nama" class="form-control" id="inputName5">
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustomUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="username" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                              Please choose a username.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="inputState" class="form-label">Jenis Kelamin</label>
                          <select id="inputState" name="jenis_kelamin" class="form-select">
                            <option selected>Pilih...</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="inputEmail5" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="inputEmail5">
                        </div>
                        <div class="col-md-4">
                          <label for="inputPassword5" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="inputPassword5">
                        </div>
                        <div class="col-6">
                          <label for="inputAddress5" class="form-label">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="inputAddres5s" placeholder="1234 Main St">
                        </div>
                        <div class="col-6">
                          <label for="inputAddress2" class="form-label">Domisili</label>
                          <input type="text" name="domisili" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button class="btn btn-primary" name="save" type="submit" onclick="showSaveSuccessAlert()">Save</button>
                    </div>
                    </form><!-- End Multi Columns Form -->
                  </div>
                </div>
              </div><!-- End Modal Dialog Scrollable-->    
                  <!-- Delete Modal-->
                  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                              </div>
                              <div class="modal-body">
                                  Apakah Anda yakin ingin menghapus pengguna ini?
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button class="btn btn-primary" type="button"><a href="backend/delete.php?id=<?=$row['id'];?>" style="color:white">Delete</a></button>
                          </div>
                      </div>
                  </div>
              </div> 

              
                            
                </div>
              </div>
            </div>
          </div>
                
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

