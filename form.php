<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $Text_message = $_POST['Text_message'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "rein2";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO REINTABLE (id, fname, lname, Text_message) VALUES ('0', '$fname', '$lname', '$Text_message')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection       
    mysqli_close($con);

?>