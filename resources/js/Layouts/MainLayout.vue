<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

import HomeOutline from 'vue-material-design-icons/HomeOutline.vue';
import Dashboard from 'vue-material-design-icons/ViewDashboardOutline.vue';
import Car from 'vue-material-design-icons/CarOutline.vue';
import Predict from 'vue-material-design-icons/RobotOutline.vue';
import Exit from 'vue-material-design-icons/ExittoApp.vue';

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
        <div id="SideNav" class="text-lg fixed h-full bg-yellow-300 xl:w-[260px] w-[80px] md:block hidden bg-yellow">

            <Link href="/">
                <img src="" alt="logo" class="xl:hidden block w-[25px] mt-10 ml-[25px] mb-10 cursor-pointer">
                <img src="" alt="text logo" class="xl:block hidden w-[120px] mt-12 ml-12 mb-10 cursor-pointer">
            </Link>
            <div class="ml-12 mr-12 text-gray-600 font-medium font-poppins">
                <Link href="/">
                    <MenuItem iconString="Dashboard" class="mb-4"/>
                </Link>
                <Link href="/BeliRumah">
                    <MenuItem iconString="Beli Rumah" class="mb-4"/>
                </Link>
                <Link href="/">
                    <MenuItem iconString="Beli Mobil" class="mb-4"/>
                </Link>
                <Link href="/">
                    <MenuItem iconString="Memprediksi Pengeluaran" class="mb-4"/>
                </Link>
            </div>


            <Link href="/">
                <MenuItem iconString="Log out" class="items-center text-gray-600 absolute bottom-10 ml-12 w-full"/>
            </Link>
        </div>

        <div class="flex lg:justify-between bg-yellow-50 h-full w-100% xl:pl-[50px] lg:pl-[100px] overflow-auto">
            <div class="ml-[270px] mr-12 w-[2000px] md:pt-6 mt-6">
                <main>

                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>
