const stickyNav = () => {
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.backgroundColor = 'white';
            document.getElementById("navbar").style.boxShadow = '0 3px 6px rgba(0,0,0,.2)';
            document.getElementById("contactNav").style.backgroundColor = '#4834D4';
            document.getElementById("contactNav").style.color = 'white';
        } else {
            document.getElementById("navbar").style.backgroundColor = 'transparent';
            document.getElementById("navbar").style.boxShadow = 'none';
            document.getElementById("contactNav").style.backgroundColor = 'white';
            document.getElementById("contactNav").style.color = '#00117F';
        }
    }
}

stickyNav();

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navbar-ul');
    const navLinks = document.querySelectorAll('.navbar-ul li');

    // Toggle nav
    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        // Animate links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + .45}s`;
            }
        });

        // Burger animation
        burger.classList.toggle('toggle');
    });
}

navSlide();