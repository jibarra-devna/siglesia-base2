<template>
<div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1.25rem">
    <h6><span class="text-muted fw-light"><router-link to="/librosparroquiales/resumen">Libros Parroquiales</router-link> / </span> Bautismos</h6>
    <div style="text-align: right;">
      <router-link to="/librosparroquiales/bautismos/agregar" type="button" class="btn btn-sm btn-primary" style="justify-content: flex-end;"><span class="tf-icons bx bx-plus me-1"></span>Añadir Bautismo</router-link>
    </div>
  </div>
  <p></p>
<!-- Bordered Table -->
<div class="card">
  <div class="card-body">
    <h5><b>Bautismos</b></h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Libro</th>
            <th>Partida</th>
            <th>Fecha Bautismo</th>
            <th>Documentos</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Jonathan</td>
            <td>Ibarra</td>
            <td>2018</td>
            <td>5</td>
            <td>01/02/1996</td>
            <td>Exportar</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('librosparroquiales-bautismos-modificar') }}"><i class="bx bx-edit-alt me-1"></i> Editar</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>Carlos</td>
            <td>Carrillo</td>
            <td>2016</td>
            <td>4</td>
            <td>08/10/1999</td>
            <td>Exportar</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</template>
