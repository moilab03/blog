new Vue({

    el: '#crud',
    created: function() {
        this.gettareas();

    },
    data: {
        tareas: [],
        user: [],
        nuevaanotacion: '',
        fillactualizar: { 'id': '', 'anotacion': '' },
        errors: [],

    },
    methods: {
        // METODO PARA LEER
        gettareas: function() {
            var urltareas = 'tareas';
            axios.get(urltareas).then(response => {
                this.tareas = response.data
            });
        },
        // METODO PARA BORRAR
        borrarnota: function(tarea) {
            if (confirm('Se eliminara el campo selecionado')) {
                var url = 'tareas/' + tarea.id;
                axios.delete(url).then(response => {
                    this.gettareas();
                });
            }
        },
        // METODO PARA LEVANTAR MODAL CON LOS DATOS CARGADOS "id + anotacion"
        actualizar: function(tarea) {
            this.fillactualizar.id = tarea.id;
            this.fillactualizar.anotacion = tarea.anotacion;
            $('#actualizar').modal('show');
        },
        // METODO PARA ACTUALIZAR
        actualizaranotacion: function(id) {
            var url = 'tareas/' + id;

            axios.put(url, this.fillactualizar).then(response => {
                this.gettareas;
                this.fillactualizar = { 'id': '', 'anotacion': '' };
                this.errors = [];
                $('#actualizar').modal('hide');
            }).catch(error => {
                this.errors = error.response.data
            });
        },

        // METODO PARA CREAR
        crearanotacion: function() {
            var url = 'tareas';
            axios.post(url, {
                anotacion: this.nuevaanotacion
            }).then(response => {
                this.gettareas();
                this.nuevaanotacion = '';
                this.errors = [];
                $('#crear').modal('hide');
            }).catch(error => {
                this.errors = error.response.data
            });
        }

    }

});