<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Plani<span>Soft</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item">
                <a href="/home" class="nav-link">
                    <i class="link-icon" data-feather="layout"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Configuración General</li>
            <li class="nav-item">
                <a href="{{ route('empleador.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="user-check"></i>
                    <span class="link-title">Empleador</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('concepto.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title">Adm. Conceptos</span>
                </a>
            </li>
            <li class="nav-item nav-category">Operaciones</li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#declaraciones" role="button"
                    aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">Declaraciones Juradas</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="declaraciones">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('dec.new') }}" class="nav-link">Nueva declaración</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dec.all') }}" class="nav-link">Declaraciones registradas</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Más Opciones</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="link-icon" data-feather="copy"></i>
                    <span class="link-title">Copiar configuración</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
