<?php
    session_start();
        if (isset($_POST['logout'])) {
        // Unset and destroy the session
        session_unset();
        session_destroy();
        // Redirect to the login page or another page
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="p-4 mb-4 border-bottom"></header>
    
    <main class="form-signin w-100 m-auto">

      <form action="" method="POST">
        <h1 class="h3 mb-3 fw-normal" style="text-align: center;">แบบฟอร์มสมัครงาน</h1>
    
        <label for="Username" class="row m-2">Username</label>
        <div class="form-floating">
                <label for="fname"><?php echo $_SESSION['Username']; ?></label>
                <input type="text" class="form-control" placeholder="<?php echo $_SESSION['Username']; ?>" name="username" disabled>
              </div>
        </div>

        <div>
            <label class="row m-2">คำนำหน้า</label>

            <div class="row m-0">
                <select class="form-select" name="gender" id="gender" disabled>
                    <option value=""><?php echo $_SESSION['gender']; ?></option>
                </select>
            </div>

            <label for="" class="row m-2">ชื่อ</label>
            <div class="form-floating">
                <input type="text" class="form-control" placeholder="" name="fname" disabled>
                <label for="fname"><?php echo $_SESSION['fname']; ?></label>
              </div>
              <label for="" class="row m-2">นามสกุล</label>
              <div class="form-floating">
                <input type="text" class="form-control" placeholder="" name="lname" disabled>
                <label for="lname"><?php echo $_SESSION['lname']; ?></label>
              </div>
              <label for="" class="row m-2">ชื่อเล่น</label>
              <div class="form-floating">
                <input type="text" class="form-control" placeholder="" name="nName" disabled>
                <label for="nName"><?php echo $_SESSION['nName']; ?></label>
              </div>
        </div>

        <div>
          <label for="age" class="row m-2">วัน-เดือน-ปี เกิด</label>
          <input disabled type="date"  class="form-control"  name="age" value="<?php echo $_SESSION['age']; ?>">
        </div>

        <div>
            <label for="address" class="row m-2">ที่อยู่</label>
            <textarea name="address" id="" cols="39" rows="2" class="form-control" placeholder="<?php echo $_SESSION['address']; ?>" disabled></textarea>
        </div>
        
        <div>
            <label for="zipCode" class="row m-2">ที่อยู่ไปรษณีย์</label>
            <div class="form-floating">
              <input type="text" class="form-control" placeholder="" name="zipCode" disabled>
              <label for="zipCode"><?php echo $_SESSION['zipCode']; ?></label>
            </div>
        </div>

        <label for="status" class="row m-2">สถานะ : <?php echo $_SESSION['status']; ?></label>

        <div>
            <label for="mail" class="row m-2">Email</label>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="" name="email" disabled>
                <label for="floatingInput"><?php echo $_SESSION['email']; ?></label>
              </div>
        </div>

        <label for="tel" class="row m-2">เบอร์โทรศัพท์</label>
        <div class="col">         
          <div class="form-floating">
            <input type="tel" class="form-control" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="" disabled>
            <label for="tel"><?php echo $_SESSION['tel']; ?></label>
          </div>
        </div>

        <label for="army" class="row m-2">สถานะทางการทหาร</label>
        <div class="row m-0">
          <select class="form-select" name="army" id="army" disabled >
            <option value="ได้รับการยกเว้น"><?php echo $_SESSION['army']; ?></option>
          </select>
        </div>

        <label for="study" class="row m-2">วุฒิการศึกษา</label>
        <div class="row m-0">
          <select class="form-select" name="study" id="study" disabled>
            <option value="มัธยม"><?php echo $_SESSION['study']; ?></option>
          </select>
        </div>

        <label for="job" class="row m-2">สมัครงานในตำแหน่ง</label>
        <div class="row m-0">
          <select class="form-select" name="jobPosition" id="jobPosition" disabled>
            <option value="javascript"><?php echo $_SESSION['jobPosition']; ?></option>
          </select>
        </div>

        

        <div class="row m-0">
          <label for="points" class="row m-2">ระดับความชำนาญในตำแหน่งที่สมัคร</label>
          <input disabled type="range" min="0" max="10" value="<?php echo $_SESSION['point']; ?>" name="point" oninput="rangeValue.innerText = this.value">
          <p id="rangeValue" style="text-align: center;"><?php echo $_SESSION['point']; ?></p>
        </div> 



        <label for="coin" class="row m-2">เงินเดือนที่อยากได้รับ</label>
        <div class="col">
          <div class="form-floating">
            <input type="number" class="form-control" placeholder="" name="coin" min="0" disabled>
            <label for="coin"><?php echo $_SESSION['coin']; ?></label>
          </div>
        </div>

        <br>
        <input type="submit" class="btn btn-danger" name="logout" value="logout">
</body>

</html>