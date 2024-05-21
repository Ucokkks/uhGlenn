<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md  p-6 rounded-lg shadow-md">
        <a href="index.php" class="inline-block mb-4 text-blue-500 hover:underline">
            <button class="text-yellow-900 bg-yellow-400 hover:bg-yellow-500 border-black px-2 py-1 rounded-full ml-2">Home</button>
        </a>
        <h1 class="text-center text-2xl font-bold mb-6">Register Form</h1>
        <form action="./controller.php" method="post" class="space-y-4">
            <div>
                <label for="username" class="block text-gray-700">Masukkan nama:</label>
                <input type="text" name="username" id="username" placeholder="Ketik nama disini.." class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-md ">
            </div>
            <div>
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" name="password" id="password" placeholder="Ketik password disini.." class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <div>
                <button type="submit" name="action" value="register" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Register!</button>
            </div>
        </form>
        <h4 class="text-center text-blue-500 mt-4">Sudah punya akun? <span class='text-stone-950'>Silahkan login! </span>
            <a href="login.php" class="text-yellow-900 bg-yellow-400 hover:bg-yellow-500 border-black px-2 py-1 rounded-full ml-2">Login disini</a>
        </h4>
    </div>
</body>
</html>
