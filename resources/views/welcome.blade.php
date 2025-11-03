<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fisk Salvador - Escola de idiomas com excelência em ensino de inglês e espanhol. Metodologia prática, professores qualificados e ambiente acolhedor.">
    <meta name="keywords" content="Fisk, Salvador, inglês, espanhol, curso de idiomas, escola de idiomas">
    <title>Fisk Salvador - Aprenda inglês e espanhol com excelência</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('fisk-logo-6.png') }}">

        <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="container">
            <nav class="nav">
                <a href="#" class="logo">
                    <img src="{{ asset('fisk-logo-6.png') }}" alt="Fisk Salvador" />
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#inicio" class="nav-link">Início</a></li>
                    <li><a href="#cursos" class="nav-link">Cursos</a></li>
                    <li><a href="#sobre" class="nav-link">Sobre</a></li>
                    <li><a href="#unidades" class="nav-link">Unidades</a></li>
                    <li><a href="#contato" class="nav-link">Contato</a></li>
                    <li><a href="https://www.fisk.com.br/teste-classificacao" target="_blank" class="test-btn">Faça seu teste!</a></li>
                </ul>
                <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="inicio">
        <div class="banner-slider">
            <div class="banner-slide active"></div>
            <div class="banner-slide"></div>
            <div class="banner-slide"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Aprenda inglês com excelência</h1>
                <p class="hero-subtitle">Metodologia prática, professores qualificados e ambiente acolhedor para seu aprendizado</p>
                <div class="hero-buttons">
                    <a href="#cursos" class="btn btn-primary">Conheça nossos cursos</a>
                    <a href="#contato" class="btn btn-secondary">Matrículas abertas</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="section courses" id="cursos">
        <div class="container">
            <h2 class="section-title">Nossos Cursos</h2>
            <p class="section-subtitle">Oferecemos cursos de idiomas com metodologia comprovada e professores experientes</p>
            <div class="courses-grid">
                <div class="course-card fade-in">
                    <div class="course-image" style="background-image: url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');"></div>
                    <div class="course-content">
                        <h3 class="course-title">Inglês</h3>
                        <p class="course-description">Aprenda inglês de forma prática e eficiente com nossa metodologia exclusiva. Do básico ao avançado, desenvolvemos todas as habilidades linguísticas.</p>
                        <a href="#" class="course-btn">Saiba mais</a>
                    </div>
                </div>
                <div class="course-card fade-in">
                    <div class="course-image" style="background-image: url('https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?auto=format&fit=crop&w=1000&q=80');"></div>
                    <div class="course-content">
                        <h3 class="course-title">Espanhol</h3>
                        <p class="course-description">Domine o espanhol com professores nativos e metodologia interativa. Perfeito para viagens, trabalho e desenvolvimento pessoal.</p>
                        <a href="#" class="course-btn">Saiba mais</a>
                    </div>
                </div>
                <div class="course-card fade-in">
                    <div class="course-image" style="background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80');"></div>
                    <div class="course-content">
                        <h3 class="course-title">Reforço Escolar</h3>
                        <p class="course-description">Apoio completo para estudantes com dificuldades em inglês e espanhol. Aulas personalizadas e acompanhamento individualizado.</p>
                        <a href="#" class="course-btn">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Differentials Section -->
    <section class="section" id="sobre">
        <div class="container">
            <h2 class="section-title">Nossos Diferenciais</h2>
            <p class="section-subtitle">O que nos torna a melhor escolha para seu aprendizado de idiomas</p>
            <div class="differentials-grid">
                <div class="differential-card fade-in">
                    <div class="differential-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3 class="differential-title">Professores Qualificados</h3>
                    <p class="differential-description">Nossa equipe é formada por professores experientes e certificados, muitos com experiência internacional.</p>
                </div>
                <div class="differential-card fade-in">
                    <div class="differential-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="differential-title">Metodologia Prática</h3>
                    <p class="differential-description">Focamos na comunicação prática desde o primeiro dia, com atividades interativas e situações reais.</p>
                </div>
                <div class="differential-card fade-in">
                    <div class="differential-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="differential-title">Certificação Internacional</h3>
                    <p class="differential-description">Preparamos nossos alunos para certificações internacionais reconhecidas mundialmente.</p>
                </div>
                <div class="differential-card fade-in">
                    <div class="differential-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="differential-title">Horários Flexíveis</h3>
                    <p class="differential-description">Oferecemos horários que se adaptam à sua rotina, incluindo aulas aos sábados e período noturno.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Units Section -->
    <section class="section units" id="unidades">
        <div class="container">
            <h2 class="section-title">Nossas Unidades</h2>
            <p class="section-subtitle">Encontre a unidade mais próxima de você</p>
            <div class="units-content">
                <div class="units-info">
                    <h3>Nossa Unidade</h3>
                    <div class="unit-item">
                        <div class="unit-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="unit-info">
                            <h4>Unidade Rio Vermelho</h4>
                            <p>Tv. Remanso, 527 - Rio Vermelho<br>Salvador - BA, 41950-700</p>
                        </div>
                    </div>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.1234567890!2d-38.5108!3d-12.9716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71604e8b8b8b8b8b%3A0x8b8b8b8b8b8b8b8b!2sTv.%20Remanso%2C%20527%20-%20Rio%20Vermelho%2C%20Salvador%20-%20BA%2C%2041950-700!5e0!3m2!1spt-BR!2sbr!4v1234567890" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Depoimentos</h2>
            <p class="section-subtitle">O que nossos alunos dizem sobre nós</p>
            <div class="testimonials-slider">
                <div class="testimonials-container" id="testimonials-container">
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <p class="testimonial-text">"A Fisk Salvador transformou minha vida! Em apenas 2 anos consegui fluência em inglês e hoje trabalho em uma multinacional. A metodologia é realmente eficaz."</p>
                            <div class="testimonial-author">
                                <div class="author-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="author-info">
                                    <h4>Maria Silva</h4>
                                    <p>Ex-aluna de Inglês</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <p class="testimonial-text">"Os professores são excelentes e o ambiente é muito acolhedor. Minha filha adora as aulas e já está falando espanhol com confiança!"</p>
                            <div class="testimonial-author">
                                <div class="author-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="author-info">
                                    <h4>João Santos</h4>
                                    <p>Pai de aluna</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-content">
                            <p class="testimonial-text">"Recomendo a Fisk para todos que querem aprender idiomas de verdade. A qualidade do ensino e o suporte são excepcionais."</p>
                            <div class="testimonial-author">
                                <div class="author-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="author-info">
                                    <h4>Ana Costa</h4>
                                    <p>Aluna de Espanhol</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-nav">
                    <div class="testimonial-dot active" data-slide="0"></div>
                    <div class="testimonial-dot" data-slide="1"></div>
                    <div class="testimonial-dot" data-slide="2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact" id="contato">
        <div class="container">
            <h2 class="section-title" style="color: white;">Entre em Contato</h2>
            <p class="section-subtitle" style="color: rgba(255,255,255,0.8);">Estamos prontos para ajudar você a começar sua jornada no aprendizado de idiomas</p>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Informações de Contato</h3>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <strong>Endereço:</strong><br>
                            Tv. Remanso, 527 - Rio Vermelho<br>
                            Salvador - BA, 41950-700
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <strong>Telefone:</strong><br>
                            (71) 3334-5222
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <strong>E-mail:</strong><br>
                            contato@fisk-salvador.com.br
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <strong>Horário de Funcionamento:</strong><br>
                            Segunda a Sexta: 8h às 20h<br>
                            Sábado: 8h às 12h
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3 style="color: var(--primary-red); margin-bottom: 1.5rem;">Envie sua Mensagem</h3>
                    <form>
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" id="telefone" name="telefone">
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" name="mensagem" placeholder="Conte-nos como podemos ajudar você..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Fisk Salvador</h3>
                    <p>Há mais de 20 anos ensinando idiomas com excelência em Salvador. Nossa missão é proporcionar o melhor aprendizado de inglês e espanhol para nossos alunos.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/FiskSalvador" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/fisksalvador" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="https://x.com/fisk_salvador" class="social-link"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Links Úteis</h3>
                    <p><a href="#cursos">Nossos Cursos</a></p>
                    <p><a href="#sobre">Sobre Nós</a></p>
                    <p><a href="#unidades">Unidades</a></p>
                    <p><a href="#contato">Contato</a></p>
                </div>
                <div class="footer-section">
                    <h3>Cursos</h3>
                    <p><a href="#">Inglês</a></p>
                    <p><a href="#">Espanhol</a></p>
                    <p><a href="#">Reforço Escolar</a></p>
                    <p><a href="#">Preparatório para Certificações</a></p>
                </div>
                <div class="footer-section">
                    <h3>Contato</h3>
                    <p><i class="fas fa-phone"></i> (71) 3334-5222</p>
                    <p><i class="fas fa-envelope"></i> contato@fisk-salvador.com.br</p>
                    <p><i class="fas fa-map-marker-alt"></i> Tv. Remanso, 527 - Rio Vermelho</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Fisk Salvador. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Custom JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
