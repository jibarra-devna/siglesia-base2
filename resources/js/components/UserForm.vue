<template>
    <form @submit.prevent="submitForm">
      <div  class="container">
        <div class="row">
            <div class="col-6">
                <div>
                    <label class="form-label" for="nombre">Nombre:</label>
                    <input class="form-control" type="text" v-model="user.nombre" id="nombre" required />
                </div>
                <div>
                    <label class="form-label" for="edad">Edad:</label>
                    <input class="form-control" type="number" v-model="user.edad" id="edad" required />
                </div>
                <div>
                    <label class="form-label" for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
                    <input class="form-control" type="date" v-model="user.fecha_de_nacimiento" id="fecha_de_nacimiento" required />
                </div>
                <br>
                <div class="row">
                        <button class="btn btn-primary" type="submit">{{ isEditing ? 'Actualizar' : 'Agregar' }}</button>
                </div>
            </div>
        </div>
    </div>
    </form>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    props: ['user', 'isEditing'],
    methods: {
      async submitForm() {
        try {
          if (this.isEditing) {
            await axios.put(`/api/users/${this.user.id}`, this.user);
          } else {
            await axios.post('/api/users', this.user);
          }
          this.$emit('saved');
        } catch (error) {
          console.error('Error al guardar el usuario', error);
        }
      }
    }
  };
  </script>
  