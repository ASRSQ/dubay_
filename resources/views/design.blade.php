<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Dubay — Barbearia e Imagem Masculina</title>

    <meta
        name="description"
        content="Dubay Barbearia e Imagem Masculina — Santa Quitéria, Ceará"
    >

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>


<body class="bg-dubay-white text-dubay-blue">

    {{-- =====================================================
        NAVBAR
    ====================================================== --}}

    <x-navbar />


    <main class="pt-20">


        {{-- =====================================================
            HERO
            Imagem real da Dubay
        ====================================================== --}}

        <x-hero />


        {{-- =====================================================
            SERVIÇOS
            IMAGENS TEMPORÁRIAS
        ====================================================== --}}

        <section
            id="servicos"
            class="bg-dubay-white"
        >

            <div class="mx-auto max-w-7xl px-5 py-20 lg:px-8 lg:py-28">


                {{-- TÍTULO --}}

                <div class="mx-auto max-w-2xl text-center">

                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-dubay-gold-dark">
                        Nossos serviços
                    </p>

                    <h2 class="mt-4 font-display text-4xl sm:text-5xl lg:text-6xl">
                        Cuidado em cada detalhe.
                    </h2>

                    <p class="mt-5 text-base leading-8 text-dubay-muted">
                        Escolha a experiência que combina com você.
                    </p>

                </div>


                {{-- CARDS --}}

                <div class="mt-14 grid gap-6 md:grid-cols-3">


                    {{-- =================================================
                        BARBA
                    ================================================== --}}

                    <article class="group overflow-hidden bg-dubay-blue">

                        <div class="aspect-[4/3] overflow-hidden">

                            {{-- IMAGEM TEMPORÁRIA --}}

                            <img
                                src="https://images.unsplash.com/photo-1705976063063-af7d6b9a4083?auto=format&fit=crop&w=1200&q=80"
                                alt="Serviço de barba masculina"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                        </div>


                        <div class="p-7">

                            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-dubay-gold">
                                Barbas
                            </p>

                            <h3 class="mt-3 font-display text-3xl text-dubay-white">
                                Barba
                            </h3>

                            <p class="mt-4 text-sm leading-7 text-dubay-white/70">
                                Barba completa, simples, pigmentada
                                e terapia.
                            </p>

                            <a
                                href="#menu-servicos"
                                class="mt-6 inline-block text-xs font-bold uppercase tracking-[0.2em] text-dubay-gold transition hover:text-dubay-gold-light"
                            >
                                Ver serviços →
                            </a>

                        </div>

                    </article>


                    {{-- =================================================
                        CORTES
                    ================================================== --}}

                    <article class="group overflow-hidden bg-dubay-blue">

                        <div class="aspect-[4/3] overflow-hidden">

                            {{-- IMAGEM TEMPORÁRIA --}}

                            <img
                                src="https://images.unsplash.com/photo-1699641975121-5c3f55a553e5?auto=format&fit=crop&w=1200&q=80"
                                alt="Corte masculino em barbearia"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                        </div>


                        <div class="p-7">

                            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-dubay-gold">
                                Cortes
                            </p>

                            <h3 class="mt-3 font-display text-3xl text-dubay-white">
                                Cortes
                            </h3>

                            <p class="mt-4 text-sm leading-7 text-dubay-white/70">
                                Degradê, freestyle, social,
                                infantil e muito mais.
                            </p>

                            <a
                                href="#menu-servicos"
                                class="mt-6 inline-block text-xs font-bold uppercase tracking-[0.2em] text-dubay-gold transition hover:text-dubay-gold-light"
                            >
                                Ver serviços →
                            </a>

                        </div>

                    </article>


                    {{-- =================================================
                        COMBOS
                    ================================================== --}}

                    <article class="group overflow-hidden bg-dubay-blue">

                        <div class="aspect-[4/3] overflow-hidden">

                            {{-- IMAGEM TEMPORÁRIA --}}

                            <img
                                src="https://images.unsplash.com/photo-1582771498000-8ad44e6c84db?auto=format&fit=crop&w=1200&q=80"
                                alt="Barbearia e serviços masculinos"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                        </div>


                        <div class="p-7">

                            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-dubay-gold">
                                Combos
                            </p>

                            <h3 class="mt-3 font-display text-3xl text-dubay-white">
                                Combos
                            </h3>

                            <p class="mt-4 text-sm leading-7 text-dubay-white/70">
                                Combine corte e barba em uma
                                experiência completa.
                            </p>

                            <a
                                href="#menu-servicos"
                                class="mt-6 inline-block text-xs font-bold uppercase tracking-[0.2em] text-dubay-gold transition hover:text-dubay-gold-light"
                            >
                                Ver serviços →
                            </a>

                        </div>

                    </article>

                </div>

            </div>

        </section>


        {{-- =====================================================
            MENU DE SERVIÇOS
        ====================================================== --}}

        <section
            id="menu-servicos"
            class="bg-dubay-off-white"
        >

            <div class="mx-auto max-w-6xl px-5 py-20 lg:px-8 lg:py-28">


                <div class="mb-14 text-center">

                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-dubay-gold-dark">
                        Menu Dubay
                    </p>

                    <h2 class="mt-4 font-display text-4xl sm:text-5xl">
                        Serviços
                    </h2>

                </div>


                <div class="grid gap-12 md:grid-cols-3">


                    {{-- BARBAS --}}

                    <div>

                        <div class="flex items-center gap-4">

                            <span class="h-px flex-1 bg-dubay-gold"></span>

                            <h3 class="font-display text-2xl">
                                Barbas
                            </h3>

                            <span class="h-px flex-1 bg-dubay-gold"></span>

                        </div>


                        <ul class="mt-6 space-y-4 text-sm text-dubay-muted">

                            <li class="flex justify-between gap-4">
                                <span>Barba Completa</span>
                            </li>

                            <li class="flex justify-between gap-4">
                                <span>Barba Simples</span>
                            </li>

                            <li class="flex justify-between gap-4">
                                <span>Barba Pigmentada</span>
                            </li>

                            <li class="flex justify-between gap-4">
                                <span>Barba Terapia</span>
                            </li>

                        </ul>

                    </div>


                    {{-- CORTES --}}

                    <div>

                        <div class="flex items-center gap-4">

                            <span class="h-px flex-1 bg-dubay-gold"></span>

                            <h3 class="font-display text-2xl">
                                Cortes
                            </h3>

                            <span class="h-px flex-1 bg-dubay-gold"></span>

                        </div>


                        <ul class="mt-6 space-y-4 text-sm text-dubay-muted">

                            <li>Corte Degradê</li>

                            <li>Corte Freestyle</li>

                            <li>Corte Infantil</li>

                            <li>Corte Social</li>

                            <li>Degradê Pigmentado</li>

                            <li>Corte na Tesoura</li>

                            <li>Sobrancelhas</li>

                            <li>Degradê Lateral</li>

                            <li>Pezinho</li>

                        </ul>

                    </div>


                    {{-- COMBOS --}}

                    <div>

                        <div class="flex items-center gap-4">

                            <span class="h-px flex-1 bg-dubay-gold"></span>

                            <h3 class="font-display text-2xl">
                                Combos
                            </h3>

                            <span class="h-px flex-1 bg-dubay-gold"></span>

                        </div>


                        <ul class="mt-6 space-y-4 text-sm text-dubay-muted">

                            <li>Degradê + Barba</li>

                            <li>Social + Barba Simples</li>

                            <li>Social + Barba</li>

                        </ul>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
            A DUBAY
        ====================================================== --}}

        <section
            id="dubay"
            class="bg-dubay-blue"
        >

            <div class="mx-auto grid max-w-7xl lg:grid-cols-2">


                {{-- FOTO --}}

                <div class="min-h-[400px] overflow-hidden lg:min-h-[600px]">

                    {{-- IMAGEM TEMPORÁRIA --}}

                    <img
                        src="https://images.unsplash.com/photo-1759134248487-e8baaf31e33e?auto=format&fit=crop&w=1400&q=80"
                        alt="Interior de uma barbearia"
                        class="h-full w-full object-cover"
                    >

                </div>


                {{-- TEXTO --}}

                <div class="flex items-center px-5 py-20 lg:px-16 lg:py-28">

                    <div>

                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-dubay-gold">
                            A Dubay
                        </p>


                        <h2 class="mt-5 font-display text-4xl leading-tight text-dubay-white sm:text-5xl">

                            Estilo.
                            <br>

                            Personalidade.
                            <br>

                            Experiência.

                        </h2>


                        <p class="mt-7 max-w-xl text-base leading-8 text-dubay-white/75">

                            Um espaço dedicado ao cuidado masculino,
                            onde cada detalhe é pensado para proporcionar
                            uma experiência diferenciada.

                        </p>


                        <p class="mt-5 max-w-xl text-base leading-8 text-dubay-white/75">

                            Na Dubay, seu estilo encontra precisão,
                            cuidado e personalidade.

                        </p>


                        <a
                            href="#contato"
                            class="mt-8 inline-flex border border-dubay-gold px-7 py-3 text-xs font-bold uppercase tracking-[0.2em] text-dubay-gold transition hover:bg-dubay-gold hover:text-dubay-blue"
                        >
                            Conheça a Dubay
                        </a>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
            GALERIA
            IMAGENS TEMPORÁRIAS
        ====================================================== --}}

        <section
            id="galeria"
            class="bg-dubay-white"
        >

            <div class="mx-auto max-w-7xl px-5 py-20 lg:px-8 lg:py-28">


                <div class="mb-12 flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

                    <div>

                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-dubay-gold-dark">
                            Galeria
                        </p>

                        <h2 class="mt-4 font-display text-4xl sm:text-5xl">
                            O estilo Dubay.
                        </h2>

                    </div>


                    <a
                        href="https://www.instagram.com/dubay_barbearia/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-xs font-bold uppercase tracking-[0.2em] text-dubay-blue transition hover:text-dubay-gold-dark"
                    >
                        Ver Instagram →
                    </a>

                </div>


                {{-- GRID --}}

                <div class="grid grid-cols-2 gap-3 md:grid-cols-3">


                    <div class="aspect-square overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70?auto=format&fit=crop&w=900&q=80"
                            alt="Barbearia masculina"
                            class="h-full w-full object-cover transition duration-500 hover:scale-105"
                        >

                    </div>


                    <div class="aspect-square overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&w=900&q=80"
                            alt="Corte masculino"
                            class="h-full w-full object-cover transition duration-500 hover:scale-105"
                        >

                    </div>


                    <div class="aspect-square overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?auto=format&fit=crop&w=900&q=80"
                            alt="Barbeiro trabalhando"
                            class="h-full w-full object-cover transition duration-500 hover:scale-105"
                        >

                    </div>


                    <div class="aspect-square overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1512690459411-b0fd4b9f2c6b?auto=format&fit=crop&w=900&q=80"
                            alt="Corte de cabelo masculino"
                            class="h-full w-full object-cover transition duration-500 hover:scale-105"
                        >

                    </div>


                    <div class="aspect-square overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=900&q=80"
                            alt="Barbearia"
                            class="h-full w-full object-cover transition duration-500 hover:scale-105"
                        >

                    </div>


                    <div class="aspect-square overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1622288432450-277d0fef5ed6?auto=format&fit=crop&w=900&q=80"
                            alt="Barba masculina"
                            class="h-full w-full object-cover transition duration-500 hover:scale-105"
                        >

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
            CTA / AGENDAMENTO
        ====================================================== --}}

        <section
            id="agendar"
            class="bg-dubay-gold"
        >

            <div class="mx-auto max-w-5xl px-5 py-20 text-center lg:px-8 lg:py-28">

                <p class="text-sm font-bold uppercase tracking-[0.3em] text-dubay-blue">
                    Agendamento
                </p>


                <h2 class="mt-5 font-display text-4xl text-dubay-blue sm:text-5xl lg:text-6xl">

                    Seu estilo começa aqui.

                </h2>


                <p class="mx-auto mt-5 max-w-xl text-base leading-7 text-dubay-blue/75">

                    Agende seu horário e viva a experiência Dubay.

                </p>


                <a
                    href="https://wa.me/5588998384312"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="mt-8 inline-flex h-13 items-center justify-center bg-dubay-blue px-9 text-sm font-bold uppercase tracking-[0.15em] text-dubay-white transition hover:bg-dubay-blue-light"
                >
                    Agendar pelo WhatsApp
                </a>

            </div>

        </section>


        {{-- =====================================================
            CONTATO
        ====================================================== --}}

        <section
            id="contato"
            class="bg-dubay-white"
        >

            <div class="mx-auto max-w-7xl px-5 py-20 lg:px-8 lg:py-24">


                <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-3">


                    {{-- ENDEREÇO --}}

                    <div>

                        <p class="text-xs font-bold uppercase tracking-[0.25em] text-dubay-gold-dark">
                            Onde estamos
                        </p>


                        <h3 class="mt-4 font-display text-2xl">
                            Endereço
                        </h3>


                        <p class="mt-4 text-sm leading-7 text-dubay-muted">

                            R. Tab. Francisco de Paula Lôbo, 594<br>
                            Sen. Francisco Menezes Pimentel<br>
                            Santa Quitéria — CE<br>
                            62280-000

                        </p>


                        <a
                            href="https://www.google.com/maps/search/?api=1&query=Barbearia+Dubay+Santa+Quit%C3%A9ria+CE"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="mt-5 inline-block text-xs font-bold uppercase tracking-[0.15em] text-dubay-blue hover:text-dubay-gold-dark"
                        >
                            Ver localização →
                        </a>

                    </div>


                    {{-- CONTATO --}}

                    <div>

                        <p class="text-xs font-bold uppercase tracking-[0.25em] text-dubay-gold-dark">
                            Fale conosco
                        </p>


                        <h3 class="mt-4 font-display text-2xl">
                            Contato
                        </h3>


                        <a
                            href="tel:+5588998384312"
                            class="mt-4 block text-sm text-dubay-muted hover:text-dubay-blue"
                        >
                            (88) 99838-4312
                        </a>


                        <a
                            href="https://wa.me/5588998384312"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="mt-3 inline-block text-sm font-semibold text-dubay-blue hover:text-dubay-gold-dark"
                        >
                            WhatsApp
                        </a>


                        <a
                            href="https://www.instagram.com/dubay_barbearia/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="mt-3 block text-sm font-semibold text-dubay-blue hover:text-dubay-gold-dark"
                        >
                            @dubay_barbearia
                        </a>

                    </div>


                    {{-- HORÁRIO --}}

                    <div>

                        <p class="text-xs font-bold uppercase tracking-[0.25em] text-dubay-gold-dark">
                            Funcionamento
                        </p>


                        <h3 class="mt-4 font-display text-2xl">
                            Horário
                        </h3>


                        <p class="mt-4 text-sm leading-7 text-dubay-muted">

                            Atendimento conforme
                            disponibilidade.

                        </p>


                        <a
                            href="https://wa.me/5588998384312"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="mt-5 inline-block bg-dubay-blue px-6 py-3 text-xs font-bold uppercase tracking-[0.15em] text-dubay-white transition hover:bg-dubay-blue-light"
                        >
                            Consultar horário
                        </a>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
            FOOTER
        ====================================================== --}}

        <footer class="bg-dubay-blue">

            <div class="mx-auto max-w-7xl px-5 py-10 lg:px-8">

                <div class="flex flex-col gap-8 sm:flex-row sm:items-center sm:justify-between">


                    <div>

                        <span class="font-display text-2xl tracking-[0.15em] text-dubay-white">
                            DUBAY
                        </span>

                        <p class="mt-2 text-xs uppercase tracking-[0.15em] text-dubay-gold">
                            Barbearia e Imagem Masculina
                        </p>

                    </div>


                    <div class="flex flex-col gap-3 sm:items-end">

                        <a
                            href="https://www.instagram.com/dubay_barbearia/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-sm text-dubay-white/70 transition hover:text-dubay-gold"
                        >
                            @dubay_barbearia
                        </a>


                        <a
                            href="https://wa.me/5588998384312"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-sm text-dubay-white/70 transition hover:text-dubay-gold"
                        >
                            (88) 99838-4312
                        </a>

                    </div>

                </div>


                <div class="mt-8 border-t border-dubay-white/10 pt-6">

                    <p class="text-xs text-dubay-white/40">
                        © {{ date('Y') }} Dubay. Todos os direitos reservados.
                    </p>

                </div>

            </div>

        </footer>

    </main>

</body>

</html>