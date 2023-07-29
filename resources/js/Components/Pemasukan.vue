<script setup>
import Eye from 'vue-material-design-icons/Eye.vue';
</script>

<template>
    <a href="#" class="block w-[365px] p-6 border border-gray-200 rounded-[4px] dark:border-gray-700 dark:hover:bg-gray-700 h-[170px]"
    style="background: linear-gradient(225deg, #0AD212 0%, #00940F 100%);
    transition: background 0.3s;">
        <div class="flex flex-col h-full justify-between">
            <div>
                <div class="flex text-white">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white dark:text-white">Rata-rata Pemasukan Bulanan </h5>
                    <Eye class="ml-2" fillColor="#fff" @click="toggleBalance"></Eye>
                </div>

                <div class="flex-grow"></div>
            </div>
            <p v-if="isBalanceVisible" class="text-3xl font-bold text-white">
                Rp 7.600.000,00
            </p>
            <p v-else class="text-3xl font-bold text-white">
                xxxxxxxxxx
            </p>
        </div>
    </a>
</template>

<script>
    export default {
        data() {
            return {
                isBalanceVisible: true
            };
        },
        methods: {
            toggleBalance() {
                this.isBalanceVisible = !this.isBalanceVisible;
            }
        }
    };
</script>
