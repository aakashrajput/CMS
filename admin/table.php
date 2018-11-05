<?php
include ("connection.php");
?>
<div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Recent Post</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Published Date</th>
                <th scope="col">Category</th>
                <th scope="col">By User</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="tables.html#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="./assets/img/theme/bootstrap.jpg">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Argon Design System</span>
                    </div>
                  </div>
                </th>
                <td>
                  $2,500 USD
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-green"></i> Hacking
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="tables.html#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i> pending
                  </span>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="tables.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="tables.html#">Approve</a>
                      <a class="dropdown-item" href="tables.html#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="tables.html#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="./assets/img/theme/bootstrap.jpg">
                    </a>
                    <div class="media-body">
                      <span class="mb-0 text-sm">Argon Design System</span>
                    </div>
                  </div>
                </th>
                <td>
                  $2,500 USD
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-yellow"></i> Food
                  </span>
                </td>
                <td>
                  <div class="avatar-group">
                    <a href="tables.html#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                      <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
                    </a>
                  </div>
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i> pending
                  </span>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="tables.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="tables.html#">Approve</a>
                      <a class="dropdown-item" href="tables.html#">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="tables.html#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="tables.html#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="tables.html#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="tables.html#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="tables.html#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark table -->
  <div class="row mt-5">
    <div class="col">
      <div class="card bg-default shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-white mb-0">Recently Registered Users</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-dark table-flush">
            <?php
                                    $res = mysqli_query($link,"select * from user_reg ORDER BY id DESC LIMIT 4");
                                      echo "<thead class='thead-dark'>";
                                      echo "<tr>";
                                          echo "<th scope='col'>";echo "User Name";echo "</th>";
                                          echo "<th scope='col'>";echo "Registered Date";echo "</th>";
                                          echo "<th scope='col'>";echo "Email";echo "</th>";
                                          echo "<th scope='col'>";echo "Profile Pic";echo "</th>";
                                          echo "<th scope='col'>";echo "";echo "</th>";
                                          echo "<th scope='col'>";echo "";echo "</th>";
                                      echo "</tr>";
                                      echo "</thead>";
                                      while($row=mysqli_fetch_array($res))
                                {
                                      echo "<tbody>";
                                          echo "<tr>";
                                          echo "<th scope='row'>";
                                          echo "<div class='media align-items-center'>";
                                          echo "<div class='media-body'><span class='mb-0 text-sm'>";echo $row["name"]; echo"</span></div></div></th>";
                                              echo"<td>";echo $row["reg_date"]; echo"</td>";
                                              echo"<td><span class='badge badge-dot mr-4'><i class='bg-warning'></i>";echo $row["email"]; echo"</span></td>";
                                              echo"<td><div class='avatar-group'><a href='tables.html#' class='avatar avatar-sm' data-toggle='tooltip' data-original-title='Ryan Tompson'><img alt='Image placeholder' src='./assets/img/theme/team-1-800x800.jpg' class='rounded-circle'>";echo ""; echo"</td></a></div></td>";
                                          echo "</tr>";
                                      echo "</tbody>";
                                }
                                  echo "</table>";
                                    ?>
        </div>
      </div>
    </div>
  </div>
