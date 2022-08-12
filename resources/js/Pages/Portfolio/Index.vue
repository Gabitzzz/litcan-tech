<template>
    <div class="bg-white">

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
                    class="tracking-wider text-center">
                    See our <span class="text-red-500">portfolio</span>
                </h1>
            </div>

        </div>

        <div class=" grid mx-8 md:mx-32 mb-16   grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:mx-64 gap-y-8 content-center ">
            <!--    Adopet-->
            <a href="http://adopet.gabilitcan.com/" class="z-10  shadow-lg bg-white mx-4 ">
                <div class="flex justify-center items-center h-40">
                    <img :src="adopet_mockup" alt="" class="mt-8 w-32">
                </div>

                <div class="flex justify-center mt-2">
                    <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Adopet
                    </p>
                </div>

                <div class="flex justify-center">
                    <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full" style="height: 2px;">

                    </div>
                </div>

                <p class="mb-4 mx-8 text-center text-md">
                    Custom Built Platform for Pet Adoptions in Romania.
                </p>

                <div class="flex justify-center mb-8">
                    <a href="http://adopet.gabilitcan.com/"
                       class="font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                        SEE MORE
                    </a>
                </div>
            </a>

            <!--    DREAM WINE SPECIAL  -->
            <a href="https://vin-cadou.ro/" class="z-10  shadow-lg bg-white mx-4 ">
                <div class="flex justify-center items-center h-40">
                    <img :src="dws_mockup" alt="" class="mt-8 w-32">
                </div>

                <div class="flex justify-center mt-2">
                    <p class="text-xl text-center mx-2" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Dream Wine Special
                    </p>
                </div>

                <div class="flex justify-center">
                    <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full" style="height: 2px;">

                    </div>
                </div>

                <p class="mb-4 mx-8 text-center text-md">
                    Ecommerce <br> Platform
                    <br class="hidden sm:block">
                    built in Wordpress
                </p>

                <div class="flex justify-center mb-8">

                    <a href="https://vin-cadou.ro/"
                       class="font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                        SEE MORE
                    </a>
                </div>
            </a>

            <!--     ARHIQUE     -->
            <a href="https://arhique.ro/" class="z-10  shadow-lg bg-white mx-4 ">
                <div class="flex justify-center items-center h-40">
                    <img :src="arhique_mockup" alt="" class="mt-8 w-32">
                </div>

                <div class="flex justify-center mt-2">
                    <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Arhique
                    </p>
                </div>

                <div class="flex justify-center">
                    <div class="flex justify-center md:w-1/2 my-2 bg-red-500 rounded-full" style="height: 2px;">

                    </div>
                </div>

                <p class="mb-4 mx-8 text-center text-md">
                    Digital Catalogue <br>
                    of an Architecture Company
                </p>

                <div class="flex justify-center mb-8">

                    <a href="https://arhique.ro/"
                       class="font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                        SEE MORE
                    </a>
                </div>
            </a>


        </div>

        <BlogComponent></BlogComponent>

        <Footer></Footer>
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import BlogComponent from "@/Components/BlogComponent";

import logo_bg from "/img/logo/logo_banner.png";
import logo_bg_mobile from "/img/logo/logo_banner_mobile.png";

import adopet_mockup from "/img/portfolio/adopet_mockup.png";
import dws_mockup from "/img/portfolio/dws_mockup.png";
import arhique_mockup from "/img/portfolio/arhique_mockup.png";


export default {
    name: "Index",
    components: {
        Navbar,
        Footer,
        BlogComponent,
    },
    data() {
        return {
            logo_bg: logo_bg,
            logo_bg_mobile: logo_bg_mobile,

            adopet_mockup: adopet_mockup,
            dws_mockup: dws_mockup,
            arhique_mockup: arhique_mockup,
        }
    }
}
</script>

<style scoped>

</style>
