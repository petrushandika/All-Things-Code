## Rekomendasi Sistem (Recommendation Engine)

### 1. **K-Nearest Neighbors (KNN)**

KNN adalah metode yang mencari sejumlah data terdekat (neighbor) di sekitar data yang ingin diprediksi. Contohnya, jika kamu suka film aksi, KNN akan mencari film-film aksi lainnya yang memiliki kesamaan fitur (genre, rating, dsb.) untuk direkomendasikan.

### 2. **Perceptron**

Perceptron adalah dasar dari jaringan saraf (neural network) yang digunakan untuk mengklasifikasi data dengan memisahkan data ke dalam dua kelompok. Misalnya, perceptron dapat digunakan untuk menentukan apakah sebuah gambar termasuk dalam kategori "anjing" atau "kucing."

### 3. **Support Vector Machine (SVM)**

SVM adalah metode yang mencari garis atau bidang yang memisahkan dua kelompok data dengan margin terlebar. SVM cocok untuk klasifikasi yang jelas, seperti membedakan antara spam dan email biasa.

### 4. **Artificial Neural Network (ANN)**

ANN adalah sistem yang meniru cara kerja otak manusia dengan menggunakan jaringan neuron. ANN dapat digunakan untuk berbagai aplikasi kompleks, seperti pengenalan gambar atau suara. Misalnya, ANN bisa belajar mengenali wajah dalam gambar.

### 5. **Decision Tree (Pohon Keputusan)**

Decision Tree menggunakan struktur seperti pohon untuk membuat keputusan berdasarkan kondisi tertentu. Setiap "cabang" dari pohon adalah pilihan atau pertanyaan. Misalnya, dalam rekomendasi film, pohon keputusan bisa memilih berdasarkan genre, durasi, atau rating.

## Pembelajaran Mesin (Machine Learning)

### 1. **Supervised Learning (Pembelajaran Terawasi)**

Dalam pembelajaran terawasi, model dilatih dengan data yang sudah diberi label. Ada dua jenis utama:

- **Classification (Klasifikasi)**: Memisahkan data ke dalam beberapa kategori, seperti spam atau bukan spam dalam email.
- **Regression (Regresi)**: Memprediksi nilai yang terus-menerus, seperti harga rumah berdasarkan ukuran dan lokasi.

### 2. **Unsupervised Learning (Pembelajaran Tanpa Pengawasan)**

Di sini, model diberi data tanpa label, dan model harus menemukan pola sendiri. Terdiri dari dua jenis:

- **Clustering (Pengelompokan)**: Mengelompokkan data yang mirip, seperti mengelompokkan pelanggan berdasarkan pola belanja mereka.
- **Association Rule Learning**: Mencari pola asosiasi, seperti menemukan barang yang sering dibeli bersama, misalnya "pelanggan yang membeli roti biasanya juga membeli mentega."

### 3. **Reinforcement Learning (Pembelajaran Penguatan)**

Model belajar melalui percobaan dan kesalahan untuk membuat keputusan. Model ini berusaha memaksimalkan "hadiah" yang didapatkan dari lingkungan. Misalnya, dalam permainan, AI belajar bagaimana memenangkan permainan dengan mencoba berbagai strategi.

- **Skill Acquisition (Perolehan Keterampilan)**: Belajar keterampilan tertentu berdasarkan masukan dari lingkungan.
- **Real-Time Learning (Pembelajaran Waktu Nyata)**: Membuat keputusan saat itu juga, contohnya dalam robot yang harus menghindari rintangan saat berjalan.

## Modelling

### 1. Splitting Data (Membagi Data)

Sebelum melatih model, data dibagi menjadi beberapa bagian:

- **Training Set**: Digunakan untuk melatih model, biasanya sekitar 70-80% dari keseluruhan data.
- **Validation Set**: Digunakan untuk menilai performa model dan melakukan penyesuaian (tuning) tanpa memengaruhi data tes, umumnya 10-15% dari data.
- **Test Set**: Digunakan untuk menguji kinerja akhir model dan memeriksa kemampuannya menggeneralisasi data baru, sekitar 10-15% dari data.

Pembagian ini memastikan bahwa model dilatih pada satu bagian data dan diuji pada bagian lain, sehingga lebih tahan terhadap overfitting atau penghafalan data pelatihan.

### 2. Picking the Model (Memilih Model)

Dalam tahap ini, kita memilih algoritma yang paling cocok untuk data dan tujuan kita. Pemilihan model bergantung pada jenis masalah dan karakteristik data:

- **Masalah Klasifikasi**: Model seperti K-Nearest Neighbors (KNN), Support Vector Machine (SVM), atau Decision Trees dapat dipertimbangkan.
- **Masalah Regresi**: Model seperti Linear Regression atau Random Forest Regressor sering digunakan.
- **Masalah yang Lebih Kompleks**: Jika data sangat besar atau masalah sangat kompleks, model seperti Neural Networks mungkin lebih sesuai.

Tujuan utama dalam memilih model adalah mencari model yang sesuai dengan kebutuhan proyek dan memiliki potensi menghasilkan prediksi yang akurat.

### 3. Tuning (Mengatur Hyperparameter)

Setelah memilih model, langkah selanjutnya adalah menyetel **hyperparameter** atau parameter model yang tidak dioptimalkan selama proses pelatihan. Tuning ini dilakukan untuk mendapatkan hasil optimal dari model yang dipilih.

- **Grid Search**: Menguji kombinasi nilai hyperparameter secara manual untuk menemukan yang terbaik.
- **Random Search**: Menguji nilai hyperparameter secara acak dari berbagai kemungkinan nilai untuk mempercepat proses pencarian.
- **Automated Tuning**: Menggunakan algoritma seperti Bayesian Optimization untuk menemukan hyperparameter yang optimal.

Hyperparameter yang diatur dengan benar akan meningkatkan performa model pada data uji.

### 4. Comparison (Perbandingan Model)

Setelah model dilatih dan di-tuning, kita perlu membandingkan performa beberapa model. Model dibandingkan berdasarkan metrik kinerja, seperti:

- **Akurasi**: Persentase prediksi yang benar untuk masalah klasifikasi.
- **Mean Squared Error (MSE)**: Rata-rata kesalahan kuadrat dalam prediksi untuk masalah regresi.
- **Precision, Recall, F1 Score**: Digunakan dalam klasifikasi untuk menilai keakuratan prediksi positif.

## 3 Parts to Modelling

### 1. Choosing and Training a Model (Memilih dan Melatih Model)

Pada tahap ini, kita memilih model yang sesuai dengan jenis masalah dan data yang tersedia, seperti klasifikasi, regresi, atau clustering. Setelah memilih model, kita melatihnya menggunakan **Training Data**.

- **Training Data** adalah bagian dari data yang digunakan untuk "mengajari" model pola yang ada. Model ini akan mencoba memahami hubungan antara input (fitur) dan output (label atau target) dengan memproses data ini berulang kali.

  Contohnya, jika kita ingin model dapat memprediksi harga rumah berdasarkan ukuran dan lokasi, kita akan memberikan contoh data yang menunjukkan hubungan antara harga rumah dan karakteristiknya. Selama pelatihan, model akan belajar menemukan pola untuk membuat prediksi harga dengan lebih akurat.

### 2. Tuning a Model (Menyetel Model)

Setelah model dilatih, langkah selanjutnya adalah melakukan **Tuning** atau penyesuaian model menggunakan **Validation Data**.

- **Validation Data** adalah bagian dari data yang tidak digunakan untuk melatih model, tetapi untuk mengevaluasi kinerjanya selama proses penyetelan. Validation data ini membantu kita mengatur **hyperparameter** yang tidak dioptimalkan langsung oleh model, seperti kedalaman pohon pada Decision Tree atau jumlah tetangga di KNN.

  Dengan tuning, kita mencari konfigurasi hyperparameter yang memberikan kinerja terbaik pada validation data. Misalnya, kita dapat mencoba berbagai kombinasi parameter untuk melihat mana yang memberikan hasil akurasi tertinggi atau error terkecil.

### 3. Model Comparison (Perbandingan Model)

Tahap akhir adalah **Model Comparison** atau membandingkan performa beberapa model untuk memilih model terbaik. Di sini kita menggunakan **Test Data** untuk menguji kinerja akhir dari model.

- **Test Data** adalah data yang sama sekali belum pernah dilihat model selama pelatihan atau penyetelan. Tujuannya adalah untuk mengevaluasi apakah model dapat melakukan prediksi yang akurat pada data baru, yang menunjukkan bahwa model telah mempelajari pola dengan baik dan tidak hanya menghafal data pelatihan (overfitting).

  Kita menggunakan metrik seperti akurasi, mean squared error, atau F1 score untuk membandingkan model dan melihat mana yang paling sesuai untuk digunakan dalam aplikasi nyata.

## Overfitting dan Underfitting

**Overfitting** dan **underfitting** adalah dua masalah umum yang terjadi saat melatih model machine learning, yang berkaitan dengan kemampuan model untuk mempelajari pola data dengan baik dan melakukan generalisasi pada data baru.

### Overfitting

**Overfitting** terjadi ketika model terlalu kompleks atau "menghafal" data pelatihan hingga mempelajari detail dan noise yang spesifik untuk data tersebut. Akibatnya, model memiliki performa yang sangat baik pada data pelatihan tetapi gagal membuat prediksi yang akurat pada data baru (data uji).

- **Penyebab**: Model terlalu kompleks, jumlah parameter terlalu banyak, atau pelatihan berlangsung terlalu lama.
- **Tanda-Tanda**: Akurasi tinggi pada data pelatihan tetapi rendah pada data uji atau validation set.
- **Cara Mengatasi**: Mengurangi kompleksitas model, menambah data, menggunakan regularisasi, atau menggunakan teknik seperti cross-validation.

**Contoh**: Misalkan kita melatih model untuk mengenali pola dalam kumpulan data spesifik, namun model belajar pola yang sangat detail seperti noise atau variasi kecil yang tidak berlaku untuk data baru. Akibatnya, model hanya bekerja baik pada data latih tetapi buruk pada data baru.

### Underfitting

**Underfitting** terjadi ketika model terlalu sederhana sehingga gagal memahami pola yang ada di data pelatihan. Model yang underfitting memiliki performa buruk baik pada data pelatihan maupun data uji karena tidak mampu menangkap hubungan yang relevan dalam data.

- **Penyebab**: Model terlalu sederhana, terlalu sedikit fitur yang digunakan, atau waktu pelatihan tidak cukup.
- **Tanda-Tanda**: Akurasi rendah pada data pelatihan dan data uji.
- **Cara Mengatasi**: Meningkatkan kompleksitas model, menambah lebih banyak fitur, atau melatih model lebih lama.

**Contoh**: Jika kita mencoba memprediksi harga rumah hanya berdasarkan satu fitur seperti luas bangunan, tetapi mengabaikan faktor penting lain seperti lokasi atau kondisi, maka model mungkin terlalu sederhana dan tidak bisa memprediksi harga dengan akurat.
