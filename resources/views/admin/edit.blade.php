<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden p-8">
        
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-gray-800">Edit Proyek</h2>
            <a href="{{ route('admin.project.index') }}" class="text-sm text-blue-600 hover:underline">
                &larr; Kembali ke Dashboard
            </a>
        </div>

        <form action="{{ route('admin.project.update', $proyek->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT') <div>
                <label class="block text-sm font-medium text-gray-700">Judul Proyek</label>
                <input type="text" name="judul" value="{{ old('judul', $proyek->judul) }}" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Tahun</label>
                    <input type="number" name="tahun" value="{{ old('tahun', $proyek->tahun) }}" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Tech Stack</label>
                    <input type="text" name="tech_stack" value="{{ old('tech_stack', $proyek->tech_stack) }}" placeholder="e.g. Laravel, Tailwind, MySQL" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">URL Repositori (Opsional)</label>
                <input type="url" name="url_repositori" value="{{ old('url_repositori', $proyek->url_repositori) }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" rows="4" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 transition">{{ old('deskripsi', $proyek->deskripsi) }}</textarea>
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" 
                    class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-md font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">
                    Simpan Perubahan
                </button>
                <button type="reset" 
                    class="bg-gray-100 text-gray-600 py-2 px-4 rounded-md font-semibold hover:bg-gray-200 transition duration-200">
                    Reset
                </button>
            </div>
        </form>

    </div>
</div>