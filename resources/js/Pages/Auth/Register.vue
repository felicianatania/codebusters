<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { ref } from 'vue';
import axios from 'axios';

const form = useForm({
    ktpId: '',
    phoneNumber: '',
    username: '',
    email: '',
    password: '',
    password_confirmation: '',
    gender: '',
    birthDate: '',
});
const csrfToken = ref(document.querySelector('meta[name="csrf-token"]').content);
const validateRegister = async () => {
    if (form.password != form.password_confirmation) {
        alert("Konfirmasi password salah!");
        return;
    }

    let gender = 0;
    if (form.gender == "female") {
        gender = 1;
    }

    const response = await axios.post('http://34.101.154.14:8175/hackathon/user/auth/create', {
        ktpId: form.ktpId,
        phoneNumber: form.phoneNumber,
        username: form.username,
        email: form.email,
        loginPassword: form.loginPassword,
        gender: gender,
        birthDate: form.birthDate
    }, { responseType: 'json' });

    if (!response.data.success) { 
        alert(response.data.errMsg) 
        return;
    }

    console.log(response.data)
    window.location.href = '/login';
};

</script>

<template>
    <GuestLayout imageSrc="storage/assets/auth/register.png">
        <Head title="Register" />

        <ApplicationLogo></ApplicationLogo>

        <div class="text-center">
            <h1 class="text-darkorange text-headline font-bold">Halo!</h1>
            <p class="mt-2 text-black text-subheading font-medium">Daftarkan akunmu</p>
        </div>

        <form @submit.prevent="validateRegister" class="w-7/12">
            <input type="hidden" name="_token" :value="csrfToken" />
            <div>
                <InputLabel for="ktpId" value="Nomor KTP" />

                <TextInput
                    id="ktpId"
                    type="text"
                    placeholder="Masukkan NIK sesuai KTP"
                    class="mt-1 block w-full"
                    v-model="form.ktpId"
                    required
                    autofocus
                />

                <InputError class="mt-2" :message="form.errors.ktpId" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    placeholder="Masukkan email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="phoneNumber" value="Nomor Telepon" />

                <TextInput
                    id="phoneNumber"
                    type="number"
                    placeholder="Masukkan nomor telepon"
                    class="mt-1 block w-full"
                    v-model="form.phoneNumber"
                    required
                    autofocus
                />

                <InputError class="mt-2" :message="form.errors.phoneNumber" />
            </div>

            <div class="mt-4">
                <InputLabel for="username" value="Username" />

                <TextInput
                    id="username"
                    type="text"
                    placeholder="Masukkan username"
                    class="mt-1 block w-full"
                    v-model="form.username"
                    required
                    autofocus
                />

                <InputError class="mt-2" :message="form.errors.username" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    placeholder="Masukkan password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Konfirmasi Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    placeholder="Konfirmasi password Anda"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autofocus
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="mt-4 flex gap-5 items-center">
                <InputLabel for="gender" value="Gender" />
                <label class="flex gap-2 items-center text-name text-black font-normal">
                    <input type="radio" name="gender" class="border-darkorange" value="male" v-model="form.gender">
                    Male
                </label>
    
                <label class="flex gap-2 items-center text-name text-black font-normal">
                    <input type="radio" name="gender" class="border-darkorange" value="female" v-model="form.gender">
                    Female
                </label>
            </div>

            <div class="mt-4">
                <InputLabel for="birthDate" value="Tanggal Lahir" />

                <TextInput
                    id="birthDate"
                    type="date"
                    placeholder="Masukkan tanggal lahir"
                    class="mt-1 block w-full"
                    v-model="form.birthDate"
                    required
                    autofocus
                />

                <InputError class="mt-2" :message="form.errors.birthDate" />
            </div>

            <PrimaryButton type="submit" class="w-full mt-10">
                Daftar
            </PrimaryButton>

            <p class="mt-5 text-center text-black text-subname font-normal">
                Sudah punya akun?
                <Link href="/login" class="text-darkorange font-normal hover:font-semibold underline">Masuk</Link>
            </p>
        </form>
    </GuestLayout>
</template>
