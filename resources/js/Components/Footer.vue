<template>
<div>
    <div class="bg-gray-100 pb-8">
        <div class="max-w-screen-lg px-4 text-gray-800 mx-auto
                    sm:px-6 sm:grid sm:grid-cols-2
                    md:grid-cols-4">
            <div class="p-5">
<!--                <h3 class="font-bold text-xl text-red-600">LITCAN TECHNOLOGIES</h3>-->
                <img :src="logo_text_2" alt="" class="w-1/3 md:w-2/3">
            </div>
            <div class="p-5">
                <div class="text-sm uppercase text-red-600 font-bold">Resources</div>
                <a class="my-3 block hover:underline" href="/">Home <span class="text-teal-600 text-xs p-1"></span></a>
                <a class="my-3 block hover:underline" href="/blog">Blog <span class="text-teal-600 text-xs p-1"></span></a>
                <a class="my-3 block hover:underline" href="/portfolio">Portfolio <span class="text-teal-600 text-xs p-1"></span></a>
            </div>

            <div class="p-5">
                <div class="text-sm uppercase text-red-600 font-bold">Services</div>
                <a class="my-3 block hover:underline" href="/services/web-development">Web Development
                    <span class="text-teal-600 text-xs p-1"></span>
                </a>

                <a class="my-3 block hover:underline" href="/services/app-development">App Developnent
                    <span class="text-teal-600 text-xs p-1"></span>
                </a>

                <a class="my-3 block hover:underline" href="/services/product-design">Product Design
                    <span class="text-teal-600 text-xs p-1"></span>
                </a>
            </div>

            <div class="p-5">
                <div class="text-sm uppercase text-red-600 font-bold">Contact us</div>

                <a class="my-3 block  hover:underline" href="tel:+40773800815">
                    +40 773 800 815
                    <span class="text-teal-600 text-xs p-1">
                </span>
                </a>

                <a class="my-3 block  hover:underline"
                   href="mailto:contact@litcan.tech">
                    contact@litcan.tech
                </a>

                <a class="my-3 block  hover:underline " href="https://goo.gl/maps/EEPbGtre78XufAicA">
                    Brănești, Ilfov, Romania
                </a>
            </div>

        </div>

        <hr class=" mx-10 lg:mx-48">


        <div class="md:flex justify-between mx-8 xl:mx-64 mt-8 text-gray-800">
            <p>
                Copyright © 2023 Lițcan Inernational Technologies SRL. All rights are reserved.
            </p>

<!--            <div class="md:flex mt-4 md:mt-0">-->
<!--                <a href="/privacy-policy" class="hover:underline">-->
<!--                    <p class="md:mx-2 my-3">-->
<!--                        Privacy Policy-->
<!--                    </p>-->
<!--                </a>-->
<!--                <a href="/cookies-policy" class="hover:underline">-->
<!--                    <p class="md:mx-2 my-3">-->
<!--                        Cookies Policy-->
<!--                    </p>-->
<!--                </a>-->
<!--            </div>-->
        </div>
    </div>





</div>
</template>

<script>
import logo_text_2 from "/img/logo/logo_text_2.png";

export default {
    name: "Footer",
    data(){
        return{
            logo_text_2: logo_text_2,
        }
    }
}
</script>

<style scoped>

</style>
