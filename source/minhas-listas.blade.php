@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_partials.assine-news')
        <div id="produtos-menu">
            <dl>
                <dt>Listas de pedidos</dt>
                <dd>Geradas em:</dd>
                <dd><input type="text" name="de" class="text" value="de data 00/00/000"></dd>
                <dd><input type="text" name="ates" class="text" value="até a data 00/00/000"></dd>
                <dd>Ordem de Pedido:</dd>
                <dd><input type="text" name="op" class="text"></dd>
                <dd><input type="submit" value="Enviar" class="submit"></dd>
            </dl>
        </div>
    </div>
    <div id="main">
        <div id="breadcrumb">Minhas Listas</div>
        <div id="minhas-listas">
            <h1>Acompanhe as suas listas</h1>
            <a class="selecionadar-todas" href="#">SELECIONADAR TODAS</a>
            <a class="apagar-selecionadas" href="#">APAGAR SELECIONADAS</a>
            <span class="listas">Voc possui 3 listas em aberto</span>
            <form id="form1" action="" method="post" name="form1">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Lista gerada em</th>
                            <th scope="col">Ordem de Pedido</th>
                            <th scope="col">Quantidade de itens</th>
                            <th width="185" scope="col">ações</th>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input id="checkbox" type="checkbox" name="checkbox">
                            </th>
                            <td>03/09/2012</td>
                            <td>003627</td>
                            <td>321 itens</td>
                            <td>
                                <a class="apagar" href="#">Apagar</a>
                                <a class="retomar" href="#">Retomar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input id="checkbox2" type="checkbox" name="checkbox2">
                            </th>
                            <td>29/09/2012</td>
                            <td>004211</td>
                            <td>192 itens</td>
                            <td>
                                <a class="apagar" href="#">Apagar</a>
                                <a class="retomar" href="#">Retomar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input id="checkbox3" type="checkbox" name="checkbox3">
                            </th>
                            <td>11/10/2012</td>
                            <td>004419</td>
                            <td>54 itens</td>
                            <td>
                                <a class="apagar" href="#">Apagar</a>
                                <a class="retomar" href="#">Retomar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

    </div>
@endsection
