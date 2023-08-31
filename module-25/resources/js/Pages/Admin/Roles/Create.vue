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
    name: "",
    permissions: []
})
</script>

<template>
    <Head title="Create new role" />

    <AdminLayout>
        <div class="max-w-7xl mx-auto py-4">
            <div class="flex justify-between">
                <h1>Create New Role</h1>
                <Link :href="route('roles.index')"
                    class="px-4 py-2 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">Back</Link>

            </div>
            <div class="mt-6 max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-xl pb-4 text-gray-600 font-medium lg:block">Create Role</h1>
                <form @submit.prevent="form.post(route('roles.store'))">
                    <div>
                        <InputLabel for="name" value="Name" />
                        <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus
                            autocomplete="name" />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                    <div class="mt-4">
                        <InputLabel for="permissions" value="Permissions" />
                        <VueMultiselect v-model="form.permissions" :options="permissions" :multiple="true" :close-on-select="true"
                            placeholder="Pick some" label="name" track-by="id" />
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
