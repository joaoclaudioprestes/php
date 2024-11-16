<?php
require 'dados.php';
?>

<form action="" class="flex items-center gap-2 mb-8">
  <input type="text" class="border border-stone-400 h-10 rounded-md focus:outline-none bg-stone-600 p-2 text-stone-200" placeholder="Pesquisar...">
  <button type="submit" class="bg-lime-500 h-10 rounded-md px-4 text-stone-900 font-semibold">🔎 Buscar</button>
</form>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
  <!-- Card de Livro -->
  <?php foreach ($livros as $livro): ?>
    <div class="bg-stone-800 p-2 rounded-md flex flex-col gap-4">
      <div class="flex gap-4">
        <img src="https://m.media-amazon.com/images/I/71Vkg7GfPFL._SY342_.jpg" alt="Entendendo Algoritmos" class="w-24 h-auto rounded-md">
        <div>
          <a href="/livro.php?id=<?= $livro['id'] ?>" class="font-semibold text-lg hover:underline cursor-pointer">
            <?= $livro['titulo'] ?>
          </a>
          <p class="italic text-sm"><?= $livro['autor'] ?></p>
          <span class="text-lime-500">⭐⭐⭐⭐⭐ (5/5)</span>
        </div>
      </div>
      <p class="text-sm"><?= $livro['descricao'] ?></p>
    </div>
  <?php endforeach; ?>
</section>