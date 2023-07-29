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
                <h1 class="text-subheading w-10 h-10 border-2 border-grey flex items-center justify-center text-2xl text-grey font-bold"> 1 </h1>
                <h2 class="pt-2 text-center"> Perencanaan Pembelian Rumah </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-grey flex items-center justify-center text-2xl text-grey font-bold"> 2 </h1>
                <h2 class="pt-2 text-center"> Detail KPR </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-title w-16 h-16 bg-darkorange flex items-center justify-center text-2xl text-white font-bold"> 3 </h1>
                <h2 class="pt-2 text-center font-medium"> Ringkasan </h2>
            </div>
        </div>

    <h1 class="pb-8 text-heading font-bold"> Ringkasan </h1>

    <div class="container flex space-x-44">
        <div class="w-1/3 mb-10">
            <div class="bg-darkyellow p-4">
                <div>Total bunga KPR yang harus kamu bayarkan adalah</div>
                <div class="text-title font-bold text-darkorange">Rp Xx.xxx.xxx,00</div>
                <div>Setara dengan <span class="text-title font-bold text-darkorange">X.X%</span> dari pokok pinjamanmu.</div>
            </div>
            <div class="bg-darkyellow mt-7 p-4">
                <div>Cicilan KPRmu dalam rentang </div>
                <div class="text-title font-bold text-darkorange">Rp Xx,xxx,xxx-Xx,xxx,xxx</div>
                <div>dan ini setara dengan <span class="text-title font-bold text-darkorange">x-y%</span> dari penghasilan bulananmu.</div>
            </div>
            <div class="bg-darkyellow mt-7 p-4">
                <div>Rasio ini sudah <span class="text-title font-bold text-darkorange">berbahaya,</span> karena berpotensi mengganggu cash flow mu di masa depan.</div>
            </div>
        </div>

        <img class="w-[500px] h-[500px]" src="../../images/no.png" alt="">
    </div>

    <h1 class="pb-8 text-heading font-bold"> Analisa </h1>

    <div class="container flex justify-between w-50">
        <div class="w-1/3">
            <div class="bg-darkyellow p-4 mb-7">
                <div>Pokok pinjaman</div>
                <div class="font-semibold">Rp xx.xxx.xxx,00</div>
            </div>
            <div class="bg-darkyellow p-4">
                <div>Total bunga periode fix</div>
                <div class="font-semibold">Rp xx.xxx.xxx,00</div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="bg-darkyellow p-4 mb-7">
                <div>Jumlah periode</div>
                <div class="font-semibold">Rp xx.xxx.xxx,00</div>
            </div>
            <div class="bg-darkyellow p-4">
                <div>Bunga floating</div>
                <div class="font-semibold">Rp xx.xxx.xxx,00</div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="bg-darkyellow p-4 mb-7">
                <div>Bunga fix</div>
                <div class="font-semibold">Rp xx.xxx.xxx,00</div>
            </div>
            <div class="bg-darkyellow p-4">
                <div>Total bunga periode floating</div>
                <div class="font-semibold">Rp xx.xxx.xxx,00</div>
            </div>
        </div>
    </div>

    <div class="text-darkorange font-semibold flex flex-row pt-8 pb-20 justify-between">
        <div class="pt-8">
            <Link href="/beliRumah2"> &lt; Sebelumnya </Link>
        </div>
    </div>

    </MainLayout>
</template>
