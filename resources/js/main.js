import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();

// Form
document.querySelector('form').addEventListener('submit', function (e) {
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;

    if (nome.trim() === '' || email.trim() === '') {
        e.preventDefault();
        alert('Per favore, compila tutti i campi richiesti.');
    }
});

// navbar allo scroll
window.addEventListener('scroll', function () {
    let navbar = document.getElementById('mainNav');
    if (window.scrollY > 50) {
        navbar.classList.add('shrink', 'navbar-dark');
        navbar.classList.remove('navbar-light', 'bg-trasparent');
    } else {
        navbar.classList.remove('shrink', 'navbar-dark');
        navbar.classList.add('navbar-light', 'bg-trasparent');
    }
});