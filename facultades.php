<?php
      include('plantilla.php')
?>
<div class="content-wrapper">
  <br> <br>
  <div class="row">
    <div class="col-10">
      <h1> Facultades </h1>
    </div>
    <div class="col-2">
      <a class="btn btn-app bg-success">
        <i class="fas fa-plus"></i> Adicionar
      </a>
    </div>
  </div>



  <!-- Main content -->

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Código</th>
          <th>Nombre </th>
          <th>Descripción </th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>001</td>
          <td>Ingenieria</td>
          <td>Facultad de más de 50 años de antiguedad</td>
          <td>
          <a class="btn btn-app bg-secondary">
            <i class="fas fa-edit"></i> Editar
          </a>
          <a class="btn btn-app bg-danger">
            <i class="fas fa-trash"></i> Eliminar
          </a>
          <a class="btn btn-app bg-primary">
            <i class="fas fa-eye"></i> Visualizar
          </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

