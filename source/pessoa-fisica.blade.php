@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_layouts.assine-news')
        <div id="produtos-menu">
            @include('_layouts.cadastre-se', ['active' => 'pessoa-fisica'])
        </div>
    </div>
    <div id="main">
        <div id="breadcrumb">Cadastre-se <span class="current">/ Pessoa Física</span></div>
        <div id="cadastre-se">
            <h1>Preencha os dados a seguir</h1>
            <p>Se você ainda não é cliente, faça seu cadastro clicando em Ainda não sou cliente. É fácil e
                rápido. Ou faça o login informando CNPJ/CPF e senha. </p>
            <form action="#" enctype="multipart/form-data" method="post" class="pessoa-fisica">
                <fieldset>
                    <div class="label">FICHA CADASTRAL PESSOA FÍSICA</div>
                    <div class="action"><input type="submit" class="submit" value="Enviar"></div>

                    <div class="field pessoa-fisica-nome">
                        <span>Nome:</span>
                        <input type="text" class="text" name="nome">
                    </div>
                    <div class="field pessoa-fisica-cpf">
                        <span>CPF:</span>
                        <input type="text" class="text" name="cpf">
                    </div>
                    <div class="field pessoa-fisica-rg">
                        <span>RG:</span>
                        <input type="text" class="text" name="rg">
                    </div>
                    <div class="field pessoa-fisica-endereco">
                        <span>Endereço:</span>
                        <input type="text" class="text" name="endereco">
                    </div>
                    <div class="field pessoa-fisica-numero">
                        <span>Nº:</span>
                        <input type="text" name="numero" class="text">
                    </div>

                    <div class="field pessoa-fisica-comp">
                        <span>Comp.:</span>
                        <input type="text" name="comp" class="text">
                    </div>

                    <div class="field pessoa-fisica-bairro">
                        <span>Bairro:</span>
                        <input type="text" class="text" name="bairro">
                    </div>
                    <div class="field pessoa-fisica-cep">
                        <span>CEP:</span>
                        <input type="text" class="text" name="cep">
                    </div>
                    <div class="field pessoa-fisica-cidade">
                        <span>Cidade:</span>
                        <input type="text" class="text" name="cidade">
                    </div>
                    <div class="field pessoa-fisica-uf">
                        <span>UF:</span>
                        <input type="text" class="text" name="uf">
                    </div>
                    <div class="field pessoa-fisica-tel">
                        <span>Tel/Cel:</span>
                        <input type="text" name="tel" class="text"><input type="text" name="cel"
                            class="text">
                    </div>
                    <div class="field pessoa-fisica-mail">
                        <span>E-mail:</span>
                        <input type="text" class="text" name="mail">
                    </div>
                    <div class="field pessoa-fisica-comercio">
                        <span>Possui comércio?</span>
                        <input type="text" class="text" name="comercio">
                    </div>
                    <div class="field pessoa-fisica-ramo">
                        <span>Qual ramo?</span>
                        <input type="text" class="text" name="ramo">
                    </div>
                    <div class="field pessoa-fisica-observacao">
                        <span>Observação:</span>
                        <input type="text" class="text" name="observacao">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
