<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import VueMultiselect from 'vue-multiselect'
import { useToast } from "vue-toastification";

const toast = useToast()

import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';
import TableDataCell from '@/Components/TableDataCell.vue';
import { onMounted, watch } from 'vue';

const props = defineProps({
    user: {
        type: Object,
        required: true
    },
    roles: Array,
    permissions: Array
});

const form = useForm({
    name: props.user?.name,
    email: props.user?.email,
    roles: [],
    permissions: []
});

const submit = () => {
    form.put(route('users.update', props.user?.id), {
        onFinish: () =>
        {
            toast('User updated successful')
        },
    });
};

onMounted(() => {
    form.permissions = props.user?.permissions;
    form.roles = props.user?.roles;
});

watch(
    () => props.user,
    () => {
        form.permissions = props.user?.permissions,
            form.roles = props.user?.roles
    }
);
</script>

<template>
    <Head title="Update user" />

    <AdminLayout>
        <div class="max-w-7xl mx-auto py-4">
            <div class="flex justify-between">
                <h1>User</h1>
                <Link :href="route('users.index')"
                    class="px-4 py-2 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">Back</Link>
            </div>
            <div class="mt-6 max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-xl pb-4 text-gray-600 font-medium lg:block">Update User</h1>
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
                            Update
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-6 max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-xl pb-4 text-gray-600 font-medium lg:block">Roles</h1>
            <Table>
                <template #header>
                    <TableRow>
                        <TableHeaderCell>ID</TableHeaderCell>
                        <TableHeaderCell>Name</TableHeaderCell>
                        <TableHeaderCell>Action</TableHeaderCell>
                    </TableRow>
                </template>
                <template #default>
                    <TableRow v-for="userRole in user.roles" :key="userRole.id" class="border-b">
                        <TableDataCell>{{ userRole.id }}</TableDataCell>
                        <TableDataCell>{{ userRole.name }}</TableDataCell>
                        <TableDataCell class="space-x-4">
                            <Link :href="route('users.roles.destroy',[user.id, userRole.id])" method="DELETE" as="button" preserveScroll
                                class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent transition rounded-full">
                            Revoke</Link>
                        </TableDataCell>
                    </TableRow>
                </template>
            </Table>
        </div>
        <div class="mt-6 max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-xl pb-4 text-gray-600 font-medium lg:block">Permissions</h1>
            <Table>
                <template #header>
                    <TableRow>
                        <TableHeaderCell>ID</TableHeaderCell>
                        <TableHeaderCell>Name</TableHeaderCell>
                        <TableHeaderCell>Action</TableHeaderCell>
                    </TableRow>
                </template>
                <template #default>
                    <TableRow v-for="rolePermission in user.permissions" :key="rolePermission.id" class="border-b">
                        <TableDataCell>{{ rolePermission.id }}</TableDataCell>
                        <TableDataCell>{{ rolePermission.name }}</TableDataCell>
                        <TableDataCell class="space-x-4">
                            <Link :href="route('users.permissions.destroy', [user.id, rolePermission.id])" method="DELETE"
                                as="button"
                                class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent transition rounded-full" preserveScroll>
                            Revoke</Link>
                        </TableDataCell>
                    </TableRow>
                </template>
            </Table>
        </div>
    </AdminLayout>
</template>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
