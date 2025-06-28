<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termini e Condizioni - notefi-cofeke.sbs</title>
     <meta name="description" content="Termini e condizioni di utilizzo del sito notefi-cofeke.sbs. Regole e responsabilità per l’accesso e l’uso del sito." />
    <meta name="keywords" content="manutenzione bancomat, riparazione ATM, servizi bancomat Italia, assistenza bancomat, Notefi Cofeke, gestione bancomat">
    <meta name="author" content="Notefi Cofeke">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2489/2489076.png" type="image/png">

    <style>
        #about h1{
            font-size: 30px;
            margin-bottom: 2px;
        }

        #about h2{
            font-size: 25px;
            margin-bottom: 15px;
        }

        #about h3{
            font-size: 20px;
            margin-bottom: 10px;
        }

        #about p{
            font-size: 16px;
            margin-bottom: 10px;
        }

        #about ul,
        #about ol{
            font-size: 16px;
            padding-left: 30px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-container">
            <a href="/" class="logo">Notefi <span>Cofeke</span></a>
            <nav>
                <ul id="nav-menu">
                    <li><a href="/#home">Home</a></li>
                    <li><a href="/#servizi">Servizi</a></li>
                    <li><a href="/#about">Chi Siamo</a></li>
                    <li><a href="/#team">Team</a></li>
                    <li><a href="/#statistiche">Statistiche</a></li>
                    <li><a href="/#testimonianze">Testimonianze</a></li>
                    <li><a href="/#faq">FAQ</a></li>
                    <li><a href="/#contatti">Contatti</a></li>
                </ul>
            </nav>
            <div class="burger" id="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h1>Termini e Condizioni di Utilizzo</h1>
    <p>Benvenuti su <strong>notefi-cofeke.sbs</strong>. Utilizzando questo sito, l’utente accetta di rispettare i seguenti termini e condizioni. Si prega di leggere attentamente prima di procedere con la navigazione o l’utilizzo dei servizi offerti.</p>

    <h2>Accesso al sito</h2>
    <p>L’accesso e l’uso del sito sono consentiti esclusivamente per scopi leciti e conformi alle presenti condizioni. L’utente si impegna a non utilizzare il sito per attività illegali o dannose.</p>

    <h2>Proprietà intellettuale</h2>
    <p>Tutti i contenuti presenti sul sito, inclusi testi, immagini, loghi e grafica, sono di proprietà esclusiva di notefi-cofeke.sbs o dei suoi licenzianti e sono protetti dalle leggi sul diritto d’autore. È vietata la copia, la riproduzione o la distribuzione senza autorizzazione.</p>

    <h2>Contenuti dell’utente</h2>
    <p>Qualora il sito permetta agli utenti di inviare contenuti o commenti, questi devono essere conformi alle leggi vigenti e non devono contenere materiale offensivo, diffamatorio o illecito. L’utente è responsabile dei contenuti che pubblica.</p>

    <h2>Esclusione di responsabilità</h2>
    <p>Il sito è fornito “così com’è” senza alcuna garanzia di qualsiasi tipo. Non garantiamo l’accuratezza, la completezza o l’aggiornamento delle informazioni presenti. L’utilizzo del sito avviene a rischio dell’utente.</p>

    <h2>Modifiche ai termini</h2>
    <p>Ci riserviamo il diritto di modificare i presenti termini e condizioni in qualsiasi momento, senza preavviso. L’uso continuato del sito implica l’accettazione delle modifiche.</p>

    <h2>Legge applicabile e foro competente</h2>
    <p>I presenti termini sono regolati dalla legge italiana. Per qualsiasi controversia relativa all’interpretazione o all’esecuzione dei presenti termini, sarà competente il foro della giurisdizione del titolare del sito.</p>

    <p>Grazie per aver scelto <strong>notefi-cofeke.sbs</strong>.</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>Link Utili</h3>
                    <ul class="footer-links">
                        <li><a href="/cookie">Cookie Policy</a></li>
                        <li><a href="/terms">Termini e Condizioni</a></li>
                        <li><a href="/privacy">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contatti</h3>
                    <p>Via Morro Reatino,27, 00189  Roma, Italia</p>
                    <p>Tel: +39 02 9945641</p>
                    <p>Email: info@notefi-cofeke.sbs</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Notefi Cofeke. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>

    <div class="cookie-consent" id="cookieConsent">
        <div class="cookie-text">
            <p>Questo sito utilizza cookie per migliorare l'esperienza utente. Continuando a navigare, accetti l'uso dei cookie in conformità con la nostra <a href="/cookie" style="color: var(--secondary);">Cookie Policy</a>.</p>
        </div>
        <button class="cookie-btn" id="acceptCookies">Accetto</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Mobile menu toggle
        const burger = document.getElementById('burger');
        const navMenu = document.getElementById('nav-menu');

        burger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            burger.classList.toggle('active');
        });

        // FAQ accordion
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentNode;
                item.classList.toggle('active');
                
                const icon = question.querySelector('span:last-child');
                if (item.classList.contains('active')) {
                    icon.textContent = '-';
                } else {
                    icon.textContent = '+';
                }
            });
        });

        // Swiper testimonials
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                }
            }
        });

        // Cookie consent
        const cookieConsent = document.getElementById('cookieConsent');
        const acceptCookies = document.getElementById('acceptCookies');
        
        if (!localStorage.getItem('cookieConsent')) {
            setTimeout(() => {
                cookieConsent.classList.add('show');
            }, 1000);
        }
        
        acceptCookies.addEventListener('click', () => {
            localStorage.setItem('cookieConsent', 'accepted');
            cookieConsent.classList.remove('show');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                if (navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    burger.classList.remove('active');
                }
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Form submission
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Here you would typically send the form data to a server
                // For this example, we'll just show an alert
                alert('Grazie per la tua richiesta! Ti contatteremo al più presto.');
                this.reset();
            });
        }

        // Animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.service-card, .stat-item, .team-member');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };

        // Set initial state for animated elements
        document.querySelectorAll('.service-card, .stat-item, .team-member').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        });

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>
</html>