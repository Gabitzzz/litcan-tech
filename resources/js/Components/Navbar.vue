<script setup>
import {ref} from "vue";

import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue';
import BreezeDropdown from '@/Components/Dropdown.vue';
import BreezeDropdownLink from '@/Components/DropdownLink.vue';
import BreezeNavLink from '@/Components/NavLink.vue';
import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
   <div class="bg-red-400">
<!--       <nav-->
<!--           :class="{ 'scrolled shadow-md': !view.atTopOfPage }"-->
<!--           class="fixed flex w-full bg-white items-center justify-between flex-wrap px-5 py-2 md:px-48 m-auto top-0 animated">-->

<!--&lt;!&ndash;           <img :src="logo_bg" alt="" class="w-1/6 md:w-1/12 hidden md:block">&ndash;&gt;-->
<!--           <img :src="logo_250" alt="" class="w-1/6 md:w-1/12">-->
<!--           <div class="hidden lg:block">-->
<!--               <ul class="flex text-sm items-center">-->
<!--                   <li class="px-4">-->
<!--                       HOME-->
<!--                   </li>-->
<!--                   <li class="px-4">-->
<!--                       SERVICES-->
<!--                   </li>-->

<!--                   <li class="px-4">-->
<!--                       PORTFOLIO-->
<!--                   </li>-->

<!--                   <li class="px-4">-->
<!--                       BLOG-->
<!--                   </li>-->

<!--                   <li class="mx-4 px-4 py-1 text-white bg-red-600 rounded-full">-->
<!--                       CONTACT-->
<!--                   </li>-->
<!--               </ul>-->
<!--           </div>-->
<!--           -->
<!--           -->

<!--       </nav>-->

       <nav class="fixed bg-white w-full top-0 animated  border-gray-100 "
                      :class="{ 'scrolled shadow-md': !view.atTopOfPage }">

<!--                      class="fixed flex w-full bg-white items-center justify-between flex-wrap px-5 py-2 md:px-48 m-auto top-0 animated">-->

           <!-- Primary Navigation Menu -->
           <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
               <div class="flex justify-between h-16">
                   <div class="flex">
                       <!-- Logo -->
                       <div class="shrink-0 flex items-center">
                           <Link :href="route('dashboard')">
                               <BreezeApplicationLogo class="block h-9 w-auto" />
                           </Link>
                       </div>

                       <!-- Navigation Links -->
                       <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                           <BreezeNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                               Dashboard
                           </BreezeNavLink>
                       </div>
                   </div>

                   <div class="hidden sm:flex sm:items-center sm:ml-6">
                       <!-- Settings Dropdown -->


                                  <div class="hidden lg:block">
                                      <ul class="flex text-sm items-center">
                                          <li class="px-4">
                                              HOME
                                          </li>
                                          <li class="px-4">
                                              SERVICES
                                          </li>

                                          <li class="px-4">
                                              PORTFOLIO
                                          </li>

                                          <li class="px-4">
                                              BLOG
                                          </li>

                                          <li class="mx-4 px-4 py-1 text-white bg-red-600 rounded-full">
                                              CONTACT
                                          </li>
                                      </ul>
                                  </div>



                   </div>

                   <!-- Hamburger -->
                   <div class="-mr-2 flex items-center sm:hidden">
                       <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                           <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                               <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                               <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                           </svg>
                       </button>
                   </div>
               </div>
           </div>

           <!-- Responsive Navigation Menu -->
           <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
               <div class="pt-2 pb-3 space-y-1">
                   <BreezeResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                       Dashboard
                   </BreezeResponsiveNavLink>
               </div>

               <!-- Responsive Settings Options -->
               <div class="pt-4 pb-1 border-t border-gray-200">
                   <div class="px-4">
                   </div>

                   <div class="mt-3 space-y-1">
                       <BreezeResponsiveNavLink :href="route('logout')" method="post" as="button">
                           Log Out
                       </BreezeResponsiveNavLink>
                   </div>
               </div>
           </div>
       </nav>


   </div>
</template>

<script>


import logo_bg from "/img/logo_bg.png";
import logo_phone from "/img/logo/logo_phone.png";
import logo_250 from "/img/logo/logo_250.png";


const showingNavigationDropdown = ref(false);

export default {
    name: "Navbar",

    components:{
        BreezeApplicationLogo,
        BreezeResponsiveNavLink,
        BreezeDropdownLink,
        BreezeDropdown,
        BreezeNavLink,
        Link,
    },
    data () {
        return {
            logo_bg: logo_bg,
            logo_phone: logo_phone,
            logo_250: logo_250,
            view: {
                atTopOfPage: true
            }
        }
    },

// a beforeMount call to add a listener to the window
    beforeMount () {
        window.addEventListener('scroll', this.handleScroll);
    },

    methods: {
        // the function to call when the user scrolls, added as a method
        handleScroll(){
            // when the user scrolls, check the pageYOffset
            if(window.pageYOffset>0){
                // user is scrolled
                if(this.view.atTopOfPage) this.view.atTopOfPage = false
            }else{
                // user is at top of page
                if(!this.view.atTopOfPage) this.view.atTopOfPage = true
            }
        }
    }
}
</script>

<style scoped>
nav {
    z-index: 10
}

nav.scrolled {
    @apply shadow-2xl;
    border-bottom: 0px;
}
</style>
