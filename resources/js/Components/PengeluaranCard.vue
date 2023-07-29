<script setup>
import Eye from 'vue-material-design-icons/Eye.vue';
</script>

<template>
    <a href="#" class="block w-[365px] p-6 border border-gray-200 rounded-[4px] dark:border-gray-700 dark:hover:bg-gray-700 h-[170px]"
    style="background: linear-gradient(225deg, #DF0101 0%, #B2012B 100%);
    transition: background 0.3s;">
        <div class="flex flex-col h-full justify-between">
            <div>
                <div class="flex text-white">
                    <div class="flexcoll">
                        <h5 class="mb-0 text-2xl font-semibold tracking-tight text-white dark:text-white">Total Pengeluaran</h5>
                        <h5 class="text-sm font-light tracking-tight text-white dark:text-white">(Dalam 30 hari terakhir)</h5>
                    </div>
                    <Eye class="ml-2" fillColor="#fff" @click="toggleBalance"></Eye>
                </div>

                <div class="flex-grow"></div>
            </div>
            <p v-if="isBalanceVisible" class="text-3xl font-bold text-white">
                Rp 4.590.000,00
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
