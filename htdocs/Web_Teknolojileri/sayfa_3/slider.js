let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

// Otomatik slider için
let slideInterval = setInterval(function() {
    plusSlides(1);
}, 5000); // 3 saniyede bir otomatik geçiş

// Butonlara tıklama olayları ekleme
document.querySelector('.prev').addEventListener('click', function() {
    plusSlides(-1);
    clearInterval(slideInterval); // Butonlara tıklanınca otomatik geçişi durdur
    slideInterval = setInterval(function() {
        plusSlides(1);
    }, 3000); // Ve tekrar başlat
});

document.querySelector('.next').addEventListener('click', function() {
    plusSlides(1);
    clearInterval(slideInterval); // Butonlara tıklanınca otomatik geçişi durdur
    slideInterval = setInterval(function() {
        plusSlides(1);
    }, 3000); // Ve tekrar başlat
});
function openLink(url) {
    window.location.href = url;
}

