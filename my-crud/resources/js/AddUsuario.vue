<template>
    <div>
        <h3 class="text-center">Add Usuario</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addUsuario">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="usuario.name">
                    </div>

                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" v-model="usuario.last_name">
                    </div>

                    <div class="form-group">
                        <label>Document</label>
                        <input type="text" class="form-control" v-model="usuario.document">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" v-model="usuario.email">
                    </div>

                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" v-model="usuario.country">
                    </div>

                    <div class="form-group">
                        <label>Adress</label>
                        <input type="text" class="form-control" v-model="usuario.adress">
                    </div>

                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" class="form-control" v-model="usuario.telephone">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Add Usuario</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                usuario: {}
            }
        },
        methods: {
            addUsuario() {
 
                this.axios
                    .usuario('http://localhost:8000/api/usuario/add', this.usuario)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>