<template>
    <div class="" style="max-width: 100%;">
        <Navbar></Navbar>


        <div class="md:mx-10 mt-80 md:mt-32 flex justify-center">
            <img :src="logo_bg" alt="" class="object-fit"
                 style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
        </div>

        <div class="mx-10 -mt-80  flex justify-center items-center text-3xl md:text-5xl">
            <div class="-mt-32 md:-mt-56 flex flex-col items-center">
                <img :src="app_dev" class="w-full md:w-1/3" alt="">
                <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                    class="tracking-wider text-center">
                    The Powerhouse of
                    <br class="hidden md:block">
                    Innovative Products
                </h1>

            </div>

        </div>

        <div class="flex justify-center mt-4 mb-8">
            <button class="text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                CONTACT US
            </button>
        </div>


        <!--        <div class="md:hidden">-->
        <!--            <div class="flex justify-center my-8 text-xl italic"-->
        <!--                 style="font-family: Poppins,serif; font-weight: 800;">-->
        <!--                <h2>Web Development</h2>-->

        <!--            </div>-->

        <!--            <div class="flex justify-center my-8 text-xl italic"-->
        <!--                 style="font-family: Poppins,serif; font-weight: 800;">-->
        <!--                <h2>App Development</h2>-->
        <!--            </div>-->

        <!--            <div class="flex justify-center my-8 text-xl italic"-->
        <!--                 style="font-family: Poppins,serif; font-weight: 800;">-->
        <!--                <h2>Product Design</h2>-->
        <!--            </div>-->
        <!--        </div>-->

        <!--        <div class="bg-black h-8">-->
        <!--hi-->
        <!--        </div>-->

        <!--    DESKTOP SERVICES    -->
        <div class="flex flex-wrap justify-center space-x-2 mt-32 hidden md:flex">
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

        <div class="flex justify-center my-8 hidden sm:flex">
            <hr width="75%">
        </div>


        <!--    MOBILE SERVICES     -->
        <div class="sm:hidden">
            <div
                id="scrollContainer"
                class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  hide-scroll-bar">
                <!--    MOBILE WEB DEV  -->
                <div class="inline-block px-4">
                    <div
                        class="w-48 h-64 max-w-xs overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://moodle.essex.ac.uk/">
                            <img :src="web_dev" class="inline-block px-2 py-2 lg:px-4 lg:py-4" alt="plus">
                        </a>

                        <div class="flex justify-center">
                            <h2 class="flex  text-xl" style="font-family: Poppins,serif">
                                Web Development
                            </h2>
                        </div>
                    </div>
                </div>

                <!--                MOBILE APP DEV      -->
                <div class="inline-block px-2">
                    <div
                        class="w-64 h-64 max-w-xs overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://leap.essex.ac.uk/student" class="">
                            <img :src="app_dev" class="inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl " alt="plus">
                        </a>

                        <div class="flex justify-center">
                            <h2 class="flex  text-xl" style="font-family: Poppins,serif">
                                App Development
                            </h2>
                        </div>
                    </div>
                </div>

                <!--                MOBILE PRODUCT DESIGN       -->
                <div class="inline-block px-2">
                    <div
                        class="w-64 h-64 max-w-xs overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://faser.essex.ac.uk/">
                            <img :src="product_design" class="inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                 alt="plus">
                        </a>

                        <div class="flex justify-center">
                            <h2 class="flex  text-xl" style="font-family: Poppins,serif">
                                Product Design
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <!--WEB DEV -->
        <div class="mt-32 md:flex items-center md:mx-32">
            <div class="mx-10">

                <div class="flex justify-center">
                    <img :src="app_dev" class="md:w-1/3 md:hidden" alt="">
                </div>

                <div>
                    <h2 class="text-4xl font-bold" style="font-family: Poppins,serif;">
                        Web Development
                    </h2>

                    <div class="md:w-1/2 my-4 bg-red-400" style="height: 6px;">

                    </div>


                </div>

                <p class="md:pr-32">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequatur corporis, deserunt eius
                    fuga fugiat ipsa ipsam iste minus mollitia natus nesciunt possimus recusandae sapiente suscipit?
                    Modi molestiae nam provident?
                </p>

                <div class="flex">
                    <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                    <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                    <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                    <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                </div>

                <div class="flex  mt-5">
                    <button class="text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                        CONTACT US
                    </button>
                </div>
            </div>

            <img :src="app_dev" class="hidden md:block w-1/3" alt="">
        </div>

        <!--        APP DEV -->
        <div class="mt-32 md:flex items-center md:mx-32">
            <!--            <img :src="app_dev" class=" md:block w-1/2" alt="">-->


            <div class="mx-10 md:flex">

                <img :src="app_dev" class="w-full md:w-1/2" alt="">

                <div class="">
                    <div class="">
                        <h2 class="text-4xl font-bold" style="font-family: Poppins,serif;">
                            App Development
                        </h2>

                        <div class="md:w-1/2 my-4 bg-red-400" style="height: 6px;">

                        </div>


                    </div>

                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequatur corporis, deserunt
                        eius
                        fuga fugiat ipsa ipsam iste minus mollitia natus nesciunt possimus recusandae sapiente suscipit?
                        Modi molestiae nam provident?
                    </p>

                    <div class="flex">
                        <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                        <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                        <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                        <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                    </div>

                    <div class="flex  mt-5">
                        <button class="text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                            CONTACT US
                        </button>
                    </div>
                </div>
            </div>

        </div>


        <!--        PRODUCT DESIGN-->
        <div class="mt-32 md:flex items-center md:mx-32">
            <div class="mx-10">
                <div class="flex justify-center">
                    <img :src="app_dev" class="w-full md:hidden" alt="">

                </div>

                <h2 class="text-4xl font-bold" style="font-family: Poppins,serif;">
                    Product Design
                </h2>

                <div class="md:w-1/3 my-4 bg-red-400" style="height: 6px;">

                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequatur corporis, deserunt eius
                    fuga fugiat ipsa ipsam iste minus mollitia natus nesciunt possimus recusandae sapiente suscipit?
                    Modi molestiae nam provident?
                </p>

                <div class="flex">
                    <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                    <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                    <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                    <div class="p-4 bg-black rounded-full mt-5 mr-2"></div>
                </div>

                <div class="flex  mt-5">
                    <button class="text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                        CONTACT US
                    </button>
                </div>
            </div>

            <img :src="app_dev" class="hidden md:block w-1/2" alt="">
        </div>


    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
import logo_bg from "/img/img_3.png";
import web_dev from "/img/web-dev.webp";
import app_dev from "/img/mobile-app-dev.png";
import banner from "/img/banner.webp";
import product_design from "/img/product-design.webp";
import 'tw-elements';

export default {
    name: "Index",
    components: {
        Navbar,
    },
    data() {
        return {
            logo_bg: logo_bg,
            web_dev: web_dev,
            app_dev: app_dev,
            product_design: product_design,
            banner: banner,
        }
    }
}
</script>

<style scoped>

</style>
