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
    <title></title>
</head>
<?php
$servername="localhost" ;
$username="root" ; 
$password="" ; 
$dbname="module" ; 
// Create connection 
$conn=new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error){
     die("Connection failed: " . $conn->connect_error); 
    }
$pid=$_GET['pid']; 
$kid=$_GET['kid']; 
?>

<body>
    <div id="referance">
        <div class="login_form" id="demo" style="width: 1000px; margin: 100px auto;">
            <div>
                <h1 style="text-align: center; color:#000000;font-family: sans-serif;" id="login_header"><strong>Referance</strong></h1>
                <?php echo '<form method="POST" action="referance_display.php?kid='.$kid.'">'; ?>
                    <select name="platform_id" style="padding: 10px; margin: 10px; width: 100%" >
                        <?php 
                        $sql="SELECT * FROM platform_module" ; 
                        $result=$conn->query($sql); 
                        if ($result->num_rows > 0) { 
                            // output data of each row 
                            while($row = $result->fetch_assoc()) {
                                 echo "<option value=".$row["pid"].">".$row["platform_name"]."</option>"; 
                            }
                        } 
                        ?>
                    </select>
                    <input type="text" style="padding: 10px; margin: 10px; width: 100%" name="keyword"
                    <?php 
                    $key="SELECT keywords FROM keyword_module WHERE kid=" .$kid. " "; 
                    $word=$conn->query($key); 
                    if ($word->num_rows > 0) { 
                        // output data of each row 
                        while($output = $word->fetch_assoc()) { 
                            $str=","; $str=$output["keywords"].$str; 
                        } 
                        echo "value="."'".$str."'"; 
                    } 
                    ?> 
                    >
                    <input style="padding: 10px; margin: 10px; width: 100%" type="text" placeholder="Website URL" name="url_name" required>
                    <br>
                    <input style="padding: 10px; margin: 10px; width: 100%" type="text" placeholder="Admin Data" name="admin_data" required>
                    <br>
                    <input style="padding: 10px; margin: 10px; width: 100%" type="text" placeholder="Server Data" name="server_data" required>
                    <br>
                    <input style="padding: 10px; margin: 10px; width: 100%" type="text" placeholder="Worked By" name="data" required>
                    <br>
                    <input style="padding: 10px; margin: 10px; width: 100%" type="submit" name="submit" value="submit" class="btn btn-primary" required>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php $conn->close(); ?>