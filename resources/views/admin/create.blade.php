<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen bg-gray-100 py-10 px-4">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
        
        <div class="bg-indigo-600 p-6">
            <h2 class="text-2xl font-bold text-white flex items-center gap-2">
                <i class="fas fa-plus-circle"></i> Tambah Proyek Baru
            </h2>
            <p class="text-indigo-100 text-sm">Lengkapi detail informasi proyek Anda di bawah ini.</p>
        </div>

        <form action="{{ route('admin.project.store') }}" method="POST" class="p-8 space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                    <i class="fas fa-heading text-indigo-500"></i> Judul Proyek
                </label>
                <input type="text" name="judul" required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200"
                    placeholder="Masukkan nama proyek...">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                    <i class="fas fa-align-left text-indigo-500"></i> Deskripsi
                </label>
                <textarea name="deskripsi" required rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200"
                    placeholder="Jelaskan detail proyek Anda..."></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                        <i class="fas fa-code text-indigo-500"></i> Tech Stack
                    </label>
                    <input type="text" name="tech_stack" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200"
                        placeholder="Contoh: Laravel, React, MySQL">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                        <i class="fas fa-calendar-alt text-indigo-500"></i> Tahun
                    </label>
                    <input type="number" name="tahun" value="{{ date('Y') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200">
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                    <i class="fab fa-github text-indigo-500"></i> URL Repositori
                </label>
                <input type="url" name="url_repositori" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition duration-200"
                    placeholder="https://github.com/user/repo">
            </div>

            <div class="pt-4">
                <button type="submit" 
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-lg shadow-lg transform transition active:scale-95 flex justify-center items-center gap-2">
                    <i class="fas fa-save"></i> Simpan Proyek
                </button>
            </div>
        </form>
    </div>
</div>