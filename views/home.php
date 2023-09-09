<main >
    <div class="bg-orange-600">
        <section class="m-auto max-w-3xl p-8">

            <div class="swiper home-slider">

            <div class="swiper-wrapper max-h-96">

            <div class="swiper-slide slide flex items-center flex-wrap gap-6 pb-24">
                <div class="image">
                    <img class="h-80" src="images/home-img-1.png" alt="">
                </div>
                <div class="content">
                    <span class="text-xl text-white">jusqu'à -50%</span>
                    <h3 class="uppercase text-white text-3xl mt-8">derniers smartphones</h3>
                    <a class="w-full bg-sky-600 mt-4 rounded-lg py-2 px-4 text-2xl capitalize text-center cursor-pointer text-white inline-block" href="shop.php" class="btn">découvrir</a>
                </div>
            </div>

            <div class="swiper-slide slide flex items-center flex-wrap gap-6 pb-24">
                <div class="image">
                    <img class="h-80" src="images/home-img-2.png" alt="">
                </div>
                <div class="content">
                    <span class="text-xl text-white">jusqu'à -50%</span>
                    <h3 class="uppercase text-white text-3xl mt-8">dernières montres</h3>
                    <a class="w-full bg-sky-600 mt-4 rounded-lg py-2 px-4 text-2xl capitalize text-center cursor-pointer text-white inline-block" href="shop.php" class="btn">découvrir</a>
                </div>
            </div>

            <div class="swiper-slide slide flex items-center flex-wrap gap-6 pb-24">
                <div class="image">
                    <img class="h-80" src="images/home-img-3.png" alt="">
                </div>
                <div class="content">
                    <span class="text-xl text-white">jusqu'à -50%</span>
                    <h3 class="uppercase text-white text-3xl mt-8">derniers casques</h3>
                    <a class="w-full bg-sky-600 mt-4 rounded-lg py-2 px-4 text-2xl capitalize text-center cursor-pointer text-white inline-block" href="shop.php" class="btn">découvrir</a>
                </div>
            </div>

            </div>

            <div class="swiper-pagination"></div>

            </div>
        </section>
    </div>

    <section class="m-auto max-w-3xl">
        <h2>Produits :</h2>
            <?php foreach ($products as $product) : ?>
                <div>
                    <a href="index.php?page=product&id=<?= $product['id'] ?>">
                        <img src=./uploaded_images/<?= $product['image_1'] ?> alt="<?= $product['name'] ?>">
                        <img src=./uploaded_images/<?= $product['image_2'] ?> alt="<?= $product['name'] ?>">
                        <img src=./uploaded_images/<?= $product['image_3'] ?> alt="<?= $product['name'] ?>">
                        <h3><?= $product['name'] ?></h4>
                        <p><?= number_format($product['price'], 2, ',', ' ') ?> €</p>
                    </a>
                </div>
            <?php endforeach; ?>
    </section>
</main>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>