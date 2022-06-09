<template>
   <div class="bg-red-400">
       <nav
           :class="{ 'scrolled shadow-md': !view.atTopOfPage }"
           class="fixed flex w-full bg-white items-center justify-between flex-wrap px-5 py-2 md:px-48 m-auto top-0 animated">

           <img :src="logo_bg" alt="" class="w-1/6 md:w-1/12">
           <h1>hi</h1>
       </nav>


   </div>
</template>

<script>
import logo_bg from "/img/img.png";

export default {
    name: "Navbar",
    data () {
        return {
            logo_bg: logo_bg,
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
