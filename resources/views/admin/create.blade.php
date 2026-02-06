<h2>Tambah Proyek Baru</h2>

<form action="{{ route('admin.project.store') }}" method="POST">
    @csrf
    <div>
        <label>Judul Proyek</label><br>
        <input type="text" name="judul" required>
    </div>
    <br>
    <div>
        <label>Deskripsi</label><br>
        <textarea name="deskripsi" required></textarea>
    </div>
    <br>
    <div>
        <label>Tech Stack (Pisahkan dengan koma)</label><br>
        <input type="text" name="tech_stack" placeholder="Contoh: Laravel, React, MySQL">
    </div>
    <br>
    <div>
        <label>Tahun</label><br>
        <input type="number" name="tahun" value="{{ date('Y') }}">
    </div>
    <br>
    <div>
        <label>URL Repositori</label><br>
        <input type="url" name="url_repositori" placeholder="https://github.com/user/repo">
    </div>
    <br>
    <button type="submit">Simpan Proyek</button>
</form>