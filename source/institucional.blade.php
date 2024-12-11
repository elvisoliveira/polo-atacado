@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_layouts.assine-news')
        <div id="produtos-menu">
            <dl>
                <dt>Institucional</dt>
                <dd class="selected">A Empresa</dd>
                <dd>Missão</dd>
                <dd>Visão</dd>
            </dl>
        </div>
    </div>
    <div id="main">
        <div id="breadcrumb">Institucional</div>
        <div id="institucional">
            <h1>A empresa</h1>
            <p>A Polo Atacado atua com venda e distribuição de produtos nos segmentos de Papelaria, Brinquedos,
                Utilidades, Presentes, Artigos de Época, Informática entre outros, em um mix diversificado de
                mais de 12.000 itens.</p>
            <p>Ampliando continuamente o sortimento de produtos e novidades, a empresa está investindo no que há
                de melhor, disponibilizando produtos com qualidade e preços acessíveis para atender as
                expectativas de seus clientes. </p>
            <p>A Polo atua em modelo auto-serviço, com espaço amplo e localização privilegiada em um galpão de
                5.000 m² próximo ao Ceasa em Contagem.<br />Além disso, conta com um sistema de televendas e
                vendas externas, aliado a uma logística eficiente proporcionando aos clientes comodidade na hora
                da compra.</p>
            <p>A Polo preza pela excelência no atendimento através de funcionários qualificados e dispostos a
                auxiliar seus clientes na realização de suas compras com agilidade e confiança. Também conta um
                Espaço Kids onde crianças menores de 12 anos podem se entreterem enquanto os pais aproveitam seu
                momento de compras na Polo Atacado. </p>
            <p><img src="{{ $page->baseUrl }}/images/foto-loja.jpg" width="688" height="183"></p>
        </div>
    </div>
@endsection
