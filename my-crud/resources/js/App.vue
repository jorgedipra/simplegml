<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">Laravel Vue CRUD simplegml</span>
        </div>
 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Home</router-link>
                    <router-link to="/Cat" class="nav-item nav-link">Categoria</router-link>
                    <router-link to="/Use" class="nav-item nav-link">Usuarios</router-link>
                    <router-link to="/addCat" class="nav-item nav-link">Add Categoria</router-link>
                    <router-link to="/addUse" class="nav-item nav-link">Add Usuario</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>
 
<script>
    export default {}
</script>