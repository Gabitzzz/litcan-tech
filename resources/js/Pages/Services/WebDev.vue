<template>
    <Navbar></Navbar>

    <div class=" mt-80 md:mt-32 2xl:mt-48 flex justify-center">
        <img :src="logo_bg_mobile" alt="" class="object-fit sm:hidden"
             style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
        <img :src="logo_bg" alt="" class="object-fit hidden sm:flex z-0"
             style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
    </div>

    <div class="mx-10 -mt-48 lg:-mt-64 xl:-mt-80  flex justify-center items-center text-3xl md:text-5xl">
        <div class="-mt-80 lg:-mt-80 flex flex-col items-center">
            <img :src="banner_mobile" class="mt-6 w-full md:hidden" alt="">

            <div class="flex items-center justify-between xl:mx-32 2xl:mx-64">
                <div>
                    <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                        class="text-4xl lg:text-5xl lg:tracking-wider text-center md:text-left">
                    <span class="text-red-500">
                    Web
                    </span>
                        Development <br> Services
                    </h1>

                    <div class="md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 6px;">

                    </div>

                    <div
                        style="font-family: 'Poppins', sans-serif; font-weight: 400;"
                        class="text-xl text-center md:text-left xl:text-2xl md:mr-16 mt-8">
                        Develop your product with the latest available technologies and a custom minimalistic interface.
                    </div>

                    <div class="flex justify-center md:justify-start  mt-16 md:mt-10">
                        <a href="/contact"
                           class="z-10 text-red-600 text-sm rounded-full px-10 py-2 border border-red-600
                                  md:text-md
                                  hover:text-white hover:bg-red-600 ease-in duration-150 ">
                            CONTACT US
                        </a>
                    </div>
                </div>


                <img :src="banner" class="hidden md:block w-full md:w-1/2 " alt="">
            </div>

        </div>

    </div>


    <div class="mx-6">

        <div class="flex justify-center mt-16">
            <p class="text-4xl lg:text-5xl"
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;">
            Web Development Process

            </p>
        </div>

        <!--        1. PLANNING-->
        <div class="lg:mx-32 2xl:mx-72 my-16  md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="planning" class=""
                     alt="">
            </div>

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                <span class="text-xl"
                      style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Stage 1. <br>
                </span>

                    Planning
                </p>

                <div class="flex sm:block justify-between">
                    <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                    </div>
                </div>

                <p class="text-xl md:text-2xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Understand the project's requirements <br>
                    Analyze de current market <br>
                    Provide the development stages
                </p>
            </div>

            <img :src="planning" class="hidden md:block w-1/3 "
                 alt="">

        </div>

    </div>

    <hr class="mx-12 md:mx-32 2xl:mx-72">


    <!--        TECH STACK      -->
    <div>
        <div class="mt-16 mx-6 lg:mx-48 2xl:mx-80 items-center text-3xl md:text-5xl">

            <div class="">
                <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                    class="text-center text-red-600">
                    Tech <span class="text-black">Stack</span> <br>
                </h1>
            </div>

            <p class="text-center text-xl md:text-2xl mt-4  "
               style="font-family: 'Poppins', sans-serif; font-weight: 300;">

                Here is a part of our favorite Tech Stack, languages and frameworks that we use in day to day
                development.
            </p>
        </div>


        <div>
            <!--        DESKTOP TECH STALK  -->
            <div class="hidden sm:flex justify-center md:mt-16 mx-10 lg:mx-24 xl:mx-48 ">
                <div class="grid max-w-full  grid-cols-2  lg:grid-cols-4 gap-y-8 content-center">
                    <!--LARAVEL -->
                    <div class="w-48 shadow-lg bg-white mx-8 z-10">
                        <a href="https://laravel.com/" class="pb-8">
                            <div class="flex justify-center">
                                <img :src="laravel" alt="" class="mt-8 w-16 h-16">
                            </div>

                            <div class="flex justify-center mt-8">
                                <p class="text-xl text-center"
                                   style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                    Laravel <br> Development
                                </p>
                            </div>
                        </a>

                    </div>


                    <!--    VUE      -->
                    <div class="w-48 shadow-lg bg-white mx-8 z-10">
                        <a href="https://vuejs.org/">
                            <div class="flex justify-center">
                                <img :src="vue" alt="" class="mt-8 w-16 h-16">

                            </div>

                            <div class="flex justify-center my-8">
                                <p class="text-xl text-center"
                                   style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                    Vue.js <br> Development
                                </p>
                            </div>
                        </a>
                    </div>

                    <!--    REACT      -->
                    <div class="w-48 shadow-lg bg-white mx-8 z-10">
                        <a href="https://flutter.dev/">
                            <div class="flex justify-center">
                                <img :src="react"
                                     alt="React Development"
                                     title="React Development"
                                     class="mt-8 w-16 h-16">
                            </div>

                            <div class="flex justify-center my-8">
                                <p class="text-xl text-center"
                                   style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                    React.js <br> Development
                                </p>
                            </div>
                        </a>
                    </div>

                    <!--    TAILWIND   -->
                    <div class="w-48 shadow-lg bg-white mx-8 z-10">
                        <a href="https://www.python.org/">
                            <div class="flex justify-center">
                                <img :src="tailwind" alt="" class="mt-8 w-16 h-16">
                            </div>

                            <div class="flex justify-center my-8">
                                <p class="text-xl text-center"
                                   style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                                    Tailwind <br> Development
                                </p>
                            </div>
                        </a>
                    </div>
                </div>


            </div>

            <!--            FULL STACK BUTTON       -->
            <div class="hidden sm:flex justify-center mt-8 md:mt-16">
                <a href="/tech-stack"
                   class="text-red-600 border border-red-500 text-sm md:text-md border  rounded-full px-24 py-2">
                    SEE OUR FULL TECH STACK
                </a>
            </div>
        </div>

        <div class="md:py-16">
            <!--            MOBILE TECH STALK  -->
            <div class="sm:hidden mt-8 mb-16">
                <div
                    id="scrollContainer2"
                    class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  scrollbar-hide">
                    <!--    LARAVEL DEVELOPMENT     -->
                    <div class="inline-block px-2">
                        <div
                            class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://laravel.com/">
                                <div class="pt-2 px-2 flex justify-center">
                                    <img :src="laravel"
                                         class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="Laravel Development"
                                         title="Laravel Development">
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
                            <a href="https://vuejs.org/" class="">
                                <div class="pt-2 px-2 flex justify-center">
                                    <img :src="vue"
                                         class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="Vue.js Development"
                                         title="Vue.js Development"
                                    >
                                </div>

                                <div class="flex justify-center mb-2">
                                    <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                        Vue.js
                                        <br>
                                        Development
                                    </h2>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--                REACT Development       -->
                    <div class="inline-block px-2">
                        <div
                            class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://flutter.dev/">
                                <div class="pt-2 px-2 flex justify-center">
                                    <img :src="react"
                                         class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="React Development"
                                         title="React Development">
                                </div>

                                <div class="flex justify-center mb-8">
                                    <h2 class="flex text-center  text-md" style="font-family: Poppins,serif">
                                        React
                                        <br>
                                        Development
                                    </h2>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--                    TAILWIND DEV      -->
                    <div class="inline-block px-2">
                        <div
                            class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            <a href="https://www.python.org/">
                                <div class="pt-2 px-2 flex justify-center">
                                    <img :src="tailwind"
                                         class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                         alt="plus">
                                </div>

                                <div class="flex justify-center mb-8">
                                    <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                        Tailwind
                                        <br>
                                        Development
                                    </h2>
                                </div>
                            </a>
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
                            <a href="tech-stack">
                                SEE ALL
                            </a>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <hr class="mx-12 md:mx-32 2xl:mx-72">


    <!--        <hr class="md:mx-32">-->


    <!--        2. DESIGN -->
    <div class="mx-6">
        <div class="lg:mx-32 2xl:mx-72 my-16  md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="design" class=" "
                     alt="">
            </div>

            <img :src="design" class="hidden md:block w-1/3 "
                 alt="">

            <div class="md:pl-32">
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                  <span class="text-xl"
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Stage 2. <br>
                </span>
                    Design
                </p>

                <div class="flex sm:block justify-center">
                    <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                    </div>
                </div>

                <p class="text-xl md:text-2xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Design requirements <br>
                    Concept Generation <br>
                    Production Planning
                </p>

                <p class="text-md md:text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Together with the client,
                    the initial wireframe are designed
                    Using the best prototyping tools,
                    the User Interface (UI) is created
                    and ready to be developed
                </p>

            </div>
        </div>

    </div>
    <!--    <hr class="md:mx-32">-->

    <hr class="mx-12 md:mx-32 2xl:mx-72">


    <div class="mx-6">
        <!--        3. DEVELOPMENT  -->
        <div class="lg:mx-32 2xl:mx-72 my-16 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="development" class="  "
                     alt="">
            </div>

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                  <span class="text-xl"
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Stage 3. <br>
                </span>
                    Development
                </p>

                <div class="flex sm:block justify-center">
                    <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                    </div>
                </div>

                <p class="text-xl md:text-2xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Backend Implementation <br>
                    Database Management <br>
                </p>

                <p class="text-md md:text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">


                    Implement the design with the required
                    functionality, resulting a flawless
                    User Experience (UX).
                </p>
            </div>

            <img :src="development" class="hidden md:block w-1/3 "
                 alt="">

        </div>

        <!--    <hr class="md:mx-32">-->

    </div>

    <hr class="mx-12 md:mx-32 2xl:mx-72">


    <!--    INDUSTRY FOCUSED WEB DEV    -->
    <div class="mx-6 2xl:mx-72 mb-16 mt-16 lg:mt-32">
        <div>
            <h1
                class="md:mx-16 lg:mx-32 text-3xl lg:text-5xl text-center
                    md:text-left md:flex md:justify-center"
                style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                Industry-focused Web Development
            </h1>

            <p class="text-center text-md lg:text-xl mt-6 md:mx-32 lg:mx-64"
               style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                Develop a web application tailored to your industry needs. To help your digital product succeed, we
                commit to comprehensively research your market and build an innovative solution that’s customized to
                your business, speaks your values and targets the right audience.
            </p>
        </div>

        <div class="hidden mt-8 md:mx-16 xl:mx-64 md:flex justify-between">
            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-32 h-32">
                    <img :src="fintech" alt="" class="p-6">
                </div>
                <div class="text-center mt-2 text-lg"
                     style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    FINTECH
                </div>
            </div>

            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-32 h-32">
                    <img :src="ecommerce" alt="" class="p-6">
                </div>
                <div class="text-center mt-2 text-lg"
                     style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    ECOMMERCE
                </div>
            </div>

            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-32 h-32">
                    <img :src="iot_dev" alt="" class="p-6">
                </div>
                <div class="text-center mt-2 text-lg"
                     style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    IoT
                </div>
            </div>

            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-32 h-32">
                    <img :src="edtech" alt="" class="p-6">
                </div>
                <div class="text-center mt-2 text-lg"
                     style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    EDTECH
                </div>
            </div>


        </div>

        <div class="sm:hidden mt-8 mb-16">
            <div
                id="scrollContainer"
                class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  scrollbar-hide">
                <!--    FINTECH DEVELOPMENT     -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://laravel.com/">
                            <div class="pt-2 px-2 flex justify-center">
                                <img :src="fintech"
                                     class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                     alt="Laravel Development"
                                     title="Laravel Development">
                            </div>
                        </a>

                        <div class="flex justify-center mb-4">
                            <h2 class="flex text-center  text-md" style="font-family: Poppins,serif">
                                FINTECH
                            </h2>
                        </div>
                    </div>
                </div>

                <!--                ECOMMERCE DEVELOPMENT      -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://vuejs.org/" class="">
                            <div class="pt-2 px-2 flex justify-center">
                                <img :src="ecommerce"
                                     class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                     alt="Vue.js Development"
                                     title="Vue.js Development"
                                >
                            </div>

                            <div class="flex justify-center mb-2">
                                <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                    ECOMMERCE
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>

                <!--                IoT Development       -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://flutter.dev/">
                            <div class="pt-2 px-2 flex justify-center">
                                <img :src="iot_dev"
                                     class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                     alt="React Development"
                                     title="React Development">
                            </div>

                            <div class="flex justify-center mb-8">
                                <h2 class="flex text-center  text-md" style="font-family: Poppins,serif">
                                    IoT
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>

                <!--                    EDTECH DEV      -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://www.python.org/">
                            <div class="pt-2 px-2 flex justify-center">
                                <img :src="edtech"
                                     class="w-24 h-24 inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                     alt="plus">
                            </div>

                            <div class="flex justify-center mb-8">
                                <h2 class="flex text-center text-md" style="font-family: Poppins,serif">
                                    EDTECH
                                </h2>
                            </div>
                        </a>
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
                        <a href="/services">
                            SEE ALL
                        </a>

                    </div>
                </div>


            </div>
        </div>


    </div>

    <hr class="mx-12 md:mx-32 2xl:mx-72">


    <div class="mx-6">
        <!--        4. TESTING  -->
        <div class="lg:mx-32 2xl:mx-72 my-16 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="testing" class=" "
                     alt="">
            </div>

            <img :src="testing" class="hidden md:block w-1/2 "
                 alt="">

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                  <span class="text-xl"
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Stage 4. <br>
                </span>
                    Testing
                </p>


                <div class="flex sm:block justify-center">
                    <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                    </div>
                </div>

                <p class="text-xl md:text-2xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">

                    Performance Testing Tools <br>
                    Debugging <br>

                    <span class="text-md md:text-xl "></span>
                </p>

                <p class=" text-md lg:text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    With the help of different technologies and tools,
                    we assure that are no bugs left in the functionality,
                    while the design meets the pixel perfect requirements.
                </p>
            </div>
        </div>

        <!--        <hr class="md:mx-32">-->
        <hr class="mx-12 md:mx-32 2xl:mx-72">

        <!--        AUDIT    -->
        <div class="my-8 md:my-32   xl:mx-32  2xl:mx-72">
            <div class=" md:flex justify-between items-center">



                <div>
                    <div class="">
                        <p style="font-family: 'Poppins', sans-serif;"
                           class="text-3xl md:text-4xl lg:text-5xl md:mt-0 font-bold text-center md:text-left">
                            <strong>
                                Request a free <span class="text-red-600">audit</span> of your
                                website
                            </strong>
                        </p>

                        <div class="flex sm:block justify-center">
                            <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                            </div>
                        </div>
                    </div>

                    <p style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                       class="text-xl xl:text-2xl mt-4">
                        Website Performance Optimization<br>
                        Website Redesign <br>
                        Conversion Rate Optimization
                    </p>

                    <p class="mt-4 text-md md:text-xl"
                       style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                        See how we can improve your website and reach maximum potential.
                    </p>

                    <div class="flex justify-center md:justify-start  mt-8">
                        <a href="/contact"
                           class="text-red-600 text-sm rounded-full px-10 py-2 border border-red-600
                                  md:text-md
                                  hover:text-white hover:bg-red-600 ease-in duration-150 ">
                            CONTACT US
                        </a>
                    </div>
                </div>

                <img :src="audit_mobile"
                     alt="Website Audit"
                     title="Website Audit"
                     class="w-full lg:w-1/2  md:pr-16">
            </div>
        </div>

        <hr class="mx-12 md:mx-32 2xl:mx-72">

        <!--        5. LAUNCH-->
        <div class="lg:mx-32 2xl:mx-72 my-16 md:flex justify-between items-center">



            <div class="flex justify-center md:hidden">
                <img :src="launch" class=""
                     alt="">
            </div>

            <img :src="launch" class="hidden md:block w-1/2 "
                 alt="">

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                  <span class="text-xl"
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Stage 5. <br>
                </span>
                    Launching
                </p>


                <div class="flex sm:block justify-center">
                    <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                    </div>
                </div>

                <p class="text-xl md:text-2xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Performance Reports <br>
                    Server Side Development <br>
                </p>


                <p class="text-md md:text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">

                    Everything is provided in order to launch
                    a great product, ready to bring value to
                    your business.
                </p>
            </div>




        </div>

        </div>

<!--        <hr class="mx-12 md:mx-32 2xl:mx-72">-->

        <!--        LATEST PARTNERS     -->
        <LatestPartners></LatestPartners>

    <div class="mx-6">
        <!--        6. MAINTENANCE  -->
        <div class="lg:mx-32 2xl:mx-72 my-16 md:flex justify-between items-center">

            <div class="flex justify-center md:hidden">
                <img :src="maintenance" class=""
                     alt="">
            </div>

            <img :src="maintenance" class="hidden md:block w-1/2 "
                 alt="">

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                  <span class="text-xl"
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Stage 6. <br>
                </span>
                    Maintenance
                </p>

                <div class="flex sm:block justify-center">
                    <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                    </div>
                </div>

                <p class="text-md md:text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    With the help of different technologies and tools,
                    we assure that are no bugs left in the functionality,
                    while the design meets the pixel perfect requirements.
                </p>
            </div>
        </div>


    </div>

    <ContactComponent></ContactComponent>

    <BlogComponent></BlogComponent>

    <Footer></Footer>
</template>

<script>
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import BlogComponent from "@/Components/BlogComponent";
import {InertiaLink} from "@inertiajs/inertia-vue3";
import LatestPartners from "@/Components/LatestPartners";
import ContactComponent from "@/Components/ContactComponent";


import banner from "/img/banner.webp";
import banner_mobile from "/img/mobile/banner-mobile.webp";
import logo_bg from "/img/logo/logo_banner.png";
import logo_bg_mobile from "/img/logo/logo_banner_mobile.png";
import planning from "/img/services/planning.png";
import design from "/img/services/design.png";
import development from "/img/services/development.png";
import testing from "/img/services/testing.png";
import launch from "/img/services/launch.png";
import maintenance from "/img/services/maintenance.png";
import audit_mobile from "/img/mobile/audit-mobile.webp";


import fintech from "/img/services/fintech.png";
import edtech from "/img/services/edtech.png";
import iot_dev from "/img/services/iot.png";
import ecommerce from "/img/services/ecommerce.png";

import vue from "/img/services/vue.png";
import laravel from "/img/services/laravel.png";
import tailwind from "/img/services/tailwind.png";
import react from "/img/services/react.svg";

export default {
    name: "WebDev",
    components: {
        Navbar,
        Footer,
        BlogComponent,
        InertiaLink,
        LatestPartners,
        ContactComponent,
    },
    data() {
        return {
            logo_bg: logo_bg,
            logo_bg_mobile: logo_bg_mobile,
            banner: banner,
            banner_mobile: banner_mobile,

            planning: planning,
            design: design,
            development: development,
            testing: testing,
            launch: launch,
            maintenance: maintenance,
            audit_mobile: audit_mobile,

            fintech: fintech,
            ecommerce: ecommerce,
            edtech: edtech,
            iot_dev: iot_dev,

            laravel: laravel,
            vue: vue,
            tailwind: tailwind,
            react: react,
        }
    }
}
</script>

<style scoped>

</style>
