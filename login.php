<?php 
// Mengecek apakah $_GET['msg'] ada atau tidak
$msg = (isset($_GET['msg']) ? $_GET['msg'] : "");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>  
    <div class="mx-auto flex w-full max-w-sm flex-col gap-6 mt-6">
        <div class="flex flex-col items-center">
            <h1 class="text-3xl font-semibold">Log in</h1>
        </div>
        <form action="./controller.php" method="post" class="form-group">
            <div class="form-field">
                <label class="form-label">Username</label>
                <input name="username" placeholder="Masukkan nama" type="text" class="input max-w-full" />
                <label class="form-label">
                    <span class="form-label-alt"> <br>Masukkan user yang benar.</span>
                </label>
            </div>
            <div class="form-field">
                <label class="form-label">Password</label>
                <div class="form-control">
                    <input name="password" placeholder="Masukkan Password" type="password" class="input max-w-full" />
                </div>
            </div>
            <div class="form-field pt-5">
                <div class="form-control justify-between">
                    <button type="submit" name="action" value="login" class="btn btn-primary w-full text-yellow-900 bg-yellow-400 border-black mb-0.5 rounded-3xl">Log in</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Mengecek jika variabel $msg sudah terisi atau belum, jika sudah maka menampilkan elemen dibawah -->
    <?= (!empty($msg) ? "<h2 class='text-center mt-4'>Pesan: $msg</h2>" : "") ?>

    <h4 class="flex justify-center items-center text-center mt-4">
        Belum punya akun? register disini <a href="register.php" class="text-blue-500 ml-1">register</a>
    </h4>

    <div class="flex justify-center mt-4">
        <a href="index.php"><button class="btn btn-primary w-full text-yellow-900 bg-yellow-400 border-black mb-0.5 rounded-3xl ">Home</button></a>
    </div>
</body>
</html>
