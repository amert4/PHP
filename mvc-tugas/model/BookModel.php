<?php
// File: Model/BookModel.php

class BookModel {
    private $books = [
        ['title' => 'Filosofi Teras', 'author' => 'Henry Manampiring', 'year' => 2018],
        ['title' => 'Sebuah Seni Untuk Bersikap Bodo Amat', 'author' => 'Mark Manson', 'year' => 2016],
        ['title' => 'Cantik Itu Luka', 'author' => 'Eka Kurniawan', 'year' => 2002],
        ['title' => 'Atomic Habits', 'author' => 'James Clear', 'year' => 2018],
    ];

    // Fungsi untuk mengambil semua data buku
    public function getAllBooks() {
        return $this->books;
    }
}

?>