@extends('_layouts.main')

@section('body')
    <div class="center">
        <div id="sidebar">
            @include('_partials.assine-news')
            <div id="produtos-menu">&nbsp;</div>
        </div>
        <div id="main">
            <div id="breadcrumb">Assine News</div>
            <div id="assine-news-page">
                <h1>Fique por dentro do que acontece na polo atacado</h1>
                <p>Para receber descontos exclusivos e promoções no seu email, preencha os campos abaixo:</p>
                <form action="#" enctype="multipart/form-data" method="post">
                    <fieldset>
                        <div class="field nome">
                            <span>Seu nome:</span>
                            <input type="text" class="text" name="nome">
                        </div>
                        <div class="field email">
                            <span>Seu e-mail:</span>
                            <input type="text" class="text" name="email">
                        </div>
                        <div class="field sms">
                            <span>Seu Celular (SMS):</span>
                            <input type="text" class="text" name="sms">
                        </div>
                        <div class="field avisos">
                            <input type="checkbox" name="avisos" value="avisos">
                            <span>Desejo receber avisos de ofertas por SMS no celular</span>
                        </div>
                        <div class="field">
                            <span>Lembrando que seu e-mail não será fornecido a terceiros, e você poderá cancelar o
                                recebimento desta newsletter a qualquer momento por e-mail, ou usando este mesmo
                                formulário.</span>
                        </div>
                        <div class="field cadastrar">
                            <input type="checkbox" name="cadastrar" value="cadastrar">
                            <span>Quero me cadastrar para o recebimento</span>
                        </div>
                        <div class="field cancelar">
                            <input type="checkbox" name="cancelar" value="cancelar">
                            <span>Quero cancelar meu cadastro </span>
                        </div>
                        <div class="action">
                            <input type="submit" class="submit" value="Enviar">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
