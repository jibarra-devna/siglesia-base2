<template>
<div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
    <h6><span class="text-muted fw-light"><router-link to="/librosparroquiales/resumen">Libros Parroquiales</router-link> / </span><span class="text-muted fw-light"><router-link to="/librosparroquiales/bautismos">Bautismos</router-link> / </span> Agregar Bautismo</h6>
    <div style="text-align: right;">
      <router-link to="/librosparroquiales/bautismos" type="button" class="btn btn-sm btn-primary" style="justify-content: flex-end;"><span class="tf-icons bx bx-book me-1"></span>Ir al Índice</router-link>
    </div>
</div>
<p></p>
<!-- Formulario -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-body">
        <form>
          <div class="mb-3">
            <h5><span style="color: #696cff; vertical-align:1px;">━━</span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Datos del Bautismo</b></h5> <!--<small class="text-muted float-end">Default label</small>-->
          </div>

          <div>
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="ba-nombre" id="ba-nombre"/>
          </div>
          <div>
            <label class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="ba-apellidos" id="ba-apellidos"/>
          </div>
          
        <br>
          <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>
</template>
