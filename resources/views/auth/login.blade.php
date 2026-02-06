<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | PortoDev</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-50 font-['Plus_Jakarta_Sans']">
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-md w-full bg-white rounded-[2.5rem] shadow-xl shadow-blue-100 border border-slate-100 overflow-hidden">
            <div class="p-8 md:p-12">
                <div class="flex flex-col items-center mb-10">
                    <div class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-200 mb-4">
                        <span class="text-white font-bold text-2xl">P</span>
                    </div>
                    <h2 class="text-2xl font-black text-slate-900">Selamat Datang</h2>
                    <p class="text-slate-500 text-sm mt-2">Silakan masuk ke akun Admin Anda</p>
                </div>

                @if($errors->any())
                <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm rounded-r-xl">
                    {{ $errors->first() }}
                </div>
                @endif

                <form action="{{ url('/login') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-widest mb-2">Email Address</label>
                        <input type="email" name="email" required 
                            class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                            placeholder="admin@portodev.com">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-widest mb-2">Password</label>
                        <input type="password" name="password" required 
                            class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                            placeholder="••••••••">
                    </div>

                    <button type="submit" 
                        class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl shadow-lg shadow-blue-200 transition-all transform active:scale-95">
                        Masuk Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>