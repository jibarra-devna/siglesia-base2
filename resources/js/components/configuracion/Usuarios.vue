<template>
<div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
  <h6 style="margin: 0;"><span class="text-muted fw-light">Configuración / </span> Usuarios</h6>
    <div style="text-align: right;">
      <a href="javascript:void(0);">
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#agregarEditarModal" @click="openModal('add')">
          <span class="tf-icons bx bx-plus me-1"></span>Añadir Usuario
        </button>
      </a>
    </div>
</div>
<p></p>
    <!-- comienza tabla sacerdotes-->
  <div class="card">
    <div class="card-body">
      <h5>Gestionar Usuarios</h5>
      <div class="table-responsive text-nowrap">
        <br>
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th>Titulo</th>
              <th>Sacerdote</th>
              <th>Fecha Nacimiento</th>
              <th>Inicio Periodo</th>
              <th>Fin Periodo</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="sacerdote in sacerdotes" :key="sacerdote.id_sacerdote">
            <td class="text-center">{{ sacerdote.titulo }}</td>
            <td class="text-left">{{ sacerdote.nombre_sacerdote }} {{ sacerdote.apellidos_sacerdote }}</td>
            <td class="text-center">{{ formatDate(sacerdote.fecha_nacimiento) }}</td>
            <td class="text-center">{{ formatDate(sacerdote.periodo_inicio) }}</td>
            <td class="text-center">{{ formatDate(sacerdote.periodo_fin) }}</td>
            <td class="text-center">
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);" @click="generatePdf(sacerdote.id_sacerdote)"><i class="bx bxs-file-pdf me-2"></i> Ver</a>
                  <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#agregarEditarModal" @click="openModal('edit', sacerdote)"><i class="bx bx-edit-alt me-2"></i> Editar</a>
                  <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteModal" @click="confirmDelete(sacerdote)"><i class="bx bx-trash me-2"></i> Eliminar</a>
                </div>
              </div>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- termina tabla sacerdotes -->
    <div>
      <!-- Modal para Agregar/Editar -->
      <form @submit.prevent="saveSacerdote">
      <div class="modal fade" id="agregarEditarModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">{{ modalType === 'add' ? 'Agregar Usuario' : 'Editar Usuario' }}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             
                <div class="row">
                      <div class="col mb-3">
                        <label for="nameBackdrop" class="form-label">Nombre</label>
                        <input type="text" v-model="sacerdote.nombre_sacerdote" class="form-control" placeholder="Nombre(s)" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameBackdrop" class="form-label">Apellidos</label>
                        <input type="text" v-model="sacerdote.apellidos_sacerdote" class="form-control"  placeholder="Apellidos" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <label class="form-label">Titulo</label>
                        <select v-model="sacerdote.titulo" class="form-control" required>
                          <option value="" disabled hidden>Seleccione uno</option>
                          <option v-for="titulo in titulos" :key="titulo" :value="titulo">{{ titulo }}</option>
                        </select>
                      </div>
                      <div class="col mb-3">
                        <label for="nameBackdrop" class="form-label">Fecha Nacimiento</label>
                        <input type="date" v-model="sacerdote.fecha_nacimiento" class="form-control" style="text-transform: uppercase;" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameBackdrop" class="form-label">Inicio de Periodo</label>
                        <input type="date" v-model="sacerdote.periodo_inicio" class="form-control" style="text-transform: uppercase;" required>
                      </div>
                      <div class="col mb-3">
                        <label for="nameBackdrop" class="form-label">Fin de Periodo</label>
                        <input type="date" v-model="sacerdote.periodo_fin" class="form-control" style="text-transform: uppercase;">
                      </div>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">{{ modalType === 'add' ? 'Agregar' : 'Actualizar' }}</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Termina modal para agregar/editar sacerdotes -->
      <!-- Modal de Confirmación de Eliminación -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Confirmar Eliminación</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>¿Está seguro de eliminar este sacerdote?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-danger" @click="deleteSacerdote">Eliminar</button>
            </div>
          </div>
        </div>
      </div>
      <!--Termina modal para eliminar-->
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        sacerdotes: [],
        sacerdote: {
          titulo: ''
        },
        modalType: '',
        deleteId: null,
        titulos: ['Diácono', 'Doctor', 'Emmo. y Rvdmo. Sr', 'Emmo. y Rvdmo. Sr. Cardenal', 'Excmo. y Rvdmo. Sr. D.', 'Ilmo. Sr. D.', 'Ilmo. y Excmo.', 'Monseñor', 'Muy Rvdo. Sr.', 'Nuncio', 'Padre', 'Pbro.', 'Pbro. Lic.', 'Pro-Vicario General', 'Rvdmo. Dr. D.', 'Rvdo.', 'Rvdo. D.', 'Rvdo. P.', 'Rvdo. Sr.', 'Sr. Obispo'] // Opciones para el select
      };
    },
    methods: {
      fetchSacerdotes() {
        axios.get('/api/sacerdotes')
          .then(response => {
            this.sacerdotes = response.data;
          });
      },
      generatePdf(id) {
        // Abre el PDF en una nueva pestaña
        window.open(`/sacerdotes/pdf/${id}`, '_blank');
      },
      formatDate(date) {
        if (!date) return '-'; // Manejar caso en el que la fecha es nula o vacía
        
        const options = { day: '2-digit', month: '2-digit', year: 'numeric' };
        return new Date(date).toLocaleDateString('es-ES', options); // 'es-ES' para formato d/m/Y
      },
      openModal(type, sacerdote = {}) {
    this.modalType = type;
    
    if (type === 'add') {
      this.sacerdote = { titulo: '' };
    } else {
      this.sacerdote = { ...sacerdote };
    }
  
    // Asegurar que el DOM se actualice
    this.$nextTick(() => {
      if (this.modalType === 'add') {
        this.sacerdote.titulo = ''; // Asegúrate de que el título esté vacío al abrir el modal para agregar
      }
    });
  },
      saveSacerdote() {
        const url = this.modalType === 'add' ? '/api/sacerdotes' : `/api/sacerdotes/${this.sacerdote.id_sacerdote}`;
        const method = this.modalType === 'add' ? 'post' : 'put';
  
        axios[method](url, this.sacerdote)
          .then(response => {
            this.fetchSacerdotes();
          });
  
           // Cierra el modal usando Bootstrap
        const myModalEl = document.getElementById('agregarEditarModal');
        const modal = bootstrap.Modal.getInstance(myModalEl);
        modal.hide();
      },
      confirmDelete(sacerdote) {
        this.deleteId = sacerdote.id_sacerdote;
      },
      closeConfirmModal() {
        this.showConfirmModal = false;
      },
      deleteSacerdote() {
        axios.delete(`/api/sacerdotes/${this.deleteId}`)
          .then(() => {
            this.fetchSacerdotes();
              // Cierra el modal usando Bootstrap
        const myModalEl = document.getElementById('deleteModal');
        const modal = bootstrap.Modal.getInstance(myModalEl);
        modal.hide();
          });
      },
    },
    mounted() {
      this.fetchSacerdotes();
    }
  }
  </script>
  