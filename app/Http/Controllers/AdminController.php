<?php

namespace App\Http\Controllers;

use App\Models\Project; // Pastikan Model Project sudah ada
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Tampilkan Halaman Utama Dashboard (Daftar Proyek)
     */
    public function index()
    {
        $semuaProyek = Project::latest()->get();
        return view('admin.dashboard', compact('semuaProyek'));
    }

    /**
     * Form Tambah Proyek Baru
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Simpan Data Proyek ke Database
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'tech_stack' => 'nullable',
            'tahun' => 'required|numeric',
            'url_repositori' => 'nullable|url',
        ]);

        // Tambahkan slug otomatis untuk URL detail nanti
        $validated['slug'] = Str::slug($request->judul) . '-' . Str::random(5);

        Project::create($validated);

        return redirect()->route('admin.dashboard')
                         ->with('success', 'Proyek berhasil ditambahkan ke portofolio!');
    }

    /**
     * Form Edit Proyek
     */
    public function edit($id)
    {
        $proyek = Project::findOrFail($id);
        return view('admin.edit', compact('proyek'));
    }

    /**
     * Update Data Proyek
     */
    public function update(Request $request, $id)
    {
        $proyek = Project::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'tech_stack' => 'nullable',
            'tahun' => 'required|numeric',
            'url_repositori' => 'nullable|url',
        ]);

        $proyek->update($validated);

        return redirect()->route('admin.dashboard')
                         ->with('success', 'Data proyek berhasil diperbarui!');
    }

    /**
     * Hapus Proyek
     */
    public function destroy($id)
    {
        $proyek = Project::findOrFail($id);
        $proyek->delete();

        return redirect()->route('admin.dashboard')
                         ->with('success', 'Proyek telah dihapus secara permanen.');
    }
}