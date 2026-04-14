<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://cdn.tailwindcss.com"></script>
<title>Login</title>
</head>
<body class="bg-[#1D8348] min-h-screen flex items-center justify-center p-6">
<div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md">
<h2 class="text-2xl font-bold text-center text-gray-900 mb-6">Login</h2>
<form class="space-y-4">
<div>
<label class="text-sm font-medium text-gray-700">Email</label>
<input type="email" class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-[#3B82F6]" />
</div>
<div>
<label class="text-sm font-medium text-gray-700">Password</label>
<input type="password" class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-[#3B82F6]" />
</div>
<button class="w-full bg-[#3B82F6] text-white py-3 rounded-xl font-semibold hover:bg-[#1E40AF] transition">Login</button>
</form>
<p class="text-sm text-center mt-4">Belum punya akun? <a href="/register" class="text-[#3B82F6] font-semibold">Daftar</a></p>
</div>
</body>
</html>