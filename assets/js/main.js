document.addEventListener("DOMContentLoaded", () => {

    // MENU
    const menuBtn = document.querySelector(".menu-btn");
    const menu = document.querySelector(".header-menu");
    const body = document.body;

    if (menuBtn && menu) {
        const icon = menuBtn.querySelector("i");

        menuBtn.addEventListener("click", () => {
            menu.classList.toggle("active");
            body.classList.toggle("no-scroll");

            if (menu.classList.contains("active")) {
                icon.classList.replace("fa-bars-staggered", "fa-xmark");
            } else {
                icon.classList.replace("fa-xmark", "fa-bars-staggered");
            }
        });
    }

    // POPUP
    const openBtn = document.getElementById("openCatalog");
    const closeBtn = document.getElementById("closeCatalog");
    const popup = document.getElementById("catalogPopup");

    if (openBtn && closeBtn && popup) {

        openBtn.addEventListener("click", () => {
            popup.classList.add("active");
        });

        closeBtn.addEventListener("click", () => {
            popup.classList.remove("active");
        });

        popup.addEventListener("click", (e) => {
            if (e.target === popup) {
                popup.classList.remove("active");
            }
        });

        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") {
                popup.classList.remove("active");
            }
        });
    }

});