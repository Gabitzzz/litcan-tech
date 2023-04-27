<template>


    <div class="bg-white navbar top-0 fixed sticky mb-40 shadow-xl fixed mb-32" style="z-index: 20000">
        <div class="w-full px-2 sm:px-8 md:px-16 lg:px-24 xl:px-40 2xl:px-80">
            <div class="flex-1">

                <a :href="route('home')">
                    <img :src="logo_text"
                         class="w-36 md:w-40 "
                         alt="logo">
                </a>
            </div>

            <div class="navbar-center hidden lg:flex">


                <div class="text-red-500 menu-horizontal text-black flex items-center "
                     style="font-family: 'Nunito', sans-serif; font-weight: 300;">


                    <a href="/" class=" px-4 text-sm rounded-full underline-opening"
                    >
                        HOME
                    </a>

                    <a href="/services" class="px-4 text-sm rounded-full underline-opening">
                        SERVICES
                    </a>

                    <a href="/portfolio" class="px-4 text-sm rounded-full underline-opening">
                        PORTFOLIO
                    </a>

                    <a href="/portfolio" class="px-4 text-sm rounded-full underline-opening">
                        BLOG
                    </a>






                </div>

                <div class="flex items-center"
                    style="font-family: 'Nunito', sans-serif; font-weight: 300;">
                    <a href="/contact"
                       class="ml-2 px-6 rounded-full py-1 text-sm
                                border border-red-500 hover:text-white
                                hover:bg-red-500 ease-in duration-150">
                        CONTACT US
                    </a>

                    <div class="ml-2">
                        <a href="https://www.facebook.com/litcan.tech">
                            <img :src="facebook_round" alt=""
                                 class="w-8 hover:animate-pulse">
                        </a>
                    </div>

                    <div class="ml-2">
                        <a href="https://www.linkedin.com/company/li%C8%9Bcan-technologies">
                            <img :src="linkedin_round" alt=""
                                 class="w-8 hover:animate-pulse">
                        </a>
                    </div>

                    <div class="ml-2">
                        <a href="https://www.instagram.com/litcan.tech/">
                            <img :src="instagram_round" alt=""
                                 class="w-8 hover:animate-pulse">
                        </a>
                    </div>
                </div>


            </div>

            <div class="flex-none">
                <div class="dropdown dropdown-end ">
                    <label tabindex="0" class="btn btn-ghost btn-circle lg:hidden">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5 hamburger"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h7"/>
                            </svg>

                        </div>
                    </label>

                    <!--                    PHONE   MENU    -->
                    <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-white shadow">
                        <div class="card-body ">
                            <div class="menu menu-vertical lg:menu-horizontal bg-white rounded-box">
                                <a href="/"
                                   class=" px-6 py-2 text-sm rounded-full underline-opening">
                                    HOME
                                </a>

                                <a href="/services"
                                   class="px-6 py-2 text-sm rounded-full underline-opening">
                                    SERVICES
                                </a>

                                <a href="/portfolio"
                                   class="px-6 py-2 text-sm rounded-full underline-opening">
                                    PORTFOLIO
                                </a>

<!--                                <a href="/blog"-->
<!--                                   class="px-6 py-2 text-sm rounded-full underline-opening">-->
<!--                                    BLOG-->
<!--                                </a>-->

                                <a href="/contact"
                                   class="text-red-500 px-6 py-2 text-sm  rounded full px-4 py-1 text-sm rounded-full underline-opening">
                                    CONTACT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


import {InertiaLink} from "@inertiajs/inertia-vue3";
import {Link} from "@inertiajs/inertia-vue3";
import logo from "/img/logo/logo_250.png";
import logo_text from "/img/logo/logo_text.png";
import facebook_round from "/img/desktop/facebook_round.png";
import linkedin_round from "/img/desktop/linkedin_round.png";
import instagram_round from "/img/desktop/instagram_round.png";

export default {
    name: "Navbar",
    data() {
        return {
            logo: logo,
            logo_text: logo_text,
            facebook_round: facebook_round,
            linkedin_round: linkedin_round,
            instagram_round: instagram_round,

        }
    },
    components: {
        InertiaLink,
        Link,
    },

}
</script>

<style scoped>


.indicator {
    animation: crescendo 2s alternate infinite ease-in;
}

@keyframes crescendo {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.8);
    }
}

body, html {
    margin: 0;
}

ul {
    padding: 0;
    list-style: none;
    text-align: center;
}

.menu-horizontal li {
    display: table-cell;
    position: relative;
}

.menu-horizontal a {
    color: black;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 0.15em;

    display: inline-block;
    position: relative;
}

.menu-horizontal a:after {
    bottom: -10px;
    content: "";
    display: block;

    height: 2px;
    left: 50%;
    position: absolute;
    background: red;
    transition: width 0.3s ease 0s, left 0.3s ease 0s;
    width: 0;
}

.menu-horizontal a:hover:after {
    width: 100%;
    left: 0;
}

@media screen and (max-height: 300px) {
    ul {
        margin-top: 40px;
    }
}

@keyframes rotateOnY {
    5% {
        -webkit-transform: rotateY(90deg);
        transform: rotateY(90deg);
    }
    10% {
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
    }
}


</style>
