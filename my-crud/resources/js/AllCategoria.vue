<template>
    <div>
        <h3 class="text-center">All Categorias</h3><br/>
 
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="categoria in categorias" :key="categoria.id">
                <td>{{ categoria.id }}</td>
                <td>{{ categoria.title }}</td>
                <td>{{ categoria.description }}</td>
                <td>{{ categoria.created_at }}</td>
                <td>{{ categoria.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: categoria.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteCategoria(categoria.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                categorias: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/categorias')
                .then(response => {
                    this.categorias = response.data;
                });
        },
        methods: {
            deleteCategoria(id) {
                this.axios
                    .delete(`http://localhost:8000/api/categoria/delete/${id}`)
                    .then(response => {
                        let i = this.categorias.map(item => item.id).indexOf(id); // find index of your object
                        this.categorias.splice(i, 1)
                    });
            }
        }
    }
</script>