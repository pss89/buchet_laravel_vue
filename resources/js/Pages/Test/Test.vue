<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({
    data: Object
});
</script>

<template>
    <div>{{ data.a }}</div>
    <div>{{ data.b }}</div>
</template>