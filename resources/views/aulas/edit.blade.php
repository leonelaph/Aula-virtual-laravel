<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aula - {{ $aula->nombre }}</title>
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
            max-width: 800px;
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

        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--texto-oscuro);
            font-size: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid var(--azul-pastel-2);
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            background-color: var(--azul-pastel-1);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--azul-pastel-5);
            background-color: var(--blanco);
        }

        .form-control.is-invalid {
            border-color: var(--error);
        }

        .error-message {
            color: var(--error);
            font-size: 0.9rem;
            margin-top: 5px;
            font-weight: 500;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid var(--azul-pastel-2);
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-primary {
            background-color: var(--azul-pastel-5);
            color: var(--blanco);
        }

        .btn-primary:hover {
            background-color: var(--azul-pastel-6);
        }

        .btn-secondary {
            background-color: var(--azul-pastel-2);
            color: var(--texto-oscuro);
        }

        .btn-secondary:hover {
            background-color: var(--azul-pastel-3);
        }

        .btn-info {
            background-color: var(--azul-pastel-4);
            color: var(--blanco);
        }

        .btn-info:hover {
            background-color: var(--azul-pastel-5);
        }

        @media (max-width: 768px) {
            .form-actions {
                flex-direction: column;
            }
            
            .btn {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-edit"></i>
                </div>
                <h2 class="card-title">Editar Aula</h2>
            </div>
            <div class="card-content">
                <form action="/aulas/{{ $aula->id }}" method="POST" class="form-container">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre del Aula *</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                               id="nombre" name="nombre" value="{{ old('nombre', $aula->nombre) }}" 
                               placeholder="Ej: Aula 101, Laboratorio de Ciencias" required>
                        @error('nombre')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="ubicacion" class="form-label">Ubicación *</label>
                        <input type="text" class="form-control @error('ubicacion') is-invalid @enderror" 
                               id="ubicacion" name="ubicacion" value="{{ old('ubicacion', $aula->ubicacion) }}" 
                               placeholder="Ej: Edificio Principal - Primer Piso" required>
                        @error('ubicacion')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="capacidad" class="form-label">Capacidad *</label>
                        <input type="number" class="form-control @error('capacidad') is-invalid @enderror" 
                               id="capacidad" name="capacidad" value="{{ old('capacidad', $aula->capacidad) }}" 
                               min="1" placeholder="Número de personas" required>
                        @error('capacidad')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-actions">
                        <a href="/aulas/{{ $aula->id }}" class="btn btn-info">
                            <i class="fas fa-eye me-1"></i>Ver Detalles
                        </a>
                        <a href="/aulas" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i>Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i>Actualizar Aula
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>