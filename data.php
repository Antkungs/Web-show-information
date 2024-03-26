<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="p-4 mb-4 border-bottom"></header>
    
    <main class="form-signin w-100 m-auto">

      <form action="session.php" id="ant" method="post" name="demo-form">
        <h1 class="h3 mb-3 fw-normal" style="text-align: center;">แบบฟอร์มสมัครงาน</h1>
    

        <div>
            <label class="row m-2">Register</label>
        </div>
        <div class="form-floating">
                <input type="text" class="form-control" placeholder="Username..." name="Username">
                <label for="Username">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" placeholder="Username..." name="Password">
                <label for="Password">Password</label>
              </div>
        </div>

        <div>
            <label class="row m-2">ชื่อ-นามสกุล</label>

            <div class="row m-0">
                <select class="form-select" name="gender" id="gender">
                  <option value="นาย">นาย</option>
                  <option value="นาง">นาง</option>
                  <option value="นางสาว">นางสาว</option>
                </select>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" placeholder="ชื่อ..." name="fname">
                <label for="fname">ชื่อ</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" placeholder="นามสกุล..." name="lname">
                <label for="lname">นามสกุล</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" placeholder="ชื่อเล่น..." name="nName">
                <label for="nName">ชื่อเล่น</label>
              </div>
        </div>

        <div>
          <label for="age" class="row m-2">วัน-เดือน-ปี เกิด</label>
          <input type="date"  class="form-control"  name="age" value="">
        </div>

        <div>
            <label for="address" class="row m-2">ที่อยู่</label>
            <textarea name="address" id="" cols="39" rows="2" class="form-control" placeholder="address"></textarea>
        </div>
        
        <div>
            <label for="zipCode" class="row m-2">ที่อยู่ไปรษณีย์</label>
            <div class="form-floating">
              <input type="text" class="form-control" placeholder="ที่อยู่ไปรษณีย์..." name="zipCode">
              <label for="zipCode">ที่อยู่ไปรษณีย์</label>
            </div>
        </div>

        <label for="status" class="row m-2">สถานะ</label>
        <div>
            <input class="form-check-input" type="radio"  name="status" id="s" value="โสด">
            <label for="s">โสด</label>
            <input class="form-check-input" type="radio"  name="status" id="m" value="สมรส">
            <label for="m">สมรส</label>
            <input class="form-check-input" type="radio"  name="status" id="d" value="อย่าร้าง">
            <label for="d">อย่าร้าง</label>
        </div>

        <div>
            <label for="mail" class="row m-2">Email</label>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email</label>
              </div>
        </div>

        <label for="tel" class="row m-2">เบอร์โทรศัพท์</label>
        <div class="col">         
          <div class="form-floating">
            <input type="tel" class="form-control" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="เบอร์โทรศัพท์">
            <label for="tel">เบอร์โทรศัพท์</label>
          </div>
        </div>

        <label for="army" class="row m-2">สถานะทางการทหาร</label>
        <div class="row m-0">
          <select class="form-select" name="army" id="army" >
            <option value="ได้รับการยกเว้น">ได้รับการยกเว้น</option>
            <option value="ปลดเป็นกองหนุน">ปลดเป็นกองหนุน</option>
            <option value="ยังไม่ได้รับการเกณฑ์" >ยังไม่ได้รับการเกณฑ์</option>
          </select>
        </div>

        <label for="study" class="row m-2">วุฒิการศึกษา</label>
        <div class="row m-0">
          <select class="form-select" name="study" id="study" >
            <option value="มัธยม">มัธยม</option>
            <option value="มหาลัยวิทยาลัย">มหาลัยวิทยาลัย</option>
          </select>
        </div>

        <label for="job" class="row m-2">สมัครงานในตำแหน่ง</label>
        <div class="row m-0">
          <select class="form-select" name="jobPosition" id="jobPosition" >
            <option value="javascript">JavaScript</option>
            <option value="python">Python</option>
            <option value="c++" >C++</option>
            <option value="java" >Java</option>
          </select>
        </div>

        

        <div class="row m-0">
          <label for="points" class="row m-2">ระดับความชำนาญในตำแหน่งที่สมัคร</label>
          <input type="range" min="0" max="10" value="1" name="point" oninput="rangeValue.innerText = this.value">
          <p id="rangeValue" style="text-align: center;">0</p>
        </div> 



        <label for="coin" class="row m-2">เงินเดือนที่อยากได้รับ</label>
        <div class="col">
          <div class="form-floating">
            <input type="number" class="form-control" placeholder="เงินเดือนที่อยากได้รับ..." name="coin" min="0">
            <label for="coin">เงินเดือนที่อยากได้รับ</label>
          </div>
        </div>





        <br>
        <div class="col">
            <input type="reset" class="btn btn-danger">
            <input type="submit" class="btn btn-primary" name="submitCheck">
        </div>

      </form>
      
    </main>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
      </footer>
    </div>

</html>