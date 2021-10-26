<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymousdy">
    <script src="https://kit.fontawesome.com/c5f43f4328.js" crossorigin="anonymous"></script>
    <title>Career</title>
    <style>
        .bgimg {
            margin: 50px;

        }

        .bgimg img {
            width: 100%;
            height: 40em;

        }

        .navbar1 {
            overflow: hidden;
            background-color: #A9E4D7;
            width: 100%;
        }

        .content {
            color: #000;
            text-align: center;
            margin-top: 50px;
        }

        .nav-link {
            text-decoration: none;
            color: #000;
            font-size: 100px;
        }

        .row {
            margin-top: 20px;
            margin-left: 20%;
        }

        .card {
            margin: 10px;
            padding: 10px;
            background-color: #63B4B8;
            box-shadow: 5px 10px #A9E4D7;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="Container-fluid">

        <!-- <div class="bgimg">
<img src="bg2img.jpg" alt="">
        </div>
    </div> -->
        <div class="navbar1">
            <ul class="nav justify-content-center">

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-airbnb"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Airjobs</a>
                </li>


            </ul>
        </div>

        <div class="content">
            <h2>JOBS AVAILABLE</h2>
        </div>

        <div class="row">
            <?php
            $server = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'jobsportal';
            
            $conn = mysqli_connect($server,$username,$password,$database);
            
            if($conn->connect_error){
                die("Connection failed:".$conn->connect_error);
            }
            $sql="SELECT cname,position,jobdesc,ctc from jobs";
            $result=mysqli_query($conn,$sql);
            if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
                    echo'
                    <div class="card col-md-4">
                    <div class="jobs">
                    <h4 class="card-title">'.$rows['position'].'</h4>
                    <h5 class="card-subtitle text-muted">'.$rows['cname'].'</h5>
                    <p style="color: black; ">'.$rows['jobdesc'].'</p>                    
                    <p style="color: black; " ><b>CTC:</b>'.$rows['ctc'].'</p>
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            Apply Now
        </a>
                    </div>
                </div>';
                
                }
            }
            ?>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="config.php" method="POST">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Applying for</label>
                                    <input type="text" class="form-control" name="apply">                                    
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Qualification</label>
                                    <input type="text" class="form-control" name="qual">                                    
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Year Completed</label>
                                    <input type="text" class="form-control" name="year">                                    
                                </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                            
                            <input type="submit" class="btn btn-primary" value="Apply" name="appli">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>