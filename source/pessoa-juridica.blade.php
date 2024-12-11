@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_partials.assine-news')
        <div id="produtos-menu">
            @include('_partials.cadastre-se', ['active' => 'pessoa-juridica'])
            <div class="obs">
                <div class="obs-title">OBSERVAÇÃO:</div>
                <div class="obs-desc">
                    <p>Documentos necessários:<br />Ficha cadastral preenchida;<br />Comprovante de endereço
                        atualizado (3 últimos meses)<br />ex: conta de luz, telefone.</p>
                    <p>Para compras no cheque ou boleto bancário necessário: Contrato Social e Documentos dos
                        sócios que assinam pela empresa.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="main">
        <div id="breadcrumb">Cadastre-se <span class="current">/ Pessoa Jurídica</span></div>
        <div id="cadastre-se">
            <h1>Meus dados</h1>

            <form method="post" enctypelink="multipart/form-data" action="#" class="pessoa-juridica">
                <fieldset>
                    <div class="label">FICHA CADASTRAL PESSOA JURÍDICA</div>
                    <div class="action"><input type="submit" value="Enviar" class="submit"></div>
                    <div class="field pessoa-juridica-responsavel">
                        <span>Responsável:</span>
                        <input value="" type="text" name="responsavel" class="text">
                    </div>
                    <div class="field pessoa-juridica-mail">
                        <span>E-mail:</span>
                        <input value="" type="text" name="mail" class="text">
                    </div>
                    <div class="field pessoa-juridica-social">
                        <span>Razão Social:</span>
                        <input value="" type="text" name="social" class="text">
                    </div>
                    <div class="field pessoa-juridica-fantasia">
                        <span>Nome Fantasia:</span>
                        <input value="" type="text" name="fantasia" class="text">
                    </div>
                    <div class="field pessoa-juridica-cnpj">
                        <span>CNPJ:</span>
                        <input value="" type="text" name="cnpj" class="text">
                    </div>
                    <div class="field pessoa-juridica-insc">
                        <span>Insc. Estad.:</span>
                        <input value="" type="text" name="insc" class="text">
                    </div>
                    <div class="field pessoa-juridica-endereco">
                        <span>Endereço:</span>
                        <input value="" type="text" name="endereco" class="text">
                    </div>
                    <div class="field pessoa-juridica-numero">
                        <span>Nº:</span>
                        <input value="" type="text" name="numero" class="text">
                    </div>
                    <div class="field pessoa-juridica-comp">
                        <span>Comp.:</span>
                        <input value="" type="text" name="comp" class="text">
                    </div>
                    <div class="field pessoa-juridica-bairro">
                        <span>Bairro:</span>
                        <input value="" type="text" name="bairro" class="text">
                    </div>
                    <div class="field pessoa-juridica-cep">
                        <span>CEP:</span>
                        <input value="" type="text" name="cep" class="text">
                    </div>
                    <div class="field pessoa-juridica-cidade">
                        <span>Cidade:</span>
                        <input value="" type="text" name="cidade" class="text">
                    </div>
                    <div class="field pessoa-juridica-uf">
                        <span>UF:</span>
                        <input value="" type="text" name="uf" class="text">
                    </div>
                    <div class="field pessoa-juridica-tel">
                        <span>Tel/Cel:</span>
                        <input value="" name="tel" class="text" type="text">
                        <input value="" name="cel" class="text" type="text">
                    </div>
                    <div class="field pessoa-juridica-ramo">
                        <span>Ramo:</span>
                        <input type="checkbox" value="papelaria" name="papelaria">
                        <span>Papelaria</span>
                        <input type="checkbox" value="utilidades" name="utilidades">
                        <span>Utilidades/ Presentes</span>
                        <input type="checkbox" value="brinquedos" name="brinquedos">
                        <span>Brinquedos</span>
                        <input type="checkbox" value="outros" name="outros">
                        <span>Outros</span>
                    </div>
                    <div class="field pessoa-juridica-segmentos">
                        <p>Caso atue com todos os segmentos acima, enumere em ordem de importância.</p>
                    </div>
                    <div class="field pessoa-juridica-cliente">
                        <span>Já é cliente?:</span>
                        <input type="radio" value="sim" name="pessoa-juridica-cliente">
                        <span>Sim</span>
                        <input type="radio" value="nao" name="pessoa-juridica-cliente">
                        <span>Não</span>
                    </div>
                    <div class="label-second">REFERÊNCIA COMERCIAL</div>
                    <ul class="multifield">
                        <li>
                            <div class="field pessoa-juridica-comercial-empresa">
                                <span>Empresa:</span>
                                <input value="" type="text" name="comercial-empresa" class="text">
                            </div>
                            <div class="field pessoa-juridica-comercial-tel">
                                <span>Tel:</span>
                                <input value="" type="text" name="comercial-tel" class="text">
                            </div>
                            <div class="field pessoa-juridica-comercial-contato">
                                <span>Contato:</span>
                                <input value="" type="text" name="comercial-contato" class="text">
                            </div>
                        </li>
                        <li>
                            <div class="field pessoa-juridica-comercial-empresa">
                                <span>Empresa:</span>
                                <input type="text" name="comercial-empresa" class="text">
                            </div>
                            <div class="field pessoa-juridica-comercial-tel">
                                <span>Tel:</span>
                                <input type="text" name="comercial-tel" class="text">
                            </div>
                            <div class="field pessoa-juridica-comercial-contato">
                                <span>Contato:</span>
                                <input type="text" name="comercial-contato" class="text">
                            </div>
                        </li>
                        <li>
                            <div class="field pessoa-juridica-comercial-empresa">
                                <span>Empresa:</span>
                                <input type="text" name="comercial-empresa" class="text">
                            </div>
                            <div class="field pessoa-juridica-comercial-tel">
                                <span>Tel:</span>
                                <input type="text" name="comercial-tel" class="text">
                            </div>
                            <div class="field pessoa-juridica-comercial-contato">
                                <span>Contato:</span>
                                <input type="text" name="comercial-contato" class="text">
                            </div>
                        </li>
                    </ul>

                    <div class="label-second">REFERÊNCIA PESSOAL</div>
                    <ul class="multifield">
                        <li>
                            <div class="field pessoa-juridica-pessoal-empresa">
                                <span>Contato:</span>
                                <input value="" type="text" name="pessoal-empresa" class="text">
                            </div>
                            <div class="field pessoa-juridica-pessoal-tel">
                                <span>Tel:</span>
                                <input value="" type="text" name="pessoal-tel" class="text">
                            </div>
                        </li>
                        <li>
                            <div class="field pessoa-juridica-pessoal-empresa">
                                <span>Contato:</span>
                                <input type="text" name="pessoal-empresa" class="text">
                            </div>
                            <div class="field pessoa-juridica-pessoal-tel">
                                <span>Tel:</span>
                                <input type="text" name="pessoal-tel" class="text">
                            </div>
                        </li>
                    </ul>

                    <div class="label-second">REFERÊNCIA BANCÁRIA</div>
                    <ul class="multifield">
                        <li>
                            <div class="field pessoa-juridica-bancaria-empresa">
                                <span>Banco:</span>
                                <input value="" type="text" name="bancaria-banco" class="text">
                            </div>
                            <div class="field pessoa-juridica-bancaria-numero">
                                <span>Nº:</span>
                                <input value="" type="text" name="bancaria-numero" class="text">
                            </div>
                            <div class="field pessoa-juridica-bancaria-ag">
                                <span>Ag:</span>
                                <input value="" type="text" name="bancaria-ag" class="text">
                            </div>
                            <div class="field pessoa-juridica-bancaria-cc">
                                <span>Cc:</span>
                                <input value="" type="text" name="bancaria-cc" class="text">
                            </div>
                        </li>
                        <li>
                            <div class="field pessoa-juridica-bancaria-empresa">
                                <span>Banco:</span>
                                <input type="text" name="bancaria-banco" class="text">
                            </div>
                            <div class="field pessoa-juridica-bancaria-numero">
                                <span>Nº:</span>
                                <input type="text" name="bancaria-numero" class="text">
                            </div>
                            <div class="field pessoa-juridica-bancaria-ag">
                                <span>Ag:</span>
                                <input type="text" name="bancaria-ag" class="text">
                            </div>
                            <div class="field pessoa-juridica-bancaria-cc">
                                <span>Cc:</span>
                                <input type="text" name="bancaria-cc" class="text">
                            </div>
                        </li>
                    </ul>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
