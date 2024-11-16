<div class="bg-stone-800 p-2 rounded-md flex flex-col gap-4">
  <div class="flex gap-4">
    <img src="https://m.media-amazon.com/images/I/71Vkg7GfPFL._SY342_.jpg" alt="Entendendo Algoritmos" class="w-24 h-auto rounded-md">
    <div>
      <p class="font-semibold text-lg cursor-pointer">
        <?= $livroSelecionado['titulo'] ?>
      </p>
      <p class="italic text-sm"><?= $livroSelecionado['autor'] ?></p>
      <span class="text-lime-500">⭐⭐⭐⭐⭐ (5/5)</span>
    </div>
  </div>
  <p class="text-sm"><?= $livroSelecionado['descricao'] ?></p>
</div>