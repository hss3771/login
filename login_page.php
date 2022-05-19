<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .main{
                text-decoration: none;
                color: black;
            }
        </style>
        <?php
        $servername = "localhost";
        $username = "root";
        $sqlpassword = "ScE1234**";
        $dbname = "login_record";
        
// Create connection
        $conn = new mysqli($servername, $username, $sqlpassword, $dbname, 3309);
// Check connection
        if ($conn->connect_error) {
            die("접속실패: " . $conn->connect_error);
        } else {}
        
        $name = $_POST["name"];
        $password = $_POST["password"];
        $rPassword = 1234;
        
        if ($rPassword == $password) {
            $result = "성공";
            $sql = "INSERT INTO login_record (person_name)VALUES ('$name');";
            if ($conn->query($sql) === False) {
                $conn->error;
            }
        }
        else {
            $result = "실패";
        }
        
        $conn -> close();
        ?>
    </head>
        
    <body>
        <a class="main" href = "./login_page.html" ref="메인화면">메인화면으로 가기</a>
        <div class = "header">로그인 <?=$result?> 화면</div>></br>
        <iframe width="420" height="315" src="./show_login_record.php"></iframe>
        
    </body>
</html>
