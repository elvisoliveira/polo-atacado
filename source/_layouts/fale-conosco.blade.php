<div id="produtos-menu">
    <dl>
        <dt>Fale Conosco</dt>
        @foreach (['Fale Conosco', 'Trabalhe Conosco', 'Dúvidas Frequentes'] as $item)
            @php
                $slug = \Illuminate\Support\Str::slug($item, '-');
            @endphp
            <dd @if($slug == $active) class="selected" @endif>
                <a href="{{ $page->baseUrl }}/{{ $slug }}">{{ $item }}</a>
            </dd>
        @endforeach
    </dl>
</div>