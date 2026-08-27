<section
    id="inicio"
    class="relative flex min-h-[calc(100vh-5rem)] items-center overflow-hidden bg-dubay-blue"
>

    {{-- IMAGEM --}}
    <div class="absolute inset-0">

        <img
            src="{{ asset('images/hero-dubay.jpg') }}"
            alt="Dubay Barbearia"
            class="h-full w-full object-cover"
        >

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-dubay-blue/65"></div>

    </div>


    {{-- CONTEÚDO --}}
    <div class="relative z-10 mx-auto w-full max-w-7xl px-5 py-24 lg:px-8">

        <div class="max-w-4xl">

            <p class="mb-6 text-sm font-semibold uppercase tracking-[0.35em] text-dubay-gold">
                Barbearia • Estilo • Experiência
            </p>


            <h1 class="font-display text-5xl leading-[0.95] text-dubay-white sm:text-6xl md:text-7xl lg:text-8xl">

                Seu estilo

                <span class="block text-dubay-gold">
                    começa aqui.
                </span>

            </h1>


            <p class="mt-8 max-w-xl text-base leading-8 text-dubay-white/85 sm:text-lg">

                Mais que um corte.
                Uma experiência criada para valorizar
                seu estilo e sua personalidade.

            </p>


            <div class="mt-10 flex flex-col gap-4 sm:flex-row">

                <a
                    href="#agendar"
                    class="inline-flex h-13 items-center justify-center bg-dubay-gold px-8 text-sm font-bold uppercase tracking-[0.15em] text-dubay-blue transition hover:bg-dubay-gold-light"
                >
                    Agendar horário
                </a>

                <a
                    href="#servicos"
                    class="inline-flex h-13 items-center justify-center border border-dubay-white/70 px-8 text-sm font-semibold uppercase tracking-[0.15em] text-dubay-white transition hover:border-dubay-gold hover:bg-dubay-gold hover:text-dubay-blue"
                >
                    Conhecer serviços
                </a>

            </div>

        </div>

    </div>


    {{-- SCROLL --}}
    <div class="absolute bottom-8 left-1/2 z-10 hidden -translate-x-1/2 flex-col items-center gap-3 md:flex">

        <span class="text-[10px] uppercase tracking-[0.3em] text-dubay-white/60">
            Scroll
        </span>

        <div class="h-10 w-px bg-dubay-gold"></div>

    </div>

</section>