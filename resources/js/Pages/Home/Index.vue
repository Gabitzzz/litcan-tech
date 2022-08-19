<template>
    <div class="bg-white">
        <Navbar></Navbar>

        <!--        BANNER      -->
        <div class="md:mx-10 mt-80 md:mt-32 2xl:mt-48 flex justify-center">
            <img :src="logo_bg_mobile" alt="" class="object-fit sm:hidden"
                 style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">


            <img :src="logo_bg" alt="" class="object-fit hidden sm:flex z-0"
                 style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
        </div>

        <!--        BANNER      -->
        <div class="mx-10 -mt-80  flex justify-center items-center text-3xl md:text-5xl">
            <div class="-mt-48 lg:-mt-80 flex flex-col items-center">
                <img :src="banner_mobile" class=" w-full md:hidden" alt="">

                <div class=" hidden md:flex justify-center lg:-mt-8 xl:-mt-16">
                    <img :src="banner" class="w-1/2 lg:w-1/3  " alt="">

                </div>

                <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                    class="tracking-wider  text-center leading-tight
">
                    Empowering
                    <br class="sm:hidden">
                    the future
                    <br class="hidden lg:block">
                    with


                    Innovative Products
                </h1>

            </div>
        </div>


        <div class="flex justify-center my-4">
            <InertiaLink :href="route('contact')"
                         class="z-40 text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                CONTACT US
            </InertiaLink>
        </div>


        <!--    DESKTOP SERVICES    -->
        <div class="flex flex-wrap justify-center space-x-2 mt-8 hidden md:flex">
          <span
              class="px-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-lg flex align-center w-max cursor-pointer active:bg-gray-300 transition duration-300 ease">
            Web Development
          </span>


            <span
                class="px-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-lg flex align-center w-max cursor-pointer active:bg-gray-300 transition duration-300 ease">
            App Development
          </span>

            <span
                class="px-4 py-2 rounded-full text-gray-500 bg-gray-200 font-semibold text-lg flex align-center w-max cursor-pointer active:bg-gray-300 transition duration-300 ease">
Product Design
          </span>
        </div>

        <!--        LINE    -->
        <div class="flex justify-center my-8 hidden sm:flex">
            <hr width="75%" class="shadow">
        </div>


        <!--    MOBILE SERVICES     -->
        <div class="sm:hidden">
            <div
                id="scrollContainer"
                class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  scrollbar-hide">
                <!--    MOBILE WEB DEV  -->
                <div class="inline-block px-4">
                    <div
                        class="w-48 h-56 max-w-xs overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://moodle.essex.ac.uk/">
                            <div class="pt-12 px-12 ">
                                <img :src="web_dev_services" class="inline-block px-2 py-2 lg:px-4 lg:py-4" alt="plus">
                            </div>
                        </a>

                        <div class="flex justify-center">
                            <h2 class="flex text-center text-xl font-bold" style="font-family: Poppins,serif">
                                Web <br>
                                Development
                            </h2>
                        </div>
                    </div>
                </div>

                <!--                MOBILE APP DEV      -->
                <div class="inline-block px-2">
                    <div
                        class="w-48 h-56 max-w-xs overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://leap.essex.ac.uk/student" class="">
                            <div class="pt-12 px-12 ">
                                <img :src="app_dev_services" class="inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                     alt="plus">
                            </div>
                        </a>

                        <div class="flex justify-center">
                            <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                                App
                                <br>
                                Development
                            </h2>
                        </div>
                    </div>
                </div>

                <!--                MOBILE PRODUCT DESIGN       -->
                <div class="inline-block px-2">
                    <div
                        class="w-48 h-56 max-w-xs overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://faser.essex.ac.uk/">
                            <div class="pt-12 px-12 ">
                                <img :src="product_design_services"
                                     class="inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                     alt="plus">
                            </div>
                        </a>

                        <div class="flex justify-center">
                            <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                                Product
                                <br>
                                Design
                            </h2>
                        </div>
                    </div>
                </div>

                <InertiaLink :href="route('services')">
                    <div class=" px-2">
                        <div
                            class="w-48 h-56 max-w-xs font-bold overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out flex justify-center items-center font-bold">
                            SEE ALL
                        </div>
                    </div>
                </InertiaLink>

            </div>
        </div>


        <!--        <div class="mx-10 lg:mx-40">-->
        <!--            <h1 style="font-family: 'Poppins', sans-serif; font-weight: 500;"-->
        <!--                class="text-center text-2xl my-16">-->
        <!--                We are here to help you maximize your business-->
        <!--            </h1>-->

        <!--        </div>-->


        <!--WEB DEV -->
        <div class="my-32 md:flex items-center justify-between mx-8 lg:mx-16 xl:mx-32  2xl:mx-72">
            <div class="">

                <div class="flex justify-center">
                    <img :src="web_dev_mobile" class="md:w-1/3 md:hidden" alt="">
                </div>

                <div>
                    <h2 class="text-center md:text-left text-2xl lg:text-5xl font-bold"
                        style="font-family: Poppins,serif;">

                        <span class="text-red-600">Websites</span>
                        that create <br class="hidden lg:block"> more conversions

                        <!--                        Web Development-->
                    </h2>

                    <div class="flex sm:block justify-center">
                        <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                        </div>
                    </div>


                </div>


                <p style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                   class=" text-2xl mt-4">
                    Newest Technologies <br>
                    Creative Storytelling <br>
                    Bespoke Design
                </p>

                <p class="mt-4 md:pr-12 text-lg md:text-left"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Based on this 3 essential layers, we build websites that focus on <br class="hidden 2xl:block">User
                    Experience and deliver
                    fast performance.
                </p>


                <div class="flex justify-center md:justify-start  mt-5">
                    <InertiaLink :href="route('web-dev')"
                                 class="text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                        CONTACT US
                    </InertiaLink>
                </div>
            </div>

            <img :src="web_dev" class="hidden md:block md:w-1/2 2xl:w-1/3" alt="">
        </div>

        <!--        AUDIT    -->
        <div class="my-8 md:my-32 md:flex items-center mx-8 lg:ml-8 lg:mr-24 2xl:mx-72">
            <div class=" md:flex items-center">
                <img :src="audit_mobile" alt="" class="w-full lg:w-2/3 md:pr-16">

                <div>
                    <div class="">
                        <p style="font-family: 'Poppins', sans-serif;"
                           class="text-2xl md:text-4xl lg:text-5xl md:mt-0 font-bold text-center md:text-left">
                            Request a free <span class="text-red-600">audit</span> of your
                            website
                        </p>

                        <div class="flex sm:block justify-center">
                            <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                            </div>
                        </div>
                    </div>

                    <p style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                       class=" text-2xl lg:text-md mt-4">
                        Website Performance Optimization<br>
                        Website Redesign <br>
                        Conversion Rate Optimization
                    </p>

                    <p class="mt-4 text-md md:text-xl"
                       style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                        See how we can improve your website and reach maximum potential.
                    </p>

                    <div class="flex justify-center md:justify-start  mt-5">
                        <InertiaLink :href="route('web-dev')"
                                     class="text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                            CONTACT US
                        </InertiaLink>
                    </div>


                </div>


            </div>


        </div>

        <!--    PARTNERS    -->
        <div class="mt-8">
            <LatestPartners></LatestPartners>

        </div>

        <!--        APP DEV -->
        <div class="md:flex items-center mx-8 my-32 lg:ml-32 2xl:mx-72">
            <div class=" md:flex items-center">
                <div class="">
                    <img :src="app_dev_mobile" class="w-full md:w-1/2 md:hidden" alt="">

                    <div class="">
                        <p style="font-family: 'Poppins', sans-serif;"
                           class="text-2xl md:text-4xl lg:text-5xl md:mt-0 font-bold text-center md:text-left">

                            Custom
                            <span class="text-red-600">
                                Apps
                            </span>
                            that increase your business' performance.
                        </p>

                        <div class="flex sm:block justify-center">
                            <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                            </div>
                        </div>


                    </div>

                    <p style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                       class=" text-2xl mt-4">
                        Web Apps<br>
                        Native Apps <br>
                        Hybrid Apps
                    </p>

                    <p class="text-md md:text-xl mt-4"
                       style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                        Let us create you an effective Business Performance Management Software.
                    </p>

                    <div class="flex justify-center md:justify-start  mt-5">
                        <a href="/services/web-development"
                           class="text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                            CONTACT US
                        </a>
                    </div>
                </div>

                <img :src="app_dev" class="w-full md:w-1/2  hidden md:block" alt="">

            </div>


        </div>

        <!--       DIGITAL MARKETING    -->
        <div class="md:flex items-center my-32 mx-8 lg:ml-8 lg:mr-24 2xl:mx-72">
            <div class=" md:flex items-center">
                <img :src="digital_marketing" alt="" class="w-full md:w-1/2 md:pr-24">

                <div>
                    <div>

                        <p style="font-family: 'Poppins', sans-serif;"
                           class="text-2xl md:text-4xl lg:text-5xl md:mt-0 font-bold text-center md:text-left">

                            Grow your brand with our Digital
                            <span class="text-red-600">
                                Marketing
                            </span>
                            services
                        </p>

                        <div class="flex sm:block justify-center">
                            <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                            </div>
                        </div>
                    </div>

                    <p style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                       class=" text-2xl mt-4">
                        Improve Online Rankings <br>
                        Internet Marketing <br>
                    </p>

                    <p class="mt-4 md:pr-12 text-md md:text-lg md:text-left"
                       style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                        Based on this 3 essential layers, we build websites that focus on User Experience and deliver
                        fast performance.
                    </p>
                </div>

            </div>


        </div>

        <!--    PARTNERS    -->
        <div class="md:my-32">
            <LatestPartners></LatestPartners>
        </div>
        <!--        PRODUCT DESIGN-->
        <div class="my-32 md:flex items-center mx-8 lg:mx-32 2xl:mx-72">
            <div class="">
                <div class="flex justify-center">
                    <img :src="product_design_mobile" class="w-full md:hidden" alt="">

                </div>

                <p style="font-family: 'Poppins', sans-serif;"
                   class="text-2xl md:text-4xl lg:text-5xl md:mt-0 font-bold text-center md:text-left">

                    Product

                    <span class="text-red-600">Design</span> for <br class="hidden xl:block"> multiple industries
                </p>

                <div class="flex sm:block justify-center">
                    <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                    </div>
                </div>


                <p class="mt-4 md:pr-12 text-md md:text-lg md:text-left"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    <!--                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequatur corporis, deserunt eius-->
                    <!--                                        fuga fugiat ipsa ipsam iste minus mollitia natus nesciunt possimus recusandae sapiente suscipit?-->
                    <!--                                        Modi molestiae nam provident?-->

                    Let's collaborate to design a staggering product that will remain in people's minds for a loooong
                    time.
                </p>

                <div class="flex justify-center md:justify-start  mt-5">
                    <a href="/services/product-design"
                       class="text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                        CONTACT US
                    </a>
                </div>
            </div>

            <img :src="product_design" class="hidden md:block w-1/2" alt="">
        </div>

        <!--    CUSTOM DEVELOPMENT  -->
        <div class="my-32 md:flex items-center justify-between mx-8 lg:ml-8 lg:mr-24 2xl:mx-72">
            <img :src="product_design_2" alt="" class="w-full md:w-1/2">

            <div>
                <div class="">

                    <p style="font-family: 'Poppins', sans-serif;"
                       class="text-2xl md:text-4xl lg:text-5xl md:mt-0 font-bold text-center md:text-left">
                            <span class="text-red-600">
                                Custom
                            </span>
                        Development
                        <br class="hidden xl:block">
                        suited to your needs
                    </p>

                    <div class="flex sm:block justify-center">
                        <div class="w-1/2 my-4 bg-red-600 rounded-full h-1 md:h-1.5">
                        </div>
                    </div>
                </div>


                <p class="mt-4 md:pr-12 text-md md:text-lg md:text-left"
                   style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                    Can't find what you're looking for? <br>
                    Tell us about your idea and we will develop it.
                </p>

            </div>

        </div>


        <ContactComponent></ContactComponent>


        <BlogComponent></BlogComponent>
        <Footer></Footer>
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import BlogComponent from "@/Components/BlogComponent";
import LatestPartners from "@/Components/LatestPartners";
import {InertiaLink} from "@inertiajs/inertia-vue3";
import ContactComponent from "@/Components/ContactComponent";

import logo_bg from "/img/logo/logo_banner.png";
import logo_bg_mobile from "/img/logo/logo_banner_mobile.png";

import banner from "/img/banner.webp";
import banner_mobile from "/img/mobile/banner-mobile.webp";

import app_dev_services from "/img/services/app-dev-services.png";
import web_dev_services from "/img/services/web-dev-services.png";
import product_design_services from "/img/services/product-design-services.png";

import web_dev from "/img/web-dev.webp";
import web_dev_mobile from "/img/mobile/web-dev-mobile.webp";

import app_dev from "/img/app-dev.webp";
import app_dev_mobile from "/img/mobile/app-dev-mobile.webp";

import product_design from "/img/product-design.webp";
import product_design_mobile from "/img/mobile/product-design-mobile.webp";
import product_design_2 from "/img/desktop/product-design-2.webp";

import digital_marketing from "/img/services/digital-marketing.svg";

import audit_mobile from "/img/mobile/audit-mobile.webp";
import app_icon from "/img/mobile/app-icon.png";
import web_icon from "/img/mobile/web-icon.png";
import product_icon from "/img/mobile/product-icon.png";
import steps from "/img/desktop/3steps.png";
import 'tw-elements';


export default {
    name: "Index",
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
            banner: banner,
            banner_mobile: banner_mobile,


            web_dev: web_dev,
            web_dev_mobile: web_dev_mobile,
            audit_mobile: audit_mobile,

            app_dev: app_dev,
            app_dev_mobile: app_dev_mobile,

            product_design: product_design,
            product_design_2: product_design_2,
            product_design_mobile: product_design_mobile,
            logo_bg_mobile: logo_bg_mobile,

            product_icon: product_icon,
            app_icon: app_icon,
            web_icon: web_icon,

            app_dev_services: app_dev_services,
            web_dev_services: web_dev_services,
            product_design_services: product_design_services,

            steps: steps,
            digital_marketing: digital_marketing,
        }
    },

    setup() {
        const attendants = [
            {
                app: 'whatsapp',
                label: 'CEO',
                name: 'Gabi Lițcan',
                number: '40773800815',
                avatar: {
                    src: 'https://avatars0.githubusercontent.com/u/8084606?s=460&u=20b6499a416cf7129a18e5c168cf387e159edb1a&v=4',
                    alt: 'Alan Ktquez avatar'
                }
            },
            // ...
        ]

        return {attendants}
    }
}
</script>

<style scoped>

</style>
