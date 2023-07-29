<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import SaldoCard from '@/Components/SaldoCard.vue';
import Pengeluaran from '@/Components/PengeluaranCard.vue';
import Pemasukan from '@/Components/Pemasukan.vue';

const tableHeaders = ['Name', 'Email', 'Age'];
const tableData = [
  ['Alfonso Bribiesca', 'alfonso@vexilo.com', '31'],
  ['Saida Redondo', 'saida@gmail.com', '27'],
  // Add more rows as needed
];
</script>

<template>
  <Head title="Dashboard"/>

  <MainLayout>
    <div class="bg-white ml-10">
      <h1 class="text-3xl font-bold pb-4 border-b-2 border-orange-200">
        Dashboard
      </h1>
      <div class="flex flex-wrap justify-between mt-7">
        <SaldoCard/>
        <Pengeluaran/>
        <Pemasukan/>
      </div>

      <h1 class="text-xl mt-7 font-bold pb-4 border-b-2 border-orange-200">
        Transaksi Terbaru
      </h1>

      <!-- Use the DataTable component and pass the headers and data as props -->
      <DataTable :headers="tableHeaders" :data="tableData" />
    </div>
  </MainLayout>
</template>
