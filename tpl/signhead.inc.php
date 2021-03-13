    <header class="navbar navbar-header navbar-header-fixed">
        <div class="navbar-brand">
            <a href="/" class="df-logo">
                <wb-include wb-src="/tpl/assets/img/svg/logo.svg" alt="Логотип" height="30" width="100" />
            </a>
        </div>
        <!-- navbar-menu-wrapper -->
        <nav class="navbar-right w-50">
            <a href="/signin/" class="btn btn-sm btn-light px-5 mr-2 d-none d-sm-inline-block"  wb-if="'{{_route.mode}}' !== 'signin'">
                Вход
            </a>
            <a href="/signup/" class="btn btn-sm px-5 btn-primary" wb-if="'{{_route.mode}}' !== 'signup'">
                Регистрация
            </a>
        </div>
        <!-- navbar-right -->
    </header>