# Aplikasi Penggajian Dengan Laravel V.10

<!-- ### Jabatan

![preview img](/jabatan.png)

### Karyawan

![preview img](/karyawan.png)

### Input Kehadiran

![preview img](/kehadiran.png)

### Laporan Gaji

![preview img](/gaji.png)

### Slip Gaji

![preview img](/slip_gaji.png) -->

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
