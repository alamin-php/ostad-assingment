<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    permission:{
        type: Object,
        required: true
    }
});

const form =  useForm({
    name: props.permission.name
})
</script>

<template>
    <Head title="Update permission" />

    <AdminLayout>
        <div class="max-w-7xl mx-auto py-4">
            <div class="flex justify-between">
                <h1>Update Permission</h1>
                <Link :href="route('permissions.index')"
                    class="px-4 py-2 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">Back</Link>

            </div>
            <div class="mt-6 max-w-xl mx-auto bg-white shadow-lg rounded-lg p-6">
                <form @submit.prevent="form.put(route('permissions.update', permission.id))">
                    <div>
                        <InputLabel for="name" value="Name" />

                        <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus
                            autocomplete="name" />

                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Update
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AdminLayout>
</template>
