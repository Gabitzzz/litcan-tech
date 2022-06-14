<template>
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
                See our Tech <span class="text-red-600">Stalk</span> <br class="hidden md:block">
            </h1>
        </div>

    </div>

    <div class="mx-10 mb-8 flex flex-col items-center 2xl:mx-80 ">
        <p class="-mt-8 md:-mt-0 lg:-mt-24 xl:-mt-16 text-center text-lg md:px-24 lg:px-32 xl:mx-24 2xl:mx-80">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At corporis dignissimos excepturi
            illum
            iusto maxime, neque officia possimus vero voluptates. Ad blanditiis facere laboriosam molestiae
            optio porro quo similique vero.
        </p>
    </div>


    <!--        DESKTOP WEB DEV  -->
    <div class="md:mt-16 mx-10 lg:mx-48 text-4xl md:text-5xl">
        <div class="">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class="tracking-wider text-red-600">
                Web <span class="text-black">Development</span> <br>
            </p>
        </div>
    </div>

    <div class="hidden sm:flex justify-center md:mt-8 ">
        <div class="grid max-w-full  grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8 content-center">
            <!--LARAVEL -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="laravel" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Laravel <br> Development
                    </p>
                </div>
            </div>

            <!--    HTML     -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="html" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        HTML <br> Development
                    </p>
                </div>
            </div>

            <!--    CSS Styling -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="css" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        CSS <br> Styling
                    </p>
                </div>
            </div>

            <!--    JavaScript Development -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="javascript" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        JavaScript <br> Development
                    </p>
                </div>
            </div>

        </div>


    </div>
    <!--        END OF DESKTOP WEB DEV  -->

    <!--        MOBILE WEB DEV  -->
    <div class="sm:hidden mt-4">
        <div
            id="scrollContainer2"
            class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  hide-scroll-bar">
            <!--    LARAVEL DEVELOPMENT     -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://leap.essex.ac.uk/student" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="laravel"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            Laravel
                            <br>
                            Development
                        </h2>
                    </div>
                </div>
            </div>

            <!--                HTML DEVELOPMENT      -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://leap.essex.ac.uk/student" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="html"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            HTML
                            <br>
                            Development
                        </h2>
                    </div>
                </div>
            </div>

            <!--                CSS STYLING       -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://faser.essex.ac.uk/">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="css"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            CSS
                            <br>
                            Styling
                        </h2>
                    </div>
                </div>
            </div>

            <!--                    JS DEV      -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://faser.essex.ac.uk/">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="javascript"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            Javascript
                            <br>
                            Development
                        </h2>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!--        END OF MOBILE WEB DEV  -->


    <!--    DESTKOP FRONT END FRAMEWORKS-->
    <div class="mt-8 md:mt-16 mx-10 lg:mx-48 text-xl md:text-2xl">
        <div class="">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class="tracking-wider text-red-600">
                Front End <span class="text-black">Frameworks</span> <br>
            </p>
        </div>
    </div>

    <div class="hidden sm:flex justify-center md:mt-8 ">
        <div class="grid max-w-full  grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8 content-center">
            <!--    Vue.js  -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="vue" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Vue.js <br> Development
                    </p>
                </div>
            </div>

            <!-- React.js -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="react" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        React.js <br> Development
                    </p>
                </div>
            </div>

            <!-- TAILWIND -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="tailwind" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Tailwind.CSS <br> Development
                    </p>
                </div>
            </div>

            <!--    BOOTSTRAP    -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="bootstrap" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Bootstrap.CSS <br> Development
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!--   END OF DESKTOP FRONT END FRAMEWORKS-->

    <!--        MOBILE FRONT END FRAMEWORKS  -->
    <div class="sm:hidden mt-4">
        <div
            id="scrollContainer3"
            class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  hide-scroll-bar">
            <!--    VUE DEVELOPMENT     -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://leap.essex.ac.uk/student" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="vue"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            Vue.js
                            <br>
                            Development
                        </h2>
                    </div>
                </div>
            </div>

            <!--                REACT DEVELOPMENT      -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://leap.essex.ac.uk/student" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="react"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            React.js
                            <br>
                            Development
                        </h2>
                    </div>
                </div>
            </div>

            <!--                Tailwind STYLING       -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://faser.essex.ac.uk/">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="tailwind"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            Tailwind.CSS
                            <br>
                            Styling
                        </h2>
                    </div>
                </div>
            </div>

            <!--                    JS DEV      -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://faser.essex.ac.uk/">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="bootstrap"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            Bootstrap
                            <br>
                            Development
                        </h2>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!--        END OF FRONT END FRAMEWORKS  -->


    <!--    DESTOP OTHER TECHNOLOGIES-->
    <div class="mt-8 md:mt-16 mx-10 lg:mx-48 text-xl md:text-2xl">
        <div class="">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class="tracking-wider text-red-600">
                <span class="text-black">Other</span> Technologies
            </p>
        </div>
    </div>

    <div class="hidden sm:flex justify-center md:mt-8 ">
        <div class="grid max-w-full  grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8 content-center">
            <!--    MYSQL -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="laravel" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        MySql<br> Database
                    </p>
                </div>
            </div>

            <!--    FORGE -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="forge" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Forge <br> Deployment
                    </p>
                </div>
            </div>

            <!--    Inertia.js -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="inertia" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Inertia.js <br> Development
                    </p>
                </div>
            </div>


        </div>
    </div>
    <!--    END OF DESKTOP OTHER TECHNOLOGIES   -->

    <!--        MOBILE OTHER TECHNOLOGIES  -->
    <div class="sm:hidden mt-4">
        <div
            id="scrollContainer4"
            class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  hide-scroll-bar">
            <!--    LARAVEL DEVELOPMENT     -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://leap.essex.ac.uk/student" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="vue"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-8">
                        <h2 class="flex text-center  text-md" style="font-family: Poppins,serif">
                            Vue.js
                            <br>
                            Development
                        </h2>
                    </div>
                </div>
            </div>

            <!--                HTML DEVELOPMENT      -->
            <div class="inline-block px-2">
                <div
                    class="w-64 h-64 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://leap.essex.ac.uk/student" class="">
                        <div class="pt-8 px-8 flex justify-center">
                            <img :src="react"
                                 class="w-32 h-32 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-8">
                        <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                            React.js
                            <br>
                            Development
                        </h2>
                    </div>
                </div>
            </div>

            <!--                CSS STYLING       -->
            <div class="inline-block px-2">
                <div
                    class="w-64 h-64 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://faser.essex.ac.uk/">
                        <div class="pt-8 px-8 flex justify-center">
                            <img :src="css"
                                 class="w-32 h-32 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-8">
                        <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                            Tailwind.CSS Styling
                            <br>
                            Styling
                        </h2>
                    </div>
                </div>
            </div>

            <!--                    JS DEV      -->
            <div class="inline-block px-2">
                <div
                    class="w-64 h-64 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://faser.essex.ac.uk/">
                        <div class="pt-8 px-8 flex justify-center">
                            <img :src="bootstrap"
                                 class="w-32 h-32 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-8">
                        <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                            Bootstrap
                            <br>
                            Development
                        </h2>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!--        END OF OTHER TECHNOLOGIES  -->


    <hr class=" mx-10 lg:mx-48 my-8">


    <!--    DESTOP APP DEVELOPMENT     -->
    <div class="md:mt-8 mx-10 lg:mx-48 text-4xl md:text-5xl">
        <div class="">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class="tracking-wider text-red-600">
                App <span class="text-black">Development</span>
            </p>
        </div>
    </div>

    <div class="hidden sm:flex justify-center md:mt-8 ">
        <div class="grid max-w-full  grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8 content-center">
            <!--    Flutter -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="flutter" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Flutter<br> Development
                    </p>
                </div>
            </div>

            <!--    REACT NATIVE     -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="react" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        React Native <br> Development
                    </p>
                </div>
            </div>

            <!--    firebase -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="firebase" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Firebase <br> Development
                    </p>
                </div>
            </div>


        </div>
    </div>
    <!--    END OF DESKTOP APP DEVELOPMENT  -->

    <!--    MOBILE APP DEVELOPMENT      -->
    <div class="sm:hidden mt-4">
        <div
            id="scrollContainer5"
            class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  hide-scroll-bar">
            <!--    FLUTTER DEVELOPMENT     -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://leap.essex.ac.uk/student" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="flutter"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            Flutter
                            <br>
                            Development
                        </h2>
                    </div>
                </div>
            </div>

            <!--                REACT NATIVE DEVELOPMENT      -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://leap.essex.ac.uk/student" class="">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="react"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            React Native
                            <br>
                            Development
                        </h2>
                    </div>
                </div>
            </div>

            <!--                FIREBASE DEVELOPMENT       -->
            <div class="inline-block px-2">
                <div
                    class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <a href="https://faser.essex.ac.uk/">
                        <div class="pt-2 px-2 flex justify-center">
                            <img :src="firebase"
                                 class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </div>
                    </a>

                    <div class="flex justify-center mb-4">
                        <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                            Firebase
                            <br>
                            Development
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    END OF MOBILE APP DEVELOPMENT  -->


    <hr class=" mx-10 lg:mx-48 my-8">

    <!--    PRODUCT DESIGN-->
    <div class="md:mt-16 mx-10 lg:mx-48 text-4xl md:text-5xl">
        <div class="">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class="tracking-wider text-red-600">
                <span class="text-black">Product</span> Design
            </p>
        </div>
    </div>

    <div class="hidden sm:flex justify-center md:mt-8 mb-16 ">
        <div class="grid max-w-full  grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8 content-center">
            <!--    Sketch -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="sketch" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Sketch<br> Prototyping
                    </p>
                </div>
            </div>

            <!--    Figma     -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="figma" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Figma <br> Graphics Edit
                    </p>
                </div>
            </div>

            <!--    Adobe XD -->
            <div class="w-48 shadow-lg bg-white mx-8 z-10">
                <div class="flex justify-center">
                    <img :src="firebase" alt="" class="mt-8 w-24 h-24">

                </div>

                <div class="flex justify-center my-8">
                    <p class="text-xl text-center"
                       style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Adobe XD <br> Design
                    </p>
                </div>
            </div>


        </div>
    </div>
    <!--    END OF PRODUCT DESIGN  -->

    <hr class=" mx-10 lg:mx-48 my-8">


    <Footer></Footer>

</template>

<script>
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import BlogComponent from "@/Components/BlogComponent";

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

export default {
    name: "TechStalk",
    components: {
        Navbar,
        Footer,
        BlogComponent,
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
        }
    }
}
</script>

<style scoped>

</style>
