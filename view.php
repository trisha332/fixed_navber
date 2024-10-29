<?php require('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>View</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">All Students</h2>
    <?php
    $src="SELECT * FROM student";
    $rs=mysqli_query($con, $src);
    //echo mysqli_num_rows($rs);
    if(mysqli_num_rows($rs)>0){
        ?>
        <table class="table-bordered table">
            <thead>
                <tr>
                    <th>Name of Student</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // mysqli_fetch_assoc()
                // mysqli_fetch_row() 
                // mysqli_fetch_array()
                while($rec=mysqli_fetch_assoc($rs)){
                    ?>
                    <tr>
                        <td><?php echo $rec['sname'] ?></td>
                        <td><?php echo $rec['semail'] ?></td>
                        <td><?php echo $rec['spwd'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    }else{
        ?>
        <h2>Sorry No student details found</h2>
        <?php
    }
    ?>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>