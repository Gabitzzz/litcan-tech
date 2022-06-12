<template>
<div>
    <Navbar></Navbar>


    <div class="md:mx-10 mt-80 md:mt-32 2xl:mt-48 flex justify-center">
        <img :src="logo_bg_mobile" alt="" class="object-fit sm:hidden"
             style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">


        <img :src="logo_bg" alt="" class="object-fit hidden sm:flex z-0"
             style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
    </div>

    <div class="mx-10 -mt-80  flex justify-center items-center text-3xl md:text-5xl">
        <div class="-mt-40 lg:-mt-80 flex flex-col items-center">

            <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                class="tracking-wider text-center">
            See our <span class="text-red-500">portfolio</span>
            </h1>

        </div>

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
    components:{
        Navbar,
        Footer,
    },
    data(){
        return{
            logo_bg: logo_bg,
            logo_bg_mobile: logo_bg_mobile,
        }
    }
}
</script>

<style scoped>

</style>
