<?php 
//Memulai session
session_start();

//Mengecek apakah SESSION username dan password ada atau tidak
$username = (isset($_SESSION['username']) ? $_SESSION['username'] : "");
$password = (isset($_SESSION['password']) ? $_SESSION['password'] : "");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>
    <?php
    if (!empty($username) && !empty($password)) {
        echo "<h1>Selamat datang!!</h1>
        <p>Username kamu: $username </p>
        <p>Password kamu: $password </p>
        <form action='controller.php' method='post'>
            <button class='text-yellow-900 bg-yellow-400 border-black mb-0.5 rounded-3xl' type='submit' name='action' id='logoutBTN'>Logout</button>
        </form>";

    } else {
        // Jika sebaliknya maka menampilkan elemen dibawah
        echo "<h1 class='text-center text-xl font-bold mt-48' >Kamu sedang ada di Home</h1>
            <h3 class= 'font-sans text-center'>Klik tombol di bawah untuk login!!!</h3>
            <div class='flex justify-center items-center'>
            <a href='login.php' class='flex justify-center items-center w-14 h-11 border-2 rounded-lg border-rose-500'>
            <button class='px-3 py-2 '>Login</button></a>    
            </div>";
    }
    ?>
    <script>
        const logoutButton = document.getElementById('logoutBTN');

        logoutButton.addEventListener('click', function() {
            const confirmation = confirm("Are you sure you want to log out?");

            if (confirmation) {
            // Submit the form programmatically to trigger logout action
            const logoutForm = document.querySelector('form');
            logoutForm.elements['action'].value = 'logout'; // Assuming 'logout' is the action value for logout
            logoutForm.submit();
            }
        });
    </script>
</body>
</html>