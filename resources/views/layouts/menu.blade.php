<li>
    <a href="{{ route('home') }}" class="waves-effect {{ Request::is('home*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Inicio</span>
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

<li>
    <a href="{{ route('articles.index') }}" class="waves-effect {{ Request::is('articles*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Articles</span>
    </a> 
</li>





<li>
    <a href="{{ route('articleTypes.index') }}" class="waves-effect {{ Request::is('articleTypes*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Article Types</span>
    </a> 
</li>



<li>
    <a href="{{ route('contractDetails.index') }}" class="waves-effect {{ Request::is('contractDetails*') ? 'active' : '' }}">
        <i data-icon="7" class="linea-icon linea-basic fa-fw"></i>
        <span class="hide-menu">Contract Details</span>
    </a> 
</li>

