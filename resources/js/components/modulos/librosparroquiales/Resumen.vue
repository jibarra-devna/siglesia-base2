<script setup>
import bautismoIcon from '@/assets/img/icons/modulos/librosparroquiales/bautismo-icon.png';
import ComunionIcon from '@/assets/img/icons/modulos/librosparroquiales/comunion-icon.png';
import ConfirmacionIcon from '@/assets/img/icons/modulos/librosparroquiales/confirmacion-icon.png';
import MatrimonioIcon from '@/assets/img/icons/modulos/librosparroquiales/matrimonio-icon.png';
</script>

<template>
<div class="row">
  <!-- Inicio Modulo Bautismos -->
  <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="rounded-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
        <div class="card-title list-group-item list-group-item-primary rounded-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><b style="padding-left: 20px; vertical-align: middle;">BAUTISMOS</b></h5>
            <img style="padding-right: 20px" height="60px" :src="bautismoIcon">
          </div>
        </div>
        <div class="row row-bordered g-0">
          <div class="col-md-3 text-center">
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Total</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Varones</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-1">Mujeres</span>
          </div>
          <div class="col-md-9 card-header">
            <h5><strong>Libro de Bautismos</strong></h5>
            <p>Gestione todos los Bautismos en el sistema.</p>
            <div class="col-md-12 col-lg-12">
              <div class="demo-inline-spacing">
                <router-link to="/librosparroquiales/bautismos"  type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Índice Bautismos
                </router-link>
                <router-link to="/librosparroquiales/bautismos/agregar"  type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Añadir Bautismo
                </router-link>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Modulo Bautismos -->
  <!-- Inicio Modulo Primera Comunión -->
  <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="rounded-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
        <div class="card-title list-group-item list-group-item-primary rounded-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><b style="padding-left: 20px; vertical-align: middle;">PRIMERA COMUNIÓN</b></h5>
            <img style="padding-right: 20px" height="60px" :src="ComunionIcon">
          </div>
        </div>
        <div class="row row-bordered g-0">
          <div class="col-md-3 text-center">
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Total</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Varones</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-1">Mujeres</span>
          </div>
          <div class="col-md-9 card-header">
            <h5><strong>Libro de Primeras Comuniones</strong></h5>
            <p>Gestione todos las Primeras Comuniones en el sistema.</p>
            <div class="col-md-12 col-lg-12">
              <div class="demo-inline-spacing">
                <router-link to="/librosparroquiales/primerascomuniones"  type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Índice Comuniones
                </router-link>
                <router-link to="/librosparroquiales/primerascomuniones/agregar"  type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Añadir Comunión
                </router-link>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Modulo Primera Comunión -->
</div>
<div class="row">
  <!-- Inicio Modulo Confirmaciones -->
  <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="rounded-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
        <div class="card-title list-group-item list-group-item-primary rounded-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><b style="padding-left: 20px; vertical-align: middle;">CONFIRMACIONES</b></h5>
            <img style="padding-right: 20px" height="60px" :src="ConfirmacionIcon">
          </div>
        </div>
        <div class="row row-bordered g-0">
          <div class="col-md-3 text-center">
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Total</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Varones</span>
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-1">Mujeres</span>
          </div>
          <div class="col-md-9 card-header">
            <h5><strong>Libro de Confirmaciones</strong></h5>
            <p>Gestione todas las Confirmaciones en el sistema.</p>
            <div class="col-md-12 col-lg-12">
              <div class="demo-inline-spacing">
                <router-link to="/librosparroquiales/confirmaciones"  type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Índice Confirmaciones
                </router-link>
                <router-link to="/librosparroquiales/confirmaciones/agregar"  type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Añadir Confirmación
                </router-link>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Modulo Confirmaciones -->
  <!-- Inicio Modulo Matrimonios -->
  <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="rounded-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
        <div class="card-title list-group-item list-group-item-primary rounded-top" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><b style="padding-left: 20px; vertical-align: middle;">MATRIMONIOS</b></h5>
            <img style="padding-right: 20px" height="60px" :src="MatrimonioIcon">
          </div>
        </div>
        <div class="row row-bordered g-0">
          <div class="col-md-3 text-center">
            <h3 class="card-title mb-0">0</h3>
            <span class="fw-semibold d-block mb-2">Total</span>
          </div>
          <div class="col-md-9 card-header">
            <h5><strong>Libro de Matrimonios</strong></h5>
            <p>Gestione todos los Matrimonios en el sistema.</p>
            <div class="col-md-12 col-lg-12">
              <div class="demo-inline-spacing">
                <router-link to="/librosparroquiales/matrimonios"  type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Índice Matrimonios
                </router-link>
                <router-link to="/librosparroquiales/matrimonios/agregar"  type="button" class="btn btn-sm btn-primary">
                  <span class="tf-icons bx bx-book me-1"></span>Añadir Matrimonio
                </router-link>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin Modulo Matrimonios -->
</div>
</template>