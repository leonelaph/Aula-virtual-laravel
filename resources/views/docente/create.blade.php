

@section('title', 'Crear Nueva Aula')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div class="card-icon">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <h2 class="card-title mb-0">Crear Nueva Aula</h2>
            </div>
        </div>
        <div class="card-content">
            <form action="{{ route('aulas.store') }}" method="POST" class="form-container">
                @csrf
                
                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre del Aula *</label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                           id="nombre" name="nombre" value="{{ old('nombre') }}" 
                           placeholder="Ej: Aula 101, Laboratorio de Ciencias" required>
                    @error('nombre')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="ubicacion" class="form-label">Ubicación *</label>
                    <input type="text" class="form-control @error('ubicacion') is-invalid @enderror" 
                           id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}" 
                           placeholder="Ej: Edificio Principal - Primer Piso" required>
                    @error('ubicacion')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="capacidad" class="form-label">Capacidad *</label>
                    <input type="number" class="form-control @error('capacidad') is-invalid @enderror" 
                           id="capacidad" name="capacidad" value="{{ old('capacidad') }}" 
                           min="1" placeholder="Número de personas" required>
                    @error('capacidad')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions">
                    <a href="{{ route('aulas.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i>Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i>Guardar Aula
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
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

    @media (max-width: 768px) {
        .form-actions {
            flex-direction: column;
        }
        
        .btn {
            justify-content: center;
        }
    }
</style>
