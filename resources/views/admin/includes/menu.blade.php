
@if($all)
@foreach($all_items as $all)
<li class="divider" data-toogle="{{ $all->name }}">
    
    <a href="{{ route ($all->route) }}">
        <i class="{{ $all->icon }}"></i>
        <span class="nav-label">{{ $all->name }} </span>
    </a>

    
</li>
@endforeach