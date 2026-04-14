<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://cdn.tailwindcss.com"></script>
<title>Register</title>
</head>
<body class="bg-[#1E293B] min-h-screen flex items-center justify-center p-6">
<div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md">
<h2 class="text-2xl font-bold text-center text-[#1E293B] mb-6">Daftar Akun</h2>
<form class="space-y-4">

<div class="grid grid-cols-2 gap-4">
  <div>
    <label class="text-sm font-medium text-gray-700">Nama Depan</label>
    <input type="text" class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-[#3B82F6]" />
  </div>
  <div>
    <label class="text-sm font-medium text-gray-700">Nama Belakang</label>
    <input type="text" class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-[#3B82F6]" />
  </div>
</div>

<div>
<label class="text-sm font-medium text-gray-700">Email</label>
<input type="email" class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-[#3B82F6]" />
</div>

<div>
<label class="text-sm font-medium text-gray-700">Password</label>
<div class="relative">
  <input id="password" type="password" class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-[#3B82F6] pr-12" />
  <button type="button" onclick="togglePass()" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 text-sm">Show</button>
</div>
</div>

<button class="w-full bg-[#3B82F6] text-white py-3 rounded-xl font-semibold hover:bg-[#1E40AF] transition">Daftar</button>
</form>

<p class="text-sm text-center mt-4">Sudah punya akun? <a href="/login" class="text-[#3B82F6] font-semibold">Login</a></p>
</div>

<script>
function togglePass() {
  const input = document.getElementById('password');
  input.type = input.type === 'password' ? 'text' : 'password';
}
</script>
</body>
</html>