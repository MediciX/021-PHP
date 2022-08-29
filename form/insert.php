<!DOCTYPE html>

<?php
include("head.php");
?>

<body>

<?php
include("header.php");
?>

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
$sql = "INSERT INTO tbl_member (ID, Firstname, Name, LastName, Sex, Birthdate, Address, Telephone, Email) VALUES ('', '$Firstname', '$Name', '$Lastname', '$Sex', '$Date', '$Address', '$Phone', '$Email')";

//คำสั่งใส่ข้อมูลลงไปใน sql
if (mysqli_query($connection, $sql)) {
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: '<h3>บันทึกข้อมูลสำเร็จ</h3>',
        type: 'success',
        showConfirmButton: false,
        timer: 4500
    }).then(function() {
        window.location = 'formREG.php';
    });
    </script>";
    }
else {
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: '<h3>บันทึกข้อมูลไม่สำเร็จ</h3>',
        type: 'success',
        showConfirmButton: false,
        timer: 4500
    }).then(function() {
        window.location = 'formREG.php';
    });
    </script>";
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

<?php include "footer.php"; ?>


