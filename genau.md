🎯 ROLE



Anda adalah seorang Senior Fullstack Web Developer dengan pengalaman 20 tahun, ahli dalam:



Laravel 

Clean Architecture

MVC Pattern

REST API

UI/UX modern (responsive & lightweight)

Integrasi API (YouTube, dll)



Bangun sistem dengan standar industri (clean code, scalable, secure).



📌 TUJUAN PROJECT



Membangun website Pembelajaran Simulasi Jaringan berbasis web untuk siswa SMK, dengan fitur:



Manajemen user (Admin & Siswa)

Artikel & Modul pembelajaran

Integrasi media belajar (YouTube)

UI modern, ringan, dan responsif

⚙️ SPESIFIKASI TEKNOLOGI

Framework: Laravel 8.2

Database: MySQL

Frontend: Blade + TailwindCSS / Bootstrap 5

Authentication: Laravel Auth / Breeze

Role Permission: Spatie Laravel Permission

API Integration: YouTube Embed

🧩 TAHAP 1: SETUP PROJECT

Instruksi:

Install Laravel 

Setup database

Install authentication (Laravel Breeze)

Konfigurasi environment (.env)

Jalankan migration

Output yang diharapkan:

Struktur project siap digunakan

Auth login & register berjalan

🧩 TAHAP 2: MANAJEMEN USER (ROLE PERMISSION)

Fitur:

Role:

Admin

Siswa

Hak akses:

Admin: full akses

Siswa: hanya melihat konten

Instruksi:

Install Spatie Permission

Buat role & permission

Middleware proteksi route

CRUD user oleh admin

Output:

Admin dapat mengelola user

Role berjalan dengan benar

🧩 TAHAP 3: DASHBOARD ADMIN

Fitur:

Statistik:

Jumlah user

Jumlah artikel

Jumlah modul

Navigasi cepat

Instruksi:

Buat controller DashboardController

Ambil data statistik

Tampilkan dengan UI modern (card system)

Output:

Dashboard informatif & clean

🧩 TAHAP 4: POST (ARTIKEL & MODUL)

Fitur:

CRUD Artikel

CRUD Modul Pembelajaran

Kategori (optional)

Upload gambar

Struktur tabel:

posts

id

title

content

type (artikel/modul)

thumbnail

user_id

Instruksi:

Buat migration & model

Buat controller resource

Buat halaman admin CRUD

Gunakan editor (textarea / WYSIWYG)

Output:

Artikel & modul bisa dikelola

🧩 TAHAP 5: MEDIA BELAJAR (YOUTUBE INTEGRATION)

Fitur:

Input link YouTube

Embed video

Kategori video

Struktur tabel:

media

id

title

youtube_url

description

Instruksi:

Parsing URL YouTube → embed

Tampilkan video di frontend

Buat halaman khusus tutorial

Output:

Video pembelajaran tampil rapi

🎨 TAHAP 6: FRONTEND UI

Menu Navigasi:

Beranda

Artikel

E-book

Tutorial

Tentang

Standar UI:

Responsive (mobile-first)

Cepat & ringan

Minimalist modern

Gunakan:

TailwindCSS / Bootstrap 5

Template clean (AdminLTE opsional untuk backend)

Halaman:



1. Beranda

   Hero section

   Highlight konten terbaru

2. Artikel

   List + detail

3. E-book

   Modul pembelajaran

4. Tutorial

   Video YouTube

5. Tentang

   Profil website

   🔐 KEAMANAN

   CSRF Protection

   Validation semua input

   Role-based access

   Sanitasi data

   ⚡ OPTIMASI

   Lazy loading gambar

   Pagination

   Cache query (optional)

   📁 STRUKTUR FOLDER (BEST PRACTICE)

   app/

   resources/views/

   routes/web.php

   public/assets/

   🎯 OUTPUT AKHIR



Website memiliki:

✅ Backend admin lengkap

✅ Manajemen user

✅ Artikel & modul

✅ Video pembelajaran

✅ Frontend modern & responsive

✅ siap deploye ke vercel

✅ menggunakan blade dengan tailwindcss

✅ menggunakan laravel version 



🧠 CATATAN TAMBAHAN

Gunakan clean code

Pisahkan logic dengan baik (Controller vs Model)

Gunakan naming convention Laravel

Siapkan untuk scaling ke API/mobile di masa depan

🚀 PERINTAH AKHIR UNTUK AI / DEVELOPER



"Buatkan project Laravel lengkap sesuai spesifikasi di atas secara bertahap, mulai dari setup hingga deployment, sertakan kode, struktur folder, dan penjelasan setiap langkah secara detail seperti mentor profesional."