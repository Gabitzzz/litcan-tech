<template>
    <div class="2xl:px-48 bg-gray-100">
        <div
            class="grid gap-8 grid-cols-1 md:grid-cols-2
                md:px-12 lg:px-32 xl:px-80 2xl:px-96 pt-32 pb-16
                mx-auto px-8
                 text-gray-900 rounded-lg shadow-lg">

            <div class="flex flex-col justify-between 2xl:px-32 z-40">
                <div>
                    <h2 class="text-2xl font-bold leading-tight"
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;">

                        Let's Get in Touch
                    </h2>

                    <div class="text-gray-700 my-4">


                        Hate forms? Send us an <span class="underline">email</span> instead.
                    </div>

                    <div class="mb-1.5 flex items-center text-gray-700 text-2xl font-bold">
                        <a href="mailto:contact@litcan.tech" class="flex items-center hover:text-red-600">
                            <img :src="mail" class="w-6 h-6 mr-2" alt="">
                            contact@litcan.tech
                        </a>
                    </div>

                    <div class="mb-1.5 flex items-center text-gray-700 text-2xl font-bold">
                        <a href="tel:+40773800815" class="flex items-center hover:text-red-600">
                            <img :src="telephone" class="w-6 h-6 mr-2" alt="">
                            +40 773 800 815
                        </a>
                    </div>

                    <div class="mb-1.5 flex items-center text-gray-700 text-2xl font-bold">
                        <a href="https://litcan.tech/" class="flex items-center hover:text-red-600">
                            <img :src="website" class="w-6 h-6 mr-2" alt="">
                            www.litcan.tech
                        </a>
                    </div>

                    <h2 class="text-2xl font-bold leading-tight mt-8"
                        style="font-family: 'Poppins', sans-serif; font-weight: 300;">

                        Follow us on Social Media
                    </h2>


                    <div class="font-bold mt-4">

                        <a href="https://www.linkedin.com/company/li%C8%9Bcan-technologies/"
                           class="flex items-center hover:text-red-600">
                            <img :src="linkedin" class="w-8 h-8  mr-2" alt="">
                            Lițcan Technologies
                        </a>
                        <a href="https://www.facebook.com/litcan.tech"
                           class="flex items-center hover:text-red-600 mt-4">
                            <img :src="facebook" class="w-8 h-8 mr-2" alt="">
                            Lițcan Technologies
                        </a>

                        <a href="https://www.instagram.com/litcan.tech/"
                           class="flex items-center hover:text-red-600 mt-4">
                            <img :src="instagram" class="w-8 h-8  mr-2" alt="">
                            litcan.tech
                        </a>

                    </div>
                </div>


            </div>



            <div class="z-40">
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
                        class="uppercase text-sm font-bold tracking-wide bg-red-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                        Send Message
                    </button>
                </div>
            </div>


        </div>

    </div>

</template>

<script>
import mail from "/img/contact/mail.png";
import telephone from "/img/contact/telephone.png";
import website from "/img/contact/website.png";
import facebook from "/img/contact/facebook.png";
import instagram from "/img/contact/instagram.png";
import linkedin from "/img/contact/linkedin.png";

export default {
    name: "ContactComponent",

    data() {
        return {
            mail: mail,
            telephone: telephone,
            website: website,
            facebook: facebook,
            instagram: instagram,
            linkedin: linkedin,
        }
    }
}
</script>

<style scoped>

</style>
