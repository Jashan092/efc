<?php

    $servername = "localhost";
    $username = 'root';
    $password = '';
    $databasename = 'notesdata';
    $conc = mysqli_connect($servername,$username,$password,$databasename);
    
    // if ($conc){
    //     echo "Connected successfuly<br>";
    // }
    // else{
    //     echo "Trouble connecting to database";
    // }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['snoEdit'])){
            $sno = $_POST['snoEdit'];
            $title = $_POST['titleEdit'];
            $message = $_POST['descriptionEdit'];
            echo "title is " . $title . " message is " . $message;
            $usql = "UPDATE `dnotes` SET `title` = '$title', `message` = '$message', `status` = '0' WHERE `dnotes`.`sno` = $sno";
            mysqli_query($conc,$usql);
        }
        elseif (isset($_POST['dsnumber'])){
            $delsno = $_POST['dsnumber'];
            $desql = "DELETE FROM `dnotes` WHERE `dnotes`.`sno` = $delsno";
            mysqli_query($conc,$desql);
        }
        else{
            $title = $_POST['title'];
            $message = $_POST['message'];
            echo $title . $message;
            $sqlinsert = "INSERT INTO `dnotes` (`title`, `message`, `status`) VALUES ( '$title', '$message', '0');";
            $insresult = mysqli_query($conc,$sqlinsert);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmodal">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="index.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="form-group">
                            <label for="title">Note Title</label>
                            <input type="text" class="form-control" id="titleEdit" name="titleEdit"
                                aria-describedby="emailHelp" style="width: 100%">
                        </div>

                        <div class="form-group">
                            <label for="desc">Note Description</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <nav id="navbar">
        <ul>
            Notes
        </ul>
    </nav>
    <section id="section-1">
        <form action="index.php" method="POST">
            <div>
                <h1>Add a Note</h1>
            </div>
            <label for="title">Add Title</label>
            <input type="text" name="title" id="title" autocomplete="off">
            <label for="message">Add Message</label>
            <textarea name="message" id="message" rows="10" autocomplete="off" autofocus='off'></textarea>
            <button type="submit" class="btnn" id="bt">Add Note</button>
        </form>
    </section>
    <div class="container">
        <table class="table" id='myTable'>
            <thead>
                <tr>
                    <th>S.no</th>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
            // fetching datbase
            $sqlr = "SELECT * FROM `dnotes`";
            $result = mysqli_query($conc,$sqlr);    
            $numb = 0;
            while ($row = mysqli_fetch_assoc($result)){
                $numb += 1;
                if ($row['status'] == 1){
                    echo "
                        <tr>
                    <td>".$numb."</td>
                    <td>".$row['title']. "</td>
                    <td>".$row['message']."</td>
                    <td><input type='checkbox'></td>
                    <td><button class='button' id=".$row['sno']." >Edit</button><button class='button' id='btn2'>Delete</button></td>
                    </tr>";
                }
                else{
                    echo "
                        <tr>
                    <td>".$row['sno']."</td>
                    <td>".$row['title']. "</td>
                    <td>".$row['message']."</td>
                    <td><input type='checkbox' ></td>
                    <td><button type='button' class='button btn-primary edit' data-bs-toggle='modal' data-bs-target='#editmodal'>Edit</button>
                    <form action='index.php' method='POST' id='delform'>
                    <input type='hidden' name='dsnumber' id='dsnumber'>
                    <button type='button' name='del' class='dele btn2' id='del'>Delete</button>
                    </form>
                    </td>
                    </tr>";
                }
               
            }
        ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="index.js"></script>

</html>