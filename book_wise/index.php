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

  <main class="mx-auto max-w-screen-lg mt-6 px-4 md:pd-0">
    <form action="" class="flex items-center gap-2 mb-8">
      <input type="text" class="border border-stone-400 h-10 rounded-md focus:outline-none bg-stone-600 p-2 text-stone-200" placeholder="Pesquisar...">
      <button type="submit" class="bg-lime-500 h-10 rounded-md px-4 text-stone-900 font-semibold">🔎 Buscar</button>
    </form>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
      <!-- Card de Livro -->
      <div class="bg-stone-800 p-2 rounded-md flex flex-col gap-4">
        <div class="flex gap-4">
          <img src="https://m.media-amazon.com/images/I/71Vkg7GfPFL._SY342_.jpg" alt="Entendendo Algoritmos" class="w-24 h-auto rounded-md">
          <div>
            <a href="/livro.php?" class="font-semibold text-lg hover:underline cursor-pointer">Entendendo Algoritmos</a>
            <p class="italic text-sm">Autor</p>
            <span class="text-lime-500">⭐⭐⭐⭐⭐ (5/5)</span>
          </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid impedit animi rerum ut nam dolorum modi doloribus.</p>
      </div>
      <div class="bg-stone-800 p-2 rounded-md flex flex-col gap-4">
        <div class="flex gap-4">
          <img src="https://m.media-amazon.com/images/I/71Vkg7GfPFL._SY342_.jpg" alt="Entendendo Algoritmos" class="w-24 h-auto rounded-md">
          <div>
            <a href="/livro.php?" class="font-semibold text-lg hover:underline cursor-pointer">Entendendo Algoritmos</a>
            <p class="italic text-sm">Autor</p>
            <span class="text-lime-500">⭐⭐⭐⭐⭐ (5/5)</span>
          </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid impedit animi rerum ut nam dolorum modi doloribus.</p>
      </div>
      <div class="bg-stone-800 p-2 rounded-md flex flex-col gap-4">
        <div class="flex gap-4">
          <img src="https://m.media-amazon.com/images/I/71Vkg7GfPFL._SY342_.jpg" alt="Entendendo Algoritmos" class="w-24 h-auto rounded-md">
          <div>
            <a href="/livro.php?" class="font-semibold text-lg hover:underline cursor-pointer">Entendendo Algoritmos</a>
            <p class="italic text-sm">Autor</p>
            <span class="text-lime-500">⭐⭐⭐⭐⭐ (5/5)</span>
          </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid impedit animi rerum ut nam dolorum modi doloribus.</p>
      </div>
      <div class="bg-stone-800 p-2 rounded-md flex flex-col gap-4">
        <div class="flex gap-4">
          <img src="https://m.media-amazon.com/images/I/71Vkg7GfPFL._SY342_.jpg" alt="Entendendo Algoritmos" class="w-24 h-auto rounded-md">
          <div>
            <a href="/livro.php?" class="font-semibold text-lg hover:underline cursor-pointer">Entendendo Algoritmos</a>
            <p class="italic text-sm">Autor</p>
            <span class="text-lime-500">⭐⭐⭐⭐⭐ (5/5)</span>
          </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid impedit animi rerum ut nam dolorum modi doloribus.</p>
      </div>

    </section>
  </main>
</body>

</html>