<template>
    <div>
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
                    Read our <span class="text-red-600">blog</span> <br class="hidden md:block">

                </h1>
            </div>

        </div>

        <div class="mx-10 mb-8 flex flex-col items-center">
            <p class="-mt-8 md:-mt-24 text-center text-lg md:px-24 lg:px-32 xl:px-48 ">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At corporis dignissimos excepturi
                illum
                iusto maxime, neque officia possimus vero voluptates. Ad blanditiis facere laboriosam molestiae
                optio porro quo similique vero.
            </p>
        </div>




        <Footer></Footer>
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";

import logo_bg from "/img/logo/logo_banner.png";
import logo_bg_mobile from "/img/logo/logo_banner_mobile.png";


export default {
    name: "Index",
    components: {
        Navbar,
        Footer,
    },
    data() {
        return {
            logo_bg_mobile: logo_bg_mobile,
            logo_bg: logo_bg,
        }
    }
}
</script>

<style scoped>

</style>
