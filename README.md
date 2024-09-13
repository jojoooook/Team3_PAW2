# Project Team3 PAW2
Project ini adalah project simulasi penggunaan GitHub untuk mengelola proyek kolaboratif antara team lead dan programmer yang bekerja dari negara yang berbeda.

## Prasayarat
- PHP (>=8.0)
- Composer

## Langkah - Langkah Memulai
<h3>1. Clone Repository</h3>

```
git clone [https://github.com/jojoooook/Team3_PAW2.git]
```
```
cd ProjectTeam3
```

<h3>2. Install Composer</h3>

```
composer install
```

<h3>3. Buat Salinan File .env</h3>

```
cp .env.example .env
```

<h3>4. Lakukan Generate Application Key</h3>

```
php artisan key:generate
```

<h4>5. Jalankan Development Server </h3>

```
php artisan serve
```

Buka http://localhost:8000 di browser Anda untuk melihat aplikasi berjalan.
