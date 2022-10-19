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
            <img :src="app_dev" class="mt-6 w-full md:hidden" alt="">

            <div class="flex items-center justify-between xl:mx-32 2xl:mx-64">
                <div>
                    <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                        class="text-4xl lg:text-5xl lg:tracking-wider text-center md:text-left">
                    <span class="text-red-500">
                    App
                    </span>
                        Development <br> Services
                    </h1>

                    <div class="md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 6px;">

                    </div>

                    <div
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                        class="text-xl md:mr-16 mt-8">
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


                <img :src="app_dev" class="hidden md:block w-full md:w-1/2 " alt="">
            </div>

        </div>

    </div>

    <!--    INDUSTRY FOCUSED WEB DEV    -->
    <div class="mx-6 2xl:mx-72 mb-16 mt-16 lg:mt-32">
        <div>
            <h1
                class="md:mx-16 lg:mx-32 text-3xl lg:text-5xl text-center
                    md:text-left md:flex md:justify-center"
                style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                Three Development Paths
            </h1>

            <div class="flex  justify-center">
                <div class="w-1/3 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                </div>
            </div>

            <h1
                class="md:mx-16 lg:mx-32 text-2xl text-center
                    md:text-left md:flex md:justify-center text-gray-600"
                style="font-family: 'Poppins', sans-serif; font-weight: 500;">
                Native, Hybrid or Web
            </h1>

            <p class="text-center text-md lg:text-xl mt-6 md:mx-32 xl:mx-64"
               style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                When building a mobile app, you can use three types of development: native, hybrid or web.
                All three development paths have their best uses and unique strengths

            </p>
        </div>

        <div class=" mt-8 md:mx-32 lg:mx-40 xl:mx-96 grid grid-cols-2 place-items-center gap-4 md:grid-cols-4">
            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-24 h-24">
                    <img :src="apple" alt="" class="p-6">
                </div>
            </div>

            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-24 h-24">
                    <img :src="android" alt="" class="p-6">
                </div>
            </div>

            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-24 h-24">
                    <img :src="windows" alt="" class="p-6">
                </div>
            </div>

            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-24 h-24">
                    <img :src="web" alt="" class="p-6">
                </div>
            </div>


        </div>


        <p class="text-center text-md lg:text-xl mt-12 md:mx-32 xl:mx-64"
           style="font-family: 'Poppins', sans-serif; font-weight: 300;">
            We’ll help you decide which type of development is suited to your needs.
        </p>

    </div>

    <!--    NATIVE APPS     -->
    <div class="my-32 md:flex items-center justify-between mx-6 lg:mx-16 xl:mx-32  2xl:mx-72">
        <div class="">
            <div class="flex justify-center">
                <img :src="native_apps" class="md:w-1/3 md:hidden"
                     alt="Web Development"
                     title="Web Development">
            </div>

            <div>
                <p style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                   class="text-center md:text-left text-xl xl:text-2xl my-2">
                    NATIVE APPS
                </p>

                <p
                    class="text-center text-3xl font-bold
                                md:text-left md:text-4xl
                                lg:text-5xl  "
                    style="font-family: Poppins,serif;">

                    <strong>
                        Using a device at its
                        <span class="text-red-600">best</span>
                    </strong>
                </p>

                <div class="flex sm:block justify-center">
                    <div class="w-1/4 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                    </div>
                </div>
            </div>


            <div class="lg:pr-40">
                <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                   class=" text-xl xl:text-2xl mt-6">
                    HIGHLY CUSTOMIZABLE
                </p>

                <p class="mt-2 md:pr-12 text-md md:text-left md:text-xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Building a native app allows you to hook into unique functionalities of a device. Gaining high
                    elasticity in development, and the ability to easily implement existing native libraries are the
                    core characteristics of native development.
                </p>

                <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                   class=" text-xl xl:text-2xl mt-6">
                    REACT NATIVE
                </p>

                <p class="mt-2 text-md md:text-left md:text-xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    For creating native apps, we recommend React Native. It provides great responsiveness and
                    performance for both iOS and Android, and has a huge community of developers with a mountain of
                    ready-made features and libraries. It is a tried and trusted framework, able to handle multimedia,
                    ads and even traffic-heavy social and messaging apps
                </p>

                <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                   class=" text-xl xl:text-2xl mt-6">
                    BEST USED FOR
                </p>

                <p class="mt-2 md:pr-12 text-md md:text-left md:text-xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    When you need to build a complex, engaging app that uses a lot of device’s resources but stays
                    perfectly performant, native development will be the best option.
                </p>
            </div>
        </div>

        <img :src="native_apps" class="hidden md:block md:w-1/3 2xl:w-1/3"
             alt="Web Development"
             title="Web Development">
    </div>

    <!--    HYBRID APPS      -->
    <div class="my-32 md:flex items-center justify-between mx-6 lg:mx-16 xl:mx-32  2xl:mx-72">
        <img :src="hybrid_apps" class="md:w-1/3 2xl:w-1/3"
             alt="Web Development"
             title="Web Development">

        <div class="lg:ml-24">
            <div>
                <p style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                   class="text-center md:text-left text-xl xl:text-2xl my-2">
                    HYBRID APPS
                </p>

                <p
                    class="text-center text-3xl font-bold
                                md:text-left md:text-4xl
                                lg:text-5xl  "
                    style="font-family: Poppins,serif;">

                    <strong>
                        Everything in
                        <span class="text-red-600">one</span>
                        place
                    </strong>
                </p>

                <div class="flex sm:block justify-center">
                    <div class="w-1/4 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                    </div>
                </div>
            </div>


            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class=" text-xl xl:text-2xl mt-6">
                CROSS-PLATFORM DEVELOPMENT
            </p>

            <p class="mt-2 md:pr-12 text-md md:text-left md:text-xl"
               style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                Creating a hybrid app means that you’re building components for various platforms in one go (Android,
                iOS). Hybrid mobile applications accelerate businesses from startups to large enterprises and offer
                great optimization for your company.
            </p>

            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class=" text-xl xl:text-2xl mt-6">
                FLUTTER DEVELOPMENT
            </p>

            <p class="mt-2 md:pr-12 text-md md:text-left md:text-xl"
               style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                Open-source software development kit which enables smooth and easy cross-platform mobile app
                development. You can build high quality natively compiled apps for iOS and Android quickly, without
                having to write the code for the two apps separately. All you need is one codebase for both platforms.
            </p>

            <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
               class=" text-xl xl:text-2xl mt-6">
                BEST USED FOR
            </p>

            <p class="mt-2 md:pr-12 text-md md:text-left md:text-xl"
               style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                If you’re creating an app that you want to release quickly and it doesn’t need access to the whole
                native development environment, hybrid development might be for you.
            </p>
        </div>


    </div>

    <!--    WEB APPS    -->
    <div class="my-32 md:flex items-center justify-between mx-6 lg:mx-16 xl:mx-32  2xl:mx-72">
        <div class="">
            <div class="flex justify-center">
                <img :src="web_apps" class="md:w-1/3 md:hidden"
                     alt="Web Development"
                     title="Web Development">
            </div>

            <div>
                <p style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                   class="text-center md:text-left text-xl xl:text-2xl my-2">
                    WEB APPS
                </p>

                <p
                    class="text-center text-3xl font-bold
                                md:text-left md:text-4xl
                                lg:text-5xl  "
                    style="font-family: Poppins,serif;">

                    <strong>
                        The
                        <span class="text-red-600">future</span>
                        of apps is here
                    </strong>
                </p>

                <div class="flex sm:block justify-center">
                    <div class="w-1/4 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                    </div>
                </div>
            </div>


           <div class="lg:pr-40">
               <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                  class=" text-xl xl:text-2xl mt-6">
                   BROWSER COMPATIBILITY
               </p>

               <p class="mt-2 md:pr-12 text-md md:text-left md:text-xl"
                  style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                   A web application runs on the device’s
                   browser using an accessible URL. Modern web applications are compatible with all browsers, such as
                   Google Chrome, Internet Explorer, Firefox, and Bing. Hence, software compatibility challenges are never
                   roadblocks.
               </p>

               <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                  class=" text-xl xl:text-2xl mt-6">
                   REDUCED OPERATING COSTS
               </p>

               <p class="mt-2 md:pr-12 text-md md:text-left md:text-xl"
                  style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                   Web application development is a great way to cut down operating costs. It drives to eliminate
                   unnecessary expenses such as hardware purchases, frequent device updates, and maintenance of numerous
                   systems.
               </p>

               <p style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                  class=" text-xl xl:text-2xl mt-6">
                   BEST USED FOR
               </p>

               <p class="mt-2 md:pr-12 text-md md:text-left md:text-xl"
                  style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                   Web application development is faster and more economical than building native apps. Therefore, if the
                   primary goal is to accelerate time-to-market, web application development is the best choice for
                   businesses.
               </p>
           </div>

        </div>

        <img :src="web_apps" class="hidden md:block md:w-1/3 2xl:w-1/3"
             alt="Web Development"
             title="Web Development">
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


import app_dev from "/img/app_development/app_dev.png";


import logo_bg from "/img/logo/logo_banner.png";
import logo_bg_mobile from "/img/logo/logo_banner_mobile.png";

import android from "/img/app_development/android.png";
import apple from "/img/app_development/apple.png";
import windows from "/img/app_development/windows.png";
import web from "/img/app_development/web.png";

import web_apps from "/img/app_development/web-apps.png";
import hybrid_apps from "/img/app_development/hybrid-apps.png";
import native_apps from "/img/app_development/native-apps.png";


import fintech from "/img/services/fintech.png";
import medtech from "/img/services/medtech.png";
import edtech from "/img/services/edtech.png";
import iot_dev from "/img/services/iot.png";
import ecommerce from "/img/services/ecommerce.png";
import agritech from "/img/services/agritech.png";

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

            app_dev: app_dev,

            android: android,
            apple: apple,
            windows: windows,
            web: web,

            web_apps: web_apps,
            hybrid_apps: hybrid_apps,
            native_apps: native_apps,

            fintech: fintech,
            ecommerce: ecommerce,
            medtech: medtech,
            agritech: agritech,
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
