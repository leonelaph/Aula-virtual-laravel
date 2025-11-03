<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Aula - {{ $aula->nombre }}</title>
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
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: var(--blanco);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 6px 15px var(--sombra);
        }

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
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
            margin: 0;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .info-item {
            background-color: var(--azul-pastel-1);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
        }

        .info-item:hover {
            background-color: var(--azul-pastel-2);
            border-color: var(--azul-pastel-4);
            transform: translateY(-3px);
        }

        .info-item.featured {
            grid-column: 1 / -1;
            background: linear-gradient(135deg, var(--azul-pastel-2), var(--azul-pastel-4));
            border: 2px solid var(--azul-pastel-5);
        }

        .info-icon {
            width: 60px;
            height: 60px;
            background-color: var(--azul-pastel-3);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
        }

        .info-icon i {
            font-size: 24px;
            color: var(--azul-pastel-6);
        }

        .info-item.featured .info-icon {
            background-color: var(--azul-pastel-5);
        }

        .info-item.featured .info-icon i {
            color: var(--blanco);
        }

        .info-label {
            font-weight: 600;
            color: var(--azul-pastel-6);
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .info-value {
            color: var(--texto-oscuro);
            font-size: 1.1rem;
        }

        .info-value.large {
            font-size: 1.4rem;
            font-weight: bold;
            color: var(--texto-oscuro);
        }

        .info-value.highlight {
            color: var(--azul-pastel-6);
            font-weight: bold;
            font-size: 1.3rem;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-warning {
            background-color: var(--azul-pastel-5);
            color: var(--blanco);
        }

        .btn-warning:hover {
            background-color: var(--azul-pastel-6);
        }

        .btn-secondary {
            background-color: var(--azul-pastel-2);
            color: var(--texto-oscuro);
        }

        .btn-secondary:hover {
            background-color: var(--azul-pastel-3);
        }

        @media (max-width: 768px) {
            .card-header {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .btn-group {
                justify-content: center;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-door-open"></i>
                </div>
                <h2 class="card-title">Detalle del Aula</h2>
                <div class="btn-group">
                    <a href="/aulas/{{ $aula->id }}/edit" class="btn btn-warning">
                        <i class="fas fa-edit me-1"></i>Editar
                    </a>
                    <a href="/aulas" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i>Volver
                    </a>
                </div>
            </div>
            <div class="card-content">
                <div class="info-grid">
                    <div class="info-item featured">
                        <div class="info-icon">
                            <i class="fas fa-signature"></i>
                        </div>
                        <div class="info-label">Nombre del Aula</div>
                        <div class="info-value large">{{ $aula->nombre }}</div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-label">Ubicación</div>
                        <div class="info-value">{{ $aula->ubicacion }}</div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="info-label">Capacidad</div>
                        <div class="info-value highlight">{{ $aula->capacidad }} personas</div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-calendar-plus"></i>
                        </div>
                        <div class="info-label">Fecha de Creación</div>
                        <div class="info-value">{{ $aula->created_at->format('d/m/Y H:i') }}</div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="info-label">Última Actualización</div>
                        <div class="info-value">{{ $aula->updated_at->format('d/m/Y H:i') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>