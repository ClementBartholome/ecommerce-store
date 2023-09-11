let mainImage = document.querySelector(".main-image img");

// Sélectionnez toutes les images secondaires
let subImages = document.querySelectorAll(".sub-image img");

subImages.forEach((image) => {
  image.addEventListener("click", () => {
    let src = image.getAttribute("src");
    mainImage.src = src;
  });
});
