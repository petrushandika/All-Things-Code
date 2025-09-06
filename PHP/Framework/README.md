# 📂 Struktur Folder Laravel

Struktur folder pada Laravel memiliki fungsi masing-masing untuk mengatur logika aplikasi, konfigurasi, resource, hingga testing. Berikut penjelasan singkat tiap folder utama:

---

## 🏗 app/

Berisi **logika utama aplikasi**, seperti:

- **Models** → Representasi tabel database dengan Eloquent ORM.
- **Controllers** → Menangani request & response.
- **Middleware** → Filter request sebelum/ sesudah diproses.
- **Jobs** → Proses asynchronous (queue).
- **Providers** → Service Provider untuk bootstrap layanan Laravel.

---

## 🚀 bootstrap/

Berisi file yang digunakan untuk **bootstrap framework**, termasuk:

- `app.php` → file yang menjalankan proses booting Laravel.
- `cache/` → hasil optimasi route & konfigurasi.

---

## ⚙️ config/

Menyimpan semua file **konfigurasi aplikasi**.  
Contoh:

- `app.php` → nama app, timezone, locale.
- `database.php` → konfigurasi database.
- `mail.php` → konfigurasi email.

---

## 🗄 database/

Berisi file yang terkait dengan database:

- **Migrations** → untuk membuat struktur tabel.
- **Seeders** → untuk mengisi data awal.
- **Factories** → untuk membuat data dummy/testing.

---

## 🌍 public/

Folder ini berisi file yang dapat diakses oleh publik, seperti:

- File gambar
- CSS & JavaScript
- `index.php` → entry point aplikasi Laravel.

---

## 🎨 resources/

Berisi resource aplikasi, misalnya:

- **Views** → Blade template.
- **Languages** → file terjemahan multi-bahasa.
- **Assets (JS/CSS)** → jika menggunakan Vite/npm.

---

## 💾 storage/

Folder untuk menyimpan file yang dihasilkan aplikasi, seperti:

- Log aplikasi
- Cache framework
- File yang diupload user
- Compiled Blade views

---

## 🧪 tests/

Berisi file untuk **automated testing** (PHPUnit, Pest, dsb).  
Contoh:

- `Feature/` → untuk menguji fitur aplikasi.
- `Unit/` → untuk menguji fungsi/unit kecil.

---

## 🔐 .env

Berisi **konfigurasi environment** yang sifatnya dinamis, misalnya:

- Database connection
- API keys
- Mail configuration
- Mode debug / production

---

# ⚡ Konsep Dasar Laravel

## 🛣 Routing

Routing mengatur bagaimana request URL diarahkan ke controller atau langsung ke closure.  
File routing ada di folder `routes/`:

- `web.php` → untuk route web (punya session & CSRF).
- `api.php` → untuk route API (stateless).
- `console.php` → untuk command artisan.
- `channels.php` → untuk event broadcasting.

Contoh route sederhana:

```php
Route::get('/hello', function () {
    return "Hello World!";
});

Route::get('/user/{id}', [UserController::class, 'show']);
```

## 🎮 Controller

Controller bertugas menampung **logika aplikasi** dan menghubungkan antara Model dan View.
Contoh controller sederhana:

```php
namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show($id)
    {
        return "User ID: " . $id;
    }
}
```

---

## 🛡 Middleware

Middleware adalah **filter** yang dijalankan sebelum/ sesudah request diproses.
Contoh: autentikasi user, verifikasi CSRF, logging request.

Contoh penggunaan middleware `auth`:

```php
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
```

---

## 🎨 Blade Template

Blade adalah template engine Laravel yang digunakan untuk membuat tampilan (view).
Contoh `resources/views/welcome.blade.php`:

```blade
<h1>Hello, {{ $name }}</h1>

@if($isAdmin)
  <p>Anda adalah admin.</p>
@endif

@foreach($users as $user)
  <p>{{ $user }}</p>
@endforeach
```

---

## 🛠 Helper

Helper adalah fungsi bawaan Laravel yang memudahkan pengembangan.

Contoh:

```php
url('/home');          // menghasilkan URL
asset('css/app.css');  // membuat link ke public/css/app.css
now();                 // waktu saat ini
```

---

## 🐚 Laravel Tinker

Tinker adalah command-line interaktif (REPL) untuk mencoba kode Laravel secara langsung.

Jalankan:

```bash
php artisan tinker
```

Contoh:

```php
User::count();          // menghitung jumlah user
$user = User::first();  // ambil user pertama
$user->email;           // akses email user
```

---

# 🔄 Flow Dasar Laravel

Berikut alur kerja sederhana Laravel:

1. User membuka URL di browser → request masuk ke `public/index.php`.
2. Laravel melakukan **bootstrap** (load konfigurasi, service provider, middleware).
3. **Routing** menentukan aksi (controller/closure).
4. **Controller** memproses request.
5. **Model** berinteraksi dengan database (jika diperlukan).
6. Data dikirim ke **View (Blade)** untuk ditampilkan.
7. Response dikembalikan ke browser.

---

# 📊 Flowchart Laravel (Sederhana)

flowchart TD
A[Browser Request] --> B[public/index.php]
B --> C[Routing]
C --> D[Controller]
D --> E[Model / Database]
D --> F[Blade View]
F --> G[Response ke Browser]

# 📝 Contoh CRUD Sederhana di Laravel

Berikut contoh CRUD (Create, Read, Update, Delete) sederhana menggunakan Laravel.  
Kita akan membuat CRUD untuk `Post`.

---

## 1️⃣ Buat Migration & Model

Jalankan artisan command:

```bash
php artisan make:model Post -m
```

Edit migration `database/migrations/xxxx_create_posts_table.php`:

```php
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('content');
    $table->timestamps();
});
```

Lalu jalankan migrate:

```bash
php artisan migrate
```

---

## 2️⃣ Buat Controller

```bash
php artisan make:controller PostController
```

Edit `app/Http/Controllers/PostController.php`:

```php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // READ - Tampilkan semua data
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // CREATE - Form tambah data
    public function create()
    {
        return view('posts.create');
    }

    // STORE - Simpan data baru
    public function store(Request $request)
    {
        Post::create($request->only(['title', 'content']));
        return redirect()->route('posts.index');
    }

    // EDIT - Form edit data
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // UPDATE - Simpan perubahan
    public function update(Request $request, Post $post)
    {
        $post->update($request->only(['title', 'content']));
        return redirect()->route('posts.index');
    }

    // DELETE - Hapus data
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
```

---

## 3️⃣ Tambahkan Route

Edit `routes/web.php`:

```php
use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);
```

---

## 4️⃣ Buat Blade Template

### `resources/views/posts/index.blade.php`

```blade
<h1>Daftar Post</h1>
<a href="{{ route('posts.create') }}">Tambah Post</a>

<ul>
@foreach($posts as $post)
    <li>
        <strong>{{ $post->title }}</strong>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </li>
@endforeach
</ul>
```

### `resources/views/posts/create.blade.php`

```blade
<h1>Tambah Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Judul"><br>
    <textarea name="content" placeholder="Isi"></textarea><br>
    <button type="submit">Simpan</button>
</form>
```

### `resources/views/posts/edit.blade.php`

```blade
<h1>Edit Post</h1>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}"><br>
    <textarea name="content">{{ $post->content }}</textarea><br>
    <button type="submit">Update</button>
</form>
```
