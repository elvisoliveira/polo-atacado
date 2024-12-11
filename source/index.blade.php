@extends('_layouts.main')

@section('body')
    <div id="catalogo-orcamento">
        <ul>
            <li class="download">
                <a href="#">Faça o download do nosso catálogo e veja as melhores ofertas</a>
            </li>
            <li class="catalogo">
                <a href="#">Catálogo Agosto / Setembro</a>
            </li>
            <li class="orcamento">
                <a href="#">0 itens em seu orçamento</a>
            </li>
        </ul>
    </div>
    <div id="sidebar">
        @include('_layouts.assine-news')
        <div id="produtos-menu">
            <dl>
                <dt>Destaques</dt>
                @foreach ($page->menu as $menu)
                    <dd>{{ $menu }}</dd>
                @endforeach
            </dl>
            <hr />
            <dl>
                <dt>Marcas</dt>
                @foreach ($page->categories as $category => $items)
                    <dd class="categoria">{{ $category }}</dd>
                    @foreach ($items as $item)
                        <dd>{{ $item }}</dd>
                    @endforeach
                    <hr />
                @endforeach
            </dl>
        </div>
        <div id="redes-sociais">
            <img src="{{ $page->baseUrl }}/images/banner-redes-sociais.png" width="228" height="102" />
        </div>
    </div>
    <div id="main">
        <div id="topo-destaques">
            <img src="{{ $page->baseUrl }}/images/topo-destaques.png" width="711" height="96" />
        </div>
        <div id="topo-filtro">
            <hr /><span>Ordenar por:</span>
            <form action="#" enctype="multipart/form-data" method="post">
                <fieldset>
                    <div class="field">
                        <select>
                            <option value="mais-vendidos">Mais Vendidos</option>
                        </select>
                    </div>
                </fieldset>
            </form>
        </div>
        <div id="meio-produtos">
            <ul>
                @foreach ($page->products as $product)
                    <li class="{{ $product->label }}">
                        <div class="foto">
                            <a href="#">
                                <img src="{{ $page->baseUrl }}/images/produtos/{{ $product->id }}.png"
                                    width="{{ $product->image->width }}" height="{{ $product->image->height }}" />
                            </a>
                        </div>
                        <div class="descricao">
                            <a href="#" class="produto-nome">{{ $product->title }}</a>
                            <a href="#" class="produto-quantidade">{{ $product->description }}</a>
                            <a href="#" class="fardo">
                                Fardo com {{ $product->box }} caixas
                                <span class="desconto">{{ $product->discount }}%</span>
                                desconto.
                            </a>
                        </div>
                        <div class="opcoes">
                            <a href="#" class="produto">
                                <img src="{{ $page->baseUrl }}/images/bt-adicionar-ao-orcamento.gif" />
                            </a>
                            <a href="#" class="orcamento">
                                <img src="{{ $page->baseUrl }}/images/bg-especificacoes-do-produto.gif" />
                            </a>
                        </div>
                    </li>
                    @if ($product->label === 'third')
                        <hr />
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endsection
