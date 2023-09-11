<main class="bg-gray-200">
    <section class="quick-view m-auto max-w-6xl p-8	">

        <h1 class="text-5xl mb-8 uppercase text-center mt-6 font-semibold">Détails du produit</h1>

        <form action="" method="post" class="box p-8 rounded border-black border-2 shadow-md mt-6 bg-white">
            <input type="hidden" name="pid" value="<?= $product['id']; ?>">
            <input type="hidden" name="name" value="<?= $product['name']; ?>">
            <input type="hidden" name="price" value="<?= $product['price']; ?>">
            <input type="hidden" name="image" value="<?= $product['image_1']; ?>">
            <div class="row flex items-center justify-around gap-6 flex-wrap">
                <div class="image-container">
                    <div class="main-image">
                    <img class="h-72 w-full object-contain" src=./uploaded_images/<?= $product['image_1'] ?> alt="<?= $product['name'] ?>">
                    </div>
                    <div class="sub-image flex gap-6 justify-center mt-8">
                    <img class="w-36	 h-28 object-contain p-2 border-black border-2 cursor-pointer ease-linear duration-200" src=./uploaded_images/<?= $product['image_1'] ?> alt="<?= $product['name'] ?>">
                    <img class="w-36	 h-28 object-contain p-2 border-black border-2 cursor-pointer ease-linear duration-200" src=./uploaded_images/<?= $product['image_2'] ?> alt="<?= $product['name'] ?>">
                    <img class="h-28 object-contain p-2 border-black border-2 cursor-pointer ease-linear duration-200" src=./uploaded_images/<?= $product['image_3'] ?> alt="<?= $product['name'] ?>">
                    </div>
                </div>
                <div class="content flex flex-col gap-6">
                    <div class="name text-3xl"><?= $product['name']; ?></div>
                    <div class="flex justify-between">
                        <div class="price text-3xl"><?= number_format($product['price'], 2, ',', ' ') ?><span>€</span></div>
                        <input type="number" name="qty" class="border-black border-2 rounded qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                    </div>
                    <div class="details text-xl text-[#666]"><?= $product['details']; ?></div>
                    <div class="flex gap-4">
                    <input type="submit" value="ajouter au panier" class="hover:bg-black cursor-pointer btn w-full py-2 px-4 bg-sky-600 rounded-lg text-white capitalize" name="add_to_cart">
                    <input class="hover:bg-black option-btn w-full cursor-pointer py-2 px-4 bg-[#f39c12] rounded-lg text-white capitalize" type="submit" name="add_to_wishlist" value="ajouter à la wishlist">
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
<script src="./js/script.js"></script>
