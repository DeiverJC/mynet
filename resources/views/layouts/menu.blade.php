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

<li>
    <a href="{{ route('home') }}" class="waves-effect  {{ Request::is('items*') || Request::is('inventoryAdjustments*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Inventario<span class="fa arrow"></span></span>
    </a>
    <ul class="nav nav-second-level">
        <li>
            <a href="{{ route('items.index') }}" class="{{ Request::is('items*') ? 'active' : '' }}">
                <span class="hide-menu">Todos los articulos</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="hide-menu">Servicios</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="hide-menu">Productos</span>
            </a>
        </li>
        <li>
            <a href="{{ route('inventoryAdjustments.index') }}" class="{{ Request::is('contactTypes*') ? 'active' : '' }}">
                <span class="hide-menu">Ajustes de inventario</span>
            </a>
        </li>
    </ul>
</li>


<li>
    <a href="{{ route('contracts.index') }}" class="waves-effect {{ Request::is('contracts*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Contracts</span>
    </a> 
</li>

