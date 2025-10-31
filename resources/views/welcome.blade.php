<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela Secundaria de Innovación de Misiones</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --azul-pastel-1: #e6f2ff;
            --azul-pastel-2: #cce5ff;
            --azul-pastel-3: #b3d9ff;
            --azul-pastel-4: #99ccff;
            --azul-pastel-5: #80bfff;
            --azul-pastel-6: #66b3ff;
            --texto-oscuro: #2c3e50;
            --texto-claro: #5d6d7e;
            --blanco: #ffffff;
            --sombra: rgba(0, 0, 0, 0.1);
            --error: #ff6b6b;
            --exito: #51cf66;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--azul-pastel-1);
            color: var(--texto-oscuro);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Estilos para las vistas de autenticación */
        .auth-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, var(--azul-pastel-3), var(--azul-pastel-5));
        }

        .auth-card {
            background-color: var(--blanco);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px var(--sombra);
            width: 100%;
            max-width: 450px;
        }

        .auth-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .auth-logo {
            width: 80px;
            height: 80px;
            background-color: var(--azul-pastel-2);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
        }

        .auth-logo i {
            font-size: 40px;
            color: var(--azul-pastel-6);
        }

        .auth-title {
            font-size: 1.8rem;
            color: var(--texto-oscuro);
            margin-bottom: 10px;
        }

        .auth-subtitle {
            color: var(--texto-claro);
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--texto-oscuro);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid var(--azul-pastel-2);
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--azul-pastel-5);
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: var(--azul-pastel-5);
            color: var(--blanco);
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;
            width: 100%;
        }

        .btn:hover {
            background-color: var(--azul-pastel-6);
        }

        .auth-footer {
            text-align: center;
            margin-top: 25px;
        }

        .auth-link {
            color: var(--azul-pastel-6);
            text-decoration: none;
            font-weight: 600;
        }

        .auth-link:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 12px 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .alert-error {
            background-color: rgba(255, 107, 107, 0.1);
            color: var(--error);
            border: 1px solid var(--error);
        }

        .alert-success {
            background-color: rgba(81, 207, 102, 0.1);
            color: var(--exito);
            border: 1px solid var(--exito);
        }

        /* Estilos para la vista principal */
        .dashboard {
            display: none;
        }

        header {
            background: linear-gradient(135deg, var(--azul-pastel-3), var(--azul-pastel-5));
            padding: 20px 0;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 12px var(--sombra);
            margin-bottom: 30px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 60px;
            height: 60px;
            background-color: var(--blanco);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
        }

        .logo i {
            font-size: 30px;
            color: var(--azul-pastel-6);
        }

        .header-title h1 {
            font-size: 1.8rem;
            color: var(--texto-oscuro);
        }

        .header-title p {
            font-size: 0.9rem;
            color: var(--texto-claro);
        }

        .user-menu {
            display: flex;
            align-items: center;
        }

        .user-info {
            margin-right: 15px;
            text-align: right;
        }

        .user-name {
            font-weight: 600;
            color: var(--texto-oscuro);
        }

        .user-role {
            font-size: 0.8rem;
            color: var(--texto-claro);
        }

        .logout-btn {
            background: none;
            border: none;
            color: var(--texto-oscuro);
            font-size: 1.2rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .logout-btn:hover {
            color: var(--blanco);
        }

        .nav-tabs {
            display: flex;
            background-color: var(--blanco);
            border-radius: 15px;
            padding: 10px;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px var(--sombra);
            overflow-x: auto;
        }

        .nav-tab {
            padding: 12px 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: 600;
            white-space: nowrap;
            margin-right: 5px;
        }

        .nav-tab.active {
            background-color: var(--azul-pastel-3);
            color: var(--texto-oscuro);
        }

        .nav-tab:hover:not(.active) {
            background-color: var(--azul-pastel-1);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .main-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .card {
            background-color: var(--blanco);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 6px 15px var(--sombra);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px var(--sombra);
        }

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--azul-pastel-2);
        }

        .card-icon {
            width: 50px;
            height: 50px;
            background-color: var(--azul-pastel-2);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
        }

        .card-icon i {
            font-size: 24px;
            color: var(--azul-pastel-6);
        }

        .card-title {
            font-size: 1.4rem;
            color: var(--texto-oscuro);
        }

        .card-content {
            color: var(--texto-claro);
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .info-item {
            background-color: var(--azul-pastel-1);
            padding: 12px;
            border-radius: 10px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .info-item:hover {
            background-color: var(--azul-pastel-2);
        }

        .info-label {
            font-weight: bold;
            color: var(--azul-pastel-6);
            margin-bottom: 5px;
        }

        .info-value {
            color: var(--texto-oscuro);
        }

        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .schedule-table th, .schedule-table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid var(--azul-pastel-2);
        }

        .schedule-table th {
            background-color: var(--azul-pastel-3);
            color: var(--texto-oscuro);
        }

        .schedule-table tr:nth-child(even) {
            background-color: var(--azul-pastel-1);
        }

        footer {
            background: linear-gradient(135deg, var(--azul-pastel-3), var(--azul-pastel-5));
            padding: 20px 0;
            text-align: center;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 -4px 12px var(--sombra);
            margin-top: 30px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--texto-oscuro);
        }

        .footer-links a {
            color: var(--texto-oscuro);
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--blanco);
        }

        .copyright {
            margin-top: 15px;
            color: var(--texto-claro);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
            }
            
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            .user-menu {
                margin-top: 15px;
            }
            
            .footer-content {
                flex-direction: column;
                gap: 15px;
            }
            
            .auth-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Vista de Login -->
    <div id="loginView" class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <div class="auth-logo">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h1 class="auth-title">Iniciar Sesión</h1>
                <p class="auth-subtitle">Accede a tu cuenta</p>
            </div>
            
            <form id="loginForm">
                <div class="form-group">
                    <label for="loginEmail" class="form-label">Correo Electrónico</label>
                    <input type="email" id="loginEmail" class="form-control" placeholder="tu@email.com" required>
                </div>
                
                <div class="form-group">
                    <label for="loginPassword" class="form-label">Contraseña</label>
                    <input type="password" id="loginPassword" class="form-control" placeholder="Tu contraseña" required>
                </div>
                
                <button type="submit" class="btn">Iniciar Sesión</button>
            </form>
            
            <div class="auth-footer">
                <p>¿No tienes una cuenta? <a href="#" class="auth-link" id="goToRegister">Regístrate aquí</a></p>
            </div>
        </div>
    </div>

    <!-- Vista de Registro -->
    <div id="registerView" class="auth-container" style="display: none;">
        <div class="auth-card">
            <div class="auth-header">
                <div class="auth-logo">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h1 class="auth-title">Crear Cuenta</h1>
                <p class="auth-subtitle">Regístrate para comenzar</p>
            </div>
            
            <form id="registerForm">
                <div class="form-group">
                    <label for="registerName" class="form-label">Nombre Completo</label>
                    <input type="text" id="registerName" class="form-control" placeholder="Tu nombre completo" required>
                </div>
                
                <div class="form-group">
                    <label for="registerEmail" class="form-label">Correo Electrónico</label>
                    <input type="email" id="registerEmail" class="form-control" placeholder="tu@email.com" required>
                </div>
                
                <div class="form-group">
                    <label for="registerPassword" class="form-label">Contraseña</label>
                    <input type="password" id="registerPassword" class="form-control" placeholder="Crea una contraseña" required>
                </div>
                
                <div class="form-group">
                    <label for="registerConfirmPassword" class="form-label">Confirmar Contraseña</label>
                    <input type="password" id="registerConfirmPassword" class="form-control" placeholder="Repite tu contraseña" required>
                </div>
                
                <button type="submit" class="btn">Crear Cuenta</button>
            </form>
            
            <div class="auth-footer">
                <p>¿Ya tienes una cuenta? <a href="#" class="auth-link" id="goToLogin">Inicia sesión aquí</a></p>
            </div>
        </div>
    </div>

    <!-- Vista Principal (Dashboard) -->
    <div id="dashboardView" class="dashboard">
        <header>
            <div class="container">
                <div class="header-content">
                    <div class="logo-container">
                        <div class="logo">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="header-title">
                            <h1>ESCUELA SECUNDARIA DE INNOVACIÓN DE MISIONES</h1>
                            <p>Formando líderes del mañana</p>
                        </div>
                    </div>
                    
                    <div class="user-menu">
                        <div class="user-info">
                            <div class="user-name" id="userNameDisplay">Usuario</div>
                            <div class="user-role">Estudiante</div>
                        </div>
                        <button class="logout-btn" id="logoutBtn">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="nav-tabs">
                <div class="nav-tab active" data-tab="inicio">Inicio</div>
                <div class="nav-tab" data-tab="aulas">Aulas</div>
                <div class="nav-tab" data-tab="horarios">Horarios</div>
                <div class="nav-tab" data-tab="docentes">Docentes</div>
                <div class="nav-tab" data-tab="reservas">Reservas</div>
                <div class="nav-tab" data-tab="materias">Materias</div>
                <div class="nav-tab" data-tab="muebles">Muebles</div>
            </div>

            <!-- Contenido de Inicio -->
            <div id="inicioTab" class="tab-content active">
                <h2>Bienvenido al Sistema de Gestión Escolar</h2>
                <p>Selecciona una categoría del menú para gestionar los diferentes aspectos de la escuela.</p>
                
                <div class="main-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-door-open"></i>
                            </div>
                            <h2 class="card-title">Aulas</h2>
                        </div>
                        <div class="card-content">
                            <p>Gestiona la información de las aulas disponibles y sus características.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h2 class="card-title">Horarios</h2>
                        </div>
                        <div class="card-content">
                            <p>Consulta y modifica los horarios de clases y actividades.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h2 class="card-title">Docentes</h2>
                        </div>
                        <div class="card-content">
                            <p>Administra la información del cuerpo docente.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenido de Aulas -->
            <div id="aulasTab" class="tab-content">
                <h2>Gestión de Aulas</h2>
                <p>Información sobre las aulas disponibles y sus características.</p>
                
                <div class="main-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-door-open"></i>
                            </div>
                            <h2 class="card-title">Aulas Disponibles</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Aula 101</div>
                                    <div class="info-value">Capacidad: 30</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Aula 102</div>
                                    <div class="info-value">Capacidad: 25</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Aula 103</div>
                                    <div class="info-value">Laboratorio</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Aula 104</div>
                                    <div class="info-value">Informática</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h2 class="card-title">Equipamiento</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Proyectores</div>
                                    <div class="info-value">12 unidades</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Computadoras</div>
                                    <div class="info-value">45 unidades</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Pizarras Digitales</div>
                                    <div class="info-value">8 unidades</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Sistema de Audio</div>
                                    <div class="info-value">10 aulas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenido de Horarios -->
            <div id="horariosTab" class="tab-content">
                <h2>Horarios de Clases</h2>
                <p>Consulta los horarios de clases y actividades extracurriculares.</p>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h2 class="card-title">Horario Semanal</h2>
                    </div>
                    <div class="card-content">
                        <table class="schedule-table">
                            <thead>
                                <tr>
                                    <th>Hora</th>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miércoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>08:00 - 09:00</td>
                                    <td>Matemáticas</td>
                                    <td>Lengua</td>
                                    <td>Historia</td>
                                    <td>Matemáticas</td>
                                    <td>Inglés</td>
                                </tr>
                                <tr>
                                    <td>09:00 - 10:00</td>
                                    <td>Ciencias</td>
                                    <td>Historia</td>
                                    <td>Matemáticas</td>
                                    <td>Lengua</td>
                                    <td>Arte</td>
                                </tr>
                                <tr>
                                    <td>10:00 - 11:00</td>
                                    <td>Inglés</td>
                                    <td>Arte</td>
                                    <td>Ciencias</td>
                                    <td>Educación Física</td>
                                    <td>Tecnología</td>
                                </tr>
                                <tr>
                                    <td>11:00 - 12:00</td>
                                    <td>Educación Física</td>
                                    <td>Tecnología</td>
                                    <td>Inglés</td>
                                    <td>Arte</td>
                                    <td>Historia</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Contenido de Docentes -->
            <div id="docentesTab" class="tab-content">
                <h2>Cuerpo Docente</h2>
                <p>Información del cuerpo docente y sus especialidades.</p>
                
                <div class="main-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h2 class="card-title">Profesores</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Prof. García</div>
                                    <div class="info-value">Matemáticas</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Prof. López</div>
                                    <div class="info-value">Lengua</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Prof. Martínez</div>
                                    <div class="info-value">Ciencias</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Prof. Rodríguez</div>
                                    <div class="info-value">Historia</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h2 class="card-title">Coordinadores</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Lic. Fernández</div>
                                    <div class="info-value">Coordinador Académico</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Mg. Gómez</div>
                                    <div class="info-value">Coordinador de Tecnología</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenido de Reservas -->
            <div id="reservasTab" class="tab-content">
                <h2>Sistema de Reservas</h2>
                <p>Sistema de reserva de aulas y espacios comunes.</p>
                
                <div class="main-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <h2 class="card-title">Estado de Reservas</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Aula 101</div>
                                    <div class="info-value" id="reservaAula101">Disponible</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Laboratorio</div>
                                    <div class="info-value" id="reservaLab">Ocupado</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Sala de Reuniones</div>
                                    <div class="info-value" id="reservaSala">Disponible</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Patio</div>
                                    <div class="info-value" id="reservaPatio">Disponible</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <h2 class="card-title">Nueva Reserva</h2>
                        </div>
                        <div class="card-content">
                            <form id="reservaForm">
                                <div class="form-group">
                                    <label for="espacioReserva" class="form-label">Espacio</label>
                                    <select id="espacioReserva" class="form-control" required>
                                        <option value="">Selecciona un espacio</option>
                                        <option value="aula101">Aula 101</option>
                                        <option value="laboratorio">Laboratorio</option>
                                        <option value="sala">Sala de Reuniones</option>
                                        <option value="patio">Patio</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="fechaReserva" class="form-label">Fecha</label>
                                    <input type="date" id="fechaReserva" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="horaReserva" class="form-label">Hora</label>
                                    <input type="time" id="horaReserva" class="form-control" required>
                                </div>
                                
                                <button type="submit" class="btn">Reservar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenido de Materias -->
            <div id="materiasTab" class="tab-content">
                <h2>Plan de Estudios</h2>
                <p>Plan de estudios y materias disponibles.</p>
                
                <div class="main-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <h2 class="card-title">Materias Principales</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Matemáticas</div>
                                    <div class="info-value">Nivel: Avanzado</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Lengua</div>
                                    <div class="info-value">Nivel: Intermedio</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Ciencias</div>
                                    <div class="info-value">Nivel: Básico</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Historia</div>
                                    <div class="info-value">Nivel: Intermedio</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h2 class="card-title">Materias Especiales</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Arte</div>
                                    <div class="info-value">Taller de Expresión</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Música</div>
                                    <div class="info-value">Coro e Instrumentos</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Educación Física</div>
                                    <div class="info-value">Deportes y Salud</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Tecnología</div>
                                    <div class="info-value">Programación y Robótica</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenido de Muebles -->
            <div id="mueblesTab" class="tab-content">
                <h2>Inventario de Mobiliario</h2>
                <p>Inventario de mobiliario y equipamiento.</p>
                
                <div class="main-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-chair"></i>
                            </div>
                            <h2 class="card-title">Mobiliario General</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Sillas</div>
                                    <div class="info-value">Cantidad: 120</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Mesas</div>
                                    <div class="info-value">Cantidad: 30</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Pizarras</div>
                                    <div class="info-value">Cantidad: 15</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Proyectores</div>
                                    <div class="info-value">Cantidad: 8</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <h2 class="card-title">Equipos Tecnológicos</h2>
                        </div>
                        <div class="card-content">
                            <div class="info-grid">
                                <div class="info-item">
                                    <div class="info-label">Computadoras</div>
                                    <div class="info-value">45 unidades</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Tablets</div>
                                    <div class="info-value">25 unidades</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Impresoras</div>
                                    <div class="info-value">5 unidades</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">Router Wi-Fi</div>
                                    <div class="info-value">8 unidades</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="footer-logo">
                        <i class="fas fa-graduation-cap"></i> ESIM
                    </div>
                    <div class="footer-links">
                        <a href="#">Inicio</a>
                        <a href="#">Nosotros</a>
                        <a href="#">Contacto</a>
                        <a href="#">Ayuda</a>
                    </div>
                </div>
                <div class="copyright">
                    &copy; 2025 Escuela Secundaria de Innovación de Misiones. Todos los derechos reservados.
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Elementos de las vistas
        const loginView = document.getElementById('loginView');
        const registerView = document.getElementById('registerView');
        const dashboardView = document.getElementById('dashboardView');
        
        // Formularios
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');
        const reservaForm = document.getElementById('reservaForm');
        
        // Enlaces de navegación
        const goToRegister = document.getElementById('goToRegister');
        const goToLogin = document.getElementById('goToLogin');
        const logoutBtn = document.getElementById('logoutBtn');
        
        // Elementos de usuario
        const userNameDisplay = document.getElementById('userNameDisplay');
        
        // Navegación entre pestañas
        const navTabs = document.querySelectorAll('.nav-tab');
        const tabContents = document.querySelectorAll('.tab-content');
        
        // Estado de la aplicación
        let currentUser = null;
        
        // Navegación entre vistas de autenticación
        goToRegister.addEventListener('click', function(e) {
            e.preventDefault();
            loginView.style.display = 'none';
            registerView.style.display = 'flex';
        });
        
        goToLogin.addEventListener('click', function(e) {
            e.preventDefault();
            registerView.style.display = 'none';
            loginView.style.display = 'flex';
        });
        
        // Manejo del formulario de login
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            
            // Simulación de autenticación
            if (email && password) {
                currentUser = {
                    name: email.split('@')[0],
                    email: email
                };
                
                // Mostrar dashboard
                loginView.style.display = 'none';
                dashboardView.style.display = 'block';
                
                // Actualizar información del usuario
                userNameDisplay.textContent = currentUser.name;
            } else {
                alert('Por favor, completa todos los campos');
            }
        });
        
        // Manejo del formulario de registro
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('registerName').value;
            const email = document.getElementById('registerEmail').value;
            const password = document.getElementById('registerPassword').value;
            const confirmPassword = document.getElementById('registerConfirmPassword').value;
            
            // Validaciones básicas
            if (password !== confirmPassword) {
                alert('Las contraseñas no coinciden');
                return;
            }
            
            if (name && email && password) {
                currentUser = {
                    name: name,
                    email: email
                };
                
                // Mostrar dashboard
                registerView.style.display = 'none';
                dashboardView.style.display = 'block';
                
                // Actualizar información del usuario
                userNameDisplay.textContent = currentUser.name;
            } else {
                alert('Por favor, completa todos los campos');
            }
        });
        
        // Cerrar sesión
        logoutBtn.addEventListener('click', function() {
            currentUser = null;
            dashboardView.style.display = 'none';
            loginView.style.display = 'flex';
            
            // Limpiar formularios
            loginForm.reset();
            registerForm.reset();
        });
        
        // Navegación entre pestañas
        navTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remover clase active de todas las pestañas
                navTabs.forEach(t => t.classList.remove('active'));
                
                // Agregar clase active a la pestaña clickeada
                this.classList.add('active');
                
                // Ocultar todos los contenidos
                tabContents.forEach(content => content.classList.remove('active'));
                
                // Mostrar el contenido correspondiente
                const tabId = this.getAttribute('data-tab') + 'Tab';
                document.getElementById(tabId).classList.add('active');
            });
        });
        
        // Manejo del formulario de reservas
        reservaForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const espacio = document.getElementById('espacioReserva').value;
            const fecha = document.getElementById('fechaReserva').value;
            const hora = document.getElementById('horaReserva').value;
            
            if (espacio && fecha && hora) {
                alert(`Reserva realizada para ${espacio} el ${fecha} a las ${hora}`);
                reservaForm.reset();
                
                // Actualizar estado de reservas
                const elementoReserva = document.getElementById(`reserva${capitalizeFirstLetter(espacio)}`);
                if (elementoReserva) {
                    elementoReserva.textContent = 'Ocupado';
                    elementoReserva.style.color = '#e74c3c';
                }
            } else {
                alert('Por favor, completa todos los campos');
            }
        });
        
        // Función auxiliar para capitalizar la primera letra
        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
        
        // Simulación de cambios en tiempo real en las reservas
        setInterval(() => {
            const estados = ['Disponible', 'Ocupado'];
            const colores = ['#27ae60', '#e74c3c'];
            
            const reservaAula101 = document.getElementById('reservaAula101');
            const reservaLab = document.getElementById('reservaLab');
            const reservaSala = document.getElementById('reservaSala');
            const reservaPatio = document.getElementById('reservaPatio');
            
            const elementos = [reservaAula101, reservaLab, reservaSala, reservaPatio];
            
            elementos.forEach(elemento => {
                if (Math.random() > 0.7) { // 30% de probabilidad de cambio
                    const nuevoEstado = estados[Math.floor(Math.random() * estados.length)];
                    const nuevoColor = colores[estados.indexOf(nuevoEstado)];
                    
                    elemento.textContent = nuevoEstado;
                    elemento.style.color = nuevoColor;
                }
            });
        }, 5000);
    </script>
</body>
</html>