@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_partials.assine-news')
        <div id="produtos-menu">
            <div class="obs">
                <div class="obs-title">Localização</div>
                <div class="obs-desc">
                    <p>
                        @foreach ($page->address->toArray() as $item)
                            {{ $item }}<br />
                        @endforeach
                    </p>
                    <p>Tel. {{ $page->phone }}</p>
                </div>
            </div>
        </div>
    </div>
    <div id="main">
        <div id="breadcrumb">Como chegar</div>
        <div id="como-chegar">
            <h1>LOCALIZAÇÃO</h1>
            <p>
                @foreach ($page->address->toArray() as $item)
                    {{ $item }}<br />
                @endforeach
            </p>
            <p>Tel. {{ $page->phone }}<br />{{ $page->email }}</p>
            <a href="#"><img src="{{ $page->baseUrl }}/images/como-chegar.jpg" /></a>
            <a href="#"><img src="{{ $page->baseUrl }}/images/bloco-formas-de-pagamento.jpg" /></a>
        </div>
    </div>
@endsection
