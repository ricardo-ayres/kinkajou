function kinkajou_collapse() {
    var menu = document.getElementById("kinkajou-collapsible-menu");
    var btn = document.getElementById("kinkajou-collapse-button");
    if (menu.style.maxHeight) {
        menu.style.maxHeight = "";
    } else {
        menu.style.maxHeight = "100%";
    }
    btn.classList.toggle("active");
}

document.getElementById("kinkajou-collapse-button").onclick = kinkajou_collapse;
