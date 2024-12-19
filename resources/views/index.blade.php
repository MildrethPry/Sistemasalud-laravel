<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Grupo_8_Sistema de monitoreo de salud en tiempo real</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Medilab
    * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://x.com/iia_es?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor&mx=2" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.facebook.com/Dannyzm22" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/zm_dannyj/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Medilab</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Inicio<br></a></li>
                    <li><a href="#about">Acerca de nosotros</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#departments">Consultorios</a></li>
                    <li><a href="#doctors">Doctores</a></li>

                    <li><a href="#contact">Contactos</a></li>
                    <li><a href="{{url('register')}}">Registrate</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn d-none d-sm-block" href="{{url('login')}}">Ingresar</a>

        </div>

    </div>

</header>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container position-relative">

            <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                <h2>WELCOME TO SALUDVIT</h2>
                <p>Somos una empresa de integracion de sistemas de monitoreo de salud en tiempo real , con la finalidad de cuidar de ti y tu familia</p>
            </div><!-- End Welcome -->

            <div class="content row gy-4">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                        <h3>Quienes somos?</h3>
                        <p>
                            Un grupo de trabajo que dia a dia trabaja para saber de tu bienestar de salud.Descubre Nuestro sistema de salud.
                        </p>
                        <div class="text-center">
                            <a href="{{url('login')}}" class="more-btn"><span>Más información</span> <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Why Box -->

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row gy-4">

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Monitorea tu salud</h4>
                                    <p>El monitoreo de salud se refiere a la observación y evaluación continua de los indicadores biológicos y médicos de una persona para garantizar su bienestar. Este proceso es esencial no solo en el tratamiento de enfermedades.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                    <i class="bi bi-gem"></i>
                                    <h4>Servicio de calidad</h4>
                                    <p>En la era digital, el monitoreo de salud ha evolucionado con el uso de dispositivos de última tecnología como relojes inteligentes, monitores de glucosa, sensores de presión arterial y sistemas de monitoreo remoto.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>24/7</h4>
                                    <p>El monitoreo de salud permite detectar anomalías en etapas tempranas, lo que puede llevar a intervenciones más rápidas y efectivas, mejorando la calidad de vida de los pacientes.</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>
                </div>
            </div><!-- End  Content-->

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4 gx-5">

                <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                </div>

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <h3>Acerca de nosotros</h3>
                    <p>
                        En nuestra misión, buscamos brindar apoyo a los pacientes mediante un sistema innovador de monitoreo en tiempo real. Nuestra visión es transformar el cuidado de la salud, haciendo que cada paciente reciba atención continua y personalizada, mejorando así su bienestar y calidad de vida.
                    </p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-vial-circle-check"></i>
                            <div>
                                <h5>Visión: Un futuro de atención médica accesible y eficiente</h5>
                                <p>Nos esforzamos por integrar tecnologías avanzadas que permitan el monitoreo constante, garantizando la salud de nuestros pacientes en todo momento, desde cualquier lugar.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-pump-medical"></i>
                            <div>
                                <h5>Misión: Mejorar la calidad de vida de nuestros pacientes</h5>
                                <p>A través de un monitoreo continuo y personalizado, buscamos intervenir de manera temprana en situaciones de riesgo, brindando una atención rápida y eficaz.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-heart-circle-xmark"></i>
                            <div>
                                <h5>Compromiso con la salud y el bienestar</h5>
                                <p>Nos comprometemos a ofrecer soluciones de monitoreo que aseguren un cuidado integral, adaptado a las necesidades de cada paciente, para lograr una vida más saludable y sin preocupaciones.</p>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fa-solid fa-user-doctor"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Doctoress</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fa-regular fa-hospital"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Consultorios</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fas fa-flask"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Laboratorios</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                    <i class="fas fa-award"></i>
                    <div class="stats-item">
                        <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Reconocimientos</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Servicios</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Monitoreo en Tiempo Real</h3>
                        </a>
                        <p>Ofrecemos un sistema de monitoreo continuo de la salud, permitiendo una atención inmediata ante cualquier anomalía. Nuestro sistema rastrea vitales y otros parámetros de forma precisa para garantizar el bienestar del paciente.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Gestión de Medicamentos</h3>
                        </a>
                        <p>Con nuestro sistema, puedes recibir recordatorios automáticos de medicación. Gestionamos los horarios de las dosis para asegurar que los pacientes sigan correctamente su tratamiento.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Agendamiento de Consultas</h3>
                        </a>
                        <p>Facilitamos el agendamiento de citas médicas, permitiendo que los pacientes seleccionen horarios disponibles con sus médicos. El sistema optimiza los tiempos y reduce las esperas.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-dna"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Pruebas y Diagnósticos</h3>
                        </a>
                        <p>Realizamos seguimiento de las pruebas de laboratorio y otros diagnósticos importantes, enviando alertas y recordatorios cuando los resultados estén listos o se requieran pruebas adicionales.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-wheelchair"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Monitoreo de Pacientes con Movilidad Reducida</h3>
                        </a>
                        <p>Ofrecemos soluciones especializadas para pacientes con movilidad reducida, brindando seguimiento de sus condiciones de salud y asegurando que reciban atención oportuna cuando la necesiten.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fas fa-notes-medical"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Historial Médico Digital</h3>
                        </a>
                        <p>Mantenemos un registro completo y accesible de todo el historial médico del paciente. Esto permite a los médicos tener una visión clara y precisa de la salud del paciente, mejorando la toma de decisiones.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>


        </div>

    </section><!-- /Services Section -->

    <!-- Appointment Section -->

    <!-- Departments Section -->
    <section id="departments" class="departments section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Departamentos</h2>
            <p>Necesidades que se resuelven mediante tratamientos y consultas especializadas, brindando una atención integral.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Cardiología</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Neurología</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Hepatología</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Pediatría</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Cuidado de los Ojos</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="departments-tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Cardiología</h3>
                                    <p class="fst-italic">Tratamientos avanzados y cuidados para la salud del corazón y el sistema cardiovascular.</p>
                                    <p>Nos especializamos en la prevención, diagnóstico y tratamiento de enfermedades del corazón. Ofrecemos un enfoque integral para tratar enfermedades como la hipertensión, insuficiencia cardíaca y arritmias, con un equipo de expertos para cada necesidad.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Neurología</h3>
                                    <p class="fst-italic">Tratamientos y diagnósticos para trastornos del sistema nervioso.</p>
                                    <p>Ofrecemos un enfoque especializado para tratar una variedad de condiciones neurológicas como accidentes cerebrovasculares, epilepsia, enfermedades neurodegenerativas y trastornos del sueño. Nuestro equipo multidisciplinario está dedicado a mejorar la calidad de vida de los pacientes.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Hepatología</h3>
                                    <p class="fst-italic">Atención especializada para el cuidado del hígado y sus enfermedades.</p>
                                    <p>Tratamos una variedad de trastornos hepáticos, incluidos los trastornos del hígado graso, hepatitis y cirrosis. Nuestro equipo de hepatólogos brinda tratamientos personalizados y soluciones para mejorar la función hepática de nuestros pacientes.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Pediatría</h3>
                                    <p class="fst-italic">Cuidado integral para la salud de los niños desde el nacimiento hasta la adolescencia.</p>
                                    <p>Contamos con un equipo especializado en la salud infantil, ofreciendo atención preventiva y tratamiento para enfermedades comunes en la infancia, como infecciones respiratorias, alergias, trastornos del desarrollo y enfermedades crónicas.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="departments-tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Cuidado de los Ojos</h3>
                                    <p class="fst-italic">Servicios para mantener una visión clara y saludable.</p>
                                    <p>Brindamos atención para una amplia variedad de problemas de la vista, desde revisiones regulares hasta tratamientos especializados para enfermedades como cataratas, glaucoma y retinopatías. Nuestro equipo de oftalmólogos ofrece soluciones personalizadas para mejorar la visión y prevenir problemas futuros.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Departments Section -->


    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Doctores</h2>
            <p>Conoce a nuestros destacados médicos, cada uno especializado en diferentes áreas para garantizar una atención integral y de calidad.</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <!-- Doctor 1 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="Doctor Walter White"></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Medical Officer</span>
                            <p>Especialista en gestión hospitalaria y desarrollo de estrategias para mejorar la calidad de los servicios médicos. Lidera proyectos de innovación en el cuidado de la salud.</p>
                            <div class="social">
                                <a href="https://x.com/iia_es?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor&mx=2"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://www.facebook.com/Dannyzm22"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/zm_dannyj/"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <!-- Doctor 2 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt="Doctor Sarah Johnson"></div>
                        <div class="member-info">
                            <h4>Sarah Johnson</h4>
                            <span>Anesthesiologist</span>
                            <p>Experta en anestesiología, asegura que cada paciente reciba un manejo del dolor seguro y efectivo durante y después de los procedimientos quirúrgicos.</p>
                            <div class="social">
                                <a href="https://x.com/iia_es?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor&mx=2"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://www.facebook.com/Dannyzm22"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/zm_dannyj/"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <!-- Doctor 3 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt="Doctor William Anderson"></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>Cardiology</span>
                            <p>Cardiólogo reconocido, especializado en el diagnóstico y tratamiento de enfermedades cardiovasculares. Apasionado por promover estilos de vida saludables.</p>
                            <div class="social">
                                <a href="https://x.com/iia_es?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor&mx=2"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://www.facebook.com/Dannyzm22"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/zm_dannyj/"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <!-- Doctor 4 -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt="Doctor Amanda Jepson"></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Neurosurgeon</span>
                            <p>Neurocirujana experta en procedimientos avanzados del sistema nervioso. Comprometida con la investigación para mejorar tratamientos en neurología.</p>
                            <div class="social">
                                <a href="https://x.com/iia_es?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor&mx=2"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://www.facebook.com/Dannyzm22"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/zm_dannyj/"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>
        </div>
    </section><!-- /Doctors Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Servicio de Monitoreo de Salud</h2>
            <p>Resolvemos tus inquietudes sobre cómo nuestro servicio mejora tu bienestar y ofrece soluciones a medida.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                    <div class="faq-container">

                        <div class="faq-item faq-active">
                            <h3>¿Qué es el monitoreo de salud en tiempo real?</h3>
                            <div class="faq-content">
                                <p>Es un servicio que utiliza tecnología avanzada para rastrear y analizar indicadores de salud en tiempo real, proporcionando alertas y recomendaciones personalizadas.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Cómo funciona el sistema de monitoreo?</h3>
                            <div class="faq-content">
                                <p>Los dispositivos conectados recopilan datos como frecuencia cardíaca, presión arterial y niveles de actividad. Estos datos se procesan en nuestra plataforma para brindar información relevante y actualizada.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Qué beneficios ofrece este servicio?</h3>
                            <div class="faq-content">
                                <p>Permite una detección temprana de anomalías, mejora la toma de decisiones médicas y proporciona tranquilidad al usuario mediante alertas en tiempo real.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Quién puede beneficiarse del monitoreo de salud?</h3>
                            <div class="faq-content">
                                <p>Está diseñado para personas de todas las edades, desde quienes buscan optimizar su rendimiento físico hasta aquellos con condiciones de salud que requieren seguimiento constante.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Es seguro compartir mis datos de salud?</h3>
                            <div class="faq-content">
                                <p>Tomamos la privacidad y seguridad de los datos muy en serio. Todos los datos están encriptados y se manejan conforme a regulaciones estrictas de protección de datos.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>¿Cómo puedo empezar a usar el servicio?</h3>
                            <div class="faq-content">
                                <p>Puedes registrarte en nuestra plataforma, conectar tus dispositivos compatibles y comenzar a disfrutar de los beneficios del monitoreo en tiempo real de inmediato.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Faq Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                    <h3>Testimonios</h3>
                    <p>
                        Nuestros clientes confían en nosotros para entregar un servicio excepcional. Aquí están algunas de sus experiencias reales.
                    </p>
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                              "loop": true,
                              "speed": 600,
                              "autoplay": {
                                "delay": 5000
                              },
                              "slidesPerView": "auto",
                              "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                              }
                            }
                        </script>
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Saul Goodman</h3>
                                            <h4>Inversionista y paciente </h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>El equipo fue increíblemente profesional y siempre estuvo dispuesto a ayudar. Los resultados superaron nuestras expectativas.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Sara Wilsson</h3>
                                            <h4>Paciente en observación </h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>La atención con ellos fue una experiencia fluida. Resolvieron mis problemas de manera rápida y eficiente.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Jena Karlis</h3>
                                            <h4>Paciente cardiaco </h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Ya no me preocupa salir de casa para agendar una cita ,si lo hago desde su sistema</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Matt Brandon</h3>
                                            <h4>Doctor</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Una experiencia increíble de principio a fin. El equipo siempre estuvieron atentos a nuestras necesidades y entregaron resultados excepcionales.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="d-flex">
                                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>John Larson</h3>
                                            <h4>Paciente</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Desde el primer momento, me sentí escuchada y comprendida. Recomiendo sus servicios al 100%.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Galeria</h2>
            <p>Conoce y vizualiza nuestros espacios</p>
        </div><!-- End Section Title -->

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                            <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                            <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                            <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                            <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                            <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                            <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                            <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                            <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div><!-- End Gallery Item -->

            </div>

        </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contacto</h2>
            <p>Puedes comunicarte con nosotros</p>
        </div><!-- End Section Title -->

        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Location</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>
<footer id="footer" class="footer light-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">Medilab</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p class="mt-3"><strong>Teléfono:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Correo electrónico:</strong> <span>info@example.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Enlaces útiles</h4>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Términos del servicio</a></li>
                    <li><a href="#">Política de privacidad</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Nuestros Servicios</h4>
                <ul>
                    <li><a href="#">Diseño web</a></li>
                    <li><a href="#">Desarrollo web</a></li>
                    <li><a href="#">Gestión de productos</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Diseño gráfico</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Hic solutasetp</h4>
                <ul>
                    <li><a href="#">Molestias acusamus iure</a></li>
                    <li><a href="#">Excepturi dignissimos</a></li>
                    <li><a href="#">Distinctio suscipit</a></li>
                    <li><a href="#">Dilecta</a></li>
                    <li><a href="#">Sit quas consectetur</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Nobis illum</h4>
                <ul>
                    <li><a href="#">Ipsam</a></li>
                    <li><a href="#">Laudantium dolorum</a></li>
                    <li><a href="#">Dinera</a></li>
                    <li><a href="#">Trodelas</a></li>
                    <li><a href="#">Flexo</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Derechos de Autor</span> <strong class="px-1 sitename">Medilab</strong> <span>Todos los derechos reservados</span></p>
        <div class="credits">
            <!-- Todos los enlaces en el pie de página deben permanecer intactos. -->
            <!-- Puedes eliminar los enlaces solo si has comprado la versión pro. -->
            <!-- Información de licencia: https://bootstrapmade.com/license/ -->
            <!-- Compra la versión pro con formulario de contacto funcional PHP/AJAX: [buy-url] -->
            Diseñado por <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer>


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
