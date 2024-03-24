<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>หนังสือ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?= view('templates/header') ?>


    <div class="container mt-5">
        <h2 class="mb-4">เพิ่มข้อมูลหนังสือ</h2>
        <div class="alert alert-secondary" role="alert">
            <nav class="nav">
                <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
                <a class="nav-link" href="#">รายการหนังสือ</a>
                <a class="nav-link disabled" aria-disabled="true">เพิ่มข้อมูลหนังสือ</a>
            </nav>
        </div>

        <br>
        <form action="<?= site_url('books/addBook') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">ชื่อหนังสือ</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="กรอกชื่อหนังสือ">
            </div>
            <br>
            <div class="form-group mb-3">
                <label for="bookCategory">หมวดหมู่หนังสือ</label>
                <select class="form-control" id="bookCategory" name="category" required>
                    <option value="">- เลือกหมวดหมู่ -</option>
                    <option value="law_contracts_taxation">กฎหมาย, สัญญา, ภาษี</option>
                    <option value="advertising_communication">การโฆษณาและการสื่อสาร</option>
                    <option value="educational_management">การจัดการการศึกษา</option>
                    <option value="financial_investment_management">การบริหารการเงินและการลงทุน</option>
                    <option value="human_resources_management">การบริหารงานบุคคล</option>
                    <option value="medicine_medical_science_pharmacy">การแพทย์, เวชศาสตร์, เภสัชศาสตร์</option>
                    <option value="research_communication">การวิจัยกับการสื่อสาร</option>
                    <option value="sports_recreation_games">กีฬา, นันทนาการ,เกมกล</option>
                    <option value="family_relationships_psychology">ครอบครัว, ความสัมพันธ์, จิตวิทยา</option>
                    <option value="general_knowledge">ความรู้ทั่วไป</option>
                    <option value="computers">คอมพิวเตอร์</option>
                    <option value="study_guides_exam_preparation">คู่มือเรียนและเตรียมสอบ</option>
                    <option value="hobbies_crafts">งานอดิเรกและงานฝีมือ</option>
                    <option value="general_psychology">จิตวิทยาทั่วไป</option>
                    <option value="music">ดนตรี</option>
                    <option value="travel">ท่องเที่ยว</option>
                    <option value="general">ทั่วไป</option>
                    <option value="business_administration">บริหารธุรกิจ</option>
                    <option value="history_biography">ประวัติศาสตร์และชีวประวัติ</option>
                    <option value="commerce_accounting">พาณิชยศาสตร์และการบัญชี</option>
                    <option value="linguistics">ภาษาศาสตร์</option>
                    <option value="political_science">รัฐศาสตร์</option>
                    <option value="literature">วรรณกรรม</option>
                    <option value="science_technology">วิทยาการและเทคโนโลยี</option>
                    <option value="science">วิทยาศาสตร์</option>
                    <option value="religion_philosophy">ศาสนา และปรัชญา
                    <option value="art">ศิลปะ</option>
                    <option value="economics">เศรษฐศาสตร์</option>
                    <option value="architecture">สถาปัตยกรรม</option>
                    <option value="social_sciences">สังคมศาสตร์</option>
                    <option value="health_beauty">สุขภาพและความงาม</option>
                    <option value="food_beverages">อาหารและเครื่องดื่ม</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="bookAuthor">ผู้เเต่งหนังสือ</label>
                <input type="text" class="form-control" id="bookAuthor" name="author" placeholder="กรอกข้อมูลผู้เเต่งหนังสือ">
            </div>
            <div class="form-group mb-3">
                <label for="authorWebsite">เว็บไซต์ผู้เเต่งหนังสือ</label>
                <input type="url" class="form-control" id="authorWebsite" name="author_website" placeholder="กรอกข้อมูลเว็บไซต์ผู้เเต่งหนังสือ">
            </div>
            <div class="alert alert-primary" role="alert">
                การเพิ่มผู้แต่งหนังสือและเว็บไซต์ผู้แต่งหนังสือหากมีมากกว่า 1 คนให้ใช้เครื่องหมาย , คั่นระหว่างชื่อ
            </div>
            <div class="form-group mb-3">
                <label for="publisher">สำนักพิมพ์</label>
                <input type="text" class="form-control" id="publisher" name="publisher" placeholder="กรอกข้อมูลสำนักพิมพ์">
            </div>
            <div class="form-group mb-3">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="กรอกข้อมูล ISBN">
            </div>
            <!-- <div class="form-group mb-4">
                <label for="coverImage">รูปภาพหนังสือ</label>
                <input type="file" class="form-control-file" id="coverImage" name="cover_image" required>
            </div> -->
            <div class="mb-3">
                <label for="formFile" class="form-label">รูปภาพหนังสือ</label>
                <input class="form-control" type="file" id="formFile" name="cover_image"> <!-- ตรวจสอบให้แน่ใจว่ามี name="cover_image" -->
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="is_sample">
                <label class="form-check-label" for="flexCheckDefault">
                    เป็นหนังสือตัวอย่างไม่ใช่เล่มเต็ม
                </label>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        </form>
    </div>

    <br>
    <br>

    <!-- Content of your page here -->

    <?= view('templates/footer') ?>
</body>
<?php if (session()->has('error')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= session('error') ?>
    </div>
<?php endif; ?>

</html>