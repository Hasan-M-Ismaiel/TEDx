<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <!-- brand name and logo-->
    <div class="sidebar-brand d-none d-md-flex">
            
        <svg class="sidebar-brand-full" width="118" height="46" alt="TeamWork Logo">
            <use xlink:href="{{ asset('assets/brand/TeamWorkOK.svg#full') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="TeamWork Logo">
            <use xlink:href="{{ asset('assets/brand/TeamWorkcheckmark.svg#full') }}"></use>
        </svg>
    </div>

    <!-- nav bar items-->
    <ul id="parent" class="sidebar-nav " data-coreui="navigation" data-simplebar="" class="nav flex-column" id="nav_accordion">
        <!--remove the comment here-->
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>         

        <div class="context">
            <li class="nav-item ">
                <a class="nav-link" href="{{route('home')}}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                    </svg> 
                    Dashboard
                </a>
            </li>
        </div>
        
        <!--events-->
        <li class="nav-item context mt-5">
            <a class="nav-link" href="{{ route('admin.events.index') }}">
                <svg class="nav-icon">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                </svg> 
                Events
            </a>
        </li>

        <!--speaker-->
        <li class="nav-item context1">
            <a class="nav-link" href="{{ route('admin.speakers.index') }}">
                <svg class="nav-icon">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list-high-priority') }}"></use>
                </svg> 
                Speakers
            </a>
        </li>

        <!--sponsers-->
        <li class="nav-item context2">
            <a class="nav-link" href="{{ route('admin.sponsers.index') }}">
                <svg class="nav-icon">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                </svg> 
                Sponsers
            </a>
        </li>

        <!--registers-->
        <li class="nav-item context3">
            <a class="nav-link" href="{{ route('admin.registers.index') }}">
                <svg class="nav-icon">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user-follow') }}"></use>
                </svg> 
                Registers
            </a>
        </li>

        <!--volunteers-->
        <li class="nav-item context4">
            <a class="nav-link" href="{{ route('admin.volunteers.index') }}">
                <svg class="nav-icon">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg> 
                Volunteers
            </a>
        </li>

        <!--Members-->
        <li class="nav-item context6">
            <a class="nav-link" href="{{ route('admin.members.index') }}">
                <svg class="nav-icon">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg> 
                Members
            </a>
        </li>

        <!--logout-->
        <li class="nav-item context5" id="logout">
            <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                <svg class="nav-icon">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                </svg> 
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>

    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>

<!--for the template-->
<script>
    document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
        
        element.addEventListener('click', function (e) {

        let nextEl = element.nextElementSibling;
        let parentEl  = element.parentElement;	

            if(nextEl) {
                e.preventDefault();	
                let mycollapse = new bootstrap.Collapse(nextEl);
                
                if(nextEl.classList.contains('show')){
                mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                    // if it exists, then close all of them
                    if(opened_submenu){
                    new bootstrap.Collapse(opened_submenu);
                    }
                }
            }
        }); // addEventListener
    }) // forEach
    }); 
// DOMContentLoaded  end
</script>
