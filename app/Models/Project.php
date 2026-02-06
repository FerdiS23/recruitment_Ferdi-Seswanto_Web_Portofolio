<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table='project';

    /**
     * fillable: Kolom yang diizinkan untuk diisi secara massal.
     * Ini melindungi database dari "Mass Assignment Vulnerability".
     */
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'tech_stack',
        'url_repositori',
        'tahun',
        'gambar',
    ];

    /**
     * Casts: Mengonversi tipe data secara otomatis.
     * Kita memastikan 'tahun' diperlakukan sebagai integer.
     */
    protected $casts = [
        'tahun' => 'integer',
    ];

    /**
     * Route Key Name:
     * Secara default Laravel mencari ID. 
     * Dengan ini, Laravel akan mencari berdasarkan SLUG di URL.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}