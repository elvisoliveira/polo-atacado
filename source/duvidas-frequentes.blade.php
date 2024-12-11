@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_partials.assine-news')
        @include('_partials.fale-conosco', ['active' => 'duvidas-frequentes'])
    </div>
    <div id="main">
        <div id="breadcrumb">Fale Conosco <span class="current">/ dúvidas frequentes</span></div>
        <div id="duvidas-frequentes">
            <h1>Perguntas e respostas</h1>
            <ul>
                <li>
                    <p><span>1) Como posso comprar na Polo Atacado?</span></p>
                    <p>Para realizar suas compras você poderá visitar a loja na {{ implode(', ', $page->address->toArray()) }}, próximo ao CEASA</p>
                    <p>(Acesse o mapa). Compre também pelo telefone {{ $page->phone }} de 08 às 17:00 h.</p>
                </li>
                <li>
                    <p><span>2) Como faço um orçamento?</span></p>
                    <p>Através do nosso site visualize os produtos e escolha a opção “incluir no orçamento”, Não
                        se esqueça de preencher corretamente seus dados para contato. Você poderá também enviar
                        seu orçamento para: {{ $page->email }}.</p>
                    <p>Faça seu orçamento pelo telefone {{ $page->phone }} de 08 às 17:00 h.</p>
                </li>
                <li>
                    <p><span>3) Existe valor mínimo para compras?</span></p>
                    <p>O valor mínimo de compras é R$ 500,00.</p>
                </li>
                <li>
                    <p><span>4) Quais as formas de pagamento?</span></p>
                    <p>Pague com dinheiro, cartões de débito ou crédito, cheque ou boleto.</p>
                    <p>Dividimos em até 4 vezes* com parcela mínima de R$ 300,00. Para pagamento com boleto ou
                        cheque é necessário cadastro prévio com limite pré- aprovado. (Veja a ficha de
                        cadastro).</p>
                    <p>*parcelamos em até 4 vezes com acréscimo de juros de 3,99% ao mês. Para pagamento em até
                        30 dias não serão acrescidos juros.</p>
                </li>
                <li>
                    <p><span>5) Quais são os documentos necessários para cadastro?</span></p>
                    <p>Consulte a ficha de cadastro para Pessoa Jurídica</p>
                    <p>Consulte a ficha de cadastro para Pessoa Física</p>
                </li>
                <li>
                    <p><span>6) Quantas pessoas podem entrar na loja por cadastro?</span></p>
                    <p>Não há restrições para número de pessoas, porém, por medida de segurança, todos deverão
                        ser cadastrados na entrada da loja.</p>
                    <p>Não é permitida a entrada na loja de crianças menores de 12 anos, a loja possui Espaço
                        Kids. Não temos monitores, as crianças devem estar acompanhadas por um responsável neste
                        espaço.</p>
                    <p>Não é permitida a entrada de animais na loja.</p>
                </li>
                <li>
                    <p><span>7) A Polo Atacado trabalha com entrega?</span></p>
                    <p>Sim, você poderá indicar qual a transportadora de sua preferência e a Polo Atacado
                        solicitará a retirada. O valor do frete é pago pelo cliente. Trabalhamos também com
                        entrega, consulte condições através do telefone (31)</p>
                </li>
            </ul>
        </div>
    </div>
@endsection
