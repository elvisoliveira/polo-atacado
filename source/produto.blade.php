@extends('_layouts.main')

@section('body')
    @include('_partials.catalogo-orcamento')
    <div id="sidebar">
        @include('_partials.assine-news')
        @include('_partials.produtos-menu')
        @include('_partials.redes-sociais')
    </div>
    <div id="main">
        <div id="breadcrumb">Produtos / Brinquedos <span class="current">/ infláveis</span></div>
        <div id="produto">
            <div class="galeria">
                <img class="centralize" src="{{ $page->baseUrl }}/images/produtos/05-large.jpg" width="315" height="315">
                <div class="thumbs">
                    <li>
                        <a href="#">
                            <img class="centralize"src="{{ $page->baseUrl }}/images/produtos/05-2.jpg" width="114"
                                height="103">
                        </a>
                    </li>
                    <li class="centro">
                        <a href="#">
                            <img class="centralize" src="{{ $page->baseUrl }}/images/icon-fotografia.gif" width="82"
                                height="59">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="centralize" src="{{ $page->baseUrl }}/images/icon-fotografia.gif" width="82"
                                height="59">
                        </a>
                    </li>
                </div>
            </div>

            <div class="descricao">
                <div class="descricao-titulo">Bóia Inflável - 1m diâmetro</div>
                <div class="descricao-texto">
                    <div class="valor">R$</div>
                    <div class="consulta">sob consulta</div>
                    <div class="orcamento"><a href="#">Acrescentar à lista e solicite o orçamento</a></div>
                    <div class="desconto">Acima de 10 caixas <span>10%</span> desconto</div>
                    <div class="descricao-produto">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla metus quis
                            massa condimentum mollis vitae vitae felis. Praesent quis vehicula dui. Integer diam
                            metus, posuere quis placerat non, dignissim vel justo. Etiam ac neque mi, vulputate
                            ultricies nisl. Duis sollicitudin, leo vel ultrices blandit, purus dolor volutpat
                            ligula, a rutrum massa nibh non orci. Mauris nec dolor in leo egestas blandit. Proin
                            condimentum sem sit amet nibh ultrices tincidunt.</p>
                    </div>
                    <div class="codigo">
                        <ul>
                            <li><strong>Código:</strong> 235618</li>
                            <li><strong>Marca:</strong> Cotiplás</li>
                            <li><strong>Unidade:</strong> cx c/ 12 un.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div id="produto-bottom">
            <div class="ultimos-produtos">
                <img src="{{ $page->baseUrl }}/images/bg-ultimos-produtos-vistos.jpg" width="264" height="30">
            </div>
            <div class="sugestao">
                <img src="{{ $page->baseUrl }}/images/bg-sugestao-polo.jpg" width="156" height="29">
            </div>
        </div>
    </div>
@endsection
