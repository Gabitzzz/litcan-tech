<template>
    <div>
        <Navbar></Navbar>

        <div class="md:mx-10 mt-80 md:mt-32 2xl:mt-48 flex justify-center">
            <img :src="logo_bg_mobile" alt="" class="object-fit sm:hidden"
                 style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">


            <img :src="logo_bg" alt="" class="z-40 object-fit hidden sm:flex"
                 style="filter: blur(0.2rem); min-width: 400px; max-width: 1000px;">
        </div>


        <!--        <div class="mx-10 -mt-64  flex justify-center items-center text-3xl md:text-5xl">-->
        <!--            <div class="-mt-40 lg:-mt-80 flex flex-col items-center">-->

        <!--                <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"-->
        <!--                    class="tracking-wider text-center ">-->
        <!--                    Contact <span class="text-red-500">us</span>-->
        <!--                </h1>-->
        <!--                <div class="md:mx-32">-->

        <!--                    <p class="my-8 text-center text-lg md:px-24 lg:px-32 xl:px-48 ">-->
        <!--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At corporis dignissimos excepturi-->
        <!--                        illum-->
        <!--                        iusto maxime, neque officia possimus vero voluptates. Ad blanditiis facere laboriosam molestiae-->
        <!--                        optio porro quo similique vero.-->
        <!--                    </p>-->
        <!--                </div>-->

        <!--            </div>-->

        <!--        </div>-->

        <div class="mx-10 -mt-80  flex justify-center items-center text-3xl md:text-5xl">

            <div class="-mt-40 lg:-mt-80 flex flex-col items-center">
                <h1 style="font-family: 'Poppins', sans-serif; font-weight: 700;"
                    class="tracking-wider text-center">
                    Contact us
                </h1>
            </div>

        </div>

        <div class="mx-10 -mt-8 mb-8 flex flex-col items-center">
            <p class="md:my-8 text-center text-lg md:px-24 lg:px-32 xl:px-48 ">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At corporis dignissimos excepturi
                illum
                iusto maxime, neque officia possimus vero voluptates. Ad blanditiis facere laboriosam molestiae
                optio porro quo similique vero.
            </p>
        </div>


        <!--    CONTACT FORM    -->
        <div
            class=" md:-mt-16  px-8 py-16 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-24 lg:px-32 xl:px-48  mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
            <div class="flex flex-col justify-between">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold leading-tight">
                        Let's Get in Touch
                    </h2>

                    <div class="text-gray-700 mt-8">
                        Hate forms? Send us an <span class="underline">email</span> instead.
                    </div>
                </div>

            </div>
            <div class="">
                <div>
                    <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
                    <input
                        class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" placeholder="">
                </div>
                <div class="mt-8">
                    <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
                    <input
                        class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text">
                </div>
                <div class="mt-8">
                    <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
                    <textarea
                        class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="mt-8">
                    <button
                        class="uppercase text-sm font-bold tracking-wide bg-indigo-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                        Send Message
                    </button>
                </div>
            </div>
        </div>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11391.300825427885!2d26.3411004!3d44.4572553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4c5ecee7bb7b6d43!2sLi%C8%9Bcan%20Nicolae-Gabriel%20PFA!5e0!3m2!1sro!2suk!4v1654993977515!5m2!1sro!2suk"
            class="w-full"
            style="border:0; min-height: 500px;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

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
