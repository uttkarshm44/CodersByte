<?php
$Name = Filter_input(INPUT_POST,'Name');
$Email_ID = Filter_input(INPUT_POST,'Email_ID');
$Date_Of_Birth = Filter_input(INPUT_POST,'Date_Of_Birth');
$Gender = Filter_input(INPUT_POST,'Gender');
$City = Filter_input(INPUT_POST,'City');
if (!empty($Name)){
    if(!empty($Email_ID)){
        if(!empty($Date_Of_Birth)){
           if(!empty($Gender)){
              if(!empty($City)){
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "CodersByte";
            // create connection
            $conn = new mysqli ($host,$dbUsername,$dbPassword,$dbName);
            if (mysqli_connect_error()){
                die('connect Error('.mysqli_connect_error().')' . mysqli_connect_error());
            }
            else{
                $sqli = "INSERT INTO Register(Name, Email_ID, Date_Of_Birth,Gender, City ) values ('$Name','$Email_ID','$Date_Of_Birth','$Gender','$City')";
                if ($conn->query($sqli)){
                    echo "You have Registerd Successfully.";
                }
                else{
                    echo "error: ". $sqli . "<br>". $conn->error;
                }
                $conn->close();

            }

        }
        else {
            echo "City should not be empty";
            die();
        }
    }
    else{
        echo "Gender should not be empty";
        die();
    }
}
    else{
        echo "Date_Of_Birth should not be empty";
        die();
    }
}
    else{
        echo "Email should not be empty";
        die();
    }
}
else{
    echo "Name should not be empty";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
a{
    padding: 8px;
    text-decoration: none;
    color: blue;
}
a:hover{
    color: green;
}
body{
    margin: 20px;
}
</style>
</head>
<body>

    <br>
    <a href="home.html">Return Home.</a>
    <br>

    <a href="Blogs.html">Read Blogs.</a>
</body>
</html>