<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    username: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
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

        <form @submit.prevent="submit" class="w-7/12">
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
                    password="Masukkan pasword"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <PrimaryButton class="mt-10" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Masuk
            </PrimaryButton>

            <p class="mt-5 text-center text-black text-subname font-normal">
                Belum punya akun?
                <Link href="/register" class="text-darkorange font-normal hover:font-semibold underline">Daftar</Link>
            </p>
        </form>
    </GuestLayout>
</template>
