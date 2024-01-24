<!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">kodebrngkeluar</th>
                        <th scope="col">namabrng</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      foreach ($pacaran as $key => $value)
                      {

                      ?> 
                      <tr>
                        <th scope="row"><a href="#"><?= $no++?></a></th>
                        <td><?= $value->kodebrngkeluar?></td>
                        <td><a href="#" class="text-primary">jamT</a></td>
                        <td>98080</td>
                      </tr>
                       <?php } ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->