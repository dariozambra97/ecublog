<template>
    <div class="panel panel-default">
                <div class="panel-heading">My primer Blog {{ crud.created_at }}</div>

                <div class="panel-body">

                    <input v-if="editMode" type="text" class="form-control" v-model="crud.description">
                    <p v-else>{{ crud.description }}</p>
                </div>
                <div class="panel-footer">
                    <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Guardar cambios</button>
                    <button v-else class="btn btn-default" v-on:click="onClickEdit()">Editar</button>
                    <button class="btn btn-danger" v-on:click="onClickDelete()">Eliminar</button>    
                </div>
                
            </div>
</template>

<script>
    export default {
        props:['crud'],
        data(){
            return{ 
                editMode: false   
            };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            onClickDelete(){
                this.$emit('delete');
            },
            onClickEdit(){
                this.editMode = true;
            },
            onClickUpdate(){
                this.editMode = false;
                this.$emit('update', crud);
            }     
        }
    }
</script>
