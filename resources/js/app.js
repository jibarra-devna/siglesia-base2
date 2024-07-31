import { createApp } from 'vue';
import NombreVariable from './components/Sacerdotes.vue';
import UserTable from './components/UserTable.vue';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';
/*
  Add custom scripts here
*/
import.meta.glob([
  '../assets/img/**',
  // '../assets/json/**',
  '../assets/vendor/fonts/**'
]);


createApp(NombreVariable).mount('#app'); //#app es el id que se utiliza para mandar el componente a la vista
//createApp(UserTable).mount('#app2');