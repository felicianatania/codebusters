import { reactive } from 'vue';

// Buat instance reactive untuk menyimpan data inputan
const mobil = reactive({
    waktu: '',
    harga: '',
    dp: '',
    inflasi: '',
    uang: '',
    target: '',
    instrumen: '',
});

export default mobil;
