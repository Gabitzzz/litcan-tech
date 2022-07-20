<template>
<div>
    <div class="bg-gray-100 py-5">
        <div class="max-w-screen-lg px-4 sm:px-6 text-gray-800 sm:grid md:grid-cols-4 sm:grid-cols-2 mx-auto">
            <div class="p-5">
<!--                <h3 class="font-bold text-xl text-red-600">LITCAN TECHNOLOGIES</h3>-->
                <img :src="logo_text_2" alt="" class="w-1/3 md:w-2/3">
            </div>
            <div class="p-5">
                <div class="text-sm uppercase text-red-600 font-bold">Resources</div>
                <a class="my-3 block" href="/#">Home <span class="text-teal-600 text-xs p-1"></span></a>
                <a class="my-3 block" href="/#">Blog <span class="text-teal-600 text-xs p-1"></span></a>

                <a class="my-3 block" href="/#">Portfolio <span class="text-teal-600 text-xs p-1"></span></a>
            </div>

            <div class="p-5">
                <div class="text-sm uppercase text-red-600 font-bold">Services</div>
                <a class="my-3 block" href="/#">Web Development
                    <span class="text-teal-600 text-xs p-1"></span>
                </a>

                <a class="my-3 block" href="/#">App Developnent
                    <span class="text-teal-600 text-xs p-1"></span>
                </a>

                <a class="my-3 block" href="/#">Product Design
                    <span class="text-teal-600 text-xs p-1"></span>
                </a>
            </div>

            <div class="p-5">
                <div class="text-sm uppercase text-red-600 font-bold">Contact us</div>

                <a class="my-3 block" href="/#">
                    +40 773 800 815
                    <span class="text-teal-600 text-xs p-1">
                </span>
                </a>

                <a class="my-3 block" href="/#">contact@litcan-tech.com
                    <span class="text-teal-600 text-xs p-1"></span>
                </a>

                <a class="my-3 block" href="/#">Brănești, Ilfov, Romania
                    <span class="text-teal-600 text-xs p-1">
                </span>
                </a>
            </div>

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
