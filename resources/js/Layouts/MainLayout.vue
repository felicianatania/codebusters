<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

import HomeOutline from 'vue-material-design-icons/HomeOutline.vue';
import Dashboard from 'vue-material-design-icons/ViewDashboardOutline.vue';
import Car from 'vue-material-design-icons/CarOutline.vue';
import Predict from 'vue-material-design-icons/RobotOutline.vue';
import Exit from 'vue-material-design-icons/ExittoApp.vue';


</script>

<template>
    <div id="MainLayout" class="w-full h-screen">
        <div id="SideNav" class="text-lg fixed h-full bg-yellow-300 xl:w-[260px] w-[80px] md:block hidden bg-yellow">

            <Link href="/">
                <img src="" alt="logo" class="xl:hidden block w-[25px] mt-10 ml-[25px] mb-10 cursor-pointer">
                <img src="" alt="text logo" class="xl:block hidden w-[120px] mt-12 ml-12 mb-10 cursor-pointer">
            </Link>
            <div class="ml-12 text-gray-600 font-medium font-poppins">
                <div class="flex items-center mb-7">
                    <Dashboard fillColor="#555555" :size="30" class="cursor-pointer" />
                    <h1 class="ml-4">Dashboard</h1>
                </div>
                <div class="flex items-center mb-7">
                    <HomeOutline fillColor="#555555" :size="30" class="cursor-pointer" />
                    <h1 class="ml-4">Beli Rumah</h1>
                </div>
                <div class="flex items-center mb-7">
                    <Car fillColor="#555555" :size="30" class="cursor-pointer" />
                    <h1 class="ml-4">Beli Mobil</h1>
                </div>
                <div class="flex items-center w-10">
                    <Predict fillColor="#555555" :size="30" class="cursor-pointer" />
                    <h1 class="ml-4">Memprediksi Pengeluaran</h1>
                </div>
            </div>


            <div class="flex items-center absolute bottom-10 ml-12 w-full">
                <Exit fillColor="#555555" :size="30" class="cursor-pointer" />
                <h1 class="ml-4 text-gray-600 font-medium">Log out</h1>
            </div>
        </div>

        <div class="flex lg:justify-between bg-white h-full w-[100%-280px] xl:pl-[50px] lg:pl-[100px] overflow-auto">
            <div
                class="mx-auto md:pt-6 mt-6"
                :class="$page.url === '/' ? 'lg:w-8/12 w-full' : 'max-w-[1200px]'"
            >
                <main>
                    <slot></slot>
                </main>
            </div>
        </div>
    </div>
</template>
