@extends('_layouts.main')

@section('body')
    @include('_partials.catalogo-orcamento')
    <div id="sidebar">
        @include('_partials.assine-news')
        @include('_partials.produtos-menu')
        @include('_partials.redes-sociais')
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
                            <a href="{{ $page->baseUrl }}/produto" class="centralize">
                                <img src="{{ $page->baseUrl }}/images/produtos/{{ $product->id }}.png"
                                    width="{{ $product->image->width }}" height="{{ $product->image->height }}" />
                            </a>
                        </div>
                        <div class="descricao">
                            <a href="{{ $page->baseUrl }}/produto" class="produto-nome">{{ $product->title }}</a>
                            <a href="{{ $page->baseUrl }}/produto"
                                class="produto-quantidade">{{ $product->description }}</a>
                            <a href="{{ $page->baseUrl }}/produto" class="fardo">
                                Fardo com {{ $product->box }} caixas
                                <span class="desconto">{{ $product->discount }}%</span>
                                desconto.
                            </a>
                        </div>
                        <div class="opcoes">
                            <a href="{{ $page->baseUrl }}/produto" class="produto">
                                <img src="{{ $page->baseUrl }}/images/bt-adicionar-ao-orcamento.gif" />
                            </a>
                            <a href="{{ $page->baseUrl }}/produto" class="orcamento">
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
