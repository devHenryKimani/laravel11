<template>
<Link href="/listing">listings</Link>&nbsp;
<Link href="/listing/create">New listing</Link>
<!-- <div>The page with time{{ timer }}</div> -->
 <div v-if="flashSuccess" class="success">
  {{ flashSuccess }}
 </div>
 
<slot>Default</slot>
</template>

<script setup>
import { Link , usePage} from '@inertiajs/vue3'
import { computed } from 'vue';

// const timer = ref(0)

// setInterval(() => {
//   timer.value++
// }, 1000)
const page = usePage()
const flashSuccess = computed(
  () => page.props.value.flash.success,
)
</script>

<style scoped>
  .success {
    background-color: green;
    color: white;
  }
</style>