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

            <div class="flex items-center justify-between xl:mx-32">
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
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                        class="text-xl md:mr-16 mt-8">
                        Develop your product with the latest available technologies and a custom minimalistic interface.
                        <!--                        Trust your product to a team with 11+ years experience building 360+ projects worldwide.-->
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

    <div class="mx-6 mt-16">
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

        <div class="hidden mt-8 md:mx-64 md:flex justify-between">
            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-32 h-32">
                    <img :src="fintech" alt="" class="p-6">
                </div>
                <div class="text-center mt-2 text-lg"
                     style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Fintech
                </div>
            </div>

            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-32 h-32">
                    <img :src="fintech" alt="" class="p-6">
                </div>
                <div class="text-center mt-2 text-lg"
                     style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Fintech
                </div>
            </div>

            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-32 h-32">
                    <img :src="fintech" alt="" class="p-6">
                </div>
                <div class="text-center mt-2 text-lg"
                     style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Fintech
                </div>
            </div>

            <div>
                <div class="flex justify-center items-center rounded-full bg-white shadow-xl w-32 h-32">
                    <img :src="fintech" alt="" class="p-6">
                </div>
                <div class="text-center mt-2 text-lg"
                     style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Fintech
                </div>
            </div>


        </div>

    </div>

    <LatestPartners></LatestPartners>

    <div class="mx-6">

        <h1
            class="md:mx-32 text-5xl mt-16 lg:mt-32 text-center
                    md:text-left md:flex md:justify-center"
            style="font-family: 'Poppins', sans-serif; font-weight: 300;">
            The Process
        </h1>

        <!--        1. PLANNING-->
        <div class="lg:mx-32 my-16 lg:my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="planning" class=""
                     alt="">
            </div>

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                <span
                    style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    1.
                </span>

                    Planning
                </p>

                <p class="text-xl md:text-2xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Understand the project's requirements <br>
                    Analyze de current market <br>
                    Provide the development stages
                </p>
            </div>

            <img :src="planning" class="hidden md:block w-1/2 "
                 alt="">

        </div>

        <hr class="md:mx-32">


        <!--        2. DESIGN -->
        <div class="lg:mx-32 my-16 lg:my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="design" class=" "
                     alt="">
            </div>

            <img :src="design" class="hidden md:block w-2/3 md:w-1/2 "
                 alt="">

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                <span
                    style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    2.
                </span>
                    Design
                </p>

                <p class="text-xl md:text-2xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Design requirements <br>
                    Concept Generation  <br>
                    Production Planning
                </p>

                <p class="text-md md:text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Together with the client,
                    we create the initial wireframes.
                    Using the best prototyping tools,
                    the User Interface (UI) is created
                    and ready to be developed
                </p>

            </div>
        </div>

        <hr class="md:mx-32">


        <!--        3. DEVELOPMENT  -->
        <div class="lg:mx-32 my-16 lg:my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="development" class="  "
                     alt="">
            </div>

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                <span
                    style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    3.
                </span>
                    Development
                </p>

                <p class="text-xl md:text-2xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Interactive elements <br>
                </p>

                <p class="text-md md:text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">


                    Implement the design with the required
                    functionality, resulting a flawless
                    User Experience (UX).
                </p>
            </div>

            <img :src="development" class="hidden md:block w-1/2 "
                 alt="">

        </div>

        <hr class="md:mx-32">


        <!--        4. TESTING  -->
        <div class="lg:mx-32 my-16 lg:my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="testing" class=" "
                     alt="">
            </div>

            <img :src="testing" class="hidden md:block w-1/2 "
                 alt="">

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                <span
                    style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    4.
                </span>
                    Testing
                </p>

                <p class="text-md md:text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    With the help of different technologies and tools,
                    we assure that are no bugs left in the functionality,
                    while the design meets the pixel perfect requirements.
                </p>
            </div>
        </div>

        <hr class="md:mx-32">


        <!--        5. LAUNCH-->
        <div class="lg:mx-32 my-16 lg:my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="launch" class=""
                     alt="">
            </div>

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                <span
                    style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    5.
                </span>
                    Launch
                </p>

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

            <img :src="launch" class="hidden md:block w-1/2 "
                 alt="">

        </div>


        <hr class="md:mx-32">

        <!--        6. MAINTENANCE  -->
        <div class="lg:mx-32 my-16 lg:my-32 md:flex justify-between items-center">

            <div class="flex justify-center md:hidden">
                <img :src="maintenance" class=""
                     alt="">
            </div>

            <img :src="maintenance" class="hidden md:block w-1/2 "
                 alt="">

            <div>
                <p class="text-center md:text-left text-4xl md:text-5xl"
                   style="font-family: 'Poppins', sans-serif; font-weight: 700;">

                <span
                    style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    6.
                </span>
                    Maintenance
                </p>

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

import fintech from "/img/services/fintech.png";
import medtech from "/img/services/medtech.png";
import edtech from "/img/services/edtech.png";
import iot_dev from "/img/services/iot.png";
import ecommerce from "/img/services/ecommerce.png";
import agritech from "/img/services/agritech.png";

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
