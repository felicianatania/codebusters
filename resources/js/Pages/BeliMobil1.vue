<script setup>
    import MainLayout from '@/Layouts/MainLayout.vue';
    import TextInput from '@/Components/TextInput.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <MainLayout>
        <h1 class="text-title font-bold"> Beli Mobil </h1>
        <hr class="text-transparent h-[3px] my-5 bg-darkorange bg-opacity-20">
        <div class="box-container flex flex-row place-content-evenly items-center my-12">
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-title w-16 h-16 bg-darkorange flex items-center justify-center text-2xl text-white font-bold"> 1 </h1>
                <h2 class="pt-2 text-center font-medium"> Perencanaan Pembelian Mobil </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-grey flex items-center justify-center text-2xl text-gray font-bold"> 2 </h1>
                <h2 class="pt-2 text-center text-grey"> Strategi Investasi </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-grey flex items-center justify-center text-2xl text-gray font-bold"> 3 </h1>
                <h2 class="pt-2 text-center text-grey"> Ringkasan </h2>
            </div>
        </div>



    <div class="container flex justify-stretch">
        <div>
            <h1 class="pb-8 text-heading font-bold"> Perencanaan Pembelian Mobil </h1>
            <form action="">
            <div class="flex flex-col pb-6">
                <InputLabel for="waktu" value ="Waktu yang dibutuhkan untuk membeli mobil yang diinginkan" />
                <TextInput id="waktu" type="text" class="w-52 mt-4"/>
            </div>
            <div class="flex flex-col pb-6">
                <InputLabel for="harga" value ="Harga mobil yang diinginkan saat ini" />
                <TextInput id="harga" type="text" class="mt-4 appearance-none"/>
            </div>
            <div class="flex flex-col pb-6">
                <InputLabel for="dp" value ="DP yang ingin dibayar (%)" />
                <TextInput id="dp" type="text" class="mt-4"/>
            </div>
            <div class="flex flex-col pb-6">
                <InputLabel for="inflasi" value ="Asumsi inflasi harga kendaraan (%)" />
                <TextInput id="inflasi" type="text" class="mt-4"/>
            </div>
        </form>
        </div>
        <div class="pl-[220px]">
            <img src="../../images/car.png" alt="">
        </div>

    </div>

    <div class="text-darkorange font-semibold flex flex-row pb-20 justify-between">
            <hr class="text-transparent">
            <div class="pt-8">
                <Link href="/beliMobil2"> Selanjutnya > </Link>
            </div>
        </div>

    </MainLayout>
</template>
