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
            <p class="-mt-8 mb-16 md:mb-16 md:-mt-16 text-center text-xl md:px-24 lg:px-32 2xl:mx-80 "
               style="font-family: 'Poppins', sans-serif; font-weight: 300;">
                Let's collaborate
            </p>
        </div>

        <ContactComponent></ContactComponent>


        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2847.8251181747883!2d26.338854615434343!3d44.45725710808286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fb6d2f1a9997%3A0x397891e3790e69c2!2sLi%C8%9Bcan%20Technologies!5e0!3m2!1sro!2sro!4v1658283630241!5m2!1sro!2sro"
            class="w-full"
            style="border:0; min-height: 800px;"
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
import ContactComponent from "@/Components/ContactComponent";

import logo_bg from "/img/logo/logo_banner.png";
import logo_bg_mobile from "/img/logo/logo_banner_mobile.png";

import mail from "/img/contact/mail.png";
import telephone from "/img/contact/telephone.png";
import website from "/img/contact/website.png";
import wapp from "/img/contact/wapp.png";
import facebook from "/img/contact/facebook.png";
import instagram from "/img/contact/instagram.png";


export default {
    name: "Index",
    components: {
        Navbar,
        Footer,
        BlogComponent,
        ContactComponent,
    },
    data() {
        return {
            logo_bg_mobile: logo_bg_mobile,
            logo_bg: logo_bg,
            mail: mail,
            telephone: telephone,
            website: website,
            wapp: wapp,
            facebook: facebook,
            instagram: instagram,
        }
    }
}
</script>

<style scoped>

</style>
