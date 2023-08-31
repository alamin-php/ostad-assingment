<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

import VueMultiselect from 'vue-multiselect'

import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';
import TableDataCell from '@/Components/TableDataCell.vue';
import { onMounted } from 'vue';

defineProps({
    permissions: Array
});

const form =  useForm({
    title: "",
})
</script>

<template>
    <Head title="Create new post" />

    <AdminLayout>
        <div class="max-w-7xl mx-auto py-4">
            <div class="flex justify-between">
                <h1>Create New Post</h1>
                <Link :href="route('posts.index')"
                    class="px-4 py-2 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">Back</Link>

            </div>
            <div class="mt-6 max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-xl pb-4 text-gray-600 font-medium lg:block">Create Post</h1>
                <form @submit.prevent="form.post(route('posts.store'))">
                    <div>
                        <InputLabel for="title" value="Title" />
                        <TextInput id="title" type="text" class="mt-1 block w-full" v-model="form.title" autofocus
                            autocomplete="title" />
                        <InputError class="mt-2" :message="form.errors.title" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Create
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AdminLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
