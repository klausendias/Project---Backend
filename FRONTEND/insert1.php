<html>    
    <head>    
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
            <link href = "registration.css" type = "text/css" rel = "stylesheet" />  
        <title>Submit your event here</title>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Home2.html">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ContactUs.html">Contact us</a>
                    </li>
                     <li class="nav-item">
                     <a class="nav-link" href="About us.html">ProjeKt N</a>
                      </li>
                    
                  </ul>
                </div>
              </nav>    
    </head>    
    <body> 
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$eventtype = $_POST['eventtype'];
$datetime = $_POST['datetime'];
$details = $_POST['details'];

if (!empty($name) || !empty($email) || !empty($eventtype) || !empty($datetime) ||!empty($details)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "eventcontact";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From event_table Where email = ? Limit 1";
     $INSERT = "INSERT Into event_table (name, email, eventtype, datetime, details) values(?, ?, ?,?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss", $name, $email, $eventtype, $datetime, $details);
      $stmt->execute();
      echo "Your event details are sucessfully logged";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
</body>    
</html>  
