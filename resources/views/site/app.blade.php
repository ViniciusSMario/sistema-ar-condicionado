<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="@yield('description', 'Descrição padrão do site')" />
    <meta name="author" content="@yield('author', 'Vinícius Soares')" />
    <title>@yield('title', 'Ar Condicionado Rio Pardo')</title>
    <!-- Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Lightbox2 CSS -->
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<style>
    .cookie-banner {
        z-index: 1050;
        /* Mantém a barra acima de outros elementos */
    }
</style>

<body id="page-top">
    @include('site.partials.navbar')
    @include('site.partials.header')
    @include('site.partials.empresa')
    @include('site.partials.features')
    @include('site.partials.orcamento')
    @include('site.partials.galeria')
    @include('site.partials.footer')

    <div id="cookie-banner" class="cookie-banner bg-dark text-white py-3 px-4 position-fixed bottom-0 w-100 d-none">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <p class="mb-2 mb-md-0 small">
                Usamos cookies para melhorar sua experiência no site. Ao continuar navegando, você concorda com nossa
                <a href="#!" class="text-warning text-decoration-none">Política de Cookies</a>.
            </p>
            <button id="accept-cookies" class="btn btn-primary btn-sm">Aceitar Cookies</button>
        </div>
    </div>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Lightbox2 JS -->
    <script src="{{ asset('js/lightbox.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cookieBanner = document.getElementById("cookie-banner");
            const acceptCookiesButton = document.getElementById("accept-cookies");
            const cookieName = "cookies_accepted";

            // Função para verificar se o cookie foi aceito
            function checkCookie() {
                const hasCookie = document.cookie
                    .split(";")
                    .some((item) => item.trim().startsWith(`${cookieName}=`));
                return hasCookie;
            }
            if (!checkCookie()) {
                cookieBanner.classList.remove("d-none");
            }

            acceptCookiesButton.addEventListener("click", function() {
                document.cookie = `${cookieName}=true; path=/; max-age=${
                60 * 60 * 24 * 365
            }; SameSite=Lax`;
                cookieBanner.classList.add("d-none");
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            if (typeof lightbox !== 'undefined') {
                console.log("Lightbox2 carregado corretamente.");
                lightbox.option({
                    'resizeDuration': 200,
                    'wrapAround': true
                });
            } else {
                console.error("Lightbox2 não foi carregado.");
            }
        });

        $(document).ready(function () {
            $('#telefone').mask('(00) 00000-0000');
        });

    </script>
</body>

</html>
