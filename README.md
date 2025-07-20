# Website TBM Bale Baca Cijayanti

Website resmi untuk Taman Baca Masyarakat (TBM) Bale Baca Cijayanti - wadah dalam menumbuhkan minat baca untuk memperkaya pengalaman belajar warga Cijayanti.

## 🎯 Tentang Proyek

Website ini dibuat untuk:
- Memperkenalkan TBM Bale Baca Cijayanti kepada masyarakat
- Menyediakan platform untuk kolaborasi dan donasi
- Menampilkan statistik dan pencapaian TBM
- Memfasilitasi pendaftaran relawan dan program kasuh

## ✨ Fitur Utama

- **Halaman Beranda**: Informasi umum dan statistik TBM
- **Form Kolaborasi**: Pendaftaran untuk calon relawan dan mitra
- **Statistik Real-time**: 
  - 📚 1,500 Donasi Buku
  - 👥 319 Total Relawan
  - 🎓 207 Anak Didik
- **Program Kasuh**: Informasi tentang program bantuan pendidikan

## 🛠️ Teknologi

- **Framework**: Laravel
- **Frontend**: Bootstrap 5.3.6, Vite
- **Icons**: Font Awesome 6.7.2, Lordicon
- **Styling**: CSS kustom dengan Bootstrap

## 🚀 Instalasi

1. Clone repositori:
```bash
git clone https://github.com/USERNAME_ANDA/tbm-bbc-website.git
cd tbm-bbc-website
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Setup environment:
```bash
copy .env.example .env
php artisan key:generate
```

4. Build assets:
```bash
npm run dev
```

5. Jalankan server:
```bash
php artisan serve
```

## 📁 Struktur Proyek

```
resources/views/
├── index.blade.php      # Halaman utama
├── navbar.blade.php     # Komponen navigasi
├── contactus.blade.php  # Komponen kontak
└── footer.blade.php     # Komponen footer

public/images/           # Asset gambar
├── logo.jpg
├── jumbotron.jpg
├── stat1.svg
├── stat2.svg
└── stat3.svg
```

## 🤝 Cara Berkontribusi

1. Fork repositori ini
2. Buat branch fitur (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -m 'Menambah fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## 📖 Tentang TBM Bale Baca Cijayanti

> **Berkolaborasi Membangun Desa Lewat Gerakan**
> 
> **#LiterasiUntukCijayanti**

**Taman Baca Masyarakat (TBM) Bale Baca Cijayanti** adalah wadah dalam menumbuhkan minat baca untuk memperkaya pengalaman belajar warga Cijayanti. Kami juga hadir sebagai fasilitator dalam diskusi maupun inkubasi produk dan jasa hasil inovasi karya terbaik masyarakat sekitar.

## 📞 Kontak

Untuk informasi lebih lanjut atau ingin berkolaborasi, silakan isi form di website atau hubungi kami melalui kontak yang tersedia.

## 📄 Lisensi

Proyek ini dibuat untuk kepentingan sosial dan pendidikan masyarakat Cijayanti.
