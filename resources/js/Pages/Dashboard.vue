<script setup>
  import MainLayout from '@/Layouts/MainLayout.vue';
  import SaldoCard from '@/Components/SaldoCard.vue';
  import Pengeluaran from '@/Components/PengeluaranCard.vue';
  import Pemasukan from '@/Components/Pemasukan.vue';
</script>

<template>
  <Head title="Dashboard"/>

  <MainLayout>
    <div class=" ml-5 h-full">
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

      <table class="w-full table-auto shadow mt-4" style="table-layout: fixed;">
        <thead class="bg-darkorange text-white text-left">
          <tr>
            <th class="px-7 py-3 font-light" style="width: 33.33%;">Tipe</th>
            <th class="px-7 py-3 font-light" style="width: 33.33%;">Tanggal</th>
            <th class="px-7 py-3 font-light" style="width: 33.33%;">Jumlah</th>
          </tr>
        </thead>
        <tbody class="bg-white font-medium">
          <tr>
            <td class="border px-7 py-3" style="width: 33.33%;">Pengeluaran</td>
            <td class="border px-7 py-3" style="width: 33.33%;">Selasa, 21 Juli 2023</td>
            <td class="border px-7 py-3 text-red-500" style="width: 33.33%;">-Rp250.000,00</td>
          </tr>
          <tr>
            <td class="border px-7 py-3" style="width: 33.33%;">Pemasukkan</td>
            <td class="border px-7 py-3" style="width: 33.33%;">Selasa, 21 Juli 2023</td>
            <td class="border px-7 py-3 text-green-500" style="width: 33.33%;">+Rp10.550.000,00</td>
          </tr>

          <tr>
            <td colspan="3" class="text-right py-3 pr-7">
              <a href="#" class="text-darkorange underline">See More</a>
            </td>
          </tr>
        </tbody>
      </table>

    </div>
  </MainLayout>
</template>
