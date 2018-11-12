# Selamat Datang di Create-txt

Aplikasi ini membutuhkan sebuah database agar dapat bekerja dengan semestinya, oleh karena itu silahkan unduh terlebih dahulu file **database(*.sql)** yang telah saya siapkan.

Silahkan klik link dibawah untuk mengunduh database.
[**Download**](https://drive.google.com/open?id=1L1-5L7r7q-LG94t9b4ryG9-MoWRekvvu)

# Deskripsi

-   Menampilkan form berisi nama, email, date of birth, no telepon, gender (male/female - default belum terpilih) dan alamat, tombol submit dan tombol reset.

-   Ketika form telah diisi dan di klik tombol reset form akan kembali kosong.

-   Ketika tombol submit di klik akan ada pengecekan di semua input tidak boleh kosong (wajib di isi).

-   Ketika submit berhasil, data akan di simpan di folder **storage**. Dengan format nama file diambil dari nama yang di input ditambahkan tanggal dan jam submit misal: andi-10112018021607.txt (nama-ddMMYYYYHHiiss.txt)

-   Data disimpan dalam bentuk comma separated value. Misal andi,[andi@email.com](mailto:andi@email.com),1994-12-10,08123456789,male,penanggungan

-   Menampilkan halaman berisikan, "terima kasih telas mengisi form" setelah submit.

-   Jika url dengan nama file text diakses maka akan muncul isi dari file txt yang telah di input sebelumnya ke masing- masing kolom input. Contoh: [http://localhost/kly/pengguna/andi-10112018021607/](http://localhost/kly/pengguna/rudi-10112018021607/)

- Jika tombol hapus ditekan, maka data pada **database** dan **file (txt)** yang tersimpan pada storage juga akan terhapus.

## Cara menggunakan

- Import file database yang telah saya sediakan diatas
- Download project ini dan ekstrak
- Jalankan "php artisan serve" pada lokasi project berada
- Akses aplikasi ini pada browser dengan mengetikkan, http://localhost:8000/pengguna/

## Herokuapp link:
http://serene-sea-99621.herokuapp.com/pengguna
