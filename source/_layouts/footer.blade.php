<div class="container" id="rodape">
    <div class="center">
        <ul class="marcas">
            @foreach ($page->brands as $brand)
                <li>
                    <a href="#">
                        <img src="{{ $page->baseUrl }}/images/marcas/{{ $brand->filename }}" width="{{ $brand->width }}"
                            height="{{ $brand->height }}" />
                    </a>
                </li>
            @endforeach
        </ul>
        <ul class="menu-rodape">
            <li><a href="{{ $page->baseUrl }}/">Home</a></li>
            @include('_layouts.menufy', [
                'options' => ['Institucional', 'Produtos', 'Como Comprar', 'Fale Conosco'],
            ])
        </ul>
        <div id="redes-sociais-rodape">
            <a href="#" class="twitter">Twitter</a>
            <a href="#" class="facebook">Facebook</a>
            <a href="{{ $page->baseUrl }}/como-chegar" class="gmaps">Gmaps</a>
        </div>
        <p>{{ implode(' • ', $page->address->toArray()) }}</p>
    </div>
</div>
