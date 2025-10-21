<?php
// File: Controller/BookController.php

// Sertakan file Model dan View (pastikan path folder benar)
require_once 'Model/BookModel.php';
require_once 'View/BookView.php';

class BookController {
    
    // Method utama untuk menampilkan daftar buku
    public function index() {
        // 1. Inisiasi Model
        $model = new BookModel();
        
        // 2. Ambil data dari Model
        $bookList = $model->getAllBooks();
        
        // 3. Inisiasi View
        $view = new BookView();

        // 4. Kirim data ke View untuk ditampilkan
        $view->displayBookList($bookList);
    }
}
// Tidak ada tag penutup ?>