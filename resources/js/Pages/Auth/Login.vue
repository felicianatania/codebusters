<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import axios from 'axios';

const form = useForm({
    username: '',
    password: '',
});
const csrfToken = ref(document.querySelector('meta[name="csrf-token"]').content);
const loginEndpoint = ref('/login');
const validateLogin = async () => {
    const response = await axios.post('http://34.101.154.14:8175/hackathon/user/auth/token', {
        username: form.username,
        loginPassword: form.password,
    }, { responseType: 'json' });

    if (!response.data.success) { 
        alert(response.data.errMsg) 
        return;
    }

    const token = response.data.data.accessToken;
    await axios.post('/login', { token });
    // console.log(token);
    // localStorage.setItem('accessToken', token);
    // window.location.href = '/dashboard';
};

</script>

<template>
    <GuestLayout imageSrc="storage/assets/auth/login.png">
        <Head title="Log In" />

        <ApplicationLogo class="w-10 y-10"></ApplicationLogo>

        <div class="text-center">
            <h1 class="text-darkorange text-headline font-bold">Selamat Datang!</h1>
            <p class="mt-2 text-black text-subheading font-medium">Masuk ke akunmu</p>
        </div>

        <form @submit.prevent="validateLogin" class="w-7/12">
            <input type="hidden" name="_token" :value="csrfToken" />
            <div>
                <InputLabel for="username" value="Username" />

                <TextInput
                    id="username"
                    type="text"
                    placeholder="Masukkan username"
                    class="mt-1 block w-full"
                    v-model="form.username"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.username" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    placeholder="Masukkan pasword"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <PrimaryButton type="submit" class="w-full mt-10">
                Masuk
            </PrimaryButton>

            <p class="mt-5 text-center text-black text-subname font-normal">
                Belum punya akun?
                <Link href="/register" class="text-darkorange font-normal hover:font-semibold underline">Daftar</Link>
            </p>
        </form>
    </GuestLayout>
</template>
