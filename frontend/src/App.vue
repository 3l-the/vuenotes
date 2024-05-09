<script setup>
  import { ref } from 'vue';
  import axios from 'axios';

  const noteId = ref('');
  const allNotes = ref([]);

  function getNotes(noteId){
    axios.get("http://localhost/vuenotes/backend/public/api/notes/" + noteId).then(response => {
      console.log(response.data);
      allNotes.value = response.data;})
  }
</script>
<template>
  <div class="container py-4">
    <div class="row">
      <div class="col">
        <header class="bg-info py-3 text-white text-center">
          <h1 class="mb-0">Notes</h1>
        </header>
      </div>
    </div>
    <div class="row justify-content-center mb-4">
      <div class="col-12 col-md-9 col-lg-6">
        <div class="mb-3">
          <label for="" class="form-label">ID *</label>
          <input type="number" class="form-control" v-model="noteId">
        </div>
        <div class="mb-3 text-end">
          <button class="btn btn-info" @click="getNotes(noteId)">Search</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td v-for="note in allNotes">{{ note,id }}</td>
              <td>{{ note,name }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<style scoped>
</style>
