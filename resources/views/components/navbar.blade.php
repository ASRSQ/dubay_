<header
    id="navbar"
    class="fixed inset-x-0 top-0 z-50 bg-dubay-blue shadow-sm"
>
    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="flex h-20 items-center justify-between">

            {{-- LOGO --}}
            <a
                href="/"
                class="font-display text-2xl font-semibold tracking-[0.15em] text-dubay-white transition hover:text-dubay-gold"
            >
                DUBAY
            </a>


            {{-- MENU DESKTOP --}}
            <nav class="hidden items-center gap-8 lg:flex">

                <a href="#inicio"
                   class="text-xs font-semibold uppercase tracking-[0.15em] text-dubay-white transition hover:text-dubay-gold">
                    Início
                </a>

                <a href="#servicos"
                   class="text-xs font-semibold uppercase tracking-[0.15em] text-dubay-white transition hover:text-dubay-gold">
                    Serviços
                </a>

                <a href="#dubay"
                   class="text-xs font-semibold uppercase tracking-[0.15em] text-dubay-white transition hover:text-dubay-gold">
                    A Dubay
                </a>

                <a href="#galeria"
                   class="text-xs font-semibold uppercase tracking-[0.15em] text-dubay-white transition hover:text-dubay-gold">
                    Galeria
                </a>

                <a href="#contato"
                   class="text-xs font-semibold uppercase tracking-[0.15em] text-dubay-white transition hover:text-dubay-gold">
                    Contato
                </a>

            </nav>


            {{-- AGENDAR --}}
            <a
                href="#agendar"
                class="hidden bg-dubay-gold px-6 py-3 text-xs font-bold uppercase tracking-[0.15em] text-dubay-blue transition hover:bg-dubay-gold-light lg:inline-flex"
            >
                Agendar
            </a>


            {{-- MOBILE --}}
            <button
                id="mobile-menu-button"
                type="button"
                class="flex h-11 w-11 items-center justify-center text-dubay-white lg:hidden"
                aria-label="Abrir menu"
                aria-expanded="false"
            >

                <svg
                    id="menu-open-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>

                <svg
                    id="menu-close-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    class="hidden h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 6l12 12M6 18L18 6"
                    />
                </svg>

            </button>

        </div>

    </div>


    {{-- MENU MOBILE --}}
    <div
        id="mobile-menu"
        class="hidden border-t border-dubay-white/10 bg-dubay-blue lg:hidden"
    >

        <nav class="px-5 py-5">

            <div class="flex flex-col">

                <a href="#inicio"
                   class="border-b border-dubay-white/10 py-4 text-sm font-semibold uppercase tracking-widest text-dubay-white hover:text-dubay-gold">
                    Início
                </a>

                <a href="#servicos"
                   class="border-b border-dubay-white/10 py-4 text-sm font-semibold uppercase tracking-widest text-dubay-white hover:text-dubay-gold">
                    Serviços
                </a>

                <a href="#dubay"
                   class="border-b border-dubay-white/10 py-4 text-sm font-semibold uppercase tracking-widest text-dubay-white hover:text-dubay-gold">
                    A Dubay
                </a>

                <a href="#galeria"
                   class="border-b border-dubay-white/10 py-4 text-sm font-semibold uppercase tracking-widest text-dubay-white hover:text-dubay-gold">
                    Galeria
                </a>

                <a href="#contato"
                   class="border-b border-dubay-white/10 py-4 text-sm font-semibold uppercase tracking-widest text-dubay-white hover:text-dubay-gold">
                    Contato
                </a>

                <a
                    href="#agendar"
                    class="mt-5 flex items-center justify-center bg-dubay-gold px-6 py-4 text-sm font-bold uppercase tracking-widest text-dubay-blue"
                >
                    Agendar horário
                </a>

            </div>

        </nav>

    </div>
</header>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    const openIcon = document.getElementById('menu-open-icon');
    const closeIcon = document.getElementById('menu-close-icon');

    if (!button || !menu) return;

    button.addEventListener('click', function () {

        const open = button.getAttribute('aria-expanded') === 'true';

        button.setAttribute('aria-expanded', String(!open));

        menu.classList.toggle('hidden');

        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');

    });

    menu.querySelectorAll('a').forEach(function (link) {

        link.addEventListener('click', function () {

            menu.classList.add('hidden');

            openIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');

            button.setAttribute('aria-expanded', 'false');

        });

    });

});
</script>