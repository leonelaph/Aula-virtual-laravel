

@section('title', 'Gestión de Aulas')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <div class="card-icon">
                    <i class="fas fa-door-open"></i>
                </div>
                <h2 class="card-title mb-0">Gestión de Aulas</h2>
            </div>
            <a href="{{ route('aulas.create') }}" class="btn">
                <i class="fas fa-plus me-1"></i>Nueva Aula
            </a>
        </div>
        <div class="card-content">
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                </div>
            @endif

            @if($aulas->count() > 0)
                <div class="info-grid">
                    @foreach($aulas as $aula)
                        <div class="info-item">
                            <div class="info-label">{{ $aula->nombre }}</div>
                            <div class="info-value">{{ $aula->ubicacion }}</div>
                            <div class="info-value">
                                <strong>{{ $aula->capacidad }} personas</strong>
                            </div>
                            <div class="mt-3 d-flex justify-content-center gap-2">
                                <a href="{{ route('aulas.show', $aula) }}" class="btn btn-sm" 
                                   style="background: var(--azul-pastel-4); color: white; padding: 8px 12px;">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('aulas.edit', $aula) }}" class="btn btn-sm" 
                                   style="background: var(--azul-pastel-5); color: white; padding: 8px 12px;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('aulas.destroy', $aula) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm" 
                                            style="background: var(--error); color: white; padding: 8px 12px;"
                                            onclick="return confirm('¿Estás seguro de eliminar esta aula?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <div class="card-icon mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-door-closed" style="font-size: 40px;"></i>
                    </div>
                    <h4 class="text-muted mb-3">No hay aulas registradas</h4>
                    <p class="text-muted mb-4">Comienza agregando tu primera aula al sistema</p>
                    <a href="{{ route('aulas.create') }}" class="btn" style="max-width: 200px;">
                        <i class="fas fa-plus me-2"></i>Crear Primera Aula
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
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
        margin: 0;
    }

    .card-content {
        color: var(--texto-claro);
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }

    .info-item {
        background-color: var(--azul-pastel-1);
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        transition: background-color 0.3s ease;
        border: 2px solid transparent;
    }

    .info-item:hover {
        background-color: var(--azul-pastel-2);
        border-color: var(--azul-pastel-4);
    }

    .info-label {
        font-weight: bold;
        color: var(--azul-pastel-6);
        margin-bottom: 8px;
        font-size: 1.1rem;
    }

    .info-value {
        color: var(--texto-oscuro);
        margin-bottom: 5px;
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
        text-decoration: none;
    }

    .btn:hover {
        background-color: var(--azul-pastel-6);
        color: white;
        text-decoration: none;
    }

    .btn-sm {
        padding: 8px 12px;
        font-size: 0.9rem;
    }

    .alert {
        padding: 12px 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        font-size: 0.9rem;
    }

    .alert-success {
        background-color: rgba(81, 207, 102, 0.1);
        color: var(--exito);
        border: 1px solid var(--exito);
    }

    @media (max-width: 768px) {
        .info-grid {
            grid-template-columns: 1fr;
        }
        
        .card-header {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }
        
        .card-icon {
            margin-right: 0;
            margin-bottom: 10px;
        }
    }
</style>
