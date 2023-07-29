<script setup>
    import MainLayout from '@/Layouts/MainLayout.vue';
    import TextInput from '@/Components/TextInput.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Beli Rumah" />

    <MainLayout>
        <h1 class="text-title font-bold"> Beli Rumah </h1>
        <hr class="text-transparent h-[3px] my-5 bg-darkorange bg-opacity-20">
        <div class="box-container flex flex-row place-content-evenly items-center my-12">
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-title w-16 h-16 bg-darkorange flex items-center justify-center text-2xl text-white font-bold"> 1 </h1>
                <h2 class="pt-2 text-center font-medium"> Perencanaan Pembelian Rumah </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-gray flex items-center justify-center text-2xl text-gray font-bold"> 2 </h1>
                <h2 class="pt-2 text-center"> Detail KPR </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-gray flex items-center justify-center text-2xl text-gray font-bold"> 3 </h1>
                <h2 class="pt-2 text-center"> Ringkasan </h2>
            </div>
        </div>

    <h1 class="pb-8 text-heading font-bold"> Perencanaan Pembelian Rumah (Simulasi KPR)</h1>

    <div class="container flex space-x-44">
        <form action="">
            <div class="flex flex-col pb-6">
                <InputLabel for="harga" value ="Harga rumah yang ingin dibeli saat ini" />
                <TextInput id="harga" type="text" class="mt-4 appearance-none"/>
            </div>
            <div class="flex flex-col pb-6">
                <InputLabel for="dp" value ="DP yang ingin dibayar (%)" />
                <TextInput id="dp" type="text" class="mt-4"/>
            </div>
            <div class="flex flex-col pb-6">
                <InputLabel for="penghasilan" value ="Penghasilan per Bulan" />
                <TextInput id="penghasilan" type="text" class="mt-4"/>
            </div>
            <div class="flex flex-col pb-6">
                <InputLabel for="pinjaman" value ="Jumlah Pinjaman Pokok" />
                <TextInput id="pinjaman" type="text" class="mt-4"/>
            </div>
        </form>
        <form action="">
            <div class="flex flex-col pb-8">
                <InputLabel for="waktu" value ="Waktu yang dibutuhkan untuk membeli mobil yang diinginkan" />
                <TextInput id="waktu" type="number"/>
            </div>
            <div class="flex flex-col pb-8">
                <InputLabel for="harga" value ="Harga mobil yang diinginkan saat ini" />
                <TextInput id="harga" type="number"/>
            </div>
            <div class="flex flex-col pb-8">
                <InputLabel for="dp" value ="DP yang ingin dibayar (%)" />
                <TextInput id="dp" type="number"/>
            </div>
            <div class="flex flex-col pb-8">
                <InputLabel for="inflasi" value ="Asumsi inflasi harga kendaraan (%)" />
                <TextInput id="inflasi" type="number"/>
            </div>
        </form>
    </div>

    <Link href="/beliRumah2" class="text-darkorange font-semibold"> Selanjutnya > </Link>

    </MainLayout>
</template>
