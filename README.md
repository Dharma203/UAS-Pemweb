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

#### 2.2.1 Membuat Objek PHP dengan Minimal Dua Metode

## Bagian 3: Database Management

### 3.1 Pembuatan Tabel Database

Pada bagian ini, kita membuat tabel users di database untuk menyimpan data pengguna. Tabel ini mencakup kolom untuk ID, nama, email, password, dan peran pengguna.

### 3.2 Konfigurasi Koneksi Database

Koneksi database dilakukan dengan menggunakan file PHP yang menyertakan konfigurasi untuk menghubungkan aplikasi dengan database MySQL.

### 3.3 Manipulasi Data pada Database

Data pengguna dimasukkan ke dalam tabel menggunakan query SQL

## Bagian 4: State Management

### 4.1 State Management dengan Session

State management digunakan untuk melacak status pengguna di aplikasi. Salah satu cara untuk mengelola state adalah dengan menggunakan sesi (session_start()), yang memungkinkan kita untuk menyimpan informasi pengguna selama sesi mereka berlangsung.

#### 4.1.1 Memulai Session

Session dimulai dengan menggunakan fungsi session_start(). Informasi pengguna kemudian disimpan dalam session.

#### 4.1.2 Menyimpan Informasi Pengguna ke dalam Session

Informasi seperti nama pengguna dan peran disimpan dalam session untuk dapat digunakan di seluruh aplikasi.

### 4.2 Pengelolaan State dengan Cookie dan Browser Storage

Cookies dan browser storage digunakan untuk menyimpan data secara lokal di sisi klien.

#### 4.2.1 Menetapkan, Mendapatkan, dan Menghapus Cookie

Untuk menetapkan cookie, kita menggunakan fungsi setcookie()

#### 4.2.2 Menggunakan Browser Storage

Browser storage (localStorage) dapat digunakan untuk menyimpan informasi di sisi klien

# Kesimpulan

Proyek ini mencakup berbagai aspek dalam pengembangan web modern, mulai dari manipulasi DOM menggunakan JavaScript hingga pengelolaan data di server menggunakan PHP dan MySQL. Dengan implementasi state management melalui session, cookie, dan browser storage, aplikasi ini dapat memberikan pengalaman pengguna yang lebih dinamis dan responsif.
