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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <?= view('templates/header') ?>


    <section class="flex flex-col pb-20 bg-white">
  <header class="flex gap-5 py-7 pr-20 w-full text-2xl bg-blue-400 text-black text-opacity-30 max-md:flex-wrap max-md:pr-5 max-md:max-w-full">
    <h1 class="text-3xl text-white">NPRU E-BOOK</h1>
    <nav class="flex gap-1.5 self-start whitespace-nowrap">
      <span class="grow">หนังสือ</span>
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ec144c5656dbb86d624dc985621827c71a0be9f8325f45b568303f1ebac6f7de?apiKey=0aa496f8086b4cc2a69fbe182a1c75eb&" alt="" class="shrink-0 self-start mt-2.5 w-4 aspect-[1.79]" />
    </nav>
    <nav class="flex gap-2 whitespace-nowrap">
      <span class="grow">ผลงานต่อสัญญาจ้าง</span>
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ec144c5656dbb86d624dc985621827c71a0be9f8325f45b568303f1ebac6f7de?apiKey=0aa496f8086b4cc2a69fbe182a1c75eb&" alt="" class="shrink-0 my-auto w-4 aspect-[1.79]" />
    </nav>
  </header>
  <main class="flex flex-col items-center px-16 mt-11 w-full text-3xl text-black max-md:px-5 max-md:mt-10 max-md:max-w-full">
    <h2 class="self-stretch font-bold max-md:max-w-full">เพิ่มข้อมูลหนังสือ</h2>
    <nav class="justify-center items-start self-end px-6 py-6 mt-9 max-w-full text-white bg-zinc-300 w-[1400px] max-md:px-5 max-md:max-w-full">
      <a href="#" class="text-indigo-400">หน้าหลัก</a> /
      <a href="#" class="text-indigo-400">รายการหนังสือ</a> /
      <span class="text-white">เพิ่มข้อมูลหนังสือ</span>
    </nav>
    <label for="category" class="self-start mt-20 ml-80 max-md:mt-10 max-md:ml-2.5">หมวดหมู่หนังสือ</label>
    <div class="flex flex-col justify-center mt-8 max-w-full text-2xl border border-black border-solid text-neutral-300 w-[769px]">
      <div class="flex gap-5 pt-1 pb-3 max-md:flex-wrap max-md:max-w-full">
        <select id="category" class="flex-auto">
          <option>-เลือกเมนูหมวดหมู่</option>
        </select>
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/fa5f4074154ff55a648716b2ffe1f0be35bd623b016d3a067c3fbd8d0c3eac35?apiKey=0aa496f8086b4cc2a69fbe182a1c75eb&" alt="" class="shrink-0 self-start mt-3.5 aspect-[1.49] fill-black w-[21px]" />
      </div>
    </div>
    <label for="bookName" class="self-start mt-9 ml-80 max-md:ml-2.5">ชื่อหนังสือ</label>
    <div class="flex flex-col justify-center mt-9 max-w-full text-2xl border border-black border-solid text-neutral-300 w-[769px]">
      <div class="flex gap-5 pb-3 max-md:flex-wrap max-md:max-w-full">
        <input type="text" id="bookName" placeholder="กรอกข้อมูลชื่อหนังสือ" class="flex-auto" />
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bd45fbf5788c21794b8665ff927e4a21c381462ad1d60acf594d55c7e9912390?apiKey=0aa496f8086b4cc2a69fbe182a1c75eb&" alt="" class="shrink-0 my-auto aspect-[1.92] fill-black w-[21px]" />
      </div>
    </div>
    <label for="author" class="self-start mt-11 ml-80 max-md:mt-10 max-md:ml-2.5">ผู้เเต่งหนังสือ</label>
    <div class="flex flex-col justify-center mt-8 max-w-full text-2xl border border-black border-solid text-neutral-300 w-[769px]">
      <div class="flex gap-5 pt-1 pb-3 max-md:flex-wrap max-md:max-w-full">
        <input type="text" id="author" placeholder="กรอกข้อมูลผู้เเต่งหนังสือ" class="flex-auto" />
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bd45fbf5788c21794b8665ff927e4a21c381462ad1d60acf594d55c7e9912390?apiKey=0aa496f8086b4cc2a69fbe182a1c75eb&" alt="" class="shrink-0 my-auto aspect-[1.92] fill-black w-[21px]" />
      </div>
    </div>
    <label for="authorWebsite" class="self-start mt-9 ml-80 max-md:ml-2.5">เว็บไซต์ผู้เเต่งหนังสือ</label>
    <div class="flex flex-col justify-center mt-16 max-w-full text-2xl border border-black border-solid text-neutral-300 w-[769px] max-md:mt-10">
      <div class="flex gap-5 pt-1 pb-3 max-md:flex-wrap max-md:max-w-full">
        <input type="url" id="authorWebsite" placeholder="กรอกข้อมูลเว็บไซต์ผู้เเต่งหนังสือ" class="flex-auto" />
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bd45fbf5788c21794b8665ff927e4a21c381462ad1d60acf594d55c7e9912390?apiKey=0aa496f8086b4cc2a69fbe182a1c75eb&" alt="" class="shrink-0 my-auto aspect-[1.92] fill-black w-[21px]" />
      </div>
    </div>
    <p class="justify-center py-5 pr-20 pl-12 mt-14 max-w-full text-2xl bg-indigo-300 w-[772px] max-md:pr-8 max-md:pl-5 max-md:mt-10 max-md:max-w-full">
      การเพิ่มผู้เเต่งหนังสือและเว็บไซต์ผู้เเต่งหนังสือหากมีมากกว่า1คนให้ใช้เครื่องหมาย , คั่นระหว่างชื่อ
    </p>
    <label for="publisher" class="self-start mt-9 ml-80 max-md:ml-2.5">สำนักพิมพ์</label>
    <div class="flex flex-col justify-center mt-12 max-w-full text-2xl border border-black border-solid text-neutral-300 w-[769px] max-md:mt-10">
      <div class="flex gap-5 pt-1 pb-3 max-md:flex-wrap max-md:max-w-full">
        <input type="text" id="publisher" placeholder="กรอกข้อมูลสำนักพิมพ์" class="flex-auto" />
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2d0ce6b7e4d96e9ccf73190d355c7b338e659bc39f3163f67d0d373ea8d5073?apiKey=0aa496f8086b4cc2a69fbe182a1c75eb&" alt="" class="shrink-0 my-auto aspect-[1.92] fill-black w-[21px]" />
      </div>
    </div>
    <label for="isbn" class="self-start mt-16 ml-80 max-md:mt-10 max-md:ml-2.5">ISBN</label>
    <div class="flex flex-col justify-center mt-16 max-w-full text-2xl border border-black border-solid text-neutral-300 w-[769px] max-md:mt-10">
      <div class="flex gap-5 pt-1 pb-3 max-md:flex-wrap max-md:max-w-full">
        <input type="text" id="isbn" placeholder="กรอกข้อมูล ISBN" class="flex-auto" />
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bd45fbf5788c21794b8665ff927e4a21c381462ad1d60acf594d55c7e9912390?apiKey=0aa496f8086b4cc2a69fbe182a1c75eb&" alt="" class="shrink-0 my-auto aspect-[1.92] fill-black w-[21px]" />
      </div>
    </div>
    <label for="bookImage" class="self-start mt-20 ml-80 max-md:mt-10 max-md:ml-2.5">รูปภาพหนังสือ</label>
    <div class="flex flex-col justify-center items-end px-16 py-0.5 mt-14 max-w-full text-white bg-zinc-300 w-[768px] max-md:pl-5 max-md:mt-10">
      <label for="bookImage" class="justify-center p-6 bg-neutral-500 max-md:pr-5">
        Choose file
        <input type="file" id="bookImage" class="sr-only" />
      </label>
    </div>
    <div class="flex gap-5 mt-20 whitespace-nowrap max-md:mt-10">
      <input type="checkbox" id="sampleBook" class="shrink-0 self-start mt-1.5 bg-white border border-black border-solid h-[18px] w-[21px]" />
      <label for="sampleBook" class="flex-auto">เป็นหนังสือตัวอย่างไม่ใช่เล่มเต็ม</label>
    </div>
    <button type="submit" class="justify-center items-center py-3 pr-16 pl-20 mt-16 max-w-full whitespace-nowrap bg-indigo-400 w-[763px] max-md:px-5 max-md:mt-10">
      บันทึกข้อมูล
    </button>
  </main>
</section>
    <br>
    <br>

    <!-- Content of your page here -->

    <?= view('templates/footer') ?>
</body>

</html>