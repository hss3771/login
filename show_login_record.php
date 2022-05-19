<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        $servername = "localhost";
        $username = "root";
        $sqlpassword = "ScE1234**";
        $dbname = "login_record";
        $conn = new mysqli($servername, $username, $sqlpassword, $dbname, 3309);
        $sqql = "SELECT record_id, person_name, record FROM login_record";
        $rresult = $conn->query($sqql);
        if ($rresult->num_rows > 0) {
            while ($row = $rresult->fetch_assoc()) {
                echo "no. " . $row["record_id"] . " - 이름: " . $row["person_name"] . " - 시간:" . $row["record"] . "<br>";
            }
        } else {
            echo "0 results";
        }
            $conn->close();
            ?>
    </head>
    
    <body>
        
    </body>
</html>
