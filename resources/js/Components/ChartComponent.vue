<script setup>
import Chart from 'chart.js/auto';
import { onMounted } from 'vue';

const labels = [
    'Senin',
    'Selasa',
    'Rabu',
    'Kamis',
    'Jumat',
    'Sabtu',
    'Minggu',
];

const data = {
    labels: labels,
    datasets: [{
        label: 'Week 1',
        backgroundColor: '#F77744',
        borderColor: '#FAAD8F',
        data: [258000, 175000, 300000, 250000, 150000, 305400, 154000],
    },
    {
        label: 'Week 2',
        backgroundColor: '#C96037',
        borderColor: '#9B4A29',
        data: [300000, 102000, 289000, 222500, 199000, 258400, 168000],
    }]
};

const config = {
    type: 'line',
    data: data,
    options: {}
};

onMounted(() => {
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
})

</script>

<template>
    <div>
        <canvas id="myChart" width="3" height="1"></canvas>
    </div>



</template>
