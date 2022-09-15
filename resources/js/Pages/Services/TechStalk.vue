<template>
    <Head>
        <title>
            Tech Stack | Lițcan Technologies
        </title>
    </Head>

    <Navbar></Navbar>


    <div class="md:mx-10 -mt-24 md:mt-32 2xl:mt-48 flex justify-center">
        <img :src="logo_bg_mobile" alt="" class="object-fit sm:hidden"
             style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">


        <img :src="logo_bg" alt="" class="object-fit hidden sm:flex"
             style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
    </div>

    <div class="mx-10 md:-mt-80 flex justify-center items-center text-3xl md:text-5xl">

        <div class="-mt-48 lg:-mt-80 flex flex-col items-center">
            <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                class="tracking-wider text-center leading-snug">
                See our Tech <span class="text-red-600">Stack</span> <br class="hidden md:block">
            </h1>
        </div>

    </div>

    <div class="mx-10 mb-8 flex flex-col items-center 2xl:mx-80 ">
        <p class="-mt-8 md:-mt-0 lg:-mt-24 xl:-mt-16 text-center text-xl md:px-24 lg:px-32 xl:mx-24 2xl:mx-24"
           style="font-family: 'Poppins', sans-serif; font-weight: 300;"
        >
            Newest and most popular programming languages, frameworks, prototyping and development tools that
            we use for our projects.
        </p>
    </div>

    <!--        WEB DEV     -->
    <div class="md:mt-16 mx-10 lg:mx-48 text-3xl md:text-5xl 2xl:mx-80">
        <div class="">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class="tracking-wider text-red-600">
                Web <span class="text-black">Development</span> <br>
            </p>
        </div>

        <div class="md:w-1/2 2xl:w-1/3 my-4 bg-red-500 rounded-full" style="height: 6px;"></div>
    </div>

    <!--        DESKTOP WEB DEV  -->
    <div class="hidden sm:flex justify-center md:mt-8 ">
        <div class="grid max-w-full  grid-cols-2  lg:grid-cols-4 gap-y-8 content-center">
            <!--LARAVEL -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://laravel.com">
                    <div class="flex justify-center">
                        <img :src="laravel"
                             alt="Laravel Development"
                             title="Laravel Development"
                             class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Laravel <br> Development
                        </p>
                    </div>
                </a>
            </div>

            <!--    HTML     -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://www.w3schools.com/html/">
                    <div class="flex justify-center">
                        <img :src="html"
                             alt="HTML"
                             title="HTML"
                             class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            HTML <br> Development
                        </p>
                    </div>
                </a>
            </div>

            <!--    CSS Styling -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://www.w3schools.com/css/">
                    <div class="flex justify-center">
                        <img :src="css"
                             alt="Cascading Style Sheets"
                             title="Cascading Style Sheets"
                             class="mt-8 w-24 h-24">

                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            CSS <br> Styling
                        </p>
                    </div>
                </a>
            </div>

            <!--    JavaScript Development -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://www.javascript.com/">
                    <div class="flex justify-center">
                        <img :src="javascript"
                             alt="JavaScript"
                             title="JavaScript"
                             class="mt-8 w-24 h-24">

                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            JavaScript <br> Development
                        </p>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <!--        END OF DESKTOP WEB DEV  -->

    <!--        MOBILE WEB DEV  -->
    <div class="sm:hidden mt-4">
        <div
            id="scrollContainer2"
            class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  scrollbar-hide">
            <!--    LARAVEL DEVELOPMENT     -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://laravel.com/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="laravel"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Laravel Development"
                                 title="Laravel Development"
                            >
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Laravel
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--                HTML DEVELOPMENT      -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://www.w3schools.com/html/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="html"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="HTML">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                HTML
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--                CSS STYLING       -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://www.w3schools.com/css//">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="css"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Cascading Style Sheets"
                                 title="Cascading Style Sheets">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                CSS
                                <br>
                                Styling
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--                    JS DEV      -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://www.javascript.com/">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="javascript"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="JavaScript"
                                 title="JavaScript">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Javascript
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--        END OF MOBILE WEB DEV  -->


    <!--    DESTKOP FRONT END FRAMEWORKS-->
    <div class="md:mt-16 mx-10 lg:mx-48 text-2xl md:text-2xl 2xl:mx-80">

        <div class="">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class="tracking-wider text-red-600">
                Front End <span class="text-black">Frameworks</span> <br>
            </p>
        </div>
    </div>

    <div class="hidden sm:flex justify-center md:mt-8 ">
        <div class="grid max-w-full  grid-cols-2 lg:grid-cols-4 gap-y-8 content-center">
            <!--    Vue.js  -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://vuejs.org/">
                    <div class="flex justify-center">
                        <img :src="vue"
                             alt="Vue.js Development"
                             title="Vue.js Development"
                             class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Vue.js <br> Development
                        </p>
                    </div>
                </a>
            </div>

            <!-- React.js -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://reactjs.org/">
                    <div class="flex justify-center">
                        <img :src="react"
                             alt="React.js Development"
                             title="React.js Development"
                             class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            React.js <br> Development
                        </p>
                    </div>
                </a>
            </div>

            <!-- TAILWIND -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://tailwindcss.com/">
                    <div class="flex justify-center">
                        <img :src="tailwind" alt="" class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Tailwind.CSS <br> Development
                        </p>
                    </div>
                </a>
            </div>

            <!--    BOOTSTRAP    -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://getbootstrap.com/">
                    <div class="flex justify-center">
                        <img :src="bootstrap"
                             alt="Bootstrap Development"
                             title="Bootstrap Development"
                             class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Bootstrap.CSS <br> Development
                        </p>
                    </div>
                </a>

            </div>

        </div>
    </div>
    <!--   END OF DESKTOP FRONT END FRAMEWORKS-->

    <!--        MOBILE FRONT END FRAMEWORKS  -->
    <div class="sm:hidden ">
        <div
            id="scrollContainer3"
            class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  scrollbar-hide">
            <!--    VUE DEVELOPMENT     -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://vuejs.org/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="vue"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Vue.js
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--                REACT DEVELOPMENT      -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://reactjs.org/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="react"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                React.js
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--                Tailwind STYLING       -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://tailwindcss.com//">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="tailwind"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Tailwind Styling"
                                 title="Tailwind Styling">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Tailwind.CSS
                                <br>
                                Styling
                            </h2>
                        </div>
                    </a>

                </div>
            </div>

            <!--                    JS DEV      -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://getbootstrap.com/">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="bootstrap"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Bootstrap Development"
                                 title="Bootstrap Development">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Bootstrap
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>
    <!--        END OF FRONT END FRAMEWORKS  -->


    <!--    DESTKOP OTHER TECHNOLOGIES-->
    <div class="md:mt-16 mx-10 lg:mx-48 text-2xl md:text-2xl 2xl:mx-80">

        <div class="">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class="tracking-wider text-red-600">
                <span class="text-black">Other</span> Technologies
            </p>
        </div>
    </div>

    <div class="hidden sm:flex justify-center md:mt-8 ">
        <div class="grid max-w-full  grid-cols-2 lg:grid-cols-4 gap-y-8 content-center">
            <!--    Digital Ocean -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://www.digitalocean.com/">
                    <div class="flex justify-center">
                        <img :src="digital_ocean" alt="" class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Digital Ocean<br> Droplets
                        </p>
                    </div>
                </a>

            </div>

            <!--    FORGE -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://forge.laravel.com/">
                    <div class="flex justify-center">
                        <img :src="forge" alt="" class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Forge <br> Deployment
                        </p>
                    </div>
                </a>
            </div>

            <!--    PYTHON DEVELOPMENT -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://www.python.org">
                    <div class="flex justify-center">
                        <img :src="python" alt="" class="mt-8 w-24 h-24">

                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Python <br> Development
                        </p>
                    </div>
                </a>

            </div>

            <!--    WORDPRESS DEVELOPMENT   -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://wordpress.org/">
                    <div class="flex justify-center">
                        <img :src="wordpress"
                             title="Wordpress Development"
                             alt="Wordpress Development"
                             class="mt-8 w-24 h-24">

                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Wordpress <br> Development
                        </p>
                    </div>
                </a>
            </div>


        </div>
    </div>
    <!--    END OF DESKTOP OTHER TECHNOLOGIES   -->

    <!--        MOBILE OTHER TECHNOLOGIES  -->
    <div class="sm:hidden mt-4">
        <div
            id="scrollContainer4"
            class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  scrollbar-hide">
            <!--    DIGITAL OCEAN DROPLETS  -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://www.digitalocean.com/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="digital_ocean"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Digital Ocean"
                                 title="Digital Ocean">
                        </div>

                        <div class="flex justify-center mb-8">
                            <h2 class="flex text-center  text-md" style="font-family: Poppins,serif">
                                Digital Ocean
                                <br>
                                Droplets
                            </h2>
                        </div>
                    </a>

                </div>
            </div>

            <!--            FORGE       -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://forge.laravel.com/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="forge"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Laravel Forge"
                                 title="Laravel Forge">
                        </div>

                        <div class="flex justify-center mb-8">
                            <h2 class="flex text-center  text-md" style="font-family: Poppins,serif">
                                Forge
                                <br>
                                Deployment
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--    PYTHON DEVELOPMENT  -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://www.python.org/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="python"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Python Development"
                                 title="Python Development">
                        </div>

                        <div class="flex justify-center mb-8">
                            <h2 class="flex text-center  text-md" style="font-family: Poppins,serif">
                                Python
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--    WORDPRESS   -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://wordpress.org/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="wordpress"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Wordpress Development"
                                 title="Wordpress Development">
                        </div>

                        <div class="flex justify-center mb-8">
                            <h2 class="flex text-center  text-md" style="font-family: Poppins,serif">
                                Wordpress
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--        END OF MOBILE OTHER TECHNOLOGIES  -->

    <hr class=" mx-10 lg:mx-48 my-8">

    <!--    DESkTOP APP DEVELOPMENT     -->
    <div class="md:mt-16 mx-10 lg:mx-48 text-3xl md:text-5xl 2xl:mx-80">
        <div class="">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class="tracking-wider text-red-600">
                App <span class="text-black">Development</span>
            </p>
        </div>
        <div class="md:w-1/2 2xl:w-1/3 my-4 bg-red-500 rounded-full" style="height: 6px;"></div>


    </div>

    <!--    DESKTOP APP DEVELOPMENT  -->
    <div class="hidden sm:flex justify-center md:mt-8 ">
        <div class="grid max-w-full  grid-cols-2 lg:grid-cols-4 gap-y-8 content-center">
            <!--    Flutter -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://flutter.dev/">
                    <div class="flex justify-center">
                        <img :src="flutter"
                             alt="Flutter Development"
                             title="Flutter Development"
                             class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Flutter<br> Development
                        </p>
                    </div>
                </a>
            </div>

            <!--    REACT NATIVE     -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://reactnative.dev/">
                    <div class="flex justify-center">
                        <img :src="react"
                             alt="React Native Development"
                             title="React Native Development"
                             class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            React Native <br> Development
                        </p>
                    </div>
                </a>
            </div>

            <!--    firebase -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://firebase.google.com/">
                    <div class="flex justify-center">
                        <img :src="firebase" alt="" class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Firebase <br> Development
                        </p>
                    </div>
                </a>

            </div>

            <!--    Inertia.js -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://inertiajs.com/">
                    <div class="flex justify-center">
                        <img :src="inertia" alt="" class="mt-8 w-24 h-24">

                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Inertia.js <br> Development
                        </p>
                    </div>
                </a>
            </div>


        </div>
    </div>
    <!--    END OF DESKTOP APP DEVELOPMENT  -->

    <!--    MOBILE APP DEVELOPMENT      -->
    <div class="sm:hidden mt-4">
        <div
            id="scrollContainer5"
            class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  scrollbar-hide">
            <!--    FLUTTER DEVELOPMENT     -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://flutter.dev/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="flutter"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Flutter Development"
                                 title="Flutter Development">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Flutter
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--                REACT NATIVE DEVELOPMENT      -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://reactnative.dev/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="react"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                React Native
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--                FIREBASE DEVELOPMENT       -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://firebase.google.com/">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="firebase"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Firebase
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--                INERTIA.JS DEVELOPMENT       -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://inertiajs.com/">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="inertia"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Inertia.js
                                <br>
                                Development
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--    END OF MOBILE APP DEVELOPMENT  -->


    <hr class=" mx-10 lg:mx-48 my-8">

    <!--    PRODUCT DESIGN-->
    <div class="md:mt-16 mx-10 lg:mx-48 text-3xl md:text-5xl 2xl:mx-80">
        <div class="">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class="tracking-wider text-red-600">
                <span class="text-black">Product</span> Design
            </p>
        </div>

        <div class="md:w-1/2 2xl:w-1/3 my-4 bg-red-500 rounded-full" style="height: 6px;"></div>


    </div>

    <!--    DESKTOP PRODUCT DESIGN-->
    <div class="hidden sm:flex justify-center md:mt-8 mb-16 ">
        <div class="grid max-w-full  grid-cols-2 lg:grid-cols-4 gap-y-8 content-center">
            <!--    Sketch -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://www.sketch.com/home/">
                    <div class="flex justify-center">
                        <img :src="sketch" alt="Sketch Prototyping" title="Sketch Prototyping" class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Sketch<br> Prototyping
                        </p>
                    </div>
                </a>
            </div>

            <!--    ADOBE XD     -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://www.adobe.com/uk/products/xd.html">
                    <div class="flex justify-center">
                        <img :src="adobe_xd" alt="Adobe XD" title="Adobe XD" class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Adobe XD <br> Prototyping
                        </p>
                    </div>
                </a>
            </div>

            <!--    Figma     -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://www.figma.com/">
                    <div class="flex justify-center">
                        <img :src="figma" alt="Figma Graphics Edit" title="Figma Graphics Edit" class="mt-8 w-24 h-24">

                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Figma <br> Graphics Edit
                        </p>
                    </div>
                </a>
            </div>

            <!--    CANVA   -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <a href="https://www.canva.com/">
                    <div class="flex justify-center">
                        <img :src="canva" alt="Canva Design" title="Canva Design" class="mt-8 w-24 h-24">

                    </div>

                    <div class="flex justify-center my-8">
                        <p class="text-xl text-center"
                           style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Canva <br> Design
                        </p>
                    </div>
                </a>

            </div>


        </div>
    </div>
    <!--    END OF DESKTOP PRODUCT DESIGN  -->

    <!--    MOBILE PRODUCT DESIGN   -->
    <div class="sm:hidden mt-4">
        <div
            id="scrollContainer6"
            class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  scrollbar-hide">
            <!--    SKETCH     -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://www.sketch.com/home/" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="sketch"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Sketch Prototyping"
                                 title="Sketch Prototyping">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Sketch
                                <br>
                                Prototyping
                            </h2>
                        </div>
                    </a>

                </div>
            </div>

            <!--    ADOBE XD    -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://www.adobe.com/uk/products/xd.html" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="adobe_xd"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Adobe XD
                                <br>
                                Prototyping
                            </h2>
                        </div>
                    </a>

                </div>
            </div>

            <!--    FIGMA   -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://www.figma.com//">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="figma"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>


                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Figma
                                <br>
                                Graphics Edit
                            </h2>
                        </div>
                    </a>
                </div>
            </div>

            <!--                CANVA       -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://www.canva.com/">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="canva"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="Canva Design"
                                 title="Canva Design">
                        </div>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                Canva
                                <br>
                                Design
                            </h2>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!--    END OF MOBILE PRODUCT DESIGN   -->


    <Footer></Footer>

</template>

<script>
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import BlogComponent from "@/Components/BlogComponent";
import {Head} from "@inertiajs/inertia-vue3";

import logo_bg from "/img/logo/logo_banner.png";
import logo_bg_mobile from "/img/logo/logo_banner_mobile.png";


import vue from "/img/services/vue.png";
import bootstrap from "/img/services/bootstrap.png";
import javascript from "/img/services/js.svg";
import css from "/img/services/css.png";
import html from "/img/services/html.svg";
import laravel from "/img/services/laravel.png";
import python from "/img/services/python.png";
import flutter from "/img/services/flutter.png";
import react from "/img/services/react.svg";
import tailwind from "/img/services/tailwind.png";
import forge from "/img/services/forge.svg";
import inertia from "/img/services/inertia.png";
import sketch from "/img/services/sketch.png";
import firebase from "/img/services/firebase.svg";
import digital_ocean from "/img/services/digital-ocean.png";
import canva from "/img/services/canva.png";
import figma from "/img/services/figma.svg";
import adobe_xd from "/img/services/xd.png";
import wordpress from "/img/services/wordpress.png";

export default {
    name: "TechStalk",
    components: {
        Navbar,
        Footer,
        BlogComponent,
        Head,
    },
    data() {
        return {
            logo_bg_mobile: logo_bg_mobile,
            logo_bg: logo_bg,

            vue: vue,
            sketch: sketch,
            inertia: inertia,
            forge: forge,
            bootstrap: bootstrap,
            tailwind: tailwind,
            react: react,
            javascript: javascript,
            css: css,
            html: html,
            laravel: laravel,
            python: python,
            flutter: flutter,
            firebase: firebase,
            digital_ocean: digital_ocean,
            figma: figma,
            adobe_xd: adobe_xd,
            canva: canva,
            wordpress: wordpress,

        }
    }
}
</script>

<style scoped>

</style>
