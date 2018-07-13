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
            $pid=$_GET["pid"];
            $keyword_name=$_POST["key_name"];
            $keyword_name = $_POST["key_name"];
            //uncomment to execute
            $sql = "INSERT INTO keyword_module (keywords,pid) VALUES('".$keyword_name."','".$pid."')";
            //uncomment to execute;
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
    <div class="table-responsive " style="width: 1200px; margin: 100px auto;">
        <table class="table table-bordered table-striped" >
           <th colspan="4">Keyword Name</th>
           <tbody>
           <?php
                $fetch="SELECT * FROM keyword_module";
                $result = $conn->query($fetch);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row['keywords']."</td>";
                    echo "<td><a href='referance.php?pid=".$pid."& kid=".$row['kid']."'><i class='fa fa-plus' style='font-size:24px'></i></a></td>";
                    echo "<td><a href='del.php?kid=".$row['kid']."' onclick='myFunction()'><i class='fa fa-trash-o' style='font-size:24px'></i></a></td>";
                    echo "<td> <i class='fa fa-edit' style='font-size:24px'></i></td>";
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
</body>
</html>
<?php
    $conn->close();
?>