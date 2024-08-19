import { createApp } from 'vue';
import App from './components/App.vue'; // Este será tu componente principal
import router from './router'; // Importa el archivo de rutas que acabas de crear
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

// Crea la aplicación Vue y usa el router
createApp(App)
  .use(router) // Usa el router
  .mount('#app'); // Monta la aplicación en un único punto del DOM