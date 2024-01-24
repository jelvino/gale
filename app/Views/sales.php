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
                        <th scope="col">Namaplnggan</th>
                        <th scope="col">Namabrng</th>
                        <th scope="col">harga</th>
              
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      foreach ($pacaran as $key){

                      ?> 
                      <tr>
                        <th scope="row"><a href="#"><?=$no++ ?></a></th>
                        <td><?=$key->id_pelanggan ?></td>
                        <td><a href="#" class="text-primary">jam</a></td>
                        <td>Rp700.000.000</td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>