function hoge() {
    $("body").quietflow({
        theme: "starfield",
        starSize: 1.2,
        speed: 60
    });
}

window.onload = hoge();
// window.addEventListener("resize", hoge, true);