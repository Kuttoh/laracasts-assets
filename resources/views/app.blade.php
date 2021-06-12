<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Assets</title>

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="/css/app.css">

    </head>
    <body class="font-sans">
        <div id="app">

            <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') 0 15px no-repeat;">
                <h1>
                    <img src="/images/logo.svg" alt="Laracasts">
                </h1>
            </header>

            <div class="container px-8 pb-10">

                <main class="flex">
                    <aside class="w-64 pt-8">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                            <ul>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'logo' }" exact>Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'log_symbol' }">Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'colors' }">Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'typography' }">Typography</router-link></li>
                            </ul>
                        </section>
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                            <ul>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'mascot' }">Mascot</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'illustrations' }">Illustrations</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'loaders_and_animations' }">Loaders And Animations</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'wallpapers' }">Wallpapers</router-link></li>
                            </ul>
                        </section>
                        <section>
                            <h5 class="uppercase font-bold mb-5 text-base">Stats</h5>
                            <ul>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'site_stats' }">Site Stats</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>

                </main>

            </div>

        </div>

    <script src="/js/app.js"></script>
    </body>
</html>
