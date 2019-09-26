<h1>Каталог</h1>
<? foreach ($catalog as $product): ?>
    <a href="/?c=product&a=card&id=<?= $product['id'] ?>">Имя: <?= $product['name'] ?></a>
    <p>Описание: <?= $product['description'] ?></p>
    <p>Цена: <?= $product['price'] ?></p>
<? endforeach; ?>
