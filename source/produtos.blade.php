@extends('_layouts.main')

@section('body')
    <div id="sidebar">
        @include('_partials.assine-news')
        <div id="produtos-menu">&nbsp;</div>
    </div>
    <div id="main">
        <div id="breadcrumb">Produtos</div>
        <div id="produtos">
            <h1>Uma imensidão de produtos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet ipsum quis est interdum
                blandit ac eu massa. Quisque mollis tellus et eros hendrerit ut tristique libero ultricies.
                Vivamus dapibus velit viverra risus aliquet imperdiet. Cum sociis natoque penatibus et magnis
                dis parturient montes, nascetur ridiculus mus. Sed eget sem at neque luctus lacinia. Aliquam
                tempor posuere velit sed porttitor. Nullam massa orci, tempor id porta in, vulputate a nisi.</p>
            <p><img src="{{ $page->baseUrl }}/images/foto-produtos.jpg" width="672" height="137"></p>
            <p>Morbi ut diam gravida odio ullamcorper ullamcorper. Quisque id turpis sagittis nulla fringilla
                pellentesque. Ut auctor arcu id arcu hendrerit vel tempor lectus volutpat. In hac habitasse
                platea dictumst. Integer varius venenatis lacus id vulputate. Aenean luctus, erat malesuada
                convallis commodo, odio felis suscipit lacus, vel vestibulum est lorem in velit. Curabitur id
                nisl lectus, et gravida nibh. Phasellus pharetra euismod tincidunt. Duis nec mauris purus, nec
                faucibus elit. Sed vel urna a mauris semper facilisis nec eget orci. Praesent in lacus nulla, et
                convallis dolor.</p>
            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla
                ut felis a lorem euismod ullamcorper. Aenean sit amet purus sem, quis dignissim nisl. Maecenas
                ipsum urna, elementum quis pulvinar vitae, eleifend at velit. Ut eget sapien arcu. Integer eros
                enim, ullamcorper vitae rutrum vel, dignissim nec ipsum. Cras id mauris non mauris dapibus
                tempus. Vestibulum volutpat commodo posuere. Suspendisse potenti. Vivamus cursus lacus vel dui
                adipiscing non pulvinar metus aliquam.</p>
        </div>
    </div>
@endsection
