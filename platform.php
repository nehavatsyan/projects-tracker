<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet">
    <title></title>
</head>
<body >
    <div id="platform" style="width: 1000px; margin: 100px auto;">
            <div class="login_form" id="demo">
                    <div>
                        <h1 style = "text-align: center; color:#000000;font-family: sans-serif;" id="login_header"><strong>PLATFORM</strong></h1>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <input  style= "padding: 10px; margin: 10px; width: 100%" type="text" placeholder="Platform Name" name="plat_name" required><br>
                            <input  style= "padding: 10px; margin: 10px; width: 100%" type="submit" name="submit" value="submit" class="btn btn-primary" required><br>
                        </form>
                    </div>
            </div>
    </div>
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
        $platform_name = $_POST["plat_name"];
        //uncomment to execute
        $sql = "INSERT INTO platform_module (platform_name) VALUES('".$platform_name."')";
        //uncomment to execute;
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>
    <div class="table-responsive " style="width: 1200px; margin: 100px auto;">
        <table class="table table-bordered table-striped" >
          <th colspan="4">Platform Name</th>
          <tbody>
          <?php
              $fetch="SELECT * FROM platform_module";
              $result = $conn->query($fetch);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row['platform_name']."</td>";
                    echo "<td><a href='keyword.php?pid=".$row['pid']."'><i class='fa fa-plus' style='font-size:24px'></i></a></td>";
                    echo "<td><a href='delete.php?pid=".$row['pid']."' onclick='myFunction()'><i class='fa fa-trash-o' style='font-size:24px'></i></a></td>";
                    echo "<td> <i class='fa fa-edit' style='font-size:24px'> </i> </td>";
                }
              } else {
                        echo "0 results";
              }
             ?>
             <script>
                     function myFunction() {
                         confirm("Press a button!");
                        }
              </script>
          </tr>
          </tbody>
        </table>
    </div>
</body>
</html>
<?php  
    $conn->close();
?>