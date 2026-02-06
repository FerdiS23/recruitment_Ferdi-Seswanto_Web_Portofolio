<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Penting untuk membuat slug

class ProjectController extends Controller
{
    // 1. Menampilkan semua proyek (Untuk Halaman User & Admin)
   // ... bagian atas tetap sama ...

// FUNGSI UNTUK ADMIN (Menampilkan Tabel Kelola)
    public function index()
    {
        $semuaProyek = Project::all();
        // Mengarah ke resources/views/admin/index.blade.php
        return view('admin.dashboard', compact('semuaProyek'));
    }

    // FUNGSI UNTUK USER (Menampilkan Kartu Portofolio)
    public function indexUser()
    {
        $semuaProyek = Project::latest()->get();
        // Mengarah ke resources/views/user/index.blade.php
        return view('users.index', compact('semuaProyek'));
    }

// ... fungsi lainnya ...
    // 2. Menampilkan Form Tambah Proyek
    public function create()
    {
        return view('admin.create');
    }

    // 3. Menyimpan data proyek baru ke Database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tech_stack' => 'required',
            'tahun' => 'required|numeric',
        ]);

        Project::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi,
            'tech_stack' => $request->tech_stack,
            'url_repositori' => $request->url_repositori,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('proyek.index')->with('sukses', 'Proyek berhasil ditambah!');
    }

    public function show($slug)
    {
        $proyek = Project::where('slug', $slug)->firstOrFail();
        return view('user.detail', compact('proyek'));
    }

    // 4. Menampilkan Form Edit
    public function edit($id)
    {
        $proyek = Project::findOrFail($id);
        return view('admin.edit', compact('proyek'));
    }

    // 5. Mengupdate data di Database
    public function update(Request $request, $id)
    {
        $proyek = Project::findOrFail($id);
        
        $proyek->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi,
            'tech_stack' => $request->tech_stack,
            'url_repositori' => $request->url_repositori,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('proyek.index')->with('sukses', 'Proyek berhasil diperbarui!');
    }

    // 6. Menghapus Proyek
    public function destroy($id)
    {
        $proyek = Project::findOrFail($id);
        $proyek->delete();

        return redirect()->route('proyek.index')->with('sukses', 'Proyek berhasil dihapus!');
    }
}