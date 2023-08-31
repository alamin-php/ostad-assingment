<script setup>
import { ref } from 'vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { usePermission } from '@/Composables/Permissions'

import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';
import TableDataCell from '@/Components/TableDataCell.vue';

import Modal from '@/Components/Modal.vue'
import DangerButton from '@/Components/DangerButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'

defineProps(['leaves']);
const form = useForm({})

const showConfirmDeleteLeaveModal = ref(false);
const { hasPermission } = usePermission();

const confirmDeleteLeave = () => {
    showConfirmDeleteLeaveModal.value = true
}

const closeModal = () => {
    showConfirmDeleteLeaveModal.value = false
}

const deleteLeave = (id) => {
    form.delete(route('leaves.destroy', id), {
        onSuccess: () => closeModal()
    });
}
</script>

<template>
    <Head title="Leaves" />

    <AdminLayout>
        <div class="max-w-7xl mx-auto py-4">
            <div class="flex justify-between">
                <h1>Leaves Index Page</h1>
                <template v-if="hasPermission('create leave')">
                    <Link :href="route('leaves.create')" class="px-4 py-2 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">New Leave</Link>
                </template>
            </div>
            <div class="mt-6">
                <Table>
                    <template #header>
                        <TableRow>
                            <TableHeaderCell>ID</TableHeaderCell>
                            <TableHeaderCell>Employee</TableHeaderCell>
                            <TableHeaderCell>Start Date</TableHeaderCell>
                            <TableHeaderCell>End Date</TableHeaderCell>
                            <TableHeaderCell>Total Day</TableHeaderCell>
                            <TableHeaderCell>Status</TableHeaderCell>
                            <TableHeaderCell>Action</TableHeaderCell>
                        </TableRow>
                    </template>
                    <template #default>
                        <TableRow v-for="leave in leaves" :key="leave.id" class="border-b">
                            <TableDataCell>{{ leave.id }}</TableDataCell>
                            <TableDataCell>{{ leave.user.name }}</TableDataCell>
                            <TableDataCell>{{ leave.start_date }}</TableDataCell>
                            <TableDataCell>{{ leave.end_date }}</TableDataCell>
                            <TableDataCell>{{ leave.total_day }}</TableDataCell>
                            <TableDataCell>{{ leave.status }}</TableDataCell>
                            <TableDataCell class="space-x-4">

                                <template v-if="hasPermission('update leave')">
                                    <Link :href="route('leaves.edit', leave.id)" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent transition rounded-full">Edit</Link>
                                </template>

                                <template v-if="hasPermission('delete leave')">
                                    <button @click="confirmDeleteLeave" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent transition rounded-full">Delete</button>
                                </template>

                                <Modal :show="showConfirmDeleteLeaveModal" @close="closeModal">
                                    <div class="p-6">
                                        <h2 class="text-lg font-semibold text-slate-800">Are you sure to delete this leave?
                                        </h2>
                                        <div class="mt-6 flex space-x-4">
                                            <DangerButton @click="deleteLeave(leave.id)">Delete</DangerButton>
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
