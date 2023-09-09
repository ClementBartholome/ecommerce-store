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
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
