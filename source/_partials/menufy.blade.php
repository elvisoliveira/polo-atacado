@foreach ($options as $menu)
    @php
        $slug = \Illuminate\Support\Str::slug($menu, '-');
    @endphp
    <li class="{{ $slug }}">
        <a href="{{ $page->baseUrl }}/{{ $slug }}">{{ $menu }}</a>
    </li>
@endforeach
