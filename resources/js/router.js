import { createRouter, createWebHistory } from 'vue-router';

// Importa los componentes con lazy loading
const Inicio = () => import('./components/inicio/Inicio.vue');
const Resumen = () => import('./components/modulos/librosparroquiales/Resumen.vue');
const Bautismos = () => import('./components/modulos/librosparroquiales/Bautismos.vue');
const AgregarBautismo = () => import('./components/modulos/librosparroquiales/AgregarBautismo.vue');
const Sacerdotes = () => import('./components/configuracion/Sacerdotes.vue');
const Usuarios = () => import('./components/configuracion/Usuarios.vue');

const routes = [
  {
    path: '/',
    name: 'Inicio',
    component: Inicio
  },
  {
    path: '/librosparroquiales/resumen',
    name: 'Libros Parroquiales',
    component: Resumen
  },
  {
    path: '/librosparroquiales/bautismos',
    name: 'Bautismos',
    component: Bautismos
  },
  {
    path: '/librosparroquiales/bautismos/agregar',
    name: 'Agregar Bautismo',
    component: AgregarBautismo
  },
  {
    path: '/configuracion/sacerdotes',
    name: 'Sacerdotes',
    component: Sacerdotes
  },
  {
    path: '/configuracion/usuarios',
    name: 'Usuarios',
    component: Usuarios
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
