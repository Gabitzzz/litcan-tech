<template>
    <div>
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
                    Find the right <span class="text-red-600">service</span> <br class="hidden md:block">
                    for your business
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


        <!--        BANNER SERVICES     -->

        <div class="flex justify-center lg:mx-48 -mt-16 md:-mt-16 md:mb-32">
            <div class="grid max-w-full  grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-8 content-center mt-16">


                <!--                <div class="lg:flex">-->
                <!--    WEB DEV     -->
                <div class="w-72 shadow-lg bg-white mx-8 z-10">
                    <div class="flex justify-center">
                        <img :src="web_dev_services" alt="" class="mt-8 w-24 h-24">
                    </div>

                    <div class="flex justify-center mt-8">
                        <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Web <br> Development
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full" style="height: 2px;">

                        </div>
                    </div>

                    <p class="mb-4 mx-8 text-center text-md">
                        Product development at any
                        stage and ongoing support
                        after you launch
                    </p>

                    <div class="flex justify-center mb-8">

                        <button class=" mb-8 font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                            SEE MORE
                        </button>
                    </div>


                </div>

                <!--   APP DEV     -->
                <div class="w-72 shadow-lg bg-white mx-8 z-10">
                    <div class="flex justify-center">
                        <img :src="app_dev_services" alt="" class="mt-8 w-24 h-24">


                    </div>

                    <div class="flex justify-center mt-8">
                        <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Application <br> Development
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full" style="height: 2px;">

                        </div>
                    </div>

                    <p class="mb-4 mx-8 text-center text-md">
                        Product development at any
                        stage and ongoing support
                        after you launch
                    </p>

                    <div class="flex justify-center mb-8">

                        <button class="mb-8 font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                            SEE MORE
                        </button>
                    </div>


                </div>

                <!-- PRODUCT DESIGN     -->
                <div class="w-72 shadow-lg bg-white mx-8 z-10">
                    <div class="flex justify-center">
                        <img :src="product_design_services" alt="" class="mt-8 w-24 h-24">

                    </div>

                    <div class="flex justify-center mt-8">
                        <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Product <br> Design
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full" style="height: 2px;">

                        </div>
                    </div>

                    <p class="mb-4 mx-8 text-center text-md">
                        Product development at any
                        stage and ongoing support
                        after you launch
                    </p>

                    <div class="flex justify-center mb-8">

                        <button class="mb-8 font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                            SEE MORE
                        </button>
                    </div>


                </div>


                <!--    DIGITAL MARKETING     -->
                <div class="w-72 shadow-lg bg-white mx-8 z-10">
                    <div class="flex justify-center">
                        <img :src="digital_services" alt="" class="mt-8 w-24 h-24">

                    </div>

                    <div class="flex justify-center mt-8">
                        <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Digital <br> Marketing
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full" style="height: 2px;">

                        </div>
                    </div>

                    <p class="mb-4 mx-8 text-center text-md">
                        Product development at any
                        stage and ongoing support
                        after you launch
                    </p>

                    <div class="flex justify-center mb-8">

                        <button class=" mb-8 font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                            SEE MORE
                        </button>
                    </div>


                </div>

                <!-- MACHINE LEARNING    -->
                <div class="w-72 shadow-lg bg-white mx-8 z-10">
                    <div class="flex justify-center">
                        <img :src="ml_services" alt="" class="mt-8 w-24 h-24">

                    </div>

                    <div class="flex justify-center mt-8">
                        <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Machine <br> Learning
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full" style="height: 2px;">

                        </div>
                    </div>

                    <p class="mb-4 mx-8 text-center text-md">
                        Product development at any
                        stage and ongoing support
                        after you launch
                    </p>

                    <div class="flex justify-center mb-8">

                        <button class="mb-8 font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                            SEE MORE
                        </button>
                    </div>


                </div>

                <!--   CUSTOM DEV     -->
                <div class="w-72 shadow-lg bg-white mx-8 z-10">
                    <div class="flex justify-center">
                        <img :src="custom_services" alt="" class="mt-8 w-24 h-24">


                    </div>

                    <div class="flex justify-center mt-8">
                        <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                            Custom <br> Development
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full" style="height: 2px;">

                        </div>
                    </div>

                    <p class="mb-4 mx-8 text-center text-md">
                        Product development at any
                        stage and ongoing support
                        after you launch
                    </p>

                    <div class="flex justify-center mb-8">

                        <button class="mb-8 font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                            SEE MORE
                        </button>
                    </div>


                </div>

            </div>
        </div>


        <!--        INDUSTRY SPECIFIC SERVICES  -->
        <div class="my-16 bg-red-600 py-16 md:py-16">
            <div class="mx-10 lg:mx-48 items-center text-3xl md:text-5xl">
                <div class="">
                    <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                        class="tracking-wider  text-white">
                        Industry specific <span class="text-black">services</span> <br>
                    </h1>
                </div>
            </div>

            <!--            DESKTOP INDUSTRY SPECIFIC SERVICES  -->
            <div class="hidden sm:flex justify-center lg:mx-48 ">
                <div class="grid max-w-full  grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-8 content-center mt-16">
                    <!--            INDUSTRY SPECIFIC SERVICES ROW 1-->
                    <!--    FINTECH      -->
                    <div class="w-72 shadow-lg bg-white mx-8">
                        <div class="flex justify-center">
                            <img :src="fintech" alt="" class="mt-8 w-24 h-24">
                        </div>

                        <div class="flex justify-center mt-8">
                            <p class="text-xl text-center"
                               style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                Fintech <br> Development
                            </p>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full"
                                 style="height: 2px;">

                            </div>
                        </div>

                        <p class="mb-8 mx-8 text-center text-md">
                            Product development at any
                            stage and ongoing support
                            after you launch
                        </p>
                    </div>


                    <!--    ECOMMERCE      -->
                    <div class="w-72 shadow-lg bg-white mx-8">
                        <div class="flex justify-center">
                            <img :src="ecommerce" alt="" class="mt-8 w-24 h-24">
                        </div>

                        <div class="flex justify-center mt-8">
                            <p class="text-xl text-center"
                               style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                Ecommerce <br> Development
                            </p>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full"
                                 style="height: 2px;">

                            </div>
                        </div>

                        <p class="mb-8 mx-8 text-center text-md">
                            Product development at any
                            stage and ongoing support
                            after you launch
                        </p>
                    </div>

                    <!--    MEDTECH      -->
                    <div class="w-72 shadow-lg bg-white mx-8">
                        <div class="flex justify-center">
                            <img :src="ecommerce" alt="" class="mt-8 w-24 h-24">

                        </div>

                        <div class="flex justify-center mt-8">
                            <p class="text-xl text-center"
                               style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                Medtech <br> Development
                            </p>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full"
                                 style="height: 2px;">

                            </div>
                        </div>

                        <p class="mb-8 mx-8 text-center text-md">
                            Product development at any
                            stage and ongoing support
                            after you launch
                        </p>
                    </div>

                    <!--            INDUSTRY SPECIFIC SERVICES ROW 2-->
                    <!--    EDTECH      -->
                    <div class="w-72 shadow-lg bg-white mx-8">
                        <div class="flex justify-center">
                            <img :src="edtech" alt="" class="mt-8 w-24 h-24">

                        </div>

                        <div class="flex justify-center mt-8">
                            <p class="text-xl text-center"
                               style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                Edtech <br> Development
                            </p>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full"
                                 style="height: 2px;">

                            </div>
                        </div>

                        <p class="mb-8 mx-8 text-center text-md">
                            Product development at any
                            stage and ongoing support
                            after you launch
                        </p>
                    </div>

                    <!--    IoT       -->
                    <div class="w-72 shadow-lg bg-white mx-8">
                        <div class="flex justify-center">
                            <img :src="iot_dev" alt="" class="mt-8 w-24 h-24">

                        </div>

                        <div class="flex justify-center mt-8">
                            <p class="text-xl text-center"
                               style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                IoT <br> Development
                            </p>
                        </div>

                        <div class="flex justify-center">
                            <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full"
                                 style="height: 2px;">

                            </div>
                        </div>

                        <p class="mb-8 mx-8 text-center text-md">
                            Product development at any
                            stage and ongoing support
                            after you launch
                        </p>
                    </div>

                    <!--    Agritech      -->
                    <div class="w-72 shadow-lg bg-white mx-8">
                        <div class="flex justify-center">
                            <img :src="agritech" alt="" class="mt-8 w-24 h-24">

                        </div>

                        <div class="flex justify-center mt-8">
                            <p class="text-xl text-center"
                               style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                Agritech <br> Development
                            </p>
                        </div>


                        <div class="flex justify-center">
                            <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full"
                                 style="height: 2px;">

                            </div>
                        </div>

                        <p class="mb-8 mx-8 text-center text-md">
                            Product development at any
                            stage and ongoing support
                            after you launch
                        </p>
                    </div>
                </div>
            </div>

            <!--            MOBILE INDUSTRY SPECIFIC SERVICES  -->
            <div class="sm:hidden mt-8">
                <div
                    id="scrollContainer"
                    class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  hide-scroll-bar">
                    <!--    FINTECH     -->
                    <div class="inline-block px-2">
                        <div
                            class="w-64  max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://leap.essex.ac.uk/student" class="">
                                <div class="pt-8 px-8 flex justify-center">
                                    <img :src="fintech"
                                         class="w-32 h-32 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="plus">
                                </div>
                            </a>

                            <div class="flex justify-center">
                                <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                                    Fintech
                                    <br>
                                    Development
                                </h2>
                            </div>
                            <p class="text-center mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, amet aut
                                consequatur
                                dolore eligendi, est eveniet exercitationem
                            </p>
                        </div>
                    </div>

                    <!--                ECOMMERCE DEVELOPMENT      -->
                    <div class="inline-block px-2">
                        <div
                            class="w-64  max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://leap.essex.ac.uk/student" class="">
                                <div class="pt-8 px-8 flex justify-center">
                                    <img :src="ecommerce"
                                         class="w-32 h-32 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="plus">
                                </div>
                            </a>

                            <div class="flex justify-center">
                                <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                                    Ecommerce
                                    <br>
                                    Development
                                </h2>
                            </div>
                            <p class="text-center mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, amet aut
                                consequatur
                                dolore eligendi, est eveniet exercitationem
                            </p>
                        </div>
                    </div>

                    <!--                Medtech Development       -->
                    <div class="inline-block px-2">
                        <div
                            class="w-64  max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://faser.essex.ac.uk/">
                                <div class="pt-8 px-8 flex justify-center">
                                    <img :src="medtech"
                                         class="w-32 h-32 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="plus">
                                </div>
                            </a>

                            <div class="flex justify-center">
                                <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                                    Medtech
                                    <br>
                                    Development
                                </h2>
                            </div>
                            <p class="text-center mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, amet aut
                                consequatur
                                dolore eligendi, est eveniet exercitationem
                            </p>
                        </div>
                    </div>

                    <div class="inline-block px-2">
                        <div
                            class="w-64  max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://faser.essex.ac.uk/">
                                <div class="pt-8 px-8 flex justify-center">
                                    <img :src="edtech"
                                         class="w-32 h-32 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="plus">
                                </div>
                            </a>

                            <div class="flex justify-center">
                                <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                                    Edtech
                                    <br>
                                    Development
                                </h2>
                            </div>
                            <p class="text-center mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, amet aut
                                consequatur
                                dolore eligendi, est eveniet exercitationem
                            </p>
                        </div>
                    </div>

                    <div class="inline-block px-2">
                        <div
                            class="w-64  max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://faser.essex.ac.uk/">
                                <div class="pt-8 px-8 flex justify-center">
                                    <img :src="iot_dev"
                                         class="w-32 h-32 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="plus">
                                </div>
                            </a>

                            <div class="flex justify-center">
                                <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                                    IoT
                                    <br>
                                    Development
                                </h2>
                            </div>
                            <p class="text-center mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, amet aut
                                consequatur
                                dolore eligendi, est eveniet exercitationem
                            </p>
                        </div>
                    </div>

                    <div class="inline-block px-2">
                        <div
                            class="w-64  max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://faser.essex.ac.uk/">
                                <div class="pt-8 px-8 flex justify-center">
                                    <img :src="agritech"
                                         class="w-32 h-32 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="plus">
                                </div>
                            </a>

                            <div class="flex justify-center">
                                <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                                    Agritech
                                    <br>
                                    Development
                                </h2>
                            </div>
                            <p class="text-center mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, amet aut
                                consequatur
                                dolore eligendi, est eveniet exercitationem
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="md:mt-16 mx-10 lg:mx-48 items-center text-3xl md:text-5xl">
            <div class="">
                <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                    class="tracking-wider text-red-600">
                    Tech <span class="text-black">Stalk</span> <br>
                </h1>
            </div>
        </div>


        <div>
            <!--        DESKTOP TECH STALK  -->
            <div class="hidden sm:flex justify-center md:mt-16 ">
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

                    <!--LARAVEL -->
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

                    <!--LARAVEL -->
                    <div class="w-48 shadow-lg bg-white mx-8 z-10">
                        <div class="flex justify-center">
                            <img :src="flutter" alt="" class="mt-8 w-24 h-24">

                        </div>

                        <div class="flex justify-center my-8">
                            <p class="text-xl text-center"
                               style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                Flutter <br> Development
                            </p>
                        </div>
                    </div>

                    <!--LARAVEL -->
                    <div class="w-48 shadow-lg bg-white mx-8 z-10">
                        <div class="flex justify-center">
                            <img :src="python" alt="" class="mt-8 w-24 h-24">

                        </div>

                        <div class="flex justify-center my-8">
                            <p class="text-xl text-center"
                               style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                Python <br> Development
                            </p>
                        </div>
                    </div>

                </div>


            </div>

            <div class="hidden sm:flex justify-center mt-8 md:mt-16">
                <InertiaLink :href="route('tech-stack')"
                             class="text-red-600 border border-red-500 text-sm md:text-md border  rounded-full px-24 py-2">
                    SEE OUR FULL TECH STACK
                </InertiaLink>
            </div>
        </div>

        <div class=" md:py-16">
            <!--            MOBILE TECH STALK  -->
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
                                <h2 class="flex text-center  text-md" style="font-family: Poppins,serif">
                                    Laravel
                                    <br>
                                    Development
                                </h2>
                            </div>
                        </div>
                    </div>

                    <!--                VUE.JS DEVELOPMENT      -->
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

                            <div class="flex justify-center mb-2">
                                <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                    Vue.js
                                    <br>
                                    Development
                                </h2>
                            </div>
                        </div>
                    </div>

                    <!--                FLUTTER Development       -->
                    <div class="inline-block px-2">
                        <div
                            class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://faser.essex.ac.uk/">
                                <div class="pt-2 px-2 flex justify-center">
                                    <img :src="flutter"
                                         class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="plus">
                                </div>
                            </a>

                            <div class="flex justify-center mb-8">
                                <h2 class="flex text-center  text-md" style="font-family: Poppins,serif">
                                    Flutter
                                    <br>
                                    Development
                                </h2>
                            </div>
                        </div>
                    </div>

                    <!--                    PYTHON DEV      -->
                    <div class="inline-block px-2">
                        <div
                            class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://faser.essex.ac.uk/">
                                <div class="pt-2 px-2 flex justify-center">
                                    <img :src="python"
                                         class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="plus">
                                </div>
                            </a>

                            <div class="flex justify-center mb-8">
                                <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                    Python
                                    <br>
                                    Development
                                </h2>
                            </div>

                        </div>
                    </div>

                    <!--                    SEE ALL     -->
                    <div class="inline-block px-2">
                        <div
                            class="w-40 h-40 flex justify-center items-center max-w-xs overflow-hidden
                                    shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out
                                    font-bold text-xl"

                            style="font-family: Poppins,serif"
                        >

                            <InertiaLink :href="route('tech-stack')">
                                SEE ALL
                            </InertiaLink>

                        </div>
                    </div>


                </div>
            </div>
        </div>


        <BlogComponent></BlogComponent>

        <Footer></Footer>
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import BlogComponent from "@/Components/BlogComponent";

import {InertiaLink} from "@inertiajs/inertia-vue3";

import logo_bg from "/img/logo/logo_banner.png";
import logo_bg_mobile from "/img/logo/logo_banner_mobile.png";

import app_dev_services from "/img/services/app-dev-services.png";
import web_dev_services from "/img/services/web-dev-services.png";
import product_design_services from "/img/services/product-design-services.png";
import ml_services from "/img/services/ai.png";
import digital_services from "/img/services/digital.png";
import custom_services from "/img/services/custom.png";

import fintech from "/img/services/fintech.png";
import medtech from "/img/services/medtech.png";
import edtech from "/img/services/edtech.png";
import iot_dev from "/img/services/iot.png";
import ecommerce from "/img/services/ecommerce.png";
import agritech from "/img/services/agritech.png";

import vue from "/img/services/vue.png";
import laravel from "/img/services/laravel.png";
import python from "/img/services/python.png";
import flutter from "/img/services/flutter.png";

export default {
    name: "Index",
    components: {
        Navbar,
        Footer,
        BlogComponent,
        InertiaLink,
    },
    data() {
        return {
            logo_bg_mobile: logo_bg_mobile,
            logo_bg: logo_bg,

            app_dev_services: app_dev_services,
            web_dev_services: web_dev_services,
            product_design_services: product_design_services,
            ml_services: ml_services,
            digital_services: digital_services,
            custom_services: custom_services,

            vue: vue,
            laravel: laravel,
            python: python,
            flutter: flutter,

            fintech: fintech,
            ecommerce: ecommerce,
            medtech: medtech,
            agritech: agritech,
            edtech: edtech,
            iot_dev: iot_dev,
        }
    }
}
</script>

<style scoped>

</style>
