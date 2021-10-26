<?php include 'header.php'?>
<script src="https://kit.fontawesome.com/c5f43f4328.js" crossorigin="anonymous"></script>
<div class ="content">
<table class="table table-bordered">
                <thead style="text-align:center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Candidate Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">year completed</th>
                    </tr>
                </thead>
                <tbody style="text-align:center">
                <?php
                $server = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'jobsportal';
                
                $conn = mysqli_connect($server,$username,$password,$database);
                
                if($conn->connect_error){
                    die("Connection failed:".$conn->connect_error);
                }
                $sql = "Select name,apply,year from apply_data";
                $result=mysqli_query($conn,$sql);
                $i=0;
                if($result->num_rows>0){
                    while($rows=$result->fetch_assoc()){
                        echo'                                  
                    <tr>
                        <th scope="row">'.++$i.'</th>
                        <td>'.$rows['name'].'</td>
                        <td>'.$rows['apply'].'</td>
                        <td>'.$rows['year'].'</td>
                    </tr>';
                    }}
                // else{
                //     echo"";
                //     }
                    ?>
                </tbody>
            </table>
</div>
