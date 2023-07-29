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
                <h1 class="text-subheading w-10 h-10 border-2 border-grey flex items-center justify-center text-2xl text-gray font-bold"> 1 </h1>
                <h2 class="pt-2 text-center"> Perencanaan Pembelian Mobil </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-subheading w-10 h-10 border-2 border-grey flex items-center justify-center text-2xl text-gray font-bold"> 2 </h1>
                <h2 class="pt-2 text-center"> Strategi Investasi </h2>
            </div>
            <div class="box flex flex-col items-center justify-center w-40">
                <h1 class="text-title w-16 h-16 bg-darkorange flex items-center justify-center text-2xl text-white font-bold"> 3 </h1>
                <h2 class="pt-2 text-center font-medium"> Ringkasan </h2>
            </div>
        </div>

        <div class="container flex space-x-44">
            <div>
                <h1 class="pb-4 text-heading font-bold"> Ringkasan </h1>
                <div class="pb-9">
                    <div class="flex flex-col py-4 bg-yellowtb pl-3 w-[447px]">
                        <h1 class="text-name pb-2 font-semibold"> Total uang yang dibutuhkan sebesar </h1>
                        <h1 class="text-title font-bold text-darkorange"> Rp Xx.xxx.xxx,00 </h1>
                    </div>
                </div>
                <h1 class="pb-4 text-heading font-bold"> Strategi </h1>
                <div class="">
                    <div class="flex flex-col mb-6 py-4 bg-yellowtb pl-3 w-[447px]">
                        <h1 class="text-name pb-2"> Jumlah uang yang dimiliki saat ini </h1>
                        <h1 class="text-subheading font-medium"> Rp Xx.xxx.xxx,00 </h1>
                    </div>
                    <div class="flex flex-col mb-6 py-4 bg-yellowtb pl-3 w-[447px]">
                        <h1 class="text-name pb-2"> Target investasi (per bulan) </h1>
                        <h1 class="text-subheading font-medium"> Rp Xx.xxx.xxx,00 </h1>
                    </div>
                    <div class="flex flex-col mb-6 py-4 bg-yellowtb pl-3 w-[447px]">
                        <h1 class="text-name pb-2"> Return investasi </h1>
                        <h1 class="text-subheading font-medium"> Rp Xx.xxx.xxx,00 </h1>
                    </div>
                    <div class="flex flex-col mb-6 py-4 bg-yellowtb pl-3 w-[447px]">
                        <h1 class="text-name pb-2"> Jumlah periode </h1>
                        <h1 class="text-subheading font-medium"> Rp Xx.xxx.xxx,00 </h1>
                    </div>
                    <div class="flex flex-col mb-6 py-4 bg-yellowtb pl-3 w-[447px]">
                        <h1 class="text-name pb-2"> Bunga floating </h1>
                        <h1 class="text-subheading font-medium"> Rp Xx.xxx.xxx,00 </h1>
                    </div>
                </div>
            </div>

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
                <Link href="/beliMobil2" class="pt-8"> &lt; Sebelumnya </Link>
            </div>
        </div>


    </MainLayout>
</template>
