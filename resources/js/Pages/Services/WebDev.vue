<template>
    <Navbar></Navbar>

    <div class=" mt-80 md:mt-32 2xl:mt-48 flex justify-center">
        <img :src="logo_bg_mobile" alt="" class="object-fit sm:hidden"
             style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
        <img :src="logo_bg" alt="" class="object-fit hidden sm:flex z-0"
             style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
    </div>

    <div class="mx-10 -mt-48 md:-mt-64 xl:-mt-80  flex justify-center items-center text-3xl md:text-5xl">
        <div class="-mt-80 lg:-mt-80 flex flex-col items-center">
            <img :src="banner_mobile" class="mt-6 w-full md:hidden" alt="">

            <div class="flex items-center justify-between xl:mx-32">
                <div>
                    <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                        class="tracking-wider ">
                    <span class="text-red-500">
                    Web
                    </span>
                        Development <br> Services
                    </h1>

                    <div class="md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 6px;">

                    </div>

                    <div
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                        class="text-xl mr-16 mt-8">
                        Trust your product to a team with 11+ years experience building 360+ projects worldwide.
                    </div>

                    <div class="flex justify-center md:justify-start  mt-5">
                        <a href="/contact"
                           class="text-red-600 text-sm rounded-full px-10 py-2 border border-red-600
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


    <div class="mx-10">
        <!--        1. PLANNING-->
        <div class="lg:mx-32 my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="planning" class=" w-2/3 "
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

                <p class="text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Understand the project's requirement,
                    analyze de current market and provide
                    the development stages.
                </p>
            </div>

            <img :src="planning" class="hidden md:block w-1/2 "
                 alt="">

        </div>

        <hr class="md:mx-32">


        <!--        2. DESIGN -->
        <div class="lg:mx-32 my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="design" class=" w-2/3 "
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

                <p class="text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Together with the client,
                    we create the initial wireframes.
                    Using the best prototyping tools,
                    the User Interface (UI) is created
                    and ready to be developed
                </p>


                <p class="text-xl mt-4"
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
        <div class="lg:mx-32 my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="development" class=" w-2/3 "
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

                <p class="text-xl mt-4"
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
        <div class="lg:mx-32 my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="testing" class=" w-2/3 "
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

                <p class="text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    With the help of different technologies and tools,
                    we assure that are no bugs left in the functionality,
                    while the design meets the pixel perfect requirements.
                </p>
            </div>
        </div>

        <hr class="md:mx-32">




        <!--        5. LAUNCH-->
        <div class="lg:mx-32 my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="launch" class=" w-2/3 "
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

                <p class="text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">

                    Everything is provided in order to launch
                    a great product, ready to bring value to
                    your business.
                </p>
            </div>

            <img :src="launch" class="hidden md:block w-1/2 "
                 alt="">

        </div>

        <hr class="mx-32">

        <!--        6. MAINTENANCE  -->
        <div class="lg:mx-32 my-32 md:flex justify-between items-center">
            <div class="flex justify-center md:hidden">
                <img :src="maintenance" class=" w-2/3 "
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

                <p class="text-xl mt-4"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    With the help of different technologies and tools,
                    we assure that are no bugs left in the functionality,
                    while the design meets the pixel perfect requirements.
                </p>
            </div>
        </div>


    </div>

    <BlogComponent></BlogComponent>

    <Footer></Footer>
</template>

<script>
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import BlogComponent from "@/Components/BlogComponent";
import {InertiaLink} from "@inertiajs/inertia-vue3";


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

export default {
    name: "WebDev",
    components: {
        Navbar,
        Footer,
        BlogComponent,
        InertiaLink,
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
        }
    }
}
</script>

<style scoped>

</style>
