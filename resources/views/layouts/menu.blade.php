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

<li>
    <a href="{{ route('contacts.index') }}" class="waves-effect {{ Request::is('contacts*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Contacts</span>
    </a> 
</li>

