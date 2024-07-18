document.addEventListener('DOMContentLoaded', function() {
    const loginModal = document.getElementById("loginModal");
    const registerModal = document.getElementById("registerModal");
    const loginBtn = document.getElementById("loginBtn");
    const registerBtn = document.getElementById("registerBtn");
    const closeBtns = document.querySelectorAll(".close");
    const successModal = document.getElementById("successModal");
    const successCloseBtn = document.querySelector(".success .close");
    const authNavItem = document.getElementById("authNavItem");

    if (loginBtn) {
        loginBtn.addEventListener('click', function() {
            loginModal.style.display = "block";
        });
    }
    if (registerBtn) {
        registerBtn.addEventListener('click', function() {
            registerModal.style.display = "block";
        });
    }
    closeBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            loginModal.style.display = "none";
            registerModal.style.display = "none";
        });
    });
    if (successModal) {
        successModal.style.display = "block";
    }
    window.addEventListener('click', function(event) {
        if (event.target === loginModal) {
            loginModal.style.display = "none";
        }
        if (event.target === registerModal) {
            registerModal.style.display = "none";
        }
    });
    if (successCloseBtn) {
        successCloseBtn.addEventListener('click', function() {
            successModal.style.display = "none";
        });
    }
    const logoutBtn = document.getElementById("logoutBtn");
    if (logoutBtn && authNavItem) {
        logoutBtn.addEventListener('click', function(event) {
            event.preventDefault();
            fetch('logout.php').then(() => {
                authNavItem.innerHTML = `
                    <button id="loginBtn">Bejelentkezés</button>
                    <button id="registerBtn">Regisztráció</button>
                `;
                document.getElementById("loginBtn").addEventListener('click', function() {
                    loginModal.style.display = "block";
                });
                document.getElementById("registerBtn").addEventListener('click', function() {
                    registerModal.style.display = "block";
                });
            });
        });
    }
    const loginLink = document.getElementById("loginLink");
    if (loginLink) {
        loginLink.addEventListener('click', function(event) {
            event.preventDefault();
            loginModal.style.display = "block";
        });
    }

const stars = document.querySelectorAll('.rating input[type="radio"]');
    let selectedRating;

    stars.forEach((star) => {
        star.addEventListener('change', (e) => {
            selectedRating = e.target.value;
            console.log('Kiválasztott értékelés:', selectedRating);
        });
    });
    
const imageGallery = document.querySelector('.image-gallery');
const imageContainer = document.querySelector('.image-container');

if (imageGallery && imageContainer) {
    let autoScrollInterval;
    let autoScrollSpeed = 1;
    let isHovering = false;

    function startAutoScroll() {
        autoScrollInterval = setInterval(() => {
            if (!isHovering) {
                imageGallery.scrollLeft += autoScrollSpeed;
                if (imageGallery.scrollLeft + imageGallery.clientWidth >= imageGallery.scrollWidth) {
                    slowScrollToStart();
                }
            }
        }, 30);
    }
    function stopAutoScroll() {
        clearInterval(autoScrollInterval);
    }
    function slowScrollToStart() {
        const scrollInterval = setInterval(() => {
            imageGallery.scrollLeft -= autoScrollSpeed;
            if (imageGallery.scrollLeft <= 0) {
                clearInterval(scrollInterval);
                imageGallery.scrollLeft = 0;
            }
        }, 20);
    }
    imageGallery.addEventListener('mouseenter', () => {
        isHovering = true;
    });
    imageGallery.addEventListener('mouseleave', () => {
        isHovering = false;
    });
    startAutoScroll();
} else {
    console.error('A kép galéria elemeket nem találom a DOM-ban.');
}
});

