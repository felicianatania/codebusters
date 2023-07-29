<script setup>
  import MainLayout from '@/Layouts/MainLayout.vue';
  import PrimaryButton from '@/Components/PrimaryButton.vue';
  import TextInput from '@/Components/TextInput.vue';
</script>

<template>
  <Head title="Memprediksi Pengeluaran"/>

  <MainLayout>
    <div class=" ml-10 mr-2 h-full">
        <h1 class="text-3xl font-bold pb-4 border-b-2 border-orange-200">
            Memprediksi Pengeluaran
        </h1>

        <h5 class="text-base mt-7">
            Dengan menggunakan model prediksi yang canggih, kami dapat memproyeksikan pengeluaran Anda di masa depan berdasarkan prakiraan cuaca. Ini membantu kamu untuk memperkirakan dan mempersiapkan masa depan kamu !
        </h5>

        <h5 class="text-base mt-7">
            Jumlah bulan yang ingin di prediksi
        </h5>

        <div class="flex my-5">
            <TextInput class="mr-2 w-40">
            </TextInput>


            <PrimaryButton class="w-fit px-5">Prediksi</PrimaryButton>
        </div>

        <h1 class="font-semibold text-xl mt-11">Hasil Prediksi</h1>
        <img class="pt-3 pb-5" src="../../images/line-chart-maker.png" alt="">
        <div class="flex items-center pb-20">
            <h5 class="text-sm font-normal">Total pengeluaran: </h5>
            <h5 class="text-xl font-bold ml-3 text-darkorange">Rp Xx.xxx.xxx,xx</h5>
        </div>
    </div>
  </MainLayout>
</template>
