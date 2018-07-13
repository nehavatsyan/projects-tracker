<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
        $pid=$_GET["pid"];

?>
<div id="keyword">
    <div class="login_form" id="demo" style="width: 1000px; margin: 100px auto;">
        <div>
            <h1 style = "text-align: center; color:#000000;font-family: sans-serif;" id="login_header"><strong>KEYWORDS</strong></h1>
            <?php echo '<form method="POST" action="keyword_display.php?pid='.$pid.'">'; ?>
                <input  style= "padding: 10px; margin: 10px; width: 100%" type="text" placeholder="Keywords Name" name="key_name" required><br>
                <input  style= "padding: 10px; margin: 10px; width: 100%" type="submit"  class="btn btn-primary" name="submit" value="submit" class="btn btn-primary" required>
            </form>
        </div>
    </div>  
</div> 
</body>
</html>
