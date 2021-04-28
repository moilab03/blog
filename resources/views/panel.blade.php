@extends('welcome')

@section('panel')

      <div id="crud" class="row">
          <div class="col-xs-12">
              <h2 class="page-header">CRUD</h2>
          </div>
          <div class="col-ms-7">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crear">
                Nueva anotacion
              </button>
              <table class="table table-hover table-striped">
                  <thead>
                      <tr>
                          <th>Nº de anotacion</th>
                          {{-- <th>Nombre</th> --}}
                          <th>Anotacion</th>
                          <th colspan="2"> &nbsp; </th>
                      </tr>
                  </thead>
                  <tbody>
                    
                     
                      <tr  v-for="tarea in tareas">
                          <td width="10px" >
                              @{{tarea.id}}
                          </td>
                          {{-- <td width="250px">
                            @{{tarea.user_id}}
                          </td>    --}}                                       
                          <td> 
                              @{{tarea.anotacion}}
                          </td>
                          <td width="10px"> 
                            <a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="actualizar(tarea)">
                                EDITAR
                            </a> 
                            
                          </td>
                          <td width="10px"> 
                            <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="borrarnota(tarea)">
                                ELIMINAR
                            </a> 
                        </td>
                      </tr>
                  </tbody>
              </table>
               @include('crear')
               @include('actualizar')
          </div>
          <div class="col-sm-5">
              <pre>
                  @{{$data}}
              </pre>
          </div>


      </div>
    
@endsection