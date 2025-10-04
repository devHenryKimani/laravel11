<template>
<div>
   <h1>
    student table
   </h1>
   <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Phone_number</th>
            <th>Reg_number</th>
            <th>Bio</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="student in students " :key="student.id">
            <td>{{ student.name }}</td>
            <td>{{ student.email }}</td>
            <td>{{ student.city }}</td>
            <td>{{ student.phone_number }}</td>
            <td>{{ student.reg_number }}</td>
            <td>{{ student.bio }}</td>

        </tr>
    </tbody>
   </table>
</div>
</template>

<script setup>
defineProps({
    students: Array
});
</script>