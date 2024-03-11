(function () { //Function IIFE
    var productImg = document.getElementById("productImg");
    var smallImgs = document.getElementsByClassName("smallImg");

    for (let i = 0; i < smallImgs.length; i++) {
        smallImgs[i].addEventListener("click", function() {
            productImg.src = smallImgs[i].src;
        });
    }
})();