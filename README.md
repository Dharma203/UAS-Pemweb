# UAS-Pemweb

## Bagian 1: Client-side Programming

### 1.1 Manipulasi DOM dengan JavaScript

Pada bagian pertama, kita fokus pada manipulasi DOM menggunakan JavaScript. Di sini, kita membuat sebuah form input yang memiliki berbagai elemen, seperti `text`, `email`, `password`, `radio`, dan `checkbox`. Form ini berfungsi untuk menerima input dari pengguna.

#### 1.1.1 Form Input dengan 4 Elemen

Form yang dibuat terdiri dari empat elemen input, yaitu:

- Input teks untuk nama.
- Input email untuk alamat email.
- Input password untuk kata sandi.
- Dua input radio untuk memilih jenis kelamin.
- Checkbox untuk persetujuan pengguna terkait penggunaan cookie.

#### 1.1.2 Tampilkan Data dari Server ke dalam Tabel HTML

Setelah data form divalidasi, data tersebut akan ditampilkan dalam sebuah tabel HTML.

### 1.2 Event Handling

Event handling pada JavaScript memungkinkan kita untuk menangani berbagai aksi pengguna, seperti submit form, reset form, dan validasi input.

#### 1.2.1 Menambahkan Event untuk Meng-handle Form

Kita menambahkan event handler untuk menangani submit dan reset pada form.

#### 1.2.2 Validasi Input Sebelum Diproses oleh PHP

Validasi input dilakukan di sisi client untuk memastikan bahwa data yang dikirimkan ke server sudah benar. Fungsi validasi ini akan memeriksa apakah semua field telah diisi dengan benar.

## Bagian 2: Server-side Programming

### 2.1 Pengelolaan Data dengan PHP

Bagian kedua dari proyek ini mencakup pengelolaan data di sisi server dengan PHP. Pengguna akan mengirimkan data dari form melalui metode POST, dan data tersebut akan diproses di sisi server. Setelah itu, data disimpan ke dalam basis data.

#### 2.1.1 Penggunaan Metode POST atau GET

Formulir menggunakan metode POST untuk mengirimkan data ke server.

#### 2.1.2 Parsing dan Validasi Data di Server

Di sisi server, kita melakukan parsing data yang diterima dan memvalidasi data tersebut, seperti memastikan bahwa data email dan password sesuai dengan yang diharapkan.

#### 2.1.3 Menyimpan Data ke Basis Data

Setelah data divalidasi, kita menyimpannya ke dalam database bersama dengan informasi tentang alamat IP pengguna dan jenis browser yang digunakan.

### 2.2 Objek PHP Berbasis OOP

Untuk meningkatkan struktur kode, kita menggunakan Pemrograman Berorientasi Objek (OOP) dalam PHP.
