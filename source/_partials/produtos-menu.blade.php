<div id="produtos-menu">
    <dl>
        <dt>Destaques</dt>
        @foreach ($page->menu as $menu)
            <dd>{{ $menu }}</dd>
        @endforeach
    </dl>
    <dl>
        <dt>Marcas</dt>
        @foreach ($page->categories as $category => $items)
            <dd class="categoria">{{ $category }}</dd>
            @foreach ($items as $item)
                <dd>{{ $item }}</dd>
            @endforeach
        @endforeach
    </dl>
</div>
