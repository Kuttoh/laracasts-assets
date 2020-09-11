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

            <div class="container mx-auto">

                <header class="py-6 mb-8">
                    <h1>
                        <img src="/images/logo.svg" alt="Laracasts">
                    </h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">The Brand</h5>
                            <ul>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'logo' }" exact>Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'log_symbol' }">Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'colors' }">Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'typography' }">Typography</router-link></li>
                            </ul>
                        </section>
                        <section>
                            <h5 class="uppercase font-bold mb-3">Doodles</h5>
                            <ul>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'mascot' }">Mascot</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'illustrations' }">Illustrations</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'loaders_and_animations' }">Loaders And Animations</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{ name: 'wallpapers' }">Wallpapers</router-link></li>
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
