@if($pages)
    @foreach($pages as $page)
       
        @if(count($page->childs) > 0)
            <li class="divider" data-toogle="{{$page->name}}">
                <a href="#">
                    <i class="{{$page->icon}}"></i>
                    <span class="nav-label">{{$page->name}}</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse in">            
                    @include('admin.inlcudes.menu-childs', ['childs' => $page->childs()])
                </ul>
            </li>
        @else
            <li class="divider" data-toogle="{{$page->name}}">
                <a href="{{ Route($page->route) }}">
                    <i class="{{$page->icon}}"></i>
                    <span class="nav-label">{{$page->name}}</span>
                </a>
            </li>
        @endif
        
    @endforeach
@endif