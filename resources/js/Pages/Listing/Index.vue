<template>
<div v-for="listing in listings" :key="listing.id">   
    {{ listing.city }} - {{ listing.street }}
</div>
   
</template>


<script setup>
defineProps({
    listings:Array,
});

</script>