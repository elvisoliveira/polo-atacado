@extends('_layouts.main')

@section('body')
    <div class="container" id="topo">
        <div class="center">
            <div class="cadastro">
                <a href="#">Seja bem vindo. Já é cadastrado?</a>
            </div>
            <div class="fale-conosco-menu">
                <ul>
                    <li class="fale-conosco first">
                        <a href="#">Fale Conosco</a>
                    </li>
                    <li class="minha-conta">
                        <a href="#">Minha Conta</a>
                    </li>
                    <li class="minhas-listas">
                        <a href="#">Minhas Listas</a>
                    </li>
                    <li class="como-chegar last">
                        <a href="#">Como Chegar</a>
                    </li>
                </ul>
            </div>
            <div class="topo-menu">
                <ul>
                    <li class="first">
                        <a href="{{ $page->getUrl() }}">Home</a>
                    </li>
                    <li>
                        <a href="#">Institucional</a>
                    </li>
                    <li>
                        <a href="#">Produtos</a>
                    </li>
                    <li>
                        <a href="#">Fornecedores</a>
                    </li>
                    <li>
                        <a href="#">Como comprar</a>
                    </li>
                    <li class="last">
                        <a href="#">Cadastre-se</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container" id="banner">
        <div class="center">
            <div id="logo">
                <a href="{{ $page->getUrl() }}">
                    <img src="{{ $page->getUrl() }}images/logo.png" width="304" height="112" />
                </a>
            </div>
        </div>
        <div id="slideshow">
            <ul>
                <li id="banner1" class="banner"><img src="{{ $page->getUrl() }}images/banner/banner01.jpg" width="1920" height="380" /></li>
                <li id="banner2" class="banner"><img src="{{ $page->getUrl() }}images/banner/banner02.jpg" width="1920" height="380" /></li>
            </ul>
        </div>
    </div>
    <div class="container" id="menu">
        <div class="center">
            <ul>
                <li class="brinquedos">
                    <a href="#">Brinquedos</a>
                </li>
                <li class="bebe">
                    <a href="#">Bebê</a>
                </li>
                <li class="papelaria">
                    <a href="#">Papelaria</a>
                </li>
                <li class="informatica">
                    <a href="#">Informática</a>
                </li>
                <li class="utilidades">
                    <a href="#">Utilidades</a>
                </li>
                <li class="ferramentas">
                    <a href="#">Ferramentas</a>
                </li>
                <li class="jardinagem">
                    <a href="#">Jardinagem</a>
                </li>
                <li class="beleza-estetica">
                    <a href="#">Beleza estética</a>
                </li>
                <li class="aviamentos">
                    <a href="#">Aviamentos</a>
                </li>
                <li class="natalino">
                    <a href="#">Natalino</a>
                </li>
                <li class="itens-de-epoca">
                    <a href="#">Itens de época</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container" id="pesquisa">
        <div class="center">
            <div class="bg-busca">
                <img src="{{ $page->getUrl() }}images/bg-busca.png" />
            </div>
            <div class="bg-busca-form">
                <form action="#" enctype="multipart/form-data" method="post">
                    <fieldset>
                        <div class="field">
                            <input type="text" class="text" name="busca" />
                        </div>
                        <div class="action">
                            <input type="submit" class="submit" value="Encontrar um Produto" />
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="container" id="content">
        <div class="center">
            <div id="catalogo-orcamento">
                <ul>
                    <li class="download">
                        <a href="#">Faça o download do nosso catálogo e veja as melhores ofertas</a>
                    </li>
                    <li class="catalogo">
                        <a href="#">Catálogo Agosto / Setembro</a>
                    </li>
                    <li class="orcamento">
                        <a href="#">0 itens em seu orçamento</a>
                    </li>
                </ul>
            </div>
            <div id="sidebar">
                <div id="assine-news">
                    <form action="#" enctype="multipart/form-data" method="post">
                        <fieldset>
                            <div class="field">
                                <input type="text" class="text" name="email" />
                            </div>
                            <div class="action">
                                <input type="submit" class="submit" value="OK" />
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div id="produtos-menu">
                    <dl>
                        <dt>Destaques</dt>
                        <dd>Aviamentos</dd>
                        <dd>Bebê</dd>
                        <dd>Beleza e estética</dd>
                        <dd>Brinquedos</dd>
                        <dd>Ferramentas</dd>
                        <dd>Informática</dd>
                        <dd>Itens de época</dd>
                        <dd>Jardinagem</dd>
                        <dd>Natalinos</dd>
                        <dd>Papelaria</dd>
                        <dd>Utilidades</dd>
                    </dl>
                    <hr />
                    <dl>
                        <dt>Marcas</dt>
                        <dd class="categoria">PAPELARIA</dd>
                        <dd>BIC</dd>
                        <dd>Faber Castell</dd>
                        <dd>Pelican</dd>
                        <dd>Pentel</dd>
                        <dd>Pilot</dd>
                        <hr />
                        <dd class="categoria">INFORMÁTICA</dd>
                        <dd>Genius</dd>
                        <dd>HP</dd>
                        <dd>Logitech</dd>
                        <dd>Microsoft</dd>
                        <hr />
                        <dd class="categoria">BRINQUEDOS</dd>
                        <dd>Bandeirante</dd>
                        <dd>Chicco</dd>
                        <dd>Estrela</dd>
                        <dd>Grow</dd>
                        <dd>Gugu</dd>
                        <dd>Gulliver</dd>
                        <dd>Lego</dd>
                    </dl>
                </div>
                <div id="redes-sociais">
                    <img src="{{ $page->getUrl() }}images/banner-redes-sociais.png" width="228"
                        height="102" />
                </div>
            </div>
            <div id="main">
                <div id="topo-destaques">
                    <img src="{{ $page->getUrl() }}images/topo-destaques.png" width="711" height="96" />
                </div>
                <div id="topo-filtro">
                    <hr /><span>Ordenar por:</span>
                    <form action="#" enctype="multipart/form-data" method="post">
                        <fieldset>
                            <div class="field">
                                <select>
                                    <option value="mais-vendidos">Mais Vendidos</option>
                                </select>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div id="meio-produtos">
                    <ul>
                        <li class="first">
                            <div class="foto">
                                <a href="#">
                                    <img src="{{ $page->getUrl() }}images/produtos/06.png" width="118"
                                        height="221" />
                                </a>
                            </div>
                            <div class="descricao">
                                <a href="#" class="produto-nome">Bic Cristal</a>
                                <a href="#" class="produto-quantidade">cx. c/ 50 un.</a>
                                <a href="#" class="fardo">Fardo com 10 caixas <span class="desconto">10%</span>
                                    desconto.</a>
                            </div>
                            <div class="opcoes">
                                <a href="#" class="produto">
                                    <img src="{{ $page->getUrl() }}images/bt-adicionar-ao-orcamento.gif"
                                        width="106" height="35" />
                                </a>
                                <a href="#" class="orcamento">
                                    <img src="{{ $page->getUrl() }}images/bg-especificacoes-do-produto.gif"
                                        width="106" height="35" />
                                </a>
                            </div>
                        </li>
                        <li class="second">
                            <div class="foto">
                                <a href="#">
                                    <img src="{{ $page->getUrl() }}images/produtos/05.png" width="166"
                                        height="169" />
                                </a>
                            </div>
                            <div class="descricao">
                                <a href="#" class="produto-nome">Bóia inflável pneu</a>
                                <a href="#" class="produto-quantidade">cx. c/ 12 un.</a>
                                <a href="#" class="fardo">Fardo com 10 caixas <span class="desconto">5%</span>
                                    desconto.</a>
                            </div>
                            <div class="opcoes">
                                <a href="#" class="produto">
                                    <img src="{{ $page->getUrl() }}images/bt-adicionar-ao-orcamento.gif"
                                        width="106" height="35" />
                                </a>
                                <a href="#" class="orcamento">
                                    <img src="{{ $page->getUrl() }}images/bg-especificacoes-do-produto.gif"
                                        width="106" height="35" />
                                </a>
                            </div>
                        </li>
                        <li class="third">
                            <div class="foto">
                                <a href="#">
                                    <img src="{{ $page->getUrl() }}images/produtos/04.png" width="162"
                                        height="127" />
                                </a>
                            </div>
                            <div class="descricao">
                                <a href="#" class="produto-nome">kit maquiagem - barbie</a>
                                <a href="#" class="produto-quantidade">cx. c/ 100 un.</a>
                                <a href="#" class="fardo">Fardo com 30 caixas <span class="desconto">15%</span>
                                    desconto.</a>
                            </div>
                            <div class="opcoes">
                                <a href="#" class="produto">
                                    <img src="{{ $page->getUrl() }}images/bt-adicionar-ao-orcamento.gif"
                                        width="106" height="35" />
                                </a>
                                <a href="#" class="orcamento">
                                    <img src="{{ $page->getUrl() }}images/bg-especificacoes-do-produto.gif"
                                        width="106" height="35" />
                                </a>
                            </div>
                        </li>
                        <hr />
                        <li class="first">
                            <div class="foto">
                                <a href="#">
                                    <img src="{{ $page->getUrl() }}images/produtos/03.png" width="186"
                                        height="135" />
                                </a>
                            </div>
                            <div class="descricao">
                                <a href="#" class="produto-nome">ACQUA CLEAN - Cotiplas</a>
                                <a href="#" class="produto-quantidade">cx. c/ 10 un.</a>
                                <a href="#" class="fardo">Fardo com 10 caixas <span class="desconto">5%</span>
                                    desconto.</a>
                            </div>
                            <div class="opcoes">
                                <a href="#" class="produto">
                                    <img src="{{ $page->getUrl() }}images/bt-adicionar-ao-orcamento.gif"
                                        width="106" height="35" />
                                </a>
                                <a href="#" class="orcamento">
                                    <img src="{{ $page->getUrl() }}images/bg-especificacoes-do-produto.gif"
                                        width="106" height="35" />
                                </a>
                            </div>
                        </li>
                        <li class="second">
                            <div class="foto">
                                <a href="#">
                                    <img src="{{ $page->getUrl() }}images/produtos/02.png" width="204"
                                        height="154" />
                                </a>
                            </div>
                            <div class="descricao">
                                <a href="#" class="produto-nome">Bacia baby 10 l - Tritec </a>
                                <a href="#" class="produto-quantidade">1 un.</a>
                                <a href="#" class="fardo">Fardo com 50 caixas <span class="desconto">10%</span>
                                    desconto.</a>
                            </div>
                            <div class="opcoes">
                                <a href="#" class="produto">
                                    <img src="{{ $page->getUrl() }}images/bt-adicionar-ao-orcamento.gif"
                                        width="106" height="35" />
                                </a>
                                <a href="#" class="orcamento">
                                    <img src="{{ $page->getUrl() }}images/bg-especificacoes-do-produto.gif"
                                        width="106" height="35" />
                                </a>
                            </div>
                        </li>
                        <li class="third">
                            <div class="foto">
                                <a href="#">
                                    <img src="{{ $page->getUrl() }}images/produtos/01.png" width="192"
                                        height="192" />
                                </a>
                            </div>
                            <div class="descricao">
                                <a href="#" class="produto-nome">Conjunto 6 copos decorados</a>
                                <a href="#" class="produto-quantidade">cx. c/ 10 un.</a>
                                <a href="#" class="fardo">Fardo com 10 caixas <span class="desconto">10%</span>
                                    desconto.</a>
                            </div>
                            <div class="opcoes">
                                <a href="#" class="produto">
                                    <img src="{{ $page->getUrl() }}images/bt-adicionar-ao-orcamento.gif"
                                        width="106" height="35" />
                                </a>
                                <a href="#" class="orcamento">
                                    <img src="{{ $page->getUrl() }}images/bg-especificacoes-do-produto.gif"
                                        width="106" height="35" />
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="rodape">
        <div class="center">
            <ul class="marcas">
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/bandeirante.gif" width="81"
                            height="83" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/estrela.gif" width="81"
                            height="80" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/grow.png" width="67" height="85" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/gulliver.gif" width="70"
                            height="79" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/mattel.gif" width="81" height="83" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/pbkids.jpg" width="114" height="67" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/tindolele.gif" width="120"
                            height="79" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/bandeirante.gif" width="81"
                            height="83" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/estrela.gif" width="81"
                            height="80" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/grow.png" width="67" height="85" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/gulliver.gif" width="70"
                            height="79" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/mattel.gif" width="81" height="83" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/pbkids.jpg" width="114" height="67" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/tindolele.gif" width="120"
                            height="79" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/bandeirante.gif" width="81"
                            height="83" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/estrela.gif" width="81"
                            height="80" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/grow.png" width="67" height="85" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/gulliver.gif" width="70"
                            height="79" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/mattel.gif" width="81" height="83" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/pbkids.jpg" width="114" height="67" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ $page->getUrl() }}images/marcas/tindolele.gif" width="120"
                            height="79" />
                    </a>
                </li>
            </ul>
            <ul class="menu-rodape">
                <li class="first"><a href="#">HOME</a></li>
                <li><a href="#">INSTITUCIONAL</a></li>
                <li><a href="#">PRODUTOS</a></li>
                <li><a href="#">COMO COMPRAR</a></li>
                <li class="last"><a href="#">FALE CONOSCO</a></li>
            </ul>
            <div id="redes-sociais-rodape">
                <a href="#" class="twitter">Twitter</a>
                <a href="#" class="facebook">Facebook</a>
                <a href="#" class="gmaps">Gmaps</a>
            </div>
            <p>Rodovia BR 040, nº 4.695, km 688 | Bairro Kennedy - Contagem | Minas Gerais - Brasil | CEP: 32145-900 |
                poloatacado@poloatacado.com.br</p>
        </div>
    </div>
@endsection
