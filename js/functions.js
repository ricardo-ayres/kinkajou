/* Collapse posts menu in sidenav */
document.getElementById("sidenav-button").onclick = function () {
	document.getElementById("sidenav-collapsible").classList.toggle("expanded");
	this.classList.toggle("expanded");
}

/* Mobile Layout Menu Button */
document.getElementById("title-button").onclick = function () {
	menu = document.getElementById("sidenav-wrapper");
	menu.classList.add("show");
}

document.getElementById("mobile-menu-close-btn").onclick = function () {
	menu = document.getElementById("sidenav-wrapper");
	menu.classList.remove("show");
}

/* Highlight navigation to current page */
function isLinkToCurrentPage() {
	allLinks = document.getElementsByTagName("a");
	for (link of allLinks) {
		if (link.href == document.URL) {
			link.classList.add("current");
				if (
					(link.classList.contains("posts") && link.classList.contains("item"))
					|| link.id == "home"
				) {
				document.getElementById("sidenav-button").classList.add("current");
			}
		}
	}
}
isLinkToCurrentPage();

/* Scroll gallery images into view when clicked */
galimgs = document.getElementsByClassName("gallery image");
for (i of galimgs) {
		i.onclick = function() {this.scrollIntoView({behavior: 'smooth', inline: 'center'})};
}

/* Scroll gallery and index horizontally */
function scrollHorizontally(e) {
    if ((window.innerWidth >= 980) && this.classList.contains("horizontal") && !this.classList.contains("locked")) {
        e = window.event || e;
        delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
        this.scrollLeft -= (delta * 30);
        e.preventDefault();
    }
}
for (e of document.getElementsByClassName("wrapper horizontal")) {
		/* IE9, Chrome, Safari, Opera */
		e.addEventListener('mousewheel', scrollHorizontally, false);
		/* Firefox */
		e.addEventListener('DOMMouseScroll', scrollHorizontally, false);
}

for (e of document.getElementsByClassName("single text")) {
		e.onclick = function(){
				for (e of document.getElementsByClassName("wrapper horizontal")) {
						if (e.contains(this)) {
								e.classList.toggle("locked");
						}
				}
				this.classList.toggle("wide");
		};
}
