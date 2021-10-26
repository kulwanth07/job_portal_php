<?php include 'header.php'?>

<div class="content">
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            Post Job
        </a>
    </p>

    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form action="config.php" method="POST">
                <div class="mb-3">
                    <label for="Company Name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="Company Name" name="cname">
                </div>
                <div class="mb-3">
                    <label for="Position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="Position" name="position">
                </div>
                <div class="mb-3">
                    <label for="Job Description" class="form-label">Job Description</label>
                    <input type="text" class="form-control" id="Job Description" name="jobdesc">
                </div>
                <div class="mb-3">
                    <label for="CTC" class="form-label">CTC</label>
                    <input type="text" class="form-control" id="CTC" name="ctc">
                </div>
                <input type="submit" class="btn btn-primary" value="submit" name="submit1">
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">CTC</th>
                </tr>
            </thead>
            <tbody>
<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobsportal';

$conn = mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
$sql="SELECT cname,position,ctc from jobs";
$result = mysqli_query($conn,$sql);

if($result->num_rows > 0){
    while($rows=$result->fetch_assoc()){
        $i=0;
        echo"
        
          <tr>
            <td>".++$i."</td>
            <td>".$rows["cname"]."</td>
            <td>".$rows["position"]."</td>
            <td>".$rows["ctc"]."</td>
          </tr>";      
    }
}
else{
    echo"";
}
?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
</body>


</html>