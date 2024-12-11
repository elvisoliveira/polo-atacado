<dl>
    <dt>Ficha de Cadastro</dt>
    @foreach (['Pessoa Jurídica', 'Pessoa Física'] as $item)
        @php
            $slug = \Illuminate\Support\Str::slug($item, '-');
        @endphp
        <dd @if($slug == $active) class="selected" @endif>
            <a href="{{ $page->baseUrl }}/{{ $slug }}">{{ $item }}</a>
        </dd>
    @endforeach
</dl>