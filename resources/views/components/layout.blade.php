<!DOCTYPE html>
<html lang="it" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>title</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="../../media/logo-ai.png" type="image/x-icon">

    <!-- Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Poppins - Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- CSS Custom -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <!-- navbar componenet -->
    <x-navbar />


    <!-- views -->
    <div class="min-vh-100">
        {{$slot}}
    </div>




    <!-- Script Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Script Fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>


    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>


    <!-- Script Mine Javascript-->
    <script src="../js/main.js"></script>


    <script>
        //form
        document.querySelector('form').addEventListener('submit', function(e) {
            let nome = document.getElementById('nome').value;
            let email = document.getElementById('email').value;

            if (nome.trim() === '' || email.trim() === '') {
                e.preventDefault();
                alert('Per favore, compila tutti i campi richiesti.');
            }
        });

        // navbar allo scroll
        window.addEventListener('scroll', function() {
            let navbar = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                navbar.classList.add('shrink', 'navbar-dark');
                navbar.classList.remove('navbar-light', 'bg-trasparent');
            } else {
                navbar.classList.remove('shrink', 'navbar-dark');
                navbar.classList.add('navbar-light', 'bg-trasparent');
            }
        });

        // Inizializza AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Animazioni GSAP per la custom Section
        gsap.from(".custom-content h1", {
            duration: 1.2,
            y: -50,
            opacity: 0,
            ease: "power2.out"
        });
        gsap.from(".custom-content p", {
            duration: 1.2,
            y: 50,
            opacity: 0,
            ease: "power2.out",
            delay: 0.5
        });
        gsap.from(".custom-content button", {
            duration: 1.5,
            y: 50,
            opacity: 0,
            ease: "power2.out",
            delay: 1
        });
        gsap.from(".abstract-composition", {
            duration: 1.5,
            y: 50,
            opacity: 0,
            ease: "power2.out",
            delay: 1
        });
    </script>
</body>

</html>