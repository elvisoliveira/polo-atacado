<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ $page->language ?? 'en' }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $page->description }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>{{ $page->title }}</title>

    <link rel="canonical" href="{{ $page->getUrl() }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ $page->baseUrl }}{{ mix('css/main.css', false) }}">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jcarousel/0.2.8/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}{{ mix('js/jquery.center.js', false) }}" defer></script>
    <script type="text/javascript">
        let current = 1;
        function slideBanner() {
            let length = jQuery(".banner").length;

            jQuery(".banner").fadeOut();
            jQuery("#banner" + current).fadeIn();

            if (current == length) current = 1;
            else current++;
        }

        jQuery(document).ready(function ($) {
            jQuery('#content #main #meio-produtos li .foto a').center();
            jQuery('#rodape .marcas li a').center();
            jQuery('#rodape .marcas').jcarousel();

            setInterval("slideBanner();", 7000);
        });
    </script>
</head>

<body class="front">
    @yield('body')
</body>

</html>