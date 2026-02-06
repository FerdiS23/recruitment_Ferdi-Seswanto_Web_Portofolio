<h1>Dashboard Admin</h1>
<a href="{{ route('admin.project.create') }}">Tambah Proyek [+]</a>

<table border="1" cellpadding="10" style="margin-top: 20px; width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background: #eee;">
            <th>Judul</th>
            <th>Tahun</th>
            <th>Tech Stack</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($semuaProyek as $p)
        <tr>
            <td>{{ $p->judul }}</td>
            <td>{{ $p->tahun }}</td>
            <td>{{ $p->tech_stack }}</td>
            <td>
                <a href="{{ route('admin.project.edit', $p->id) }}">Edit</a> | 
                <form action="{{ route('admin.project.destroy', $p->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>