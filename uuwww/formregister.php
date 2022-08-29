<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
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
    </div>

</nav>

    <main>
        <div class="container ">
            <div class="card">
                <div class="card-header bg-danger bg-gradient text-light">
                ฟอร์มสมัครสมาชิก
                </div>
        <div div class="card-body">
            <form name ="form1" action="insert.php" method="post">
                <div class="row">
                    <div class="col-md-2">
                    <label for="exampleFormControlInput1" class="form-label" >คำนำหน้าชื่อ</label>
                    <select name="txt_firstname" id="txt_firstname" class="form-select">
                        <option selected>คำนำหน้าชื่อ</option>
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                    </select></div>
                    
                    <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label" >ชื่อ</label>
                    <input  class="form-control" type="text" name="txt_name" id="txt_name"placeholder="กรุณาระบุชื่อด้วย"></div>
                    <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label" >นามสกุล</label>
                    <input  class="form-control" type="text" name="txt_lastname" id="txt_lastname"placeholder="กรุณาระบุนามสกุล"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><br>
                    <label for="exampleFormControlInput1" class="form-label" >เพศ</label>
                    <div>
                    <input  class="form-check-input" type="radio" name="txt_sex" id="txt_sex" value="ชาย" >&nbsp;ชาย&ensp;
                    <input  class="form-check-input" type="radio" name="txt_sex" id="txt_sex" value = "หญิง">&nbsp;หญิง</div>
                    </div>

                    <div class="col-md-3"><br>
                    <label for="exampleFormControlInput1" class="form-label" >วัน/เดือน/ปี</label>
                    <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"
                    placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th"></div>
                    <div class="col-md-7"><br>
                    <label for="exampleFormControlInput1" class="form-label" >ที่อยู่</label>
                    <textarea class="form-control" type="text" name="txt_address" id="txt_address"placeholder="ที่อยู่"></textarea></div>

                    <div class="col-md-6"><br><label for="exampleFormControlInput1" class="form-label" >เบอร์โทร</label>
                    <input  class="form-control" type="number" name="txt_number" id="txt_number"placeholder="เบอร์โทร"></div>
                    <div class="col-md-6"><br><label for="exampleFormControlInput1" class="form-label" >อีเมล์</label>
                    <input  class="form-control" type="email" name="txt_email" id="txt_email"placeholder="อีเมล์"></div>
                    
                    <center>
                    <!-- < class="col-md-2"><br> -->
                    <br>
                    <button class="btn btn-outline-success" type="submit"> <i class="IO"><i class="bi bi-check-square"></i></i>บันทึก</button>&ensp;
                    <!-- <div class="col-md-2"><br> -->
                    <button class="btn btn-outline-danger" type="reset"> <i class="IO"><i class="bi bi-x-square"></i></i>ยกเลิก</button>
                    </center>
                    
                </div>

            </form>
            
        </div>
        </div>
    </div>

    </main>
    <?php include "footer.php"; ?>
</body>
</html>