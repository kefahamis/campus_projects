
<div class="c-wrapper">
<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button><a class="c-header-brand d-sm-none" href="#"><img class="c-header-brand" src="/assets/brand/coreui-base.svg" width="97" height="46" alt="CoreUI Logo"></a>
        <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button> 
        <ul class="c-header-nav ml-auto mr-4">
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link">
              <svg class="c-icon">
                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link">
              <svg class="c-icon">
                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-list-rich"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link">
              <svg class="c-icon">
                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open"></use>
              </svg></a></li>
          <li class="nav-item dropdown">
              <a href="#" role="button" data-toggle="dropdown">
                
                {{ Auth::user()->name}}<span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">    
                                   <a href="#" class="dropdown-item" >My Account</a>
                                   <a href="#" class="dropdown-item" >Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                   
          </li>
        </ul>
        
        <div class="c-subheader px-3">
          <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
                                  </ol>
        </div>
    </header>
