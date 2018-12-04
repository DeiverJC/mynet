<li>
    <a href="{{ route('home') }}" class="waves-effect {{ Request::is('home*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Inicio</span>
    </a> 
</li>



<li>
    <a href="{{ route('posts.index') }}" class="waves-effect {{ Request::is('posts*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Posts</span>
    </a> 
</li>

 



























<li>
    <a href="{{ route('typeContacts.index') }}" class="waves-effect {{ Request::is('typeContacts*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Type Contacts</span>
    </a> 
</li>

<li>
    <a href="{{ route('contacts.index') }}" class="waves-effect {{ Request::is('contacts*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Contacts</span>
    </a> 
</li>

<li>
    <a href="{{ route('contracts.index') }}" class="waves-effect {{ Request::is('contracts*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Contracts</span>
    </a> 
</li>

