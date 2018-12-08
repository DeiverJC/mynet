<li>
    <a href="{{ route('home') }}" class="waves-effect {{ Request::is('home*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Inicio</span>
    </a> 
</li>

<li>
    <a href="{{ route('home') }}" class="waves-effect  {{ Request::is('contacts*') || Request::is('contactTypes*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Contactos<span class="fa arrow"></span></span>
    </a>
    <ul class="nav nav-second-level">
        <li>
            <a href="{{ route('contacts.index') }}" class="{{ Request::is('contacts*') ? 'active' : '' }}">
                <span class="hide-menu">Todos</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="hide-menu">Clientes</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="hide-menu">Proveedores</span>
            </a>
        </li>
        <li>
            <a href="{{ route('contactTypes.index') }}" class="{{ Request::is('contactTypes*') ? 'active' : '' }}">
                <span class="hide-menu">Ajustes</span>
            </a>
        </li>
    </ul>
</li>



{{-- 
<li>
    <a href="{{ route('contacts.index') }}" class="waves-effect {{ Request::is('contacts*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Contactos</span>
    </a> 
</li>

<li>
    <a href="{{ route('contactTypes.index') }}" class="waves-effect {{ Request::is('contactTypes*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Contact Types</span>
    </a> 
</li>
 --}}
