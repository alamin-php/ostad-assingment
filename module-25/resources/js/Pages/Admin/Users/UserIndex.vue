<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';
import TableDataCell from '@/Components/TableDataCell.vue';

import Modal from '@/Components/Modal.vue'
import DangerButton from '@/Components/DangerButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'

import { useToast } from "vue-toastification";

const toast = useToast()

defineProps(['users']);
const form = useForm({})

const showConfirmDeleteUserModal = ref(false);

const confirmDeleteUser = () => {
    showConfirmDeleteUserModal.value = true
}

const closeModal = () => {
    showConfirmDeleteUserModal.value = false
}

const deleteUser = (id) => {
    form.delete(route('users.destroy', id), {
        onSuccess: () =>
        {
            closeModal()
            toast('User deleted successful')
        }
    });
}
</script>

<template>
    <Head title="User" />

    <AdminLayout>
        <div class="max-w-7xl mx-auto py-4">
            <div class="flex justify-between">
                <h1>Users Index Page</h1>
                <Link :href="route('users.create')"
                    class="px-4 py-2 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">New User</Link>
            </div>
            <div class="mt-6">
                <Table>
                    <template #header>
                        <TableRow>
                            <TableHeaderCell>ID</TableHeaderCell>
                            <TableHeaderCell>Name</TableHeaderCell>
                            <TableHeaderCell>Email</TableHeaderCell>
                            <TableHeaderCell>Action</TableHeaderCell>
                        </TableRow>
                    </template>
                    <template #default>
                        <TableRow v-for="user in users" :key="user.id" class="border-b">
                            <TableDataCell>{{ user.id }}</TableDataCell>
                            <TableDataCell>{{ user.name }}</TableDataCell>
                            <TableDataCell>{{ user.email }}</TableDataCell>
                            <TableDataCell class="space-x-4">
                                <Link :href="route('users.edit', user.id)"
                                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent transition rounded-full">
                                Edit</Link>
                                <button @click="confirmDeleteUser"
                                    class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent transition rounded-full">Delete</button>
                                <Modal :show="showConfirmDeleteUserModal" @close="closeModal">
                                    <div class="p-6">
                                        <h2 class="text-lg font-semibold text-slate-800">Are you sure to delete this user?
                                        </h2>
                                        <div class="mt-6 flex space-x-4">
                                            <DangerButton @click="deleteUser(user.id)">Delete</DangerButton>
                                            <SecondaryButton @click="closeModal">Cancel</SecondaryButton>
                                        </div>
                                    </div>
                                </Modal>
                            </TableDataCell>
                        </TableRow>
                    </template>
                </Table>
            </div>
    </div>
</AdminLayout></template>
