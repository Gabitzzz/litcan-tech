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
                    Contact <span class="text-red-600">us</span> <br class="hidden md:block">

                </h1>
            </div>

        </div>

        <div class="mx-10  flex flex-col items-center 2xl:mx-24">
            <p class="-mt-8 mb-16 md:-mt-24 text-center text-xl md:px-24 lg:px-32 2xl:mx-80 "
               style="font-family: 'Poppins', sans-serif; font-weight: 300;">

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At corporis dignissimos excepturi
                illum
                iusto maxime, neque officia possimus vero voluptates. Ad blanditiis facere laboriosam molestiae
                optio porro quo similique vero.
            </p>
        </div>


        <!--    CONTACT FORM    -->
        <div
            class="px-8 py-16 grid gap-8 grid-cols-1 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg
                    md:grid-cols-2 md:px-24 md:-mt-16 lg:px-32 xl:px-64 2xl:px-80">
            <div class="flex flex-col justify-between 2xl:px-8">
                <div>
                    <h2 class="text-4xl lg:text-4xl font-bold leading-tight"
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;">

                        Let's Get in Touch
                    </h2>

                    <div class="text-gray-700 my-4">
                        Hate forms? Send us an <span class="underline">email</span> instead.
                    </div>

                    <div class="mb-1 flex items-center text-gray-700 text-2xl font-bold">
                        <img :src="mail" class="w-6 h-6 mr-2" alt="">
                        contact@litcan.tech
                    </div>

                    <div class="mb-1 flex items-center text-gray-700 text-2xl font-bold">
                        <img :src="telephone" class="w-6 h-6 mr-2" alt="">
                        +40 773 800 815
                    </div>

                    <div class="mb-1 flex items-center text-gray-700 text-2xl font-bold">
                        <img :src="wapp" class="w-6 h-6 mr-2" alt="">
                        +44 7873 93 6443
                    </div>

                    <div class="mb-1 flex items-center text-gray-700 text-2xl font-bold">
                        <img :src="website" class="w-6 h-6 mr-2" alt="">
                        www.litcan.tech
                    </div>

                    <h2 class="text-4xl lg:text-4xl font-bold leading-tight mt-8"
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;">

                        Follow us on Social Media
                    </h2>
                </div>

            </div>

            <div class="2xl:px-8">
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
                        class="uppercase text-sm font-bold tracking-wide bg-red-600 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
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

import mail from "/img/contact/mail.png";
import telephone from "/img/contact/telephone.png";
import website from "/img/contact/website.png";
import wapp from "/img/contact/wapp.png";


export default {
    name: "Index",
    components: {
        Navbar,
        Footer,
        BlogComponent,
    },
    data() {
        return {
            logo_bg_mobile: logo_bg_mobile,
            logo_bg: logo_bg,
            mail: mail,
            telephone: telephone,
            website: website,
            wapp: wapp,
        }
    }
}
</script>

<style scoped>

</style>
