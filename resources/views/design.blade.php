<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta name="theme-color" content="#082754">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <script>
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }
    </script>

    <title>Dubay — Barbearia e Imagem Masculina</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>


<body class="bg-dubay-off-white text-dubay-text antialiased">


    {{-- =========================================================
        TOPBAR
    ========================================================== --}}

<header
    class="fixed left-0 top-0 z-50 w-full border-b border-white/10 bg-[#082754]/95 backdrop-blur-md"
>

        <div
            class="mx-auto flex h-[76px] max-w-7xl items-center justify-between px-5 lg:px-8"
        >


            {{-- LOGO --}}

            <a
                href="#inicio"
                class="shrink-0"
            >

                <div
                    class="font-display text-3xl tracking-[0.08em] text-white sm:text-4xl"
                >
                    DUBAY
                </div>

                <div
                    class="mt-[-4px] text-[7px] font-medium tracking-[0.22em] text-dubay-gold sm:text-[8px]"
                >
                    BARBEARIA E IMAGEM MASCULINA
                </div>

            </a>


            {{-- MENU DESKTOP --}}

            <nav class="hidden items-center gap-7 lg:flex">

                <a
                    href="#inicio"
                    class="nav-link active"
                >
                    Início
                </a>

                <a
                    href="#proposta"
                    class="nav-link"
                >
                    Proposta
                </a>

                <a
                    href="#valores"
                    class="nav-link"
                >
                    Valores
                </a>

                <a
                    href="#servicos"
                    class="nav-link"
                >
                    Serviços
                </a>

                <a
                    href="#quem-somos"
                    class="nav-link"
                >
                    Quem somos
                </a>

                <a
                    href="#contato"
                    class="nav-link"
                >
                    Contato
                </a>

            </nav>


            {{-- AGENDAMENTO DESKTOP --}}

            <a
                href="https://app.faroldabarbearia.com.br/agendar/barbeariadubay"
                target="_blank"
                rel="noopener noreferrer"
                class="hidden rounded-lg border border-dubay-gold px-5 py-3 text-xs font-semibold uppercase tracking-wider text-dubay-gold transition hover:bg-dubay-gold hover:text-dubay-blue sm:block"
            >
                Agendar horário
            </a>


            {{-- MENU MOBILE --}}

            <button
                id="menu-button"
                type="button"
                class="rounded-lg border border-white/20 p-2 text-white lg:hidden"
                aria-label="Abrir menu"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M4 6h16M4 12h16M4 18h16"
                    />

                </svg>

            </button>

        </div>


        {{-- MENU MOBILE --}}

        <div
            id="mobile-menu"
            class="hidden border-t border-white/10 bg-dubay-blue px-5 py-5 lg:hidden"
        >

            <nav class="flex flex-col gap-4">

                <a href="#inicio" class="mobile-link">
                    Início
                </a>

                <a href="#proposta" class="mobile-link">
                    Proposta
                </a>

                <a href="#valores" class="mobile-link">
                    Valores
                </a>

                <a href="#servicos" class="mobile-link">
                    Serviços
                </a>

                <a href="#quem-somos" class="mobile-link">
                    Quem somos
                </a>

                <a href="#contato" class="mobile-link">
                    Contato
                </a>


                <a
                    href="https://app.faroldabarbearia.com.br/agendar/barbeariadubay"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="mt-2 rounded-lg bg-dubay-gold px-5 py-3 text-center text-xs font-bold uppercase tracking-wider text-dubay-blue"
                >
                    Agendar horário
                </a>

            </nav>

        </div>

    </header>


{{-- =========================================================
    PLAYER DUBAY + CONTROLES NATIVOS DO SPOTIFY
========================================================= --}}
<div
    id="dubay-player"
    class="fixed left-0 right-0 top-[76px] z-40 hidden"
>
    <div class="mx-auto max-w-7xl px-3 sm:px-5">

        <div
            id="dubay-player-bar"
            class="overflow-hidden rounded-b-2xl bg-dubay-blue shadow-2xl"
        >

            {{-- CABEÇALHO DUBAY --}}
            <div class="flex h-14 items-center gap-3 px-4 text-white">

                {{-- NOME DA MÚSICA --}}
                <div class="min-w-0 flex-1">
                    <p
                        id="dubay-track-title"
                        class="truncate text-sm font-semibold"
                    >
                        Trilha sonora Dubay
                    </p>
                </div>

                {{-- FECHAR --}}
                <button
                    id="dubay-close"
                    type="button"
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full text-xl text-white transition hover:bg-white/10"
                    aria-label="Fechar player"
                >
                    ×
                </button>

            </div>

            {{--
                CONTROLES REAIS DO SPOTIFY

                O Spotify fica logo abaixo do nosso cabeçalho.
                Não existe mais PLAY/PAUSE personalizado.
                O botão que inicia a música é o botão nativo do Spotify.
            --}}
            <div
                id="spotify-native-wrap"
                class="relative h-[82px] overflow-hidden border-t border-white/10 bg-dubay-blue"
            >
                <div
                    id="spotify-engine"
                    class="absolute left-0 top-[-70px] w-full"
                ></div>
            </div>

        </div>
    </div>
</div>

{{-- =========================================================
    BOTÃO PARA ABRIR O PLAYER
========================================================= --}}
<button
    id="dubay-player-open"
    type="button"
    class="fixed right-4 top-[88px] z-40 flex h-11 w-11 items-center justify-center rounded-full bg-dubay-gold text-xl text-dubay-blue shadow-lg transition hover:scale-105"
    aria-label="Abrir música"
>
    ♫
</button>

{{-- =========================================================
    SPOTIFY — CONTROLE NATIVO
========================================================= --}}
<main>

    {{-- =========================================================
        HERO
    ========================================================== --}}

    <section
        id="inicio"
        class="relative min-h-screen overflow-hidden bg-dubay-blue pt-[76px]"
    >

        {{-- IMAGEM --}}

      <div class="absolute inset-0 bg-dubay-blue">

    <picture>

    {{-- MOBILE --}}
    <source
        media="(max-width: 1023px)"
        srcset="{{ asset('images/hero_dubay_mobile.png') }}"
    >

    {{-- DESKTOP --}}
    <img
        src="{{ asset('images/hero_dubay.png') }}"
        alt="Dubay Barbearia"
        class="h-full w-full object-cover object-[center_45%]"
    >

</picture>
    <div
        class="absolute inset-0 bg-gradient-to-r from-dubay-blue via-dubay-blue/90 to-dubay-blue/20"
    ></div>

</div>


        {{-- CONTEÚDO --}}

        <div
            class="relative z-10 mx-auto flex min-h-[calc(100vh-76px)] max-w-7xl items-center px-5 py-20 lg:px-8"
        >

            <div class="max-w-3xl">

                <p
                    class="mb-6 text-sm font-semibold uppercase tracking-[0.3em] text-dubay-gold"
                >
                    Barbearia e imagem masculina
                </p>


                <h1
                    class="font-display text-5xl leading-[0.92] tracking-tight text-white sm:text-6xl md:text-7xl lg:text-8xl"
                >

                    SUA MELHOR

                    <br>

                    VERSÃO

                    <br>

                    <span class="text-dubay-gold">
                        COMEÇA AQUI.
                    </span>

                </h1>


                <div class="my-7 h-px w-16 bg-dubay-gold"></div>


                <p
                    class="max-w-xl text-base leading-7 text-white/80 sm:text-lg sm:leading-8"
                >
                    Mais do que um corte. Uma experiência de cuidado,
                    estilo e imagem pensada para o homem que busca evolução.
                </p>


                {{-- BOTÕES --}}

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">

                    {{-- CONHEÇA NOSSOS SERVIÇOS --}}

                    <a
                        href="#servicos"
                        class="rounded-lg border border-dubay-gold px-7 py-4 text-center text-sm font-bold uppercase tracking-wider text-dubay-gold transition hover:bg-dubay-gold hover:text-dubay-blue"
                    >
                        Conheça nossos serviços
                    </a>


                    {{-- AGENDAR — SOMENTE DESKTOP --}}

                    <a
                        href="https://app.faroldabarbearia.com.br/agendar/barbeariadubay"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="hidden rounded-lg bg-dubay-gold px-7 py-4 text-center text-sm font-bold uppercase tracking-wider text-dubay-blue transition hover:bg-dubay-gold-light lg:inline-flex"
                    >
                        Agendar horário
                    </a>

                </div>

            </div>

        </div>

    </section>
{{-- =========================================================
    PROPOSTA DE VALOR
========================================================== --}}

<section
    id="proposta"
    class="bg-dubay-white px-5 py-20 text-dubay-blue sm:py-24 lg:px-8"
>

    <div class="mx-auto max-w-6xl">

        <div class="text-center">

            <p
                class="text-sm font-semibold uppercase tracking-[0.3em] text-dubay-gold"
            >
                Proposta de valor
            </p>

            <div
                class="mx-auto mt-3 h-px w-12 bg-dubay-gold"
            ></div>

            <h2
                class="mx-auto mt-7 max-w-5xl font-display text-2xl leading-relaxed text-dubay-blue sm:text-3xl lg:text-4xl"
            >

                Construir e gerenciar a imagem estratégica do homem
                de alta performance, transmitindo

                <span class="text-dubay-gold">
                    autoridade, respeito e autoconfiança
                </span>

                em suas decisões diárias!

            </h2>

        </div>


        {{-- PILARES --}}

        @php

            $pilares = [

                [
                    'numero' => '01',
                    'titulo' => 'Autoridade',
                    'texto' => 'Sua imagem comunica presença, liderança e confiança.'
                ],

                [
                    'numero' => '02',
                    'titulo' => 'Respeito',
                    'texto' => 'Cuidado em cada detalhe para gerar admiração.'
                ],

                [
                    'numero' => '03',
                    'titulo' => 'Autoconfiança',
                    'texto' => 'Sentir-se bem para agir e decidir melhor todos os dias.'
                ],

            ];

        @endphp


        <div class="mt-14 grid gap-8 md:grid-cols-3">

            @foreach($pilares as $pilar)

                <article
                    class="border-t border-dubay-gold/40 pt-6 md:border-l md:border-t-0 md:pl-8"
                >

                    <span class="text-sm font-bold text-dubay-gold">
                        {{ $pilar['numero'] }}
                    </span>

                    <h3
                        class="mt-3 font-display text-2xl uppercase text-dubay-blue"
                    >
                        {{ $pilar['titulo'] }}
                    </h3>

                    <p
                        class="mt-3 leading-7 text-dubay-blue/70"
                    >
                        {{ $pilar['texto'] }}
                    </p>

                </article>

            @endforeach

        </div>

    </div>

</section>


        {{-- =========================================================
            VALORES
        ========================================================== --}}

        <section
            id="valores"
            class="bg-dubay-off-white px-5 py-20 sm:py-24 lg:px-8"
        >

            <div class="mx-auto max-w-7xl">

                <div class="text-center">

                    <p
                        class="text-sm font-semibold uppercase tracking-[0.3em] text-dubay-gold"
                    >
                        Nossos valores
                    </p>

                    <h2
                        class="mt-4 font-display text-4xl leading-tight sm:text-5xl"
                    >
                        Os pilares que guiam

                        <br class="hidden sm:block">

                        tudo o que fazemos.
                    </h2>

                </div>


                @php

                    $valores = [

                        [
                            'titulo' => 'Mentalidade',
                            'texto' => 'Evolução constante, visão estratégica e aperfeiçoamento diário.'
                        ],

                        [
                            'titulo' => 'Desenvolvimento',
                            'texto' => 'Buscamos desenvolver pessoas e aprimorar continuamente nossa técnica.'
                        ],

                        [
                            'titulo' => 'Respeito, Empatia e Confiança',
                            'texto' => 'Relações verdadeiras, acolhimento e atenção às necessidades de cada cliente.'
                        ],

                        [
                            'titulo' => 'Qualidade, Padrão e Responsabilidade',
                            'texto' => 'Consistência em cada detalhe, do atendimento ao acabamento final.'
                        ],

                        [
                            'titulo' => 'Comunicação Clara',
                            'texto' => 'Clareza nas recomendações e no alinhamento das expectativas.'
                        ],

                        [
                            'titulo' => 'Transparência e Honestidade',
                            'texto' => 'Honestidade em todas as relações.'
                        ],

                    ];

                @endphp


                <div
                    class="mt-14 grid gap-px overflow-hidden border border-dubay-gold/30 bg-dubay-gold/30 sm:grid-cols-2 lg:grid-cols-3"
                >

                    @foreach($valores as $valor)

                        <article
                            class="bg-dubay-off-white p-8 text-center transition hover:bg-white sm:p-10"
                        >

                            <div
                                class="mx-auto flex h-12 w-12 items-center justify-center rounded-full border border-dubay-gold text-dubay-gold"
                            >

                                <span class="font-display text-xl">
                                    D
                                </span>

                            </div>


                            <h3
                                class="mt-6 text-sm font-bold uppercase tracking-wide text-dubay-blue"
                            >
                                {{ $valor['titulo'] }}
                            </h3>


                            <p
                                class="mx-auto mt-4 max-w-xs text-sm leading-6 text-dubay-blue/65"
                            >
                                {{ $valor['texto'] }}
                            </p>

                        </article>

                    @endforeach

                </div>

            </div>

        </section>

{{-- =========================================================
    SERVIÇOS
========================================================== --}}

<section
    id="servicos"
    class="bg-dubay-blue px-5 py-20 text-white sm:py-24 lg:px-8"
>

    <div class="mx-auto max-w-7xl">

        {{-- CABEÇALHO --}}

        <div
            class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end"
        >

            <div>

                <p
                    class="text-sm font-semibold uppercase tracking-[0.3em] text-dubay-gold"
                >
                    Nossos serviços
                </p>

                <h2 class="mt-4 font-display text-4xl sm:text-5xl">
                    Seu estilo,

                    <br>

                    nosso cuidado.
                </h2>

            </div>


            <p class="max-w-md leading-7 text-white/60">
                Serviços pensados para cuidar da sua imagem
                com precisão, técnica e personalidade.
            </p>

        </div>


        {{-- =====================================================
            PRINCIPAIS SERVIÇOS
        ====================================================== --}}

        @php

            $servicosPrincipais = [

               [
                    'titulo' => 'Cabelo',
                    'imagem' => asset('images/cabelo.jpeg')
                ],
                [
                    'titulo' => 'Barba',
                    'imagem' => asset('images/barba.jpeg')
                ],

                [
                    'titulo' => 'Barba Terapia',
                    'imagem' => asset('images/barbaterapia.jpeg')
                ],

            ];

        @endphp


        <div class="mt-14 grid gap-5 md:grid-cols-3">

            @foreach($servicosPrincipais as $servico)

                <article
                    class="group overflow-hidden border border-white/10 bg-dubay-blue-dark transition duration-300 hover:-translate-y-1 hover:border-dubay-gold/60"
                >

                    {{-- IMAGEM --}}

                    <div class="relative aspect-[4/3] overflow-hidden">

                        <img
                            src="{{ $servico['imagem'] }}"
                            alt="{{ $servico['titulo'] }}"
                            class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            loading="lazy"
                        >

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-dubay-blue via-transparent to-transparent opacity-80"
                        ></div>

                    </div>


                    {{-- CONTEÚDO --}}

                    <div class="p-6">

                        <h3 class="font-display text-3xl">
                            {{ $servico['titulo'] }}
                        </h3>


                        <a
                            href="https://app.faroldabarbearia.com.br/agendar/barbeariadubay"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="mt-5 inline-block text-xs font-bold uppercase tracking-[0.2em] text-dubay-gold transition hover:text-dubay-gold-light"
                        >
                            Marcar horário →
                        </a>

                    </div>

                </article>

            @endforeach

        </div>


        {{-- =====================================================
            MAIS SERVIÇOS
        ====================================================== --}}

        @php

            $outrosServicos = [

                'Sobrancelhas',

                'Higienização de nariz',

                'Hidratações com terapia capilar',

                'Selagem capilar',

                'Botox capilar',

            ];

        @endphp


        <div class="mt-10 text-center">

            <button
                type="button"
                id="btnMaisServicos"
                class="inline-flex items-center gap-3 border border-dubay-gold px-7 py-4 text-xs font-bold uppercase tracking-[0.2em] text-dubay-gold transition hover:bg-dubay-gold hover:text-dubay-blue"
            >

                <span>
                    Ver mais serviços
                </span>

                <svg
                    id="iconeMaisServicos"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 transition-transform duration-300"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M19 9l-7 7-7-7"
                    />
                </svg>

            </button>

        </div>


        {{-- =====================================================
            LISTA DE OUTROS SERVIÇOS
        ====================================================== --}}

        <div
            id="listaMaisServicos"
            class="mt-6 hidden overflow-hidden border border-white/10 bg-dubay-blue-dark"
        >

            @foreach($outrosServicos as $servico)

                <div
                    class="flex flex-col gap-4 border-b border-white/10 px-6 py-5 last:border-b-0 sm:flex-row sm:items-center sm:justify-between"
                >

                    <h3 class="font-display text-xl text-white">
                        {{ $servico }}
                    </h3>


                    <a
                        href="https://app.faroldabarbearia.com.br/agendar/barbeariadubay"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex shrink-0 items-center justify-center border border-dubay-gold px-5 py-3 text-xs font-bold uppercase tracking-[0.15em] text-dubay-gold transition hover:bg-dubay-gold hover:text-dubay-blue"
                    >
                        Marcar
                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
    JAVASCRIPT — MAIS SERVIÇOS
========================================================== --}}

<script>

    const btnMaisServicos = document.getElementById('btnMaisServicos');
    const listaMaisServicos = document.getElementById('listaMaisServicos');
    const iconeMaisServicos = document.getElementById('iconeMaisServicos');

    btnMaisServicos?.addEventListener('click', () => {

        listaMaisServicos.classList.toggle('hidden');

        iconeMaisServicos.classList.toggle('rotate-180');

        const aberto = !listaMaisServicos.classList.contains('hidden');

        btnMaisServicos.querySelector('span').textContent =
            aberto ? 'Ocultar serviços' : 'Ver mais serviços';

    });

</script>


        {{-- =========================================================
            QUEM SOMOS
        ========================================================== --}}

        <section
            id="quem-somos"
            class="bg-dubay-off-white px-5 py-20 sm:py-24 lg:px-8"
        >

            <div
                class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-2 lg:items-center"
            >

                <div>

                    <p
                        class="text-sm font-semibold uppercase tracking-[0.3em] text-dubay-gold"
                    >
                        Quem somos
                    </p>


                    <h2
                        class="mt-5 font-display text-4xl leading-tight sm:text-5xl"
                    >
                        Muito além

                        <br>

                        da barbearia.
                    </h2>


                    <div class="my-7 h-px w-14 bg-dubay-gold"></div>


                    <p class="max-w-xl leading-8 text-dubay-blue/70">
                        A Dubay representa uma experiência de cuidado,
                        estilo e imagem masculina. Nosso propósito é ajudar
                        cada homem a construir uma imagem que reflita quem
                        ele é e onde deseja chegar.
                    </p>


                    <p class="mt-5 max-w-xl leading-8 text-dubay-blue/70">
                        Cada detalhe importa: do atendimento ao acabamento,
                        da conversa ao resultado final.
                    </p>

                </div>


                <div
                    class="relative aspect-square overflow-hidden bg-dubay-blue"
                >

                    <img
                        src="{{ asset('images/somos_dubay.jpg') }}"
                        alt="Dubay Barbearia"
                        class="h-full w-full object-cover opacity-80"
                        loading="lazy"
                    >


                    <div
                        class="absolute inset-0 bg-dubay-blue/30"
                    ></div>


                    <div
                        class="absolute inset-0 flex items-center justify-center"
                    >

                        <div class="text-center text-white">

                            <div
                                class="font-display text-6xl tracking-wider"
                            >
                                DUBAY
                            </div>

                            <div
                                class="mt-1 text-[9px] tracking-[0.3em] text-dubay-gold"
                            >
                                BARBEARIA E IMAGEM MASCULINA
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        {{-- =========================================================
            CONTATO
        ========================================================== --}}

        <section
            id="contato"
            class="bg-dubay-blue px-5 py-20 text-white sm:py-24 lg:px-8"
        >

            <div class="mx-auto max-w-5xl text-center">


                <p
                    class="text-sm font-semibold uppercase tracking-[0.3em] text-dubay-gold"
                >
                    Faça parte da experiência
                </p>


                <h2
                    class="mt-5 font-display text-4xl leading-tight sm:text-6xl"
                >

                    Sua melhor versão

                    <br>

                    <span class="text-dubay-gold">
                        começa aqui.
                    </span>

                </h2>


                <p
                    class="mx-auto mt-6 max-w-xl leading-7 text-white/60"
                >
                    Agende seu horário e descubra uma nova experiência
                    em barbearia e imagem masculina.
                </p>


                <div
                    class="mt-9 flex flex-col justify-center gap-3 sm:flex-row"
                >


                    {{-- WHATSAPP --}}

                    <a
                        href="https://wa.me/5588998384312"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="rounded-lg bg-dubay-gold px-8 py-4 text-sm font-bold uppercase tracking-wider text-dubay-blue transition hover:bg-dubay-gold-light"
                    >
                        Agendar pelo WhatsApp
                    </a>


                    {{-- AGENDAMENTO --}}

                    <a
                        href="https://app.faroldabarbearia.com.br/agendar/barbeariadubay"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="rounded-lg border border-white/20 px-8 py-4 text-sm font-bold uppercase tracking-wider text-white transition hover:border-dubay-gold hover:text-dubay-gold"
                    >
                        Agendar online
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

        <div class="grid gap-12 lg:grid-cols-2 lg:gap-16">


            {{-- =================================================
                INFORMAÇÕES
            ================================================== --}}

            <div>

                <p class="text-xs font-bold uppercase tracking-[0.25em] text-dubay-gold-dark">
                    Onde estamos
                </p>

                <h2 class="mt-4 font-display text-4xl text-dubay-blue sm:text-5xl">
                    Visite a Dubay.
                </h2>

                <div class="my-7 h-px w-14 bg-dubay-gold"></div>

                <p class="max-w-md text-sm leading-7 text-dubay-muted">
                    Estamos esperando por você para proporcionar uma
                    experiência completa de cuidado, estilo e imagem masculina.
                </p>


                {{-- ENDEREÇO --}}

                <div class="mt-10">

                    <p class="text-xs font-bold uppercase tracking-[0.25em] text-dubay-gold-dark">
                        Endereço
                    </p>

                    <p class="mt-4 text-sm leading-7 text-dubay-muted">

                        R. Tab. Francisco de Paula Lôbo, 594<br>
                        Sen. Francisco Menezes Pimentel<br>
                        Santa Quitéria — CE<br>
                        62280-000

                    </p>

                </div>

                {{-- CONTATO --}}

                <div class="mt-8">

                    <p class="text-xs font-bold uppercase tracking-[0.25em] text-dubay-gold-dark">
                        Fale conosco
                    </p>

                    <a
                        href="tel:+5588998384312"
                        class="mt-4 block text-sm text-dubay-muted transition hover:text-dubay-blue"
                    >
                        (88) 99838-4312
                    </a>

                    <a
                        href="https://wa.me/5588998384312"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-3 inline-block text-sm font-semibold text-dubay-blue transition hover:text-dubay-gold-dark"
                    >
                        WhatsApp →
                    </a>

                </div>


                {{-- HORÁRIO --}}

                <div class="mt-8">

                    <p class="text-xs font-bold uppercase tracking-[0.25em] text-dubay-gold-dark">
                        Funcionamento
                    </p>

                    <h3 class="mt-3 font-display text-2xl text-dubay-blue">
                        Horário
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-dubay-muted">
                        Atendimento conforme disponibilidade.
                    </p>

                    <a
                        href="https://app.faroldabarbearia.com.br/agendar/barbeariadubay"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-5 inline-flex bg-dubay-blue px-6 py-3 text-xs font-bold uppercase tracking-[0.15em] text-dubay-white transition hover:bg-dubay-blue-light"
                    >
                        Consultar horário
                    </a>

                </div>

            </div>


            {{-- =================================================
                MAPA
            ================================================== --}}

            <div>

                <p class="mb-4 text-xs font-bold uppercase tracking-[0.25em] text-dubay-gold-dark">
                    Nossa localização
                </p>

                <div
                    class="relative overflow-hidden border border-dubay-gold/30 bg-dubay-blue"
                >

                    <iframe
                        src="https://www.google.com/maps?q=Barbearia%20Dubay,%20R.%20Tab.%20Francisco%20de%20Paula%20L%C3%B4bo,%20594,%20Santa%20Quit%C3%A9ria%20-%20CE&output=embed"
                        width="100%"
                        height="500"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="h-[400px] w-full sm:h-[500px]"
                    >
                    </iframe>

                </div>

                <p class="mt-4 text-xs leading-6 text-dubay-muted">
                    R. Tab. Francisco de Paula Lôbo, 594 —
                    Santa Quitéria, Ceará.
                </p>

            </div>

        </div>

    </div>

</section>
<!-- {{-- =====================================================
    PLAYLIST DUBAY
====================================================== --}}

<section
    id="playlist"
    class="bg-dubay-blue px-5 py-20 text-white sm:py-24 lg:px-8"
>

    <div class="mx-auto max-w-5xl">

        {{-- TÍTULO --}}

        <div class="text-center">

            <p class="text-xs font-bold uppercase tracking-[0.3em] text-dubay-gold">
                Trilha sonora
            </p>

            <div class="mx-auto mt-3 h-px w-12 bg-dubay-gold"></div>

            <h2 class="mt-6 font-display text-4xl sm:text-5xl lg:text-6xl">
                O estilo também se ouve.
            </h2>

            <p class="mx-auto mt-5 max-w-xl text-sm leading-7 text-white/60">
                Uma seleção de músicas para acompanhar a experiência Dubay.
            </p>

        </div>


        {{-- PLAYER SPOTIFY --}}

        <div class="mx-auto mt-12 max-w-4xl overflow-hidden rounded-xl">

            <div id="spotify-player"></div>

        </div>

    </div>

</section>


{{-- =====================================================
    SPOTIFY IFRAME API
====================================================== --}}
-->

<script src="https://open.spotify.com/embed/iframe-api/v1" async></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const player = document.getElementById('dubay-player');
    const playerOpen = document.getElementById('dubay-player-open');
    const closeButton = document.getElementById('dubay-close');

    const trackTitle = document.getElementById('dubay-track-title');
    let currentTrackUri = null;
    let metadataRequestUri = null;

    /* ABRIR PLAYER */
    playerOpen?.addEventListener('click', function () {
        player.classList.remove('hidden');
        playerOpen.classList.add('hidden');
    });

    /* FECHAR PLAYER */
    closeButton?.addEventListener('click', function (event) {
        event.stopPropagation();
        player.classList.add('hidden');
        playerOpen.classList.remove('hidden');
    });

    /*
     * O Spotify é o responsável pela reprodução.
     * Não chamamos play(), pause() ou resume() a partir de um botão nosso.
     * O usuário interage diretamente com os controles nativos do Spotify.
     */
    window.onSpotifyIframeApiReady = function (IFrameAPI) {

        const element = document.getElementById('spotify-engine');

        if (!element) {
            return;
        }

        const options = {
            uri: 'spotify:playlist:7AAIBzKzlBpsV87c16yUR2',
            width: '100%',
            height: 152
        };

        IFrameAPI.createController(
            element,
            options,
            function (EmbedController) {

                EmbedController.addListener(
                    'playback_started',
                    function (event) {
                        if (
                            event &&
                            event.data &&
                            event.data.playingURI
                        ) {
                            atualizarMusica(event.data.playingURI);
                        }
                    }
                );

                EmbedController.addListener(
                    'playback_update',
                    function (event) {
                        if (
                            event &&
                            event.data &&
                            event.data.playingURI
                        ) {
                            atualizarMusica(event.data.playingURI);
                        }
                    }
                );
            }
        );
    };

    /* ATUALIZAR NOME DA FAIXA */
    async function atualizarMusica(uri) {

        if (!uri || uri === currentTrackUri) {
            return;
        }

        currentTrackUri = uri;

        const partes = uri.split(':');

        if (
            partes.length !== 3 ||
            partes[0] !== 'spotify' ||
            partes[1] !== 'track'
        ) {
            trackTitle.textContent = 'Trilha sonora Dubay';
            return;
        }

        const id = partes[2];
        const spotifyUrl = `https://open.spotify.com/track/${id}`;

        if (metadataRequestUri === uri) {
            return;
        }

        metadataRequestUri = uri;

        try {
            const response = await fetch(
                `https://open.spotify.com/oembed?url=${encodeURIComponent(spotifyUrl)}`
            );

            if (!response.ok) {
                return;
            }

            const data = await response.json();

            if (data.title) {
                trackTitle.textContent = data.title;
            }


        } catch (error) {
            console.error(
                'Erro ao buscar informações da música:',
                error
            );
        } finally {
            metadataRequestUri = null;
        }
    }

});
</script>
    </main>



    {{-- =========================================================
        FOOTER
    ========================================================== --}}

    <footer
        class="bg-dubay-blue-dark px-5 py-8 text-white lg:px-8"
    >

        <div
            class="mx-auto flex max-w-7xl flex-col gap-4 text-center sm:flex-row sm:items-center sm:justify-between sm:text-left"
        >

            <div>

                <div
                    class="font-display text-2xl tracking-wider"
                >
                    DUBAY
                </div>

                <div
                    class="text-[8px] tracking-[0.25em] text-dubay-gold"
                >
                    BARBEARIA E IMAGEM MASCULINA
                </div>

            </div>


            <p class="text-xs text-white/40">
                © {{ date('Y') }} Dubay. Todos os direitos reservados.
            </p>

        </div>

    </footer>



    {{-- =========================================================
        BOTÃO FIXO MOBILE
    ========================================================== --}}

    <a
        href="https://app.faroldabarbearia.com.br/agendar/barbeariadubay"
        target="_blank"
        rel="noopener noreferrer"
        class="fixed bottom-4 left-4 right-4 z-40 rounded-lg bg-dubay-gold px-6 py-4 text-center text-xs font-bold uppercase tracking-wider text-dubay-blue shadow-xl lg:hidden"
    >
        Agendar horário
    </a>



    {{-- =========================================================
        JAVASCRIPT MENU MOBILE
    ========================================================== --}}

    <script>

        const menuButton =
            document.getElementById('menu-button');

        const mobileMenu =
            document.getElementById('mobile-menu');


        menuButton?.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

        });


        document
            .querySelectorAll('.mobile-link')
            .forEach(link => {

                link.addEventListener('click', () => {

                    mobileMenu.classList.add('hidden');

                });

            });

    </script>


</body>

</html>