function changePoint(text, action) {
    if(action) {
        document.getElementById(text).style.color = '#ffffff';
    }
    else {
        document.getElementById(text).style.color = '#5f5f5f';
    }
}