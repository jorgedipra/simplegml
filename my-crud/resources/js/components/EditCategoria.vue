<template>
    <div>
        <h3 class="text-center">Edit Categoria</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateCategoria">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="categoria.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="categoria.description">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Categoria</button>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/categoria/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.categoria = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateCategoria() {
                this.axios
                    .categoria(`http://localhost:8000/api/categoria/update/${this.$route.params.id}`, this.categoria)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>