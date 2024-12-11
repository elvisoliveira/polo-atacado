@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_partials.assine-news')
        <div id="produtos-menu">&nbsp;</div>
    </div>
    <div id="main">
        <div id="breadcrumb">Fornecedores</div>
        <div id="fornecedores">
            <p class="title">Saiba quem está junto conosco</p>
            <p>Sempre em busca de melhores resultados e da satisfação total de nossos clientes selecionamos
                fornecedores que são referência em qualidade e confiança.</p>
            <ul class="fornecedores">
                @foreach (['bandeirante', 'chicco', 'dtc', 'estrela', 'grow', 'gulliver', 'hasbro', 'hotwheels', 'lego', 'mattel', 'max', 'pbkids', 'polly', 'tindolele'] as $item)
                    <li>
                        <a href="#"><img src="{{ $page->baseUrl }}/images/fornecedores/{{ $item }}.jpg" /></a>
                    </li>
                @endforeach
            </ul>
            <hr>
            <p>Para oferecer produtos e serviços para a Polo Atacado, você deverá entrar em contato com nosso
                departamento de compras de segunda a sexta-feira em horário comercial.</p>
            <ul class="contato">
                <li class="contato-telefone">Telefone {{ $page->phone }}</li>
                <li class="contato-email">compras@poloatacado.com.br</li>
            </ul>
        </div>
    </div>
@endsection
