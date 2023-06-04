# Aplikasi Penggajian Dengan Laravel V.10

### Login

![preview img](/login.jpeg)

### Beranda

![preview img](/beranda.jpeg)

### Jabatan

![preview img](/jabatan.jpeg)

### Karyawan

![preview img](/karyawan.jpeg)

### Input Kehadiran

![preview img](/input_absen.jpeg)

### Data Kehadiran

![preview img](/data_absen.jpeg)

### Potongan Gaji

![preview img](/potongan_gaji.jpeg)

### Data Gaji Pegawai

![preview img](/daftar_gaji.jpeg)

### Cetak Laporan Gaji

![preview img](/cetak_daftar_gaji_pegawai.jpeg)

### Cetak Slip Gaji

![preview img](/cetak_slip_gaji_pegawai.jpeg)

### Download Project

```bash
  git clone https://github.com/Rahidoct/sistem_penggajian.git nama_project
```

```bash
  cd nama_project
```

-  Copy .env.example menjadi .env edit konfigurasi dibagian database lalu ganti nama database "laravel" menjadi "penggajian"

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

### Login

-   email = admin@admin.com
-   password = 123
