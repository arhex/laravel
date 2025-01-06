@props(['active' => false])
<a class="nav-link {{ $active ? 'active' : 'text-white' }}" aria-current="page" {{$attributes}}>
    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
    {{ $slot }}
</a>
