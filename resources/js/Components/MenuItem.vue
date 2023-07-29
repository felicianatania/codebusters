<script setup>
import { toRefs } from 'vue';
import { usePage } from '@inertiajs/vue3';

import HomeOutline from 'vue-material-design-icons/HomeOutline.vue';
import Dashboard from 'vue-material-design-icons/ViewDashboardOutline.vue';
import Car from 'vue-material-design-icons/CarOutline.vue';
import Predict from 'vue-material-design-icons/RobotOutline.vue';
import Exit from 'vue-material-design-icons/ExittoApp.vue';


const props = defineProps({ iconString: String})
const {iconString} = toRefs(props)

// const user = usePage().props.auth.user

let icon = null

if(iconString.value === 'Beli Rumah') icon = HomeOutline
if(iconString.value === 'Dashboard') icon = Dashboard
if(iconString.value === 'Beli Mobil') icon = Car
if(iconString.value === 'Memprediksi Pengeluaran') icon = Predict
if(iconString.value === 'Log out') icon = Exit

</script>

<template>
    <div class="w-[200px] xl:inline-block py-2 px-3 rounded-[4px] hover:bg-darkorange transition duration-300 ease-in-out cursor-pointer group hover:text-white">
        <div class="flex items-center">
            <component :is="icon" :size="30" :class="{'fill-white': isHovered}" />
            <span class="xl:block hidden font-extrabold text-[18px] pl-2 mt-0.5">
                {{ iconString }}
            </span>
        </div>
    </div>
</template>

<style>
    .fill-white {
        fill: #FFFFFF;
    }
</style>
