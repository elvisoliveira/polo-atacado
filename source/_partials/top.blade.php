<div class="container" id="topo">
    <div class="center">
        <div class="cadastro">
            <a href="#">Seja bem vindo. Já é cadastrado?</a>
        </div>
        <div class="fale-conosco-menu">
            <ul>
                @include('_partials.menufy', [
                    'options' => ['Fale Conosco', 'Minha Conta', 'Minhas Listas', 'Como Chegar'],
                ])
            </ul>
        </div>
        <div class="topo-menu">
            <ul>
                <li class="first">
                    <a href="{{ $page->baseUrl }}/">Home</a>
                </li>
                @include('_partials.menufy', [
                    'options' => ['Institucional', 'Produtos', 'Fornecedores', 'Como Comprar'],
                ])
                <li class="last">
                    <a href="{{ $page->baseUrl }}/pessoa-fisica">Cadastre-se</a>
                </li>
            </ul>
        </div>
    </div>
</div>
