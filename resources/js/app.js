import { createApp } from 'vue';
import gestionSacerdotes from './components/Sacerdotes.vue';
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


createApp(gestionSacerdotes).mount('#app'); //#app es el id que se utiliza para mandar el componente a la vista
