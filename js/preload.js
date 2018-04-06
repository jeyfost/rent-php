jQuery(document).ready(function() {
    preload([
        '../images/appartments/flat21.jpg',
        '../images/appartments/flat22.jpg',
        '../images/appartments/flat23.jpg',
        '../images/appartments/flat24.jpg',
        '../images/appartments/flat25.jpg',
    ]);

    function preload(images) {
        if(typeof document.body == "undefined") return;
        try {
            var div = document.createElement("div");
            var s = div.style;
            s.visibility = "hidden";
            div.innerHTML = "<img src=\"" + images.join("\" /><img src=\"") + "\" />";
            var lastImg = div.lastChild;
            lastImg.onload = function() {document.body.removeChild(document.body.lastChild)}
        }
        catch (e) {

        }
    }
});