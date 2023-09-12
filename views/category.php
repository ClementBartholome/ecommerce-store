<main class="bg-gray-200">

    <section class="products quick-view m-auto max-w-6xl p-8">

    <h1 class="heading text-5xl mb-8 uppercase text-center mt-6 font-semibold"><?= $categoryName ?></h1>

    <div class="box-container flex gap-8 flex-wrap">

    <?php foreach ($products as $product) : ?>
        <form action="" method="post" class="box w-80 flex flex-col gap-2 p-8 rounded border-black border-2 shadow-md mt-6 bg-white">
            <input type="hidden" name="pid" value="<?= $product['id']; ?>">
            <input type="hidden" name="name" value="<?= $product['name']; ?>">
            <input type="hidden" name="price" value="<?= $product['price']; ?>">
            <input type="hidden" name="image" value="<?= $product['image_1']; ?>">
            <div class="flex justify-between mb-2 ">
                <button class="fas fa-heart fas fa-heart border-black border-2 p-2 rounded-lg hover:bg-gray-800 hover:text-white" type="submit" name="add_to_wishlist"></button>
                <a href="index.php?action=product&id=<?= $product['id'] ?>" class="fas fa-eye border-black border-2 p-2 rounded-lg hover:bg-gray-800 hover:text-white"></a>
            </div>
            <img class="h-72 w-full object-contain" src=./uploaded_images/<?= $product['image_1'] ?> alt="<?= $product['name'] ?>">
            <div class="name"><?= $product['name']; ?></div>
            <div class="flex justify-between">
                <div class="price text-3xl"><?= number_format($product['price'], 2, ',', ' ') ?><span>€</span></div>
                <input type="number" name="qty" class="border-black border-2 rounded qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
            </div>
            <input class="hover:bg-black cursor-pointer btn w-full py-2 px-4 bg-sky-600 rounded-lg text-white capitalize" type="submit" value="ajouter au panier" class="btn" name="add_to_cart">
        </form>
    <?php endforeach; ?>

    </div>
    </section>
</main>