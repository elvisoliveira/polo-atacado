@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_partials.assine-news')
        <div id="produtos-menu">&nbsp;</div>
    </div>
    <div id="main">
        <div id="breadcrumb">Como Comprar</div>
        <div id="como-comprar">
            <p><span class="title">Saiba quem está junto conosco</span></p>
            <p>Visite nossa loja ou compre pelo nosso Televendas. Faça seu cadastro!</p>
            <p>Contamos com uma equipe de profissionais qualificada para atendê-lo com praticidade e qualidade
                além de esclarecer todas as suas dúvidas.</p>
            <p>Televendas: Para comprar ou tirar dúvidas sobre produtos e preços, é só ligar: {{ $page->phone }}</p>
            <p>De segunda-feira a sexta-feira: Das 08:00h as 17:00h.</p>
            <p>Sábado: Das 08:00h as 12:00h.</p>
            <p>Formas de pagamento</p>
            <ul>
                <li>Dinheiro</li>
                <li>Cartão : Débito e Crédito*</li>
                <li>Cheque (Sujeito a aprovação de crédito)*</li>
                <li>Boleto Bancário (Sujeito a aprovação de crédito)*</li>
                <li>Parcelamento até 4x – Acima de 2x juros de 3,99% ao mês.</li>
            </ul>
            <hr>
            <p><span class="title">POLÍTICA DE TROCA E DEVOLUÇÕES</span></p>
            <p>A troca por desistência deve ser efetuada em até 07 (sete) dias após a compra do produto,
                mediante a apresentação da respectiva Nota Fiscal ou Cupom Fiscal;</p>
            <p>No prazo de 30 dias só haverá troca de produto quando este não funcionar e não apresentar dano
                físico.</p>
            <p>Não haverá troca de produtos por/quando:</p>
            <ul>
                <li>Avariado: quebra ou dano físico.</li>
                <li>Escolha errada, ex: não gostei da cor ou do modelo, após sete dias conforme item nº1.</li>
                <li>Produtos diferentes (salvo quando esse não funcionar e não houver mais disponível em
                    estoque).</li>
                <li>Sem nota fiscal ou com a embalagem avariada, quando este não funcionar e não apresentar dano
                    físico.</li>
            </ul>
            <p>Não trocamos produtos danificados. Para a efetivação da troca, os produtos devem conter todos os
                acessórios, peças e embalagem original, além de estar em perfeito estado para ser
                comercializado;</p>
            <p>A troca ou devolução deverá ser feita na loja Polo Atacado – seguindo os itens acima. Produtos
                sob encomenda que foram adquiridos para atender exclusivamente ao cliente, não serão trocados (o
                cliente será orientado na compra deste tipo de produto).</p>
            <p>Senhores clientes gentileza conferir sua mercadoria antes de finalizar a compra para assim,
                evitar transtornos futuros.</p>
            <div class="aviso">Mais informações sobre este serviço podem ser obtidas através do SAC
                –sac@poloatacado.com.br - horário de atendimento de segunda à sexta das 08:00h às 17:00h. Sábado
                das 08:00h às 12:00h</div>
        </div>
    </div>
@endsection
