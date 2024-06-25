<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({
    data: Object
});
</script>

<template>
    <h1>테스트입니다</h1>
    <div>{{ data.a }}</div>
    <div>{{ data.b }}</div>
</template>