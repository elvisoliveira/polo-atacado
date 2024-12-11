@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_layouts.assine-news')
        @include('_layouts.fale-conosco', ['active' => 'trabalhe-conosco'])
    </div>
    <div id="main">
        <div id="breadcrumb">Fale Conosco <span class="current">/ Trabalhe conosco</span></div>
        <div id="trabalhe-conosco">
            <h1>Preencha os dados a seguir</h1>
            <p>Venha fazer parte de uma equipe que está sempre crescendo!<br />Teremos o maior prazer em receber
                seu currículo.</p>
            <p>Solicitamos a gentileza de preencher todos os campos para facilitar nosso contato.</p>
            <p>Os campos com (*) são de preenchimento obrigatório.</p>
            <form action="#" enctype="multipart/form-data" method="post">
                <fieldset>
                    <div class="field nome">
                        <span>* Nome: </span>
                        <input type="text" class="text" name="nome">
                    </div>
                    <div class="field email">
                        <span>* E-mail: </span>
                        <input type="text" class="text" name="email">
                    </div>
                    <div class="field telefone">
                        <span>* Telefone:</span>
                        <input type="text" class="text" name="telefone">
                    </div>
                    <div class="field curriculo">
                        <span>Anexe o seu currículo:</span>
                        <input type="file" class="text" name="curriculo">
                    </div>
                    <div class="action">
                        <input type="submit" class="submit" value="Enviar">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
