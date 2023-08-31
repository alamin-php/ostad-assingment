<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import VueMultiselect from 'vue-multiselect'
import { Head, Link, useForm } from '@inertiajs/vue3';
import { useToast } from "vue-toastification";

const toast = useToast()

defineProps({
    roles: Array,
    permissions: Array
})

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    roles:[],
    permissions:[],
});

const submit = () => {
    form.post(route('users.store'), {
        onFinish: () =>
        {
            toast('User created successful')
            form.reset('password', 'password_confirmation')
        },
    });
};
</script>

<template>
    <Head title="Create new user" />

    <AdminLayout>
        <div class="max-w-7xl mx-auto py-4">
            <div class="flex justify-between">
                <h1>Create New User</h1>
                <Link :href="route('users.index')"
                    class="px-4 py-2 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">Back</Link>
            </div>
            <div class="mt-6 max-w-xl mx-auto bg-white shadow-lg rounded-lg p-6">
                <form @submit.prevent="submit">
                    <div>
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus
                            autocomplete="name" />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="email" value="Email" />
                        <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email"
                            autocomplete="username" />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password" value="Password" />
                        <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password"
                            autocomplete="new-password" />
                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password_confirmation" value="Confirm Password" />
                        <TextInput id="password_confirmation" type="password" class="mt-1 block w-full"
                            v-model="form.password_confirmation" autocomplete="new-password" />
                        <InputError class="mt-2" :message="form.errors.password_confirmation" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="roles" value="Roles" />
                        <VueMultiselect v-model="form.roles" :options="roles" :multiple="true" :close-on-select="true"
                            placeholder="Pick some" label="name" track-by="id" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="permissions" value="Permissions" />
                        <VueMultiselect v-model="form.permissions" :options="permissions" :multiple="true"
                            :close-on-select="true" placeholder="Pick some" label="name" track-by="id" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Create
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AdminLayout></template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
