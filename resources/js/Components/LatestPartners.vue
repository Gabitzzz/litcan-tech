<template>
    <div class="bg-gray-100 py-32 sm:pt-16 my-32">
        <h2 class="text-4xl font-bold text-center" style="font-family: Poppins,serif;">
            Our latest
            <span class="text-red-600">Partners</span>
        </h2>


        <div class="flex justify-center">
            <div class="w-1/2 md:w-1/6 mt-2 mb-4 bg-red-600 rounded-full h-1 ">
            </div>
        </div>

        <div class="justify-center mt-8">
            <div
                id="scrollContainer2"
                class="flex md:justify-center flex-no-wrap overflow-x-scroll scrolling-touch items-start pb-8  scrollbar-hide">

                <!--                EDIDACTIC       -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 flex items-center max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://edidactic.ro//" class="">
                            <div class="pt-2 px-2 flex justify-center">
                                <img :src="edidactic"
                                     class="inline-block p-6 md:p-6rounded-3xl "
                                     alt="edidactic">
                            </div>
                        </a>
                    </div>
                </div>

                <!--                TEORETIC        -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 flex items-center max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://traianlalescu.ro//" class="">
                            <div class="pt-2 px-2 flex justify-center">
                                <img :src="teoretic"
                                     class="inline-block p-6 md:p-6rounded-3xl "
                                     alt="teoretic">
                            </div>
                        </a>
                    </div>
                </div>

                <!--    ADOPET     -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 flex items-center max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="http://adopet.gabilitcan.com/" class="">
                            <div class="pt-2 px-2 flex justify-center">
                                <img :src="adopet"
                                     class="inline-block p-6 md:p-6rounded-3xl "
                                     alt="adopet">
                            </div>
                        </a>
                    </div>
                </div>

                <!--                ESSEX SOCIAL     -->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40  flex items-center max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://essex.social/" class="">
                            <div class="pt-2 px-2 flex justify-center">
                                <img :src="esn"
                                     class="inline-block p-6 md:p-4 rounded-3xl "
                                     alt="esn">
                            </div>
                        </a>
                    </div>
                </div>

                <!--                TED       -->
<!--                <div class="inline-block px-2">-->
<!--                    <div-->
<!--                        class="w-40 h-40 flex items-center max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">-->
<!--                        <a href="https://www.tedxuniversityofessex.com///">-->
<!--                            <div class="pt-2 px-2  justify-center">-->
<!--                                <img :src="ted"-->
<!--                                     class=" inline-block p-6 md:p-4 rounded-3xl "-->
<!--                                     alt="ted">-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->

<!--                                DREAM WINE SPECIAL-->
                <div class="inline-block px-2">
                    <div
                        class="w-40 h-40 flex items-center max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <a href="https://vin-cadou.ro/">
                            <div class="pt-2 px-2  justify-center">
                                <img :src="dws"
                                     class=" inline-block p-6 md:p-4 rounded-3xl "
                                     alt="dws">
                            </div>
                        </a>
                    </div>
                </div>


                <!--                ARHIQUE         -->
<!--                <div class="inline-block px-2">-->
<!--                    <div-->
<!--                        class="w-40 h-40 flex items-center max-w-xs overflow-hidden  shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">-->
<!--                        <a href="https://arhique.ro//">-->
<!--                            <div class="pt-2 px-2  justify-center">-->
<!--                                <img :src="arhique"-->
<!--                                     class=" inline-block p-6 md:p-4 rounded-3xl "-->
<!--                                     alt="arhique">-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->

            </div>


            <div class="flex justify-center">
                <a href="/portfolio"
                   class="z-40 text-white text-sm md:text-md bg-red-600 rounded-full px-6 py-2">
                    SEE OUR PORTFOLIO
                </a>
            </div>
        </div>
    </div>


</template>

<script>
import adopet from "/img/partners/adopet.png";
import arhique from "/img/partners/arhique2.png";
import dws from "/img/partners/dws.webp";
import ted from "/img/partners/ted.png";
import esn from "/img/partners/esn.png";
import teoretic from "/img/partners/teoretic.png";
import edidactic from "/img/partners/edidactic.png";

export default {
    name: "LatestPartners",
    data() {
        return {
            adopet: adopet,
            ted: ted,
            arhique: arhique,
            esn: esn,
            dws: dws,
            teoretic: teoretic,
            edidactic: edidactic,
        }
    }
}
</script>

<style scoped>

</style>
