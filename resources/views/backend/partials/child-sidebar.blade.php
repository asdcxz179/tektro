@foreach($menu as $value)
  <li class="{{ request()->is('backend/'.$value['active']) ? ' open' : '' }}">
    @if(isset($value['child'])) 
      <a class="nav-submenu" data-toggle="nav-submenu" href="#">
        @isset($value['icon'])<i class="{{ $value['icon'] }}"></i>@endisset
        <span class="sidebar-mini-hide">{{ __("backend.menu.{$value['title']}") }}</span>
      </a>                  
      <ul>         
        @include('backend.partials.child-sidebar', [ 'menu' => $value['child'] ])                                           
      </ul>
    @else      
      @if(in_array('read '.$value['permissions'], $permissions) || auth()->user()->super_admin)
      <a class="{{ request()->is('backend/'.$value['active']) || request()->is('backend/'.$value['active'].'/*') ? ' active' : '' }}" href="{{ route('backend.'.$value['name'].'.index') }}">
        @isset($value['icon'])<i class="{{ $value['icon'] }}"></i>@endisset
        <span class="sidebar-mini-hide">{{ __("backend.menu.{$value['title']}") }}</span>                         
      </a>    
      @endif                
    @endif                      
  </li>
@endforeach
