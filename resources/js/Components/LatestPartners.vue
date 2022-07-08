<template>
    <div class="bg-gray-100 py-10">
        <h2 class="text-4xl font-bold text-center" style="font-family: Poppins,serif;">

            Our latest
            <span class="text-red-600">Partners</span>



        </h2>

        <div class="justify-center mt-8 md:mt-16">


            <div
                id="scrollContainer2"
                class="flex md:justify-center flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  scrollbar-hide">
                <!--    LARAVEL DEVELOPMENT     -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 md:w-64 md:h-64 flex items-center max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://leap.essex.ac.uk/student" class="">
                            <div class="pt-2 px-2 flex justify-center">
                                <img :src="adopet"
                                     class="inline-block px-4 py-4 lg:px-8 lg:py-8 rounded-3xl "
                                     alt="plus">
                            </div>
                        </a>
                    </div>
                </div>

                <!--                VUE.JS DEVELOPMENT      -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 md:w-64 md:h-64 flex items-center max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://leap.essex.ac.uk/student" class="">
                            <div class="pt-2 px-2 flex justify-center">
                                <img :src="esn"
                                     class="inline-block lg:px-8 lg:py-8 rounded-3xl "
                                     alt="plus">
                            </div>
                        </a>
                    </div>
                </div>

                <!--                FLUTTER Development       -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 md:w-64 md:h-64 flex items-center max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://faser.essex.ac.uk/">
                            <div class="pt-2 px-2  justify-center">
                                <img :src="ted"
                                     class=" inline-block p-6 rounded-3xl "
                                     alt="plus">
                            </div>
                        </a>
                    </div>
                </div>

            </div>


            <div class="flex justify-center">
              <button
                  class="z-40 text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                  SEE OUR PORTFOLIO
              </button>
          </div>
        </div>
    </div>




</template>

<script>
import adopet from "/img/partners/adopet.png";
import arhique from "/img/partners/arhique.png";
import ted from "/img/partners/ted.png";
import esn from "/img/partners/esn.png";

export default {
    name: "LatestPartners",
    data(){
        return{
            adopet: adopet,
            ted:ted,
            arhique: arhique,
            esn: esn,
        }
    }
}
</script>

<style scoped>

</style>
