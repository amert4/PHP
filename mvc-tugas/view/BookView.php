<?php
// File: View/BookView.php

class BookView {
    public function displayBookList($books) {
        // Mulai output HTML
        echo "
        <!DOCTYPE html>
        <html lang='id'>
        <head>
            <meta charset='UTF-8'>
            <title>Daftar Buku Perpustakaan</title>
            <style>
                body { font-family: sans-serif; margin: 20px; }
                table { width: 80%; border-collapse: collapse; margin-top: 20px; }
                th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
                th { background-color: #f2f2f2; }
            </style>
        </head>
        <body>
            <h2>Daftar Koleksi Buku Sederhana</h2>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
        ";

        // Looping (Perulangan) untuk menampilkan data
        foreach ($books as $book) {
            echo "
                <tr>
                    <td>{$book['title']}</td>
                    <td>{$book['author']}</td>
                    <td>{$book['year']}</td>
                </tr>
            ";
        }

        // Akhir output HTML
        echo "
                </tbody>
            </table>
        </body>
        </html>
        ";
    }
}

?>