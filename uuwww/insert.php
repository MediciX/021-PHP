<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" href="image1.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Rov</title>
    <style>
        *{
            font-family: 'Kanit', sans-serif;
            
            
        }
        i.IO{
            margin-right: 20px;
            /* font-size: 25px; */
        }
        img.IO{
          /* width: 1920px; */
          /* height: 1080px; */
          width:100%;
          height: 100%;
        }
        
    </style>
</head>
<body>
<!-- Data -->
<nav style="background-color: white;" class="navbar navbar-expand-lg navbar-light ">
<nav class="navbar navbar-light ">
  <a class="navbar-brand" href="#">
    <img src="image.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Rov
  </a>
</nav>
  <div class="container-fluid">
    <!-- <a style="font-size: 30px;" font-size 30px;" class="navbar-brand text-white" href="#">Bitkub</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="font-size: 15px;" class="nav-link active " aria-current="page" href="index.php">หน้าแรก</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link  text-white" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="#">Pricing</a>
        </li> -->
        <li class="nav-item">
          <a style="font-size: 15px;" class="nav-link " href="formregister.php" tabindex="-1" aria-disabled="true">สมัครสมาชิก</a>
        </li>
      </ul>
    
</nav>
<div class="container ">
            <div class="card">
                <div class="card-header bg-danger bg-gradient text-light">
                ข้อมูล
                </div>
        <div div class="card-body">
        <?php

        include("config.inc.php");

        isset($_POST[""]);
        $Firstname = $_POST["txt_firstname"];
        $Name = $_POST["txt_name"];
        $Lastname = $_POST["txt_lastname"];
        $Sex = $_POST["txt_sex"];
        $Date = $_POST["txt_birthdate"];
        $Address = $_POST["txt_address"];
        $Phone = $_POST["txt_number"];
        $Email = $_POST["txt_email"];
        
        //คำสั่งกำหนดค่าที่จะใส่ข้อมูลลงใน sql
        $sql = "INSERT INTO tbl_member (ID, FirstName, Name, LastName, Sex, Birthdate, Address, Telephone, Email) VALUES ('', '$Firstname', '$Name', '$Lastname', '$Sex', '$Date', '$Address', '$Phone', '$Email')";

        //คำสั่งใส่ข้อมูลลงไปใน sql
        if (mysqli_query($connection, $sql)) {
          echo "เพิ่มข้อมูลสำเร็จ";
        }
        else {
          echo "เพิ่มข้อมูลไม่สำเร็จ";
        }
        $connection -> close();

        /* echo "ชื่อ-นามสกุล : ";
        echo $Firstname . "&nbsp;";
        echo $Name . "&nbsp;&nbsp;";
        echo $Lastname . "&ensp;&ensp;&ensp;&ensp;";
        echo "เพศ : ";
        echo $Sex . "&ensp;&ensp;&ensp;&ensp;";
        echo "วัน/เดือน/ปีเกิด : ";
        echo $Date . "&ensp;&ensp;&ensp;&ensp;<br><br>";
        echo "ที่อยู่ : ";
        echo $Address . "&ensp;&ensp;&ensp;&ensp;";
        echo "เบอร์โทรศัพท์ : ";
        echo $Phone . "&ensp;&ensp;&ensp;&ensp;";
        echo "อีเมล์ : ";
        echo $Email . "&ensp;"; */
        ?>
            
        </div>
        </div>
    </div>

<?php include "footer.php"; ?>
