function categoryHover(id, font, action) {
    if(action === 1) {
        document.getElementById(id).style.opacity = ".7";
        document.getElementById(font).style.color = "#62aab8";
    } else {
        document.getElementById(id).style.opacity = "1";
        document.getElementById(font).style.color = "#5f5f5f";
    }
}