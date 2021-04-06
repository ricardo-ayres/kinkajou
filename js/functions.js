function kinkajou_collapse() {
    var button = document.getElementById("kinkajou-collapse-button");
    var menu = document.getElementById("kinkajou-collapsible-menu");
    if (menu.style.display != "block") {
        menu.style.display="block";
        button.textContent = button.textContent.replace("+", "-");
    } else {
        menu.style.display="none";
        button.textContent = button.textContent.replace("-", "+");
    }
}

document.getElementById("kinkajou-collapse-button").onclick = kinkajou_collapse;
