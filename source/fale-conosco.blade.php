@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_layouts.assine-news')
        @include('_layouts.fale-conosco', ['active' => 'fale-conosco'])
    </div>
    <div id="main">
        <div id="breadcrumb">Fale Conosco <span class="current">/ fale conosco</span></div>
        <div id="fale-conosco">
            <p class="title">Preencha os dados a seguir</p>
            <p>Entre em contato conosco por e-mail, telefone ou mande-nos uma mensagem por meio do formulário
                abaixo.<br />Estamos prontos para tirar suas dúvidas, ouvir críticas e elogios.</p>
            <p>Solicitamos a gentileza de preencher todos os campos para facilitar nosso contato.</p>
            <p>Os campos com (*) são de preenchimento obrigatório.</p>
            <form action="#" enctype="multipart/form-data" method="post">
                <fieldset>
                    <div class="field fale-conosco-assunto">
                        <span>* Assunto:</span>
                        <input type="text" class="text" name="assunto">
                    </div>
                    <div class="field fale-conosco-nome">
                        <span>* Nome:</span>
                        <input type="text" class="text" name="nome">
                    </div>
                    <div class="field fale-conosco-mail">
                        <span>* E-mail:</span>
                        <input type="text" class="text" name="mail">
                    </div>
                    <div class="field fale-conosco-telefone">
                        <span>* Telefone:</span>
                        <input type="text" class="text" name="telefone">
                    </div>
                    <div class="field fale-conosco-cidade">
                        <span>* Cidade:</span>
                        <input type="text" class="text" name="cidade">
                    </div>
                    <div class="field fale-conosco-mensagem">
                        <span>* Mensagem:</span>
                        <input type="text" class="text" name="mensagem">
                    </div>
                    <div class="action"><input type="submit" class="submit" value="Enviar"></div>
                </fieldset>
            </form>
            <hr>
            <p class="title">Contatos</p>
            <p>
                <strong>Cadastro:</strong> cadastro@poloatacado.com.br<br />
                <strong>Compras:</strong> compras@poloatacado.com.br<br />
                <strong>Marketing:</strong> marketing@poloatacado.com.br<br />
                <strong>Financeiro:</strong> financeiro@poloatacado.com.br<br />
                <strong>Logística:</strong> logistica@poloatacado.com.br<br />
                <strong>Vendas/Orçamento:</strong> vendas@poloatacado.com.br<br />
                <strong>Recursos Humanos:</strong> rh@poloatacado.com.br<br />
                <strong>Reclamações e Sugestões:</strong> sac@poloatacado.com.br
            </p>
        </div>
    </div>
@endsection
