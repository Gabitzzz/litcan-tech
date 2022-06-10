<template>
   <div class="bg-red-400">
       <nav
           :class="{ 'scrolled shadow-md': !view.atTopOfPage }"
           class="fixed flex w-full bg-white items-center justify-between flex-wrap px-5 py-2 md:px-48 m-auto top-0 animated">

<!--           <img :src="logo_bg" alt="" class="w-1/6 md:w-1/12 hidden md:block">-->
           <img :src="logo_250" alt="" class="w-1/6 md:w-1/12">
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

       </nav>


   </div>
</template>

<script>
import logo_bg from "/img/logo_bg.png";
import logo_phone from "/img/logo/logo_phone.png";
import logo_250 from "/img/logo/logo_250.png";

export default {
    name: "Navbar",
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
