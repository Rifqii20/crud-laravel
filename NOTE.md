LANGKAH-LANGKAH MEMBUAT CRUD
1. Buat database di mysql, kemudian setting .env agar terhubung dengan database
2. Buat tabel migration php artisan make:migration mahasiswa, lalu buat model php artisan make:model mahasiswa
3. Sesuaikan struktur tabel products dalam file migrations kemudian sesuaikan file model dengan struktur tabel migration 
4. Jalankan migrasi php artisan migrate
5. Buat controller dengan menjalankan php artisan make:controller MahasiswaController
6. Buat function di MahasiswaController untuk menampilkan data dengan menggunakan public function index(), lalu passing data post itu ke view index.blade.php melalui method view() sebagai parameter kedua.
7. Buat buat view di resources/views, Setelah itu kita buat file baru resources/views/posts/index.blade.php
8. Selanjutnya coba register route baru, buka file routes/web.php. Tambahkan route Route::get('/mahasiswa',[MahasiswaController::class,'index']); untuk membuka halaman data post di dalam file tersebut.
9. Buat function di MahasiswaController untuk menambahkan data dengan menggunakan public function create() dan public function store(), Lalu setelah itu membuat view baru sesuai dengan yang ada di method view(mahasiswa.create) di baris kode di atas. Buat file view baru resources/views/mahasiswa/create.blade.php
10. Buat form action mengarah ke route mahasiswa.store dengan menggunakan public function store() untuk menambahkan data, lalu tambahkan route di web.php menggunakan Route::get('/mahasiswa/create',[MahasiswaController::class,'create']); dan Route::post('/mahasiswa/store',[MahasiswaController::class,'store']);
11. Buat function di MahasiswaController untuk untuk mengedit data dengan menggunakan public function edit() dan public function update(), Lalu setelah itu membuat view baru sesuai dengan yang ada di method view(mahasiswa.edit) di baris kode di atas. Buat file view baru resources/views/mahasiswa/edit.blade.php
12. Buat form action mengarah ke route mahasiswa.edit dengan menggunakan public function update() untuk mengedit data, lalu tambahkan route di web.php menggunakan Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class,'edit']); dan Route::put('/mahasiswa/{id}',[MahasiswaController::class,'update']);
13. Buat function di MahasiswaController untuk untuk menghapus data dengan menggunakan public function destroy(), lalu lalu tambahkan route di web.php menggunakan Route::delete('/mahasiswa/{id}',[MahasiswaController::class,'destroy']);
14. Pada view index.blade.php tambahkan method(delete) untuk menghapus data

Catatan!
Kesulitan pengerjaan tugas crud ini yaitu terdapat di bagian controller karena di bagian tersebut banyak function dan perintah-perintah yang belum di mengerti sehingga sering terjadi error di bagian tersebut, terus juga dibagian view sering terjadinya error karena karena di view tersebut mengambil route dari web dan banyak perintah di view yang kurang dimengerti
karena video di tutorial youtube kurang rinci dalam menjelaskan perintah tersebut 
