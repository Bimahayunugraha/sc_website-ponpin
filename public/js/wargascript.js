// Navbar Fixed
window.onscroll = () => {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navmenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("hamburger-active");
    navmenu.classList.toggle("hidden");
});


function previewImage() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.style.display = "block";

    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);

    ofReader.onload = function (ofREvent) {
        imgPreview.src = ofREvent.target.result;
    };
}


document.addEventListener("trix-file-accept", function (e) {
    e.preventDefault();
});

