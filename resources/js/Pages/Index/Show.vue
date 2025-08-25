
<template>
    <MainLayout>
    <div>Show</div>
    <Link href="/hello">mainPage</Link>
    <div>{{ message }}</div>
    </MainLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import MainLayout from '../../Layouts/MainLayout.vue';
defineProps({
    message:String
});
</script>