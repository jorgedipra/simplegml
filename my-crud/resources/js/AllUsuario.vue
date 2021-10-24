<template>
    <div>
        <h3 class="text-center">All Usuarios</h3><br/>
 
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last_name</th>
                <th>Document</th>
                <th>Email</th>
                <th>Country</th>
                <th>Adress</th>
                <th>Telephone</th>

                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="usuario in usuarios" :key="usuario.id">
                <td>{{ usuario.id }}</td>
                <td>{{ usuario.name }}</td>
                <td>{{ usuario.last_name }}</td>
                <td>{{ usuario.document }}</td>
                <td>{{ usuario.email }}</td>
                <td>{{ usuario.country }}</td>
                <td>{{ usuario.adress }}</td>
                <td>{{ usuario.telephone }}</td>

                <td>{{ usuario.created_at }}</td>
                <td>{{ usuario.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: usuario.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteUsuario(usuario.id)">Delete</button>
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
                usuarios: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/usuarios')
                .then(response => {
                    this.usuarios = response.data;
                });
        },
        methods: {
            deleteUsuario(id) {
                this.axios
                    .delete(`http://localhost:8000/api/usuario/delete/${id}`)
                    .then(response => {
                        let i = this.usuarios.map(item => item.id).indexOf(id); // find index of your object
                        this.usuarios.splice(i, 1)
                    });
            }
        }
    }
</script>