<?php

include('security.php');
include('includes/header.php');
include('includes/sidebar.php');

?>

<!--DELETE MODAL -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete user ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">
          
          <input type="hidden" name="delete_id" id="delete_user">
            Are you sure to delete this data ?
          </p>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="userdelete_btn" class="btn btn-danger">Yes</button>
        </div>
      </form> 
    </div>
  </div> 
</div>

<!-- DELETE MODAL END -->


<!-- ADMIN ADD MODAL -->

<div class="modal fade" id="adduserprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Add </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>

            <input type="hidden" name="usertype" value="user">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="userreg_btn" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- END OF ADMIN ADD MODAL -->


<div class="container-fluid">
  <?php
  include('includes/topbar.php');
  ?>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-info">User Profile 
      <button type="button" class="btn btn-info mx-2" data-toggle="modal" data-target="#adduserprofile">
       Add User 
      </button>
      </h6>
    </div>
    <div class="card-body">

    
      <div class="table-responsive">

        <?php

          $query = "SELECT * FROM register where usertype = 'user' ";
          $query_run = mysqli_query($connection,$query);
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Email</th>
              <th class="text-center">Edit</th>
              <th class="text-center">Delete</th>              
            </tr>
          </thead>
          <?php
            if($query_run)
            {
              foreach($query_run as $row)
              {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['username']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td class="text-center">
                <form action="userreg_edit.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" class="btn btn-success" name="edit_btn"><i class="fas fa-edit"></i></button>
                </form>
              </td>       
              <td class="text-center">
                  <button type="button" class="btn btn-danger userdeletebtn"><i class="fas fa-trash-alt"></i></button>
              </td>       
            </tr>
          </tbody>
          <?php
              }
            }
            else
            {
              echo "No Record Found !";
            }
          ?>
        </table>
      </div>
    </div>
  </div>



<?php

  include('includes/scripts.php');
  include('includes/footer.php');

?>

<script>

$(document).ready(function(){
  $('.userdeletebtn').on('click', function(){

    $('#deletemodal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();

    console.log(data);

    $('#delete_user').val(data[0]);
  });
});

</script>