<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

import MenuItem from '@/Components/MenuItem.vue'

</script>

<template>
    <div id="MainLayout" class="w-full h-screen">
        <div id="SideNav" class="text-grey font-medium text-heading fixed w-1/5 h-full bg-yellow">
            <Link href="/">
                <img src="" alt="logo" class="xl:hidden block w-[25px] mt-10 ml-[25px] mb-10 cursor-pointer">
                <img src="" alt="text logo" class="xl:block hidden w-[120px] mt-12 ml-12 mb-10 cursor-pointer">
            </Link>
            <div class="m-12">
                <Link href="/">
                    <MenuItem iconString="Dashboard" class="mb-5"></MenuItem>
                </Link>
                <Link href="/">
                    <MenuItem iconString="Beli Rumah" class="mb-5"></MenuItem>
                </Link>
                <Link href="/">
                    <MenuItem iconString="Beli Mobil" class="mb-5"></MenuItem>
                </Link>
                <Link href="/">
                    <MenuItem iconString="Memprediksi Pengeluaran" class="mb-5"></MenuItem>
                </Link>
            </div>
            <Link href="/">
                <MenuItem iconString="Log out" class="items-center absolute bottom-10 ml-12"></MenuItem>
            </Link>
        </div>

        <div class="flex lg:justify-between bg-lightyellow h-full w-100% xl:pl-[50px] lg:pl-[100px] overflow-auto">
            <div class="ml-[270px] mr-12 w-[2000px] md:pt-6 mt-6">
                <main>
                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>
