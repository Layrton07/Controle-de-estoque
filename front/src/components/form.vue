<script setup>
import { ref } from 'vue'
let name = ref('eu')
let email = ref('eumesmo@gmail.com')
let password = ref('12345')
const inputName = (val) => name.value = val.target.value
const inputEmail = (val) => email.value = val.target.value
const inputPassword = (val) => password.value = val.target.value
const packet = {
    name: name.value,
    email: email.value,
    password: password.value
}
console.log(packet)
function checkform(){
    fetch('http://localhost:8080/actions/create-func.php',{
        method: 'POST',
        headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(packet),
})
.then(response => response.json())
.then(packet => console.log(packet))
.catch((error) => console.error('Error:', error));
}
</script>

<template>
  <!-- <h1>{{ name }}</h1> -->
  <form @submit.prevent="checkform" method="POST">
    <div class="inline">
        <label for="name">Name:</label>
        <input type="text" v-model="name" @input="inputName" name="name">
        <label for="email">Email:</label>
        <input type="email" v-model="email" @input="inputEmail" name="email">
        <label for="password">senha</label>
        <input type="password" v-model="password" @input="inputPassword" name="password">
        <button type="submit">enviar</button>
    </div>
  </form>
  
  
</template>

<style scoped>
    .inline{
        width: 300px;
        height: 300px;
        background-color: red;
        display: flex;
        flex-direction: column;
    }
</style>
