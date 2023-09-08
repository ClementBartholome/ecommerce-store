<section class="max-w-screen-lg m-auto text-center p-8">

   <h1 class="text-5xl mb-8 uppercase">Ajouter un produit</h1>

   <form action="index.php?action=add_product" method="post" enctype="multipart/form-data" class="m-auto max-w-5xl p-8 shadow-md rounded-2xl border-black border-2">
      <div class="flex flex-wrap gap-6">
         <div class="flex-1 basis-96">
            <span class="text-xl">nom du produit (requis)</span>
            <input type="text" class="text-xl w-full bg-slate-200 p-6 mt-6" required maxlength="100" placeholder="Nom du produit" name="name">
         </div>
         <div class="flex-1 basis-96">
            <span class="text-xl">prix (requis)</span>
            <input type="number" min="0" class="text-xl w-full bg-slate-200 p-6 mt-6" required max="9999999999" placeholder="Prix du produit" onkeypress="if(this.value.length == 10) return false;" name="price">
         </div>
        <div class="flex-1 basis-96">
            <span class="text-xl">image 01 (requis)</span>
            <input type="file" name="image_1" accept="image/jpg, image/jpeg, image/png, image/webp" class="text-xl w-full bg-slate-200 p-6 mt-6" required>
        </div>
        <div class="flex-1 basis-96">
            <span class="text-xl">image 02 (requis)</span>
            <input type="file" name="image_2" accept="image/jpg, image/jpeg, image/png, image/webp" class="text-xl w-full bg-slate-200 p-6 mt-6" required>
        </div>
        <div class="flex-1 basis-96">
            <span class="text-xl">image 03 (requis)</span>
            <input type="file" name="image_3" accept="image/jpg, image/jpeg, image/png, image/webp" class="text-xl w-full bg-slate-200 p-6 mt-6" required>
        </div>
         <div class="flex-1 basis-96">
            <span class="text-xl">détails (requis)</span>
            <textarea name="details" placeholder="Détails du produit" class="text-xl w-full bg-slate-200 p-6 mt-6 h-20 resize-none" required maxlength="500" cols="20" rows="5"></textarea>
         </div>
      </div>
      
      <input type="submit" value="Ajouter le produit" class="w-full text-2xl py-4 px-12 bg-sky-600 rounded-lg text-white" name="add product">
   </form>

</section>
<!-- 
<section class="show-products">

   <h1 class="heading">produits ajoutés</h1>

   <div class="box-container">

   
   <div class="box">
      <img src="../uploaded_img/" alt="">
      <div class="name"></div>
      <div class="price">€<span></span>/-</div>
      <div class="details"><span></span></div>
      <div class="flex-btn">
         <a href="update_product.php" class="option-btn">mettre à jour</a>
         <a href="products.php" class="delete-btn" onclick="return confirm('delete this product?');">supprimer</a>
      </div>
   </div>
   
   
   </div>

</section> -->