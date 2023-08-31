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

defineProps(['posts']);
const form = useForm({})

const showConfirmDeletePostModal = ref(false);
const { hasPermission } = usePermission();

const confirmDeletePost = () => {
    showConfirmDeletePostModal.value = true
}

const closeModal = () => {
    showConfirmDeletePostModal.value = false
}

const deletePost = (id) => {
    form.delete(route('posts.destroy', id), {
        onSuccess: () => closeModal()
    });
}
</script>

<template>
    <Head title="Posts" />

    <AdminLayout>
        <div class="max-w-7xl mx-auto py-4">
            <div class="flex justify-between">
                <h1>Posts Index Page</h1>
                <template v-if="hasPermission('create post')">
                    <Link :href="route('posts.create')" class="px-4 py-2 rounded-xl text-white bg-gradient-to-r from-sky-600 to-cyan-400">New Post</Link>
                </template>
            </div>
            <div class="mt-6">
                <Table>
                    <template #header>
                        <TableRow>
                            <TableHeaderCell>ID</TableHeaderCell>
                            <TableHeaderCell>Title</TableHeaderCell>
                            <TableHeaderCell>Action</TableHeaderCell>
                        </TableRow>
                    </template>
                    <template #default>
                        <TableRow v-for="post in posts" :key="post.id" class="border-b">
                            <TableDataCell>{{ post.id }}</TableDataCell>
                            <TableDataCell>{{ post.title }}</TableDataCell>
                            <TableDataCell class="space-x-4">

                                <template v-if="hasPermission('update post')">
                                    <Link :href="route('posts.edit', post.id)" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent transition rounded-full">Edit</Link>
                                </template>

                                <template v-if="hasPermission('delete post')">
                                    <button @click="confirmDeletePost" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent transition rounded-full">Delete</button>
                                </template>

                                <Modal :show="showConfirmDeletePostModal" @close="closeModal">
                                    <div class="p-6">
                                        <h2 class="text-lg font-semibold text-slate-800">Are you sure to delete this post?
                                        </h2>
                                        <div class="mt-6 flex space-x-4">
                                            <DangerButton @click="deletePost(post.id)">Delete</DangerButton>
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
