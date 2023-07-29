<script setup>
import Eye from 'vue-material-design-icons/Eye.vue';
</script>

<template>
    <a href="#" class="block w-[32%] p-6 border border-gray-200 rounded-[4px] h-[170px]"
    style="background: linear-gradient(225deg, #FBD70B 0%, #F77744 100%);
    transition: background 0.3s;">
        <div class="flex flex-col h-full justify-between">
            <div>
                <div class="flex text-white">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-white dark:text-white">Saldo Akun</h5>
                    <Eye class="ml-2" fillColor="#fff" @click="toggleBalance"></Eye>
                </div>

                <div class="flex-grow"></div>
            </div>
            <p v-if="isBalanceVisible" class="text-3xl font-bold text-white">
                Rp53.497.563,21
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
