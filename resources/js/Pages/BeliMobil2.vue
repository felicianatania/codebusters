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
                <h1 class="text-subheading w-10 h-10 border-2 border-gray flex items-center justify-center text-2xl text-gray font-bold"> 1 </h1>
                <h2 class="pt-2 text-center"> Perencanaan Pembelian Mobil </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-title w-16 h-16 bg-darkorange flex items-center justify-center text-2xl text-white font-bold"> 2 </h1>
                <h2 class="pt-2 text-center font-medium"> Strategi Investasi </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-gray flex items-center justify-center text-2xl text-gray font-bold"> 3 </h1>
                <h2 class="pt-2 text-center"> Ringkasan </h2>
            </div>
        </div>

        <h1 class="pb-8 text-heading font-bold"> Strategi Investasi </h1>

        <div class="container flex space-x-44">
            <form action="">
                <div class="flex flex-col pb-6">
                    <InputLabel for="waktu" value ="Uang yang dimiliki saat ini untuk beli kendaraan yang diinginkan" />
                    <TextInput id="waktu" type="text" class="w-52 mt-4"/>
                </div>
                <div class="flex flex-col pb-6">
                    <InputLabel for="harga" value ="Target investasi (per bulan)" />
                    <TextInput id="harga" type="text" class="mt-4 appearance-none"/>
                </div>
                <div class="flex flex-col pb-6">
                    <InputLabel for="dp" value ="Return dari instrumen investasi yang dipilih (% / tahun)" />
                    <TextInput id="dp" type="text" class="mt-4"/>
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
        <div class="text-darkorange font-semibold flex flex-row pt-8 pb-20 justify-between">
            <div>
                <Link href="/beliMobil1" class="pt-8"> &lt; Sebelumnya </Link>
            </div>
            <div>
                <Link href="/beliMobil3" class="pt-8"> Selanjutnya > </Link>
            </div>
        </div>


    </MainLayout>
</template>
