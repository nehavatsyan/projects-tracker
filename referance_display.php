<?php
      $servername = "localhost";
      $username = "root";
      $password = ""; 
      $dbname = "module";
       // Create connection 
      $conn = new mysqli($servername, $username, $password, $dbname);
       // Check connection
      if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
      }
      if(isset($_POST["submit"])){
            $pid=$_POST["platform_id"];
            $kid=$_GET["kid"];
            $keyword_name=$_POST["keyword"];
            $urls=$_POST["url_name"];
            $admin_data=$_POST["admin_data"];
            $server_name=$_POST["server_data"];
            $worked_by=$_POST["data"];
            $fetch="SELECT * FROM platform_module WHERE pid=".$pid."";
            $result = $conn->query($fetch);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $platform_name=$row["platform_name"];
                }
            }
            //Uncomment to execute
            $sql = "INSERT INTO referance_module (pid, kid, platform_name, keyword_name, urls, admin_name, server_data, worked_by) 
            VALUES ('".$pid."','".$kid."','".$platform_name."','".$keyword_name."','".$urls."','".$admin_data."','".$server_name."','".$worked_by."')";                
            if ($conn->query($sql) === TRUE) {
                    echo "";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }       
        }
?>
<html lang="en">
   <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
   </head>
    <body>
    <div class="table-responsive " style="width: 1200px; margin: 30px auto;">
        <table class="table table-bordered table-striped" >
           <th>Platform Name</th>
           <th>Keyword Name</th>
           <th>Website URL</th>
           <th>Admin Data</th>
           <th>Server Data</th>
           <th>Worked By</th>
           <tbody>
           <tr>
           <?php
                $data="SELECT * FROM referance_module";
                $out = $conn->query($data);
                if ($out->num_rows > 0) {
                    // output data of each row
                    while($col = $out->fetch_assoc()) {
                      echo "<td>".$col["platform_name"]."</td>";
                      echo "<td>".$col["keyword_name"]."</td>";
                      echo "<td>".$col["urls"]."</td>";
                      echo "<td>".$col["admin_name"]."</td>";
                      echo "<td>".$col["server_data"]."</td>";
                      echo "<td>".$col["worked_by"]."</td></tr>";
                    }
                }
           ?>
            
           </tbody>
        </table>
    </div>
    <div style="width: 1200px; margin: 10px auto; ">
       <a href="platform.php" class="btn btn-primary">Add Platform</a>
    </div>
</body>
</body>
</html>
<?php
    $conn->close();
?>