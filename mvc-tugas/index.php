<?php
// File: index.php (Diperbarui/Entry Point)

// Sertakan file Controller yang baru
require_once "Controller/BookController.php";

// Buat instance Controller
$controller = new BookController();

// Jalankan method yang memproses permintaan (menampilkan daftar buku)
$controller->index();
// Tidak ada tag penutup ?>