<template>
    <Head>
        <title>
            Portfolio | Lițcan Technologies
        </title>
    </Head>

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

        <div class="mx-10 mb-8 flex flex-col items-center 2xl:mx-80 ">
            <p class="-mt-8 md:-mt-0 lg:-mt-24 xl:-mt-16 text-center text-xl md:px-24 lg:px-32 xl:mx-24 "
               style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                Check out the products we built for our clients or public use.
            </p>
        </div>


        <div
            class=" grid mx-8  mb-16 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:mx-16 xl:mx-48 2xl:mx-96 gap-y-8 2xl:gap-12 content-center ">

            <!--    SUPREME WORKS      -->
            <a href="https://supremeworks.co.uk/" class="z-10 shadow-lg hover:shadow-xl transition duration-250 ease-in bg-white mx-4">
                <div class="flex justify-center items-center h-40">
                    <img :src="supreme_mockup" alt="" class="mt-8 w-48 md:w-40">
                </div>

                <div class="flex justify-center mt-2">
                    <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Supreme Works
                    </p>
                </div>

                <div class="flex justify-center">
                    <div class="w-1/3 md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 2px;">
                    </div>
                </div>

                <p class="mb-8 mx-8 text-center text-md">
                    Portfolio Website for SupremeWorks Ltd.
                </p>

                <div class="flex justify-center mb-8">
                    <a href="https://supremeworks.co.uk/"
                       class="font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                        SEE MORE
                    </a>
                </div>
            </a>

            <!--    NORTRA       -->
            <a href="https://nortra.ro/" class="z-10 shadow-lg hover:shadow-xl transition duration-250 ease-in bg-white mx-4">
                <div class="flex justify-center items-center h-40">
                    <img :src="nortra_mockup" alt="" class="mt-8 w-48 md:w-40">
                </div>

                <div class="flex justify-center mt-2">
                    <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                     Nortra Management
                    </p>
                </div>

                <div class="flex justify-center">
                    <div class="w-1/3 md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 2px;">
                    </div>
                </div>

                <p class="mb-8 mx-8 text-center text-md">
                    Business Website for Financial Management
                </p>

                <div class="flex justify-center mb-8">
                    <a href="https://nortra.ro/"
                       class="font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                        SEE MORE
                    </a>
                </div>
            </a>

            <!--     TEORETIC     -->
            <a href="https://traianlalescu.ro/" class="z-10 shadow-lg hover:shadow-xl transition duration-250 ease-in bg-white mx-4">
                <div class="flex justify-center items-center h-40">
                    <img :src="teoretic_mockup" alt="" class="mt-8 w-48 md:w-40">
                </div>

                <div class="flex justify-center mt-2">
                    <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                      "Traian Lalescu"
                    </p>
                </div>

                <div class="flex justify-center">
                    <div class="w-1/3 md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 2px;">
                    </div>
                </div>

                <p class="mb-8 mx-8 text-center text-md">
                    Landing Page for "Traian Lalescu" Theoretical High School
                </p>

                <div class="flex justify-center mb-8">
                    <a href="https://traianlalescu.ro/"
                       class="font-bold border text-red-500 border-red-500 rounded-full px-4 py-1">
                        SEE MORE
                    </a>
                </div>
            </a>

            <!--    ADOPET      -->
            <a href="http://adopet.gabilitcan.com/" class="z-10 shadow-lg hover:shadow-xl transition duration-250 ease-in bg-white mx-4">
                <div class="flex justify-center items-center h-40">
                    <img :src="adopet_mockup" alt="" class="mt-8 w-48 md:w-40">
                </div>

                <div class="flex justify-center mt-2">
                    <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Adopet
                    </p>
                </div>

                <div class="flex justify-center">
                    <div class="w-1/3 md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 2px;">
                    </div>
                </div>

                <p class="mb-8 mx-8 text-center text-md">
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
            <a href="https://vin-cadou.ro/" class="z-10 shadow-lg hover:shadow-xl transition duration-250 ease-in bg-white mx-4">
                <div class="flex justify-center items-center h-40">
                    <img :src="dws_mockup" alt="" class="mt-8 w-48 md:w-40">
                </div>

                <div class="flex justify-center mt-2">
                    <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Dream Wine Special
                    </p>
                </div>

                <div class="flex justify-center">
                    <div class="w-1/3 md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 2px;">
                    </div>
                </div>

                <p class="mb-8 mx-8 text-center text-md">
                    Wine Ecommerce Platform
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
            <a href="https://arhique.ro/" class="z-10 shadow-lg hover:shadow-xl transition duration-250 ease-in bg-white mx-4">
                <div class="flex justify-center items-center h-40">
                    <img :src="arhique_mockup" alt="" class="mt-8 w-48 md:w-40">
                </div>

                <div class="flex justify-center mt-2">
                    <p class="text-xl text-center" style="font-family: 'Poppins', sans-serif; font-weight: 400;">
                        Arhique
                    </p>
                </div>

                <div class="flex justify-center">
                    <div class="w-1/3 md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 2px;">
                    </div>
                </div>

                <p class="mb-8 mx-8 text-center text-md">
                    Digital Catalogue <br>
                    of an Architecture Company
                </p>

                <div class="flex justify-center mb-8">
                    <a href="https://vin-cadou.ro/"
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
import {Head} from "@inertiajs/inertia-vue3";

import logo_bg from "/img/logo/logo_banner.png";
import logo_bg_mobile from "/img/logo/logo_banner_mobile.png";

import adopet_mockup from "/img/partners/adopet.webp";
import dws_mockup from "/img/portfolio/dws-mockup.webp";
import arhique_mockup from "/img/portfolio/arhique_mockup.webp";
import supreme_mockup from "/img/portfolio/supreme_mockup.webp";
import teoretic_mockup from "/img/portfolio/teoretic_mockup.webp";
import nortra_mockup from "/img/portfolio/nortra_mockup.webp";


export default {
    name: "Index",
    components: {
        Navbar,
        Footer,
        BlogComponent,
        Head,
    },
    data() {
        return {
            logo_bg: logo_bg,
            logo_bg_mobile: logo_bg_mobile,

            adopet_mockup: adopet_mockup,
            dws_mockup: dws_mockup,
            arhique_mockup: arhique_mockup,
            supreme_mockup: supreme_mockup,
            teoretic_mockup: teoretic_mockup,
            nortra_mockup: nortra_mockup,
        }
    }
}
</script>

<style scoped>

</style>
