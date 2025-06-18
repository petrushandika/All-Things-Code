<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP CRUD Operation</title>
</head>
<body>

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" id="completename" placeholder="Enter your name">
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="completeemail" placeholder="Enter your email">
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Mobile</label>
          <input type="text" class="form-control" id="completemobile" placeholder="Enter your mobile">
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Place</label>
          <input type="text" class="form-control" id="completeplace" placeholder="Enter your place">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="addUser()">Save</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" id="updatename" placeholder="Enter your name">
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="updateemail" placeholder="Enter your email">
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Mobile</label>
          <input type="text" class="form-control" id="updatemobile" placeholder="Enter your mobile">
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Place</label>
          <input type="text" class="form-control" id="updateplace" placeholder="Enter your place">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="updateUserDetails()">Update</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <input type="hidden" id="hidden_user_id">
      </div>
    </div>
  </div>
</div>

<div class="container my-3">
    <h1 class="text-center">PHP CRUD Operation using Bootstrap Modal and AJAX</h1>
    <button type="button" class="btn btn-dark my-3" data-bs-toggle="modal" data-bs-target="#addModal">
      Add New User
    </button>
    <div id="displayDataTable">
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function(){
        displayData();
    });

    function displayData() {
        var displayData = "true";
        $.ajax({
            url: "display.php",
            type: "post",
            data: { displaySend: displayData },
            success: function(data, status) {
                $('#displayDataTable').html(data);
            }
        });
    }

    function addUser() {
        var nameAdd = $('#completename').val();
        var emailAdd = $('#completeemail').val();
        var mobileAdd = $('#completemobile').val();
        var placeAdd = $('#completeplace').val();

        $.ajax({
            url: "insert.php",
            type: "post",
            data: {
                nameSend: nameAdd,
                emailSend: emailAdd,
                mobileSend: mobileAdd,
                placeSend: placeAdd
            },
            success: function(data, status) {
                $('#addModal').modal('hide');
                displayData();
            }
        });
    }

    function DeleteUser(deleteid){
        $.ajax({
            url: "delete.php",
            type: 'post',
            data: {
                deletesend: deleteid
            },
            success:function(data, status){
                displayData();
            }
        });
    }

    function GetUserDetails(updateid){
        $('#hidden_user_id').val(updateid);

        $.post("update.php", {updateid: updateid}, function(data, status){
            var userid = JSON.parse(data);
            $('#updatename').val(userid.name);
            $('#updateemail').val(userid.email);
            $('#updatemobile').val(userid.mobile);
            $('#updateplace').val(userid.place);
        });

        $('#updateModal').modal('show');
    }

    function updateUserDetails(){
        var updatename = $('#updatename').val();
        var updateemail = $('#updateemail').val();
        var updatemobile = $('#updatemobile').val();
        var updateplace = $('#updateplace').val();
        var hidden_user_id = $('#hidden_user_id').val();

        $.post("update.php", {
            updatename: updatename,
            updateemail: updateemail,
            updatemobile: updatemobile,
            updateplace: updateplace,
            hidden_user_id: hidden_user_id
        }, function(data, status){
            $('#updateModal').modal('hide');
            displayData();
        });
    }
</script>
</body>
</html>