<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>หนังสือ</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet"> -->
</head>

<body>
    <?= view('templates/header') ?>


    <div class="container mt-5">
        <h2 class="mb-4">เพิ่มข้อมูลหนังสือ</h2>
        <div class="alert alert-secondary" role="alert">
        <nav class="nav">
            <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a> <a>/</a>
            <a class="nav-link" href="#">รายการหนังสือ</a> <a>/</a>
            <a class="nav-link disabled" aria-disabled="true">เพิ่มข้อมูลหนังสือ</a>
        </nav>
        </div>
        <br>
        <form action="/path-to-your-form-handler" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="bookTitle">ชื่อหนังสือ</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูลชื่อหนังสือ">
            </div>
            <div class="form-group mb-3">
                <label for="bookCategory">หมวดหมู่หนังสือ</label>
                <select class="form-control" id="bookCategory" name="category" required>
                    <option value="">- เลือกหมวดหมู่ -</option>
                    <option value="Software">Software</option>
                    <!-- Add more options here -->
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="bookAuthor">ผู้เเต่งหนังสือ</label>
                <input type="text" class="form-control" id="bookAuthor" name="author" required>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกข้อมูลชื่อหนังสือ">
            </div>
            <div class="form-group mb-3">
                <label for="authorWebsite">เว็บไซต์ผู้เเต่งหนังสือ</label>
                <input type="url" class="form-control" id="authorWebsite" name="author_website" required>
            </div>
            <div class="alert alert-primary" role="alert">
            การเพิ่มผู้แต่งหนังสือและเว็บไซต์ผู้แต่งหนังสือหากมีมากกว่า 1 คนให้ใช้เครื่องหมาย , คั่นระหว่างชื่อ 
            </div>
            <div class="form-group mb-3">
                <label for="publisher">สำนักพิมพ์</label>
                <input type="text" class="form-control" id="publisher" name="publisher" required>
            </div>
            <div class="form-group mb-3">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>
            <div class="form-group mb-4">
                <label for="coverImage">รูปภาพหนังสือ</label>
                <input type="file" class="form-control-file" id="coverImage" name="cover_image" required>
            </div>
            <button type="submit" class="btn btn-primary">เพิ่มข้อมูลหนังสือ</button>
        </form>
    </div>

    <br>
    <br>

    <!-- Content of your page here -->

    <?= view('templates/footer') ?>
</body>

</html>