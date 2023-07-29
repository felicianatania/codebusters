import { reactive } from 'vue';

// Buat instance reactive untuk menyimpan data inputan
const rumah = reactive({
    harga: '',
    dp: '',
    penghasilan: '',
    pinjaman: '',
    waktuKPR: '',
    periodeBungaFix: '',
    bungaFix: '',
    bungaFloating: '',
});

export default rumah;
