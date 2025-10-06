<template>
  <div class="p-6 max-w-3xl mx-auto bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">Student Details</h1>

    <table class="min-w-full border border-gray-300 rounded-lg">
      <tbody>
        <tr class="border-b">
          <td class="font-semibold p-2 bg-gray-50 w-1/3">Name</td>
          <td class="p-2">{{ student.name }}</td>
        </tr>
        <tr class="border-b">
          <td class="font-semibold p-2 bg-gray-50">Email</td>
          <td class="p-2">{{ student.email }}</td>
        </tr>
        <tr class="border-b">
          <td class="font-semibold p-2 bg-gray-50">City</td>
          <td class="p-2">{{ student.city }}</td>
        </tr>
        <tr class="border-b">
          <td class="font-semibold p-2 bg-gray-50">Phone Number</td>
          <td class="p-2">{{ student.phone_number }}</td>
        </tr>
        <tr class="border-b">
          <td class="font-semibold p-2 bg-gray-50">Reg Number</td>
          <td class="p-2">{{ student.reg_number }}</td>
        </tr>
        <tr>
          <td class="font-semibold p-2 bg-gray-50">Bio</td>
          <td class="p-2">{{ student.bio }}</td>
        </tr>
      </tbody>
    </table>

    <Link
      href="/student"
      class="inline-block mt-6 bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700"
    >
      ← Back to Students List
    </Link>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  student: Object
})
</script>
