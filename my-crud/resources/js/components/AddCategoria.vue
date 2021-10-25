<template>
    <div>
        <h3 class="text-center">Add Categoria</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addCategoria">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="categoria.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="categoria.description">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Categoria</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                categoria: {}
            }
        },
        methods: {
            addCategoria() {
 
                this.axios
                    .categoria('http://localhost:8000/api/categoria/add', this.categoria)
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