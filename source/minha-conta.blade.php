@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_layouts.assine-news')
        <div id="produtos-menu">&nbsp;</div>
    </div>
    <div id="main">
        <div id="breadcrumb">Minha Conta <span class="current">/ Login</span></div>
        <div id="cadastre-se">
            <h1>Minha Conta</h1>
            <form action="#" enctype="multipart/form-data" method="post">
                <fieldset>
                    <div class="label">LOGIN</div>
                    <div class="action"><input type="submit" class="submit" value="Entrar"></div>
                    <div class="field">
                        <span>Usuário:</span>
                        <input type="text" class="text" name="username" />
                    </div>
                    <div class="field">
                        <span>Senha:</span>
                        <input type="password" class="text" name="password" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
