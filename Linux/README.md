# 📂 Basic Linux Command Cheat Sheet

## 📁 Navigasi Folder

- **`pwd`**  
  ➔ Menampilkan folder saat ini (Print Working Directory).

- **`cd ..`**  
  ➔ Pindah ke folder di atas (satu tingkat ke atas).

- **`cd ~`**  
  ➔ Pindah ke folder home user.

- **`cd -`**  
  ➔ Kembali ke folder terakhir yang dikunjungi.

- **`ls`**  
  ➔ Melihat daftar isi folder saat ini.

- **`ls -a`**  
  ➔ Menampilkan semua isi folder, termasuk file tersembunyi.

- **`ls -l`**  
  ➔ Menampilkan isi folder dengan detail (izin, ukuran, waktu, dsb).

- **`ls -la`** / **`ls -al`** / **`ls -a -l`**  
  ➔ Gabungan: lihat semua file (termasuk tersembunyi) dengan info lengkap.

- **`ls /var`**  
  ➔ Melihat isi folder `/var`.

- **`ls /var -l`**  
  ➔ Melihat isi `/var` dengan detail informasi.

- **`ls /var -a`**  
  ➔ Melihat semua isi termasuk file tersembunyi di `/var`.

- **`ls /var -al`**  
  ➔ Gabungan lihat semua isi `/var` + detail.

- **`ls /`**  
  ➔ Melihat isi dari folder root `/`.

- **`ll`**  
  ➔ Alias untuk `ls -l` (perlu diaktifkan di beberapa distro).

- **`tree`**  
  ➔ Menampilkan isi folder dalam bentuk struktur pohon.  
  _(Install dulu dengan: `sudo apt install tree`)_

## 📄 Mengelola File & Folder

- **`mkdir foldername`**  
  ➔ Membuat folder baru.

- **`mkdir folder1 folder2 folder3`**  
  ➔ Membuat beberapa folder sekaligus.

- **`mkdir -p 2/3/4`**  
  ➔ Membuat nested folder sekaligus (`-p` membuat semua level).

- **`sudo mkdir /myfolder`**  
  ➔ Membuat folder di root `/` (butuh izin superuser).

- **`touch filename`**  
  ➔ Membuat file kosong baru.

- **`echo > filename.txt`**  
  ➔ Membuat file kosong baru atau mengosongkan file jika sudah ada.

- **`> newfile3`**  
  ➔ Membuat file kosong `newfile3`.

- **`cat > newfile4.txt`**  
  ➔ Membuat file baru dan langsung mengetikkan isi dari terminal. Tekan `Ctrl+D` untuk menyimpan.

- **`cp source.txt destination.txt`**  
  ➔ Menyalin file.

- **`mv oldname.txt newname.txt`**  
  ➔ Memindahkan atau mengganti nama file.

- **`rm filename.txt`**  
  ➔ Menghapus file.

- **`rm -r foldername`**  
  ➔ Menghapus folder beserta isinya.

- **`rmdir foldername`**  
  ➔ Menghapus folder kosong.

## 📜 Melihat Isi File

- **`cat filename`**  
  ➔ Menampilkan isi file.

- **`less filename`**  
  ➔ Membuka file satu layar penuh (bisa scroll ke atas dan bawah).

- **`more filename`**  
  ➔ Menampilkan isi file halaman demi halaman.

- **`head filename`**  
  ➔ Menampilkan 10 baris pertama file.

- **`tail filename`**  
  ➔ Menampilkan 10 baris terakhir file.

- **`tail -f filename`**  
  ➔ Melihat update file secara real-time (sering dipakai untuk log).

## ⚙️ Perintah Umum Lain

- **`history`**  
  ➔ Melihat semua perintah yang pernah dijalankan.

- **`history -c`**  
  ➔ Menghapus semua riwayat perintah.

- **`clear`**  
  ➔ Membersihkan tampilan terminal.

- **`whoami`**  
  ➔ Menampilkan nama user yang sedang login.

- **`uname -a`**  
  ➔ Menampilkan informasi lengkap tentang sistem operasi.

- **`df -h`**  
  ➔ Melihat penggunaan disk (harddisk) dalam format human-readable.

- **`free -h`**  
  ➔ Melihat penggunaan memori RAM.

- **`top`**  
  ➔ Melihat proses yang berjalan secara real-time.

- **`ps aux`**  
  ➔ Menampilkan semua proses yang sedang berjalan.

- **`kill PID`**  
  ➔ Menghentikan proses berdasarkan PID (Process ID).

- **`sudo`**  
  ➔ Menjalankan perintah sebagai superuser (administrator).

- **`apt update`**  
  ➔ Memperbarui daftar paket dari repository.

- **`apt upgrade`**  
  ➔ Mengupgrade semua paket yang sudah terinstal ke versi terbaru.
