<?php
// Connecting to the database 
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'notes';
$insert = false;
$update = false;
$delete = false;

$conec = mysqli_connect($servername,$username,$password,$database);

// if ($conec){
//   echo 'Stage [1] Connect with database <br>';
// }
// else{
//   echo 'Stage [1] failed Connection error with database <br>';
// }

//  Handling Requests
if (isset($_GET['delete'])){
  $snod = $_GET['delete'];
  $sqld = "DELETE FROM `notes` WHERE `sno` = $snod";
  $resultd = mysqli_query($conec,$sqld);
  if (!$resultd){
    echo "<Deletioon error";
  }
  else{
    $delete = true;
  }
}
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['serialnumber'])){
      $snop = $_POST['serialnumber'];
      $tit = $_POST['title'];
      $mess = $_POST['message'];
    $sql1 = "UPDATE `notes` SET `message` = '$tit', `description` = '$mess' WHERE `notes`.`sno` = $snop";
    $res2 = mysqli_query($conec,$sql1);
    if (!$res2){
      echo '<br>Error while updating';
    }
    else{
      $update = true;
    }
    }
    else{
    $title = $_POST['title'];
    $message = $_POST['message'];

  $sql2 = "INSERT INTO `notes` (`message`, `description`, `tstamp`) VALUES ('$title', '$message', current_timestamp());";
  $res = mysqli_query($conec,$sql2);
  if ($res){
    // echo '<br> inserted successfuly';
    $insert = true;
  }
  else{
    echo '<br> error while insertion';
  }
  }
  }
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

  <title>iNotes - Notes taking made easy.</title>
</head>

<body>
  <!-- Modal -->
  <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editmodal">Edit Modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action='index.php' method='POST'>
            <div class="mb-3">
              <h1>Add a Note</h1>
              <input type="hidden" name="serialnumber" id="serialnumber">
              <label for="titleedit" class="form-label">Add a Title</label>
              <input type="text" class="form-control" id="titleedit" aria-describedby="emailHelp" name='title'>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="desc" class="form-label">Add a Message</label>
              <textarea class="form-control" id="descriptionedit" rows="3" name='message'></textarea>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">iNotes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Contact Us
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <?php
  if ($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Holy guacamole!</strong> Your Note has been inserted successfuly.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if ($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Holy guacamole!</strong> Your note has been updated successfuly.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if ($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Holy guacamole!</strong> Your Note has been deleted successfuly.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
?>
  <div class="container my-5">
    <form action='index.php' method='post'>
      <div class="mb-3">
        <h1>Add a Note</h1>
        <label for="exampleInputEmail1" class="form-label">Add a Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='title'>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Add a Message</label>
        <textarea class="form-control" id="desc" rows="3" name='message'></textarea>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
  </div>
  <div class="container">

    <table class="table" id='myTable'>
      <thead>
        <tr>
          <th>S.no</th>
          <th>Title</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = 'SELECT * FROM `notes`';
          $result = mysqli_query($conec,$sql);
          $sno = 0;
          while ($row = mysqli_fetch_assoc($result)){
            $sno += 1;
            echo "<tr>
              <th>". $sno."</th>
              <td>".$row['message']."</td>
              <td>".$row['description']."</td>
              <td> <button class='btn btn-sm btn-primary edit' id=".$row['sno'].">Edit</button><button class='btn btn-sm btn-primary delete' id=".$row['sno'].">Delete</td>
            </tr>";
          }
      ?>
      </tbody>
    </table>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="ekma.js"></script>
<script>
  edits = document.getElementsByClassName('edit')
  Array.from(edits).forEach(((elemnet) => {
    elemnet.addEventListener('click', (e) => {
      console.log('edit ', e);
      console.log('edit ', e.target);
      console.log('edit ', e.target.parentNode.parentNode);
      tr = e.target.parentNode.parentNode;
      title = tr.getElementsByTagName('td')[0].innerText;
      message = tr.getElementsByTagName('td')[1].innerText;
      console.log(title, message)
      titleedit.value = title;
      descriptionedit.value = message;
      serialnumber.value = e.target.id;
      console.log(e.target.id);
      $('#editmodal').modal('toggle');
    })
  }))

  deletes = document.getElementsByClassName('delete')
  Array.from(deletes).forEach(((elemnet) => {
    elemnet.addEventListener('click', (e) => {
      console.log('delete ', e);
      console.log('delete ', e.target);
      console.log('delete ', e.target.parentNode.parentNode);
      tr = e.target.parentNode.parentNode;
      title = tr.getElementsByTagName('td')[0].innerText;
      message = tr.getElementsByTagName('td')[1].innerText;
      console.log(title, message);
      no = e.target.id;

      if (confirm("Are you sure you wan to delete this note?")){
        console.log('delete: yes');
        window.location = `index.php?delete=${no}`;
      }
      else{
        console.log('delete: no');
      }
    })
  }))
</script>

</html>