<script setup>
</script>
<template>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:text-gray-700">
                <slot name="header"></slot>
            </thead>
            <tbody>
<slot></slot>
            </tbody>
        </table>
    </div>
</template>
<style scoped></style>
