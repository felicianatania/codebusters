<script setup>
    import MainLayout from '@/Layouts/MainLayout.vue';
    import TextInput from '@/Components/TextInput.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import { Link } from '@inertiajs/vue3';
    import rumah from '../house';
</script>

<template>
    <Head title="Beli Rumah" />

    <MainLayout>
        <h1 class="text-title font-bold"> Beli Rumah </h1>
        <hr class="text-transparent h-[3px] my-5 bg-darkorange bg-opacity-20">
        <div class="box-container flex flex-row place-content-evenly items-center my-12">
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-grey flex items-center justify-center text-2xl text-grey font-bold"> 1 </h1>
                <h2 class="pt-2 text-center"> Perencanaan Pembelian Rumah </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-title w-16 h-16 bg-darkorange flex items-center justify-center text-2xl text-white font-bold"> 2 </h1>
                <h2 class="pt-2 text-center font-medium"> Detail KPR </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-grey flex items-center justify-center text-2xl text-grey font-bold"> 3 </h1>
                <h2 class="pt-2 text-center"> Ringkasan </h2>
            </div>
        </div>

    <h1 class="pb-8 text-heading font-bold">Detail KPR </h1>

    <div class="container flex justify-stretch">
        <div class="flex">
            <!-- Form pertama -->
            <form action="" class="mr-7">
            <!-- input Waktu kpr -->
            <div class="flex flex-col pb-6">
                <InputLabel for="waktuKPR" value ="Jangka Waktu KPR" />
                <TextInput v-model="rumah.waktuKPR" id="waktuKPR" type="text" class="w-52 mt-4"/>
            </div>
            <!-- input Periode suku bunga fix -->
            <div class="flex flex-col pb-6">
                <InputLabel for="periodeBungaFix" value ="Periode Suku Bunga Fix" />
                <TextInput v-model="rumah.periodeBungaFix" id="periodeBungaFix" type="text" class="w-52 mt-4 appearance-none"/>
            </div>
        </form>

        <!-- Form kedua -->
        <form action="">
            <!-- input suku bunga fix -->
            <div class="flex flex-col pb-6">
                <InputLabel for="bungaFix" value ="Suku Bunga Fix (%)" />
                <TextInput v-model="rumah.bungaFix" id="bungaFix" type="text" class="w-52 mt-4"/>
            </div>
            <!-- Input Suku Bunga Floating -->
            <div class="flex flex-col pb-6">
                <InputLabel for="bungaFloating" value ="Suku Bunga Floating (%)" />
                <TextInput v-model="rumah.bungaFloating" id="bungaFloating" type="text" class="w-52 mt-4"/>
            </div>
        </form>
        </div>
        <div class="ml-40" >
            <img src="../../images/house2.png" class="w-[450px] h-[365px]" alt="">
        </div>
    </div>

    <div class="text-darkorange font-semibold flex flex-row pt-8 justify-between">
        <div>
            <Link href="/beliRumah1"> &lt; Sebelumnya </Link>
        </div>
        <div>
            <Link href="/beliRumah3"> Selanjutnya > </Link>
        </div>
    </div>

    </MainLayout>
</template>
