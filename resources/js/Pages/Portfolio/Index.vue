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
                See our <span class="text-red-500">portfolio</span>
            </h1>
        </div>

    </div>

    <div class="inline-block px-2">
        <div
            class="w-64  max-w-xs  rounded-2xl shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">

            <div class="w-32 h-32 border block border-black w-1/2 mx-16 -mt-8 shadow-md text-center">sal</div>

            <a href="https://leap.essex.ac.uk/student" class="">
                <div class="p-8">
                    <img src="#" class="inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                         alt="plus">
                </div>
            </a>


            <div class="flex justify-center">
                <h2 class="flex text-center font-bold text-xl" style="font-family: Poppins,serif">
                    Fintech
                    <br>
                    Development
                </h2>
            </div>
            <p  class="text-center mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, amet aut consequatur
                dolore eligendi, est eveniet exercitationem
            </p>
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
