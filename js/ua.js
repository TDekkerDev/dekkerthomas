var ua = detect.parse(navigator.userAgent);
var type = ua.device.type;
console.log(type);
if (type == 'Mobile') {
    document.getElementById("phone").style.display = "inline-block";
}


if (type == 'Tablet') {
    document.getElementById("Tablet").style.display = "inline-block";
}


if (type == 'Desktop') {
    document.getElementById("desktop").style.display = "block";
}