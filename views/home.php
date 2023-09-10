<main class="bg-gray-200" >
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
                    <h3 class="uppercase text-white text-3xl mt-8">smartphones</h3>
                    <a class="w-full bg-sky-600 mt-4 rounded-lg py-2 px-4 text-2xl capitalize text-center cursor-pointer text-white inline-block" href="shop.php" class="btn">découvrir</a>
                </div>
            </div>

            <div class="swiper-slide slide flex items-center flex-wrap gap-6 pb-24">
                <div class="image">
                    <img class="h-80" src="images/home-img-2.png" alt="">
                </div>
                <div class="content">
                    <span class="text-xl text-white">jusqu'à -50%</span>
                    <h3 class="uppercase text-white text-3xl mt-8">montres</h3>
                    <a class="w-full bg-sky-600 mt-4 rounded-lg py-2 px-4 text-2xl capitalize text-center cursor-pointer text-white inline-block" href="shop.php" class="btn">découvrir</a>
                </div>
            </div>

            <div class="swiper-slide slide flex items-center flex-wrap gap-6 pb-24">
                <div class="image">
                    <img class="h-80" src="images/home-img-3.png" alt="">
                </div>
                <div class="content">
                    <span class="text-xl text-white">jusqu'à -50%</span>
                    <h3 class="uppercase text-white text-3xl mt-8">casques</h3>
                    <a class="w-full bg-sky-600 mt-4 rounded-lg py-2 px-4 text-2xl capitalize text-center cursor-pointer text-white inline-block" href="shop.php" class="btn">découvrir</a>
                </div>
            </div>

            </div>

            <div class="swiper-pagination"></div>

            </div>
        </section>
    </div>

    <section class="m-auto max-w-4xl">

        <h1 class="text-5xl mb-8 uppercase text-center mt-6 font-semibold">parcourir par catégorie</h1>

        <div class="swiper category-slider">

        <div class="swiper-wrapper">

        <a href="category.php?category=laptop" class="group hover:bg-gray-800 hover:text-white w-fit flex flex-col items-center  swiper-slide slide mb-20 shadow-md border-black border-2 text-center p-8 rounded-lg bg-white">
            <img class="group-hover:invert" src="images/icon-1.png" alt="">
            <h3 class="text-2xl font-normal	">ordi portable</h3>
        </a>

        <a href="category.php?category=tv" class="group hover:bg-gray-800 hover:text-white w-fit flex flex-col items-center 		 swiper-slide slide swiper-slide slide mb-20 shadow-md border-black border-2 text-center p-8 rounded-lg bg-white">
            <img class="group-hover:invert" src="images/icon-2.png" alt="">
            <h3 class="text-2xl font-normal	">tv</h3>
        </a>

        <a href="category.php?category=camera" class="group hover:bg-gray-800 hover:text-white w-fit flex flex-col items-center 		 swiper-slide slide swiper-slide slide mb-20 shadow-md border-black border-2 text-center p-8 rounded-lg bg-white">
            <img class="group-hover:invert" src="images/icon-3.png" alt="">
            <h3 class="text-2xl font-normal	">appareil photo</h3>
        </a>

        <a href="category.php?category=mouse" class="group hover:bg-gray-800 hover:text-white w-fit flex flex-col items-center 		 swiper-slide slide swiper-slide slide mb-20 shadow-md border-black border-2 text-center p-8 rounded-lg bg-white">
            <img class="group-hover:invert" src="images/icon-4.png" alt="">
            <h3 class="text-2xl font-normal	">souris</h3>
        </a>

        <a href="category.php?category=fridge" class="group hover:bg-gray-800 hover:text-white w-fit flex flex-col items-center 		 swiper-slide slide swiper-slide slide mb-20 shadow-md border-black border-2 text-center p-8 rounded-lg bg-white">
            <img class="group-hover:invert" src="images/icon-5.png" alt="">
            <h3 class="text-2xl font-normal	">frigo</h3>
        </a>

        <a href="category.php?category=washing" class="group hover:bg-gray-800 hover:text-white w-fit flex flex-col items-center 		swiper-slide slide swiper-slide slide mb-20 shadow-md border-black border-2 text-center p-8 rounded-lg bg-white">
            <img class="group-hover:invert" src="images/icon-6.png" alt="">
            <h3 class="text-2xl font-normal	">machine à laver</h3>
        </a>

        <a href="category.php?category=smartphone" class="group hover:bg-gray-800 hover:text-white w-fit flex flex-col items-center 		swiper-slide slide swiper-slide slide mb-20 shadow-md border-black border-2 text-center p-8 rounded-lg bg-white">
            <img class="group-hover:invert" src="images/icon-7.png" alt="">
            <h3 class="text-2xl font-normal	">smartphone</h3>
        </a>

        <a href="category.php?category=watch" class="group hover:bg-gray-800 hover:text-white w-fit flex flex-col items-center 		swiper-slide slide swiper-slide slide mb-20 shadow-md border-black border-2 text-center p-8 rounded-lg bg-white">
            <img class="group-hover:invert" src="images/icon-8.png" alt="">
            <h3 class="text-2xl font-normal	">montre</h3>
        </a>

        </div>

        <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="m-auto max-w-4xl">
        <h2 class="text-5xl mb-8 uppercase text-center mt-6 font-semibold">Derniers Produits</h2>

        <div class="swiper products-slider">

        <div class="swiper-wrapper">

            <?php foreach ($products as $product) : ?>
                <div class="swiper-slide slide w-fit	p-4 rounded-lg border-black border-2 bg-white shadow mb-16 max-h-80 ">
                    <a class="flex flex-col items-center gap-2 text-center" href="index.php?page=product&id=<?= $product['id'] ?>">
                        <img class="max-h-40" src=./uploaded_images/<?= $product['image_1'] ?> alt="<?= $product['name'] ?>">
                        <h3><?= $product['name'] ?></h4>
                    </a>
                    <div class="flex justify-between mb-2	">
                        <p><?= number_format($product['price'], 2, ',', ' ') ?> €</p>
                        <input class="border-black border-2 rounded" type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                        </div>
                        <button class="w-full py-2 px-4 bg-sky-600 rounded-lg text-white">Ajouter au panier</button>
                    
                </div>
            <?php endforeach; ?>

        </div>

        <div class="swiper-pagination"></div>
        </div>
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
        slidesPerView: 'auto',
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
        slidesPerView: 'auto',
      },
   },
});

</script>