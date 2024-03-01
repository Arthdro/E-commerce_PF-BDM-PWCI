var productImg = document.getElementById("productImg");
var smallImgs = document.getElementsByClassName("smallImg");

/*smallImgs.map((smallImgs, index) => {
    smallImgs.addEventListener("click", () => {
        productImg.src = smallImgs.src
  })
})*/

for (let i = 0; i < smallImgs.length; i++) {
    smallImgs[i].addEventListener("click", function() {
        productImg.src = smallImgs[i].src;
    });
}