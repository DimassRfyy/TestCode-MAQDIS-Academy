# Maqdis-Test

Project Technical Test Backend Developer - Muhammad Dimas Rafi.

## Daftar Isi

- [Struktur Folder](#struktur-folder)
- [Penjelasan Tugas](#penjelasan-tugas)
- [Panduan Menjalankan Aplikasi](#panduan-menjalankan-aplikasi)
- [Panduan API](#panduan-api)
- [Menjalankan Script Tugas](#menjalankan-script-tugas)

---

## Struktur Folder

```
Maqdis-Test/
├── index.js                # Aplikasi backend Express.js
├── package.json            # Konfigurasi npm & dependensi
├── Tugas 2/                # Tugas tentang variabel & tipe data
│   ├── type.js
│   └── type.php
├── Tugas 3/                # Tugas tentang conditional
│   ├── conditional.js
│   └── conditional.php
├── Tugas 4/                # Tugas tentang looping
│   ├── looping.js
│   └── looping.php
```

## Penjelasan Tugas

- **Tugas 2**: Membuat kalimat dari beberapa variabel (JS & PHP)
- **Tugas 3**: Program conditional (role game Werewolf, JS & PHP)
- **Tugas 4**: Program looping (JS & PHP)

## Panduan Menjalankan Aplikasi

1. **Install dependensi**
   ```bash
   npm install
   ```
2. **Jalankan server**
   ```bash
   node index.js
   ```
   Server akan berjalan di `http://localhost:3000`

## Panduan API

Berikut adalah endpoint yang tersedia:

### 1. GET `/hello`

- **Deskripsi**: Menampilkan pesan selamat datang.
- **Response**:
  ```json
  {
    "status": "success",
    "message": "welcome to Maqdis Academy"
  }
  ```

### 2. POST `/data`

- **Deskripsi**: Mengirim data dan mendapatkan respons status.
- **Body**:
  ```json
  { "data": "isi data" }
  ```
- **Response**:
  - Jika data kosong:
    ```json
    { "status": "data tidak boleh kosong" }
    ```
  - Jika data terisi:
    ```json
    { "data": "isi data", "status": "berhasil" }
    ```

### 3. POST `/hapus`

- **Deskripsi**: Menghapus data (dummy endpoint).
- **Response**:
  ```json
  { "data": 0, "status": "berhasil hapus" }
  ```

### 4. GET `/hapusdata`

- **Deskripsi**: Mendapatkan data penghapusan (dummy endpoint).
- **Response**:
  ```json
  {
    "message": "berhasil",
    "id_setoran": 58,
    "id_user": 3441,
    "id_juz": 30
  }
  ```

## Menjalankan Script Tugas

### JavaScript

Jalankan dengan Node.js, contoh:

```bash
node Tugas\ 2/type.js
node Tugas\ 3/conditional.js
node Tugas\ 4/looping.js
```

### PHP

Jalankan dengan CLI PHP, contoh:

```bash
php "Tugas 2/type.php"
php "Tugas 3/conditional.php"
php "Tugas 4/looping.php"
```

---
