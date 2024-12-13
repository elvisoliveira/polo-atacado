@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_partials.assine-news')
        <div id="produtos-menu">&nbsp;</div>
    </div>
    <div id="main">
        <div id="breadcrumb">Minha Conta <span class="current">/ Login</span></div>
        <div id="cadastre-se">
            <h1>Minha Conta</h1>
            <form action="#" method="post" autocomplete="off">
                <label>CPF/CNPJ <input name="fields[cpf-cnpj]" type="text" /></label>
                <label>Senha <input name="fields[senha]" type="password" /></label>
                <input name="member-action[login]" type="submit" value="Acessar" />
            </form>
        </div>
    </div>
@endsection
