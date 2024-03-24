<?php namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books'; // ชื่อตารางในฐานข้อมูล
    protected $allowedFields = [
        'title',          // ชื่อหนังสือ
        'category',       // หมวดหมู่หนังสือ
        'author',         // ผู้เขียน
        'author_website', // เว็บไซต์ผู้เขียน
        'publisher',      // สำนักพิมพ์
        'isbn',           // ISBN ของหนังสือ
        'cover_image',    // รูปภาพปกหนังสือ
        'is_sample'       // บอกว่าเป็นหนังสือตัวอย่างหรือไม่
    ];
    // อาจเพิ่มเติมรายละเอียดเพิ่มเติมที่นี่ เช่น primaryKey, validation rules ฯลฯ
}
