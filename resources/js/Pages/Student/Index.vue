<template>
<div class="p-8 max-w-6xl mx-auto">
   <h1  class="text-3xl font-bold text-gray-800 mb-6">
    student table
   </h1>
   <div class="overflow-x-auto bg-white shadow-md rounded-lg">
   <table class="min-w-full border-collapse">
    <thead>
        <tr class="bg-gray-100 text-gray-700 uppercase text-sm">
            <th class="py-3 px-4 text-left">Name</th>
            <th class="py-3 px-4 text-left">Email</th>
            <th class="py-3 px-4 text-left">City</th>
            <th class="py-3 px-4 text-left">Phone_number</th>
            <th class="py-3 px-4 text-left">Reg_number</th>
            <th class="py-3 px-4 text-left">Bio</th>
        </tr>
    </thead>
    <tbody class="text-gray-700">
        <tr v-for="student in students " :key="student.id"  class="border-b hover:bg-gray-50 transition">
            <td class="py-3 px-4 font-medium">{{ student.name }}</td>
            <td class="py-3 px-4 font-medium">{{ student.email }}</td>
            <td class="py-3 px-4 font-medium">{{ student.city }}</td>
            <td class="py-3 px-4 font-medium">{{ student.phone_number }}</td>
            <td class="py-3 px-4 font-medium">{{ student.reg_number }}</td>
            <td class="py-3 px-4 font-medium">{{ student.bio }}</td>
            <Link
              :href="`/student/${student.id}`"
              class=" text-black px-4 py-1.5 rounded hover:bg-blue-700 transition"
            >
              View
            </Link>
        </tr>
    </tbody>
   </table>
   
   </div>
</div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    students: Array
});
</script>