<template>
    <div class="" style="max-width: 100%;">
        <Navbar></Navbar>


        <div class="md:mx-10 mt-80 md:mt-32 2xl:mt-48 flex justify-center">
            <img :src="logo_bg_mobile" alt="" class="object-fit sm:hidden"
                 style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">


            <img :src="logo_bg" alt="" class="object-fit hidden sm:flex z-0"
                 style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
        </div>

        <div class="mx-10 -mt-80  flex justify-center items-center text-3xl md:text-5xl">
            <div class="-mt-40 lg:-mt-80 flex flex-col items-center">
                <img :src="banner_mobile" class="w-full md:hidden" alt="">

                <img :src="banner" class="w-full md:w-1/3 hidden md:block" alt="">

                <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                    class="tracking-wider text-center">
                    The Powerhouse of
                    <br class="hidden md:block">
                    Innovative Products
                </h1>

            </div>

        </div>

        <div class="flex justify-center my-8">
            <button class="z-40 text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                CONTACT US
            </button>
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
                class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  hide-scroll-bar">
                <!--    MOBILE WEB DEV  -->
                <div class="inline-block px-4">
                    <div
                        class="w-48 h-64 max-w-xs overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://moodle.essex.ac.uk/">
                            <div class="p-8">
                                <img :src="web_icon" class="inline-block px-2 py-2 lg:px-4 lg:py-4" alt="plus">
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
                        class="w-48 h-64 max-w-xs overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://leap.essex.ac.uk/student" class="">
                            <div class="p-8">
                                <img :src="app_icon" class="inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
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
                        class="w-48 h-64 max-w-xs overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://faser.essex.ac.uk/">
                            <div class="p-8">
                                <img :src="product_icon" class="inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
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

                <div class=" px-2">
                    <div
                        class="w-48 h-64 max-w-xs font-bold overflow-hidden rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out flex justify-center items-center font-bold">
                        SEE ALL
                    </div>
                </div>

            </div>
        </div>


        <div class="mx-10 lg:mx-40">
            <h1 style="font-family: 'Poppins', sans-serif; font-weight: 500;"
                class="text-center text-2xl my-16">
                We are here to help you maximize your business
            </h1>

        </div>

        <!--WEB DEV -->
        <div class="mt-32 md:flex items-center mx-10 lg:mx-32">
            <div class="">

                <div class="flex justify-center">
                    <img :src="web_dev_mobile" class="md:w-1/3 md:hidden" alt="">
                </div>

                <div>
                    <h2 class="text-4xl font-bold" style="font-family: Poppins,serif;">

                        <span class="text-red-600">Websites</span>
                        that create <br> more conversions

                        <!--                        Web Development-->
                    </h2>

                    <div class="md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 6px;">

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

            <img :src="web_dev" class="hidden md:block w-1/3" alt="">
        </div>


        <div class="lg:mx-40 mt-16">
            <div class="mx-10 lg:mx-32 md:flex items-center justify-between">

                <div class="md:hidden">
                    <p style="font-family: 'Poppins', sans-serif;"
                       class=" text-4xl mt-16 md:mt-0 font-bold">
                        The <span class="text-red-600">3</span> layers of a great product
                    </p>

                    <div class="md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 6px;">

                    </div>
                </div>

                <img :src="steps" alt="" class="w-full md:w-1/2 md:pr-24">

                <div>
                    <div class="hidden md:block">
                        <p style="font-family: 'Poppins', sans-serif;"
                           class=" text-4xl mt-16 md:mt-0 font-bold">
                            The <span class="text-red-600">3</span> layers of a great product
                        </p>

                        <div class="md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 6px;">

                        </div>
                    </div>


                    <p style="font-family: 'Poppins', sans-serif; font-weight: 300;"
                       class=" text-2xl mt-8">
                        Newest Technologies <br>
                        Creative Storytelling <br>
                        Bespoke Design
                    </p>

                    <p class="mt-2">
                        Based on this 3 essential layers, we build websites that focus on User Experience and deliver
                        fast performance.
                    </p>

                </div>

            </div>


        </div>


        <div class="bg-gray-100 py-10 mt-8">
            <h2 class="text-4xl font-bold text-center" style="font-family: Poppins,serif;">

                Our latest
                <span class="text-red-600">Partners</span>

                <!--                        Web Development-->
            </h2>

            <div class="flex justify-center mt-8 md:mt-16">
                <button class="text-red-600 text-sm md:text-md border  rounded-full px-24 py-2">
                    SEE OUR PORTFOLIO
                </button>
            </div>
        </div>


        <!--        APP DEV -->
        <div class="mt-16 md:mt-32 md:flex items-center lg:mx-32">
            <!--            <img :src="app_dev" class=" md:block w-1/2" alt="">-->


            <div class="mx-10 md:flex items-center">


                <div class="">
                    <img :src="app_dev_mobile" class="w-full md:w-1/2 md:hidden" alt="">

                    <div class="">
                        <h2 class="text-4xl font-bold" style="font-family: Poppins,serif;">
                            Custom
                            <span class="text-red-600">
                                Apps
                            </span>
                            <!--                             or-->
                            <!--                            <span class="text-red-600">-->
                            <!--                                Web Apps-->
                            <!--                            </span>-->

                            <!--                            <br>-->
                            that increase your business' performance.
                        </h2>

                        <div class="md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 6px;">

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

                <img :src="app_dev" class="w-full md:w-1/2 hidden md:block" alt="">

            </div>


        </div>

        <!--        PRODUCT DESIGN-->
        <div class="mt-16 md:flex items-center lg:mx-32">
            <div class="mx-10">
                <div class="flex justify-center">
                    <img :src="product_design_mobile" class="w-full md:hidden" alt="">

                </div>

                <h2 class="text-4xl font-bold" style="font-family: Poppins,serif;">
                    Product

                    <span class="text-red-600">Design</span> for multiple industries
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

            <img :src="product_design" class="hidden md:block w-1/2" alt="">
        </div>


        <!--        CONTACT FORM    -->
        <div class="mt-32 md:flex items-center  mx-10 md:mx-32">

            <form class=" max-w-lg">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="grid-first-name">
                            First Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Jane">
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="grid-last-name">
                            Last Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-last-name" type="text" placeholder="Doe">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="grid-password">
                            Password
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-password" type="password" placeholder="******************">
                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="grid-city">
                            City
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-city" type="text" placeholder="Albuquerque">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="grid-state">
                            State
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state">
                                <option>New Mexico</option>
                                <option>Missouri</option>
                                <option>Texas</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="grid-zip">
                            Zip
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-zip" type="text" placeholder="90210">
                    </div>
                </div>
            </form>

            <div>
                <p class="text-4xl mx-4 font-bold">
                    Let's get in touch

                </p>
            </div>
        </div>

    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
import logo_bg from "/img/logo/logo_banner.png";
import logo_bg_mobile from "/img/logo/logo_banner_mobile.png";
import web_dev from "/img/web-dev.webp";
import app_dev from "/img/app-dev.webp";
import app_dev_mobile from "/img/mobile/app-dev-mobile.webp";
import web_dev_mobile from "/img/mobile/web-dev-mobile.webp";
import product_design_mobile from "/img/mobile/product-design-mobile.webp";
import banner from "/img/banner.webp";
import product_design from "/img/product-design.webp";
import app_icon from "/img/mobile/app-icon.png";
import web_icon from "/img/mobile/web-icon.png";
import product_icon from "/img/mobile/product-icon.png";
import banner_mobile from "/img/mobile/banner-mobile.webp";
import steps from "/img/desktop/3steps.png";
import 'tw-elements';

export default {
    name: "Index",
    components: {
        Navbar,
    },
    data() {
        return {
            logo_bg: logo_bg,
            banner: banner,
            banner_mobile: banner_mobile,

            web_dev: web_dev,
            web_dev_mobile: web_dev_mobile,

            app_dev: app_dev,
            app_dev_mobile: app_dev_mobile,

            product_design: product_design,
            product_design_mobile: product_design_mobile,
            logo_bg_mobile: logo_bg_mobile,

            product_icon: product_icon,
            app_icon: app_icon,
            web_icon: web_icon,

            steps: steps,
        }
    }
}
</script>

<style scoped>

</style>
