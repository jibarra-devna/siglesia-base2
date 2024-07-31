<template>
    <div class="container">
        <div class="row">
            <button class="btn btn-primary" @click="showForm()">Agregar Usuario</button>
        </div>
        <div class="row">
      <table class="table text-center">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Fecha de Nacimiento</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
            <td>{{ user.nombre }}</td>
            <td>{{ user.edad }}</td>
            <td>{{ user.fecha_de_nacimiento }}</td>
            <td>
              <button class="btn btn-success" @click="editUser(user)">Editar</button>
              <button class="btn btn-danger" @click="deleteUser(user.id)">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
      <UserForm
        v-if="isFormVisible"
        :user="selectedUser"
        :isEditing="isEditing"
        @saved="fetchUsers"
      />
        </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  import UserForm from './UserForm.vue';
  
  export default {
    components: { UserForm },
    data() {
      return {
        users: [],
        selectedUser: null,
        isFormVisible: false,
        isEditing: false,
      };
    },
    methods: {
      async fetchUsers() {
        try {
          const response = await axios.get('/api/users');
          this.users = response.data;
        } catch (error) {
          console.error('Error al obtener usuarios', error);
        }
      },
      showForm() {
        this.isFormVisible = true;
        this.isEditing = false;
        this.selectedUser = { nombre: '', edad: '', fecha_de_nacimiento: '' };
      },
      async editUser(user) {
        this.selectedUser = { ...user };
        this.isFormVisible = true;
        this.isEditing = true;
      },
      async deleteUser(id) {
        try {
          await axios.delete(`/api/users/${id}`);
          this.fetchUsers();
        } catch (error) {
          console.error('Error al eliminar el usuario', error);
        }
      }
    },
    mounted() {
      this.fetchUsers();
    }
  };
  </script>
  