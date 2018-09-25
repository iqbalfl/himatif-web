<ul class="navbar-nav ml-auto">
  @foreach($items as $key => $menu_item)
    @php
        $submenu = $menu_item->children;
    @endphp
    @if(count($submenu) >= 1)
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" target="{{ $menu_item->target }}" href="{{ $menu_item->url }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $menu_item->title }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($submenu as $item)
              <a class="dropdown-item" target="{{ $item->target }}" href="{{$item->url}}">{{$item->title}}</a>
            @endforeach
        </div>
      </li>
    @else
      <li>
          <a target="{{ $menu_item->target }}" href="{{ $menu_item->link() }}" class="nav-link @if($key==0) active @endif">{{ $menu_item->title }}</a>
      </li>
    @endif
  @endforeach
</ul>