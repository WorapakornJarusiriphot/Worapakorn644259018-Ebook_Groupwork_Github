<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;

class Books extends BaseController
{
    public function index()
    {
        return view('add_book');
    }

    public function addBook()
    {
        $model = new BookModel();
    
        $title = $this->request->getVar('title');
        if (empty($title)) {
            // ถ้าไม่มีชื่อหนังสือ จะส่งข้อความข้อผิดพลาดกลับไปยังหน้าฟอร์ม
            return redirect()->back()->with('error', 'Title is required.');
        }

        $coverImage = $this->request->getFile('cover_image');
        $coverImageName = '';
        // ตรวจสอบก่อนว่า $coverImage ไม่เป็น null และมีไฟล์ถูกส่งมาจริง
        if ($coverImage && $coverImage->isValid() && !$coverImage->hasMoved()) {
            $coverImageName = $coverImage->getRandomName();
            $coverImage->move('uploads', $coverImageName);
        } else {
            // ตั้งค่า default หรือแจ้งเตือน error
            $coverImageName = ''; // สามารถตั้งค่ารูปภาพ default หากไม่มีการอัพโหลดรูป
            // หรือใช้ `return redirect()->back()->with('error', 'Invalid cover image.');` เพื่อส่งคืนข้อความ error
        }

        // ตัวแปรที่เก็บค่าจากฟอร์ม
        $data = [
            'title' => $title,
            'category' => $this->request->getVar('category'),
            'isbn' => $this->request->getVar('isbn'),
            'author' => $this->request->getVar('author'),
            'author_website' => $this->request->getVar('author_website'),
            'publisher' => $this->request->getVar('publisher'),
            'cover_image' => $coverImageName,
            'is_sample' => $this->request->getVar('is_sample') ? 1 : 0,
        ];

        if (!$model->save($data)) {
            return redirect()->back()->with('errors', $model->errors());
        }

        return redirect()->to('/books/list')->with('message', 'Book added successfully.');
    }

    public function listBooks()
    {
        $model = new BookModel();
        $data['books'] = $model->findAll();

        return view('list_books', $data);
    }

    public function viewBook($id)
    {
        $model = new BookModel();
        $book = $model->find($id);

        if ($book) {
            $filePath = 'uploads/' . $book['cover_image']; // ปรับให้ใช้ 'cover_image' แทน 'book_file'
            if (file_exists($filePath)) {
                return $this->response->download($filePath, null);
            } else {
                return redirect()->to('/books/listBooks')->with('error', 'File not found.');
            }
        } else {
            return redirect()->to('/books/listBooks')->with('error', 'Book not found.');
        }
    }
}
