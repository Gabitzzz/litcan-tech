<template>
    <div
        class=" grid gap-8 grid-cols-1 md:grid-cols-2
                md:px-12 lg:px-32 xl:px-64 py-32
                mx-auto mt-24 px-8
                bg-gray-100 text-gray-900 rounded-lg shadow-lg">

        <div class="flex flex-col justify-between 2xl:px-8">
            <div>
                <h2 class="text-2xl font-bold leading-tight"
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

                <h2 class="text-2xl font-bold leading-tight mt-8"
                    style="font-family: 'Poppins', sans-serif; font-weight: 300;">

                    Follow us on Social Media
                </h2>


                <div class="flex mt-4">
                    <a href="https://www.facebook.com/litcan.tech">
                        <img :src="facebook" class="w-8 h-8 mr-2" alt="">
                    </a>

                    <a href="https://www.instagram.com/litcan.tech/">
                        <img :src="instagram" class="w-8 h-8 ml-2" alt="">
                    </a>
                </div>
            </div>


        </div>


        <div class="">
            <div>
                <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
                <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                       type="text" placeholder="">
            </div>
            <div class="mt-8">
                <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
                <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
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

</template>

<script>
export default {
    name: "ContactComponent"
}
</script>

<style scoped>

</style>
