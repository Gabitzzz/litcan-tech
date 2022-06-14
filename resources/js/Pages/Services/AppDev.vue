<template>
    <Navbar></Navbar>

    <div class="md:mx-10 mt-80 md:mt-32 2xl:mt-48 flex justify-center">
        <img :src="logo_bg_mobile" alt="" class="object-fit sm:hidden"
             style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">


        <img :src="logo_bg" alt="" class="object-fit hidden sm:flex z-0"
             style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
    </div>




    <div class="mx-10 -mt-80  flex justify-center items-center text-3xl md:text-5xl">
        <div class="-mt-56 lg:-mt-80 flex flex-col items-center">
            <img :src="banner_mobile" class="mt-6 w-full md:hidden" alt="">

            <div class="flex items-center justify-between md:mx-48">


                <div>
                    <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                        class="tracking-wider ">
                    <span class="text-red-500">
                    App
                    </span>

                        Development <br> Services
                    </h1>

                    <div class="md:w-1/2 my-4 bg-red-500 rounded-full" style="height: 6px;">

                    </div>
                </div>


                <img :src="banner" class="hidden md:block w-full md:w-1/3 4xl:w-1/2 " alt="">


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

export default {
    name: "AppDev",
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
        }
    }
}
</script>

<style scoped>

</style>
