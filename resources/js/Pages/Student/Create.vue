<template>
<div>
    <form>
        <div>
      <label>Name</label> 
      <input v-model="form.name" type="text" >
      </div>

      <div>
      <label>Email</label> 
      <input v-bind="form.email" type="text" >
      </div>

      <div>
      <label>City</label> 
      <input v-model="form.city" type="text" >
      </div>

   <div>
      <label>Phone_number</label> 
      <input v-model="form.phone_number" type="text" >
      </div>

<div>
      <label>Reg_number</label> 
      <input v-model="form.reg_number" type="text" >
      </div>

      <div>
      <label>Bio</label> 
      <input v-model="form.bio" type="text" >
      </div>


    </form>
</div>
</template>

<script setup>
import { useForm} from '@inertiajs/vue3'
const form = useForm({
    name: null,
     email: null,
     city:null,
     phone_number: 0,
     reg_number:0,
     bio:null,
})
</script>