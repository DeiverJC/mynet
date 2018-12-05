<li>
    <a href="{{ route('home') }}" class="waves-effect {{ Request::is('home*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Inicio</span>
    </a> 
</li>

<li>
    <a href="{{ route('contactTypes.index') }}" class="waves-effect {{ Request::is('contactTypes*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Contact Types</span>
    </a> 
</li>

<li> <a href="{{ route('home') }}" class="waves-effect  {{ Request::is('contacts*') ? 'active' : '' }}">
     <i data-icon="7" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Contactos<span class="fa arrow">
        </span></span></a>
    <ul class="nav nav-second-level">
        <li> <a href="{{ route('contacts.index') }}"><span class="hide-menu">Todos</span></a> </li>
        <li> <a href="index2.html"><span class="hide-menu">Clientes</span></a> </li>
        <li> <a href="index3.html"><span class="hide-menu">Proveedores</span></a> </li>
    </ul>
</li>

<li> <a href="{{ route('home') }}" class="waves-effect  {{ Request::is('contacts*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Inventario<span class="fa arrow">
           </span></span></a>
       <ul class="nav nav-second-level">
           <li> <a href="{{ route('items.index') }}" ><span class="hide-menu">Items</span></a> </li>
           <li> <a href="{{ route('inventoryAdjustments.index') }}"><span class="hide-menu">Ajuste de Items</span></a> </li>
       </ul>
</li>



