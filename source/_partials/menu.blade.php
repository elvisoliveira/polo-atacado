<div class="container" id="menu">
    <div class="center">
        <ul>
            @foreach ($page->menu as $menu)
                <li class="{{ \Illuminate\Support\Str::slug($menu, '-') }}">
                    <a href="#">{{ $menu }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
