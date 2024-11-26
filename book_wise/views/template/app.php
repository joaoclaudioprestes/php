<?php
require 'dados.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Wise</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-900 text-stone-400">
  <header class="w-full bg-stone-800 py-4">
    <nav class="mx-auto max-w-screen-lg flex justify-between  px-4 md:pd-0">
      <div class="font-bold text-xl text-lime-500">Book Wise</div>
      <ul class="flex gap-4">
        <li><a href="/" class="text-lime-500 hover:underline font-semibold">Explorar</a></li>
        <li><a href="/meus-livros.php" class="hover:underline font-semibold">Meus Livros</a></li>

      </ul>
      <ul>
        <li><a href="/login" class="hover:underline font-semibold">Login</a></li>
      </ul>
    </nav>
  </header>

  <main class="mx-auto max-w-screen-lg mt-6 px-4 md:pd-0 mb-16">
    <?php require 'views/' . $view . '.php'; ?>
  </main>
</body>

</html>