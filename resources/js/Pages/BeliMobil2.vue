<script setup>
    import MainLayout from '@/Layouts/MainLayout.vue';
    import TextInput from '@/Components/TextInput.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import { Link } from '@inertiajs/vue3';
    import mobil from '../mobil';
</script>

<template>
    <Head title="Dashboard" />

    <MainLayout>
        <h1 class="text-title font-bold"> Beli Mobil </h1>
        <hr class="text-transparent h-[3px] my-5 bg-darkorange bg-opacity-20">
        <div class="box-container flex flex-row place-content-evenly items-center my-12">
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-grey flex items-center justify-center text-2xl text-grey font-bold"> 1 </h1>
                <h2 class="pt-2 text-center text-grey"> Perencanaan Pembelian Mobil </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-title w-16 h-16 bg-darkorange flex items-center justify-center text-2xl text-white font-bold"> 2 </h1>
                <h2 class="pt-2 text-center font-medium"> Strategi Investasi </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-grey flex items-center justify-center text-2xl text-grey font-bold"> 3 </h1>
                <h2 class="pt-2 text-center text-grey"> Ringkasan </h2>
            </div>
        </div>



        <div class="container flex justify-stretch">
            <div>
                <h1 class="pb-8 text-heading font-bold"> Strategi Investasi </h1>
                <form action="">
                    <div class="flex flex-col pb-6">
                        <InputLabel for="uang" value ="Uang yang dimiliki saat ini untuk beli kendaraan yang diinginkan" />
                        <TextInput v-model="mobil.uang" id="uang" type="text" class="w-52 mt-4"/>
                    </div>
                    <div class="flex flex-col pb-6">
                        <InputLabel for="target" value ="Target investasi (per bulan)" />
                        <TextInput v-model="mobil.target" id="target" type="text" class="mt-4 appearance-none"/>
                    </div>
                    <div class="flex flex-col pb-6">
                        <InputLabel for="instrumen" value ="Return dari instrumen investasi yang dipilih (% / tahun)" />
                        <TextInput v-model="mobil.instrumen" id="instrumen" type="text" class="mt-4"/>
                    </div>
                </form>
            </div>
            <div class="pl-[240px]">
                <img src="../../images/invest.png" class="w-[400px] h-[400px]" alt="">
            </div>

        </div>
        <div class="text-darkorange font-semibold flex flex-row pt-8 pb-16 justify-between">
            <div>
                <Link href="/beliMobil1"> &lt; Sebelumnya </Link>
            </div>
            <div>
                <Link href="/beliMobil3"> Selanjutnya > </Link>
            </div>
        </div>


    </MainLayout>
</template>
