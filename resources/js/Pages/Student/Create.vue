<template>
<div>
    <form @submit.prevent="create">
        <div>
      <label>Name</label> 
      <input v-model="form.name" type="text" >
      <div v-if="form.errors.name">
          {{ form.errors.name }}
        </div>
      </div>

      <div>
      <label>Email</label> 
      <input v-model="form.email" type="text" >
      <div v-if="form.errors.email">
          {{ form.errors.email}}
        </div>
      </div>

      <div>
      <label>City</label> 
      <input v-model="form.city" type="text" >
      <div v-if="form.errors.city">
          {{ form.errors.city}}
        </div>
      </div>

   <div>
      <label>Phone_number</label> 
      <input v-model="form.phone_number" type="text" >
      <div v-if="form.errors.phone_number">
          {{ form.errors.phone_number}}
        </div>
      </div>

<div>
      <label>Reg_number</label> 
      <input v-model="form.reg_number" type="text" >
      <div v-if="form.errors.reg_number">
          {{ form.errors.reg_number}}
        </div>
      </div>

      <div>
      <label>Bio</label> 
      <input v-model="form.bio" type="text" >
      <div v-if="form.errors.bio">
          {{ form.errors.bio }}
        </div>
      </div>

    <div>

        <button type="submit">Create</button>
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
     bio: null,
})
const create = () => form.post('/student')
</script>


<style scoped>

label {
  margin-right: 2em;
}

div {

  padding: 2px
}

</style>