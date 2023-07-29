<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

import MenuItem from '@/Components/MenuItem.vue'
// import BeliRumah from '@/Pages/BeliRumah.vue';

// export default{
//     components:{
//         'beli-rumah': BeliRumah,
//     },
// };

</script>

<template>
    <div id="MainLayout" class="w-full h-screen">
        <div id="SideNav" class="text-grey font-medium text-heading fixed w-1/5 h-full bg-yellow">
            <Link href="/">
                <img src="" alt="logo" class="xl:hidden block w-[25px] mt-10 ml-[25px] mb-10 cursor-pointer">
                <img src="" alt="text logo" class="xl:block hidden w-[120px] mt-12 ml-12 mb-10 cursor-pointer">
            </Link>
            <div class="m-12">
                <Link href="/dashboard">
                    <MenuItem iconString="Dashboard" class="mb-5"></MenuItem>
                </Link>
                <Link href="/beliRumah1">
                    <MenuItem iconString="Beli Rumah" class="mb-4"/>
                </Link>
                <Link href="/beliMobil1">
                    <MenuItem iconString="Beli Mobil" class="mb-5"></MenuItem>
                </Link>
                <Link href="/memprediksi">
                    <MenuItem iconString="Memprediksi Pengeluaran" class="mb-5"></MenuItem>
                </Link>
            </div>
            <Link href="/">
                <MenuItem iconString="Log out" class="items-center absolute bottom-10 ml-12"></MenuItem>
            </Link>
        </div>

        <div class="flex bg-lightyellow h-full w-100% overflow-auto">
            <div class="ml-[20%] px-12 mt-12">
                <main>
                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>
