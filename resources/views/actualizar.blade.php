<form method="POST" v-on:submit.prevent="actualizaranotacion(fillactualizar.id)" >
    <div class="modal fade" id="actualizar">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Puedes actualizar esta anotacion</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <label for="anotacion">Ediatar esta nota</label>
              <input type="text" name="anotacion" class="form-control" v-model="fillactualizar.anotacion">
              <span v-for="error in errors" class="text-danger"> @{{error}}</span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
              <input type="submit" class="btn btn-primary" value="Guardar">              
            </div>
          </div> 
        </div>
      </div>
</form>