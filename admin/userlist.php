<!-- Page content -->
<div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Users List</h3>
        </div>
        <?php
        $query = "SELECT * FROM users ORDER BY id DESC";
        $run = mysqli_query($link,$query);
        if(mysqli_num_rows($run) > 0){
         ?>
        <form class="" method="post">
        <div class="table-responsive">
          <table class="table align-items-center table-flush">

            <thead class="thead-light">
              <tr>
                <th scope="col"><input type="checkbox" id="selectallboxes"></th>
                <th scope="col">Date</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Posts</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_array($run)){
                  $id = $row['id'];
                  $first_name = ucfirst($row['first_name']);
                  $last_name = $row['last_name'];
                  $email = $row['email'];
                  $username = $row['username'];
                  $role = $row['role'];
                  $image = $row['image'];
                  $date = getdate ($row['date']);
                  $day = $date['mday'];
                  $month = substr($date['month'],0,3);
                  $year = $date['year'];
               ?>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <input type="checkbox" class="checkboxes" name="checkboxes[]" value="<?php echo $id; ?>">
                  </div>
                </th>
                <td>
                  <?php echo "$day/$month/$year"; ?>
                </td>
                <td>
                <?php echo "$first_name $last_name"; ?>
                </td>
                <td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i><?php echo $username; ?>
                  </span>
                </td>
                <td>
                  <?php echo $username; ?>
                </td>
                <td>
                  <?php echo ucfirst($role); ?>
                </td>
                <td class="text-right">
                  11
                </td>
                <td class="text-right">
                <a href="edit-user.php?edit=<?php echo $id; ?>">
                  <i class="ni ni-settings-gear-65" style="font-size:20px"></i>
                </a>
                </td>
                <td class="text-right">
                <a href="user.php?del=<?php echo $id; ?>">
                  <i class="ni ni-fat-remove" style="font-size:30px"></i>
                </a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer py-4">
          <div class="form-group">
              <select class="" name="bulk-option" class="form-control">
                <option value="Delete">Delete</option>
                <option value="Author">Change to Author</option>
                <option value="Admin">Change to Admin</option>
              </select>
          </div>
          <div class="col-xs-8">
            <input type="submit" name="" value="Apply" class="btn btn-success">
            <a href="#" class="btn btn-primary">Add New</a>
            <?php
              if(isset($error)){
                echo "<span style='color:red;' class='pull-right'>$error</span>";
              } else if(isset($msg)) {
                echo "<span style='color:green;' class='pull-right'>$msg</span>";
              }
             ?>
          </div>
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
        <?php
            }else {
              echo "<center><h2>No users Available</h2><br><hr></center>";
            }
         ?>
       </form>
      </div>
    </div>
  </div>
