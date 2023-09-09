<!DOCTYPE html>
<html>
<head>
    <title>Shopie</title>
    <link rel="stylesheet" type="text/css" href="styles.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body class="m-0 p-0 border-none outline-none no-underline box-border">
        <header class="sticky left-0 top-0 right-0 shadow-md bg-white z-10">
            <section class="flex p-8 items-center justify-between max-w-5xl m-auto">
                <a href="index.php" class="text-3xl">Shopie<span class="text-blue-500">.</span></a>
                <nav class="text-xl">
                    <a class="mx-6" href="index.php">Accueil</a>
                    <a class="mx-6" href="index.php?action=about">À propos</a>
                    <a class="mx-6" href="index.php?action=parcourir">Parcourir</a>
                    <a class="mx-6" href="index.php?action=contact">Contact</a>
                    <a class="mx-6" href="index.php?action=admin">Admin</a>
                </nav>
                <div>
                <a href="search_page.php"><i class="fas fa-search text-2xl ml-2"></i></a>
                <a href="wishlist.php"><i class="fas fa-heart text-2xl ml-2"></i><span></span></a>
                <a href="cart.php"><i class="fas fa-shopping-cart text-2xl ml-2"></i><span></span></a>
                <div id="user-btn" class="fas fa-user text-2xl ml-2"></div>
                </div>
            </section>
            
        </header>
        <?php include($contentView); ?>

        <footer>

            <section class="grid grid-cols-4 gap-6 items-start max-w-5xl m-auto p-8">

            <!-- 
                    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    gap: 1.5rem;
    align-items: flex-start;
-->

                <div class="flex flex-col gap-4">
                    <h3 class="capitalize text-xl font-bold">liens rapides</h3>
                    <a href="home.php" class="text-zinc-500"> <i class="fas fa-angle-right pr-2 text-cyan-600	"></i> accueil</a>
                    <a href="about.php" class="text-zinc-500"> <i class="fas fa-angle-right pr-2 text-cyan-600	"></i> à propos</a>
                    <a href="shop.php" class="text-zinc-500"> <i class="fas fa-angle-right pr-2 text-cyan-600	"></i> parcourir</a>
                    <a href="contact.php" class="text-zinc-500"> <i class="fas fa-angle-right pr-2 text-cyan-600	"></i> contact</a>
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="capitalize text-xl font-bold">liens supplémentaires</h3>
                    <a href="user_login.php" class="text-zinc-500"> <i class="fas fa-angle-right pr-2 text-cyan-600	"></i> connexion</a>
                    <a href="user_register.php" class="text-zinc-500"> <i class="fas fa-angle-right pr-2 text-cyan-600	"></i> inscription</a>
                    <a href="cart.php" class="text-zinc-500"> <i class="fas fa-angle-right pr-2 text-cyan-600	"></i> panier</a>
                    <a href="orders.php" class="text-zinc-500"> <i class="fas fa-angle-right pr-2 text-cyan-600	"></i> commandes</a>
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="capitalize text-xl font-bold">contactez-nous</h3>
                    <a href="tel:1234567890" class="text-zinc-500"><i class="fas fa-phone pr-2 text-cyan-600	"></i> +123 456 7899</a>
                    <a href="tel:11122233333" class="text-zinc-500"><i class="fas fa-phone pr-2 text-cyan-600	"></i> +111 222 3333</a>
                    <a href="mailto:shopie@gmail.com" class="text-zinc-500"><i class="fas fa-envelope pr-2 text-cyan-600	"></i> shopie@gmail.com</a>
                    <a href="https://www.google.com/myplace" class="text-zinc-500"><i class="fas fa-map-marker-alt pr-2 text-cyan-600	"></i> paris, france - 75001 </a>
                </div>

                <div class="flex flex-col gap-4">
                    <h3 class="capitalize text-xl font-bold">suivez-nous</h3>
                    <a href="#" class="text-zinc-500"><i class="fab fa-facebook-f pr-2 text-cyan-600	"></i>facebook</a>
                    <a href="#" class="text-zinc-500"><i class="fab fa-twitter pr-2 text-cyan-600	"></i>twitter</a>
                    <a href="#" class="text-zinc-500"><i class="fab fa-instagram pr-2 text-cyan-600	"></i>instagram</a>
                    <a href="#" class="text-zinc-500"><i class="fab fa-linkedin pr-2 text-cyan-600	"></i>linkedin</a>
                </div>

            </section>

        </footer>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
