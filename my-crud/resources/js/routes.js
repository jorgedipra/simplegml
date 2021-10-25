import AllCategoria from './components/AllCategoria.vue';
import AddCategoria from './components/AddCategoria.vue';
import EditCategoria from './components/EditCategoria.vue';

import AllUsuarios from './components/AllUsuario.vue';
import AddUsuarios from './components/AddUsuario.vue';
import EditUsuarios from './components/EditUsuario.vue';
 
export const routes = [
    {
        name: 'homeCat',
        path: '/Cat',
        component: AllCategoria
    },
    {
        name: 'addCat',
        path: '/addCat',
        component: AddCategoria
    },
    {
        name: 'editCat',
        path: '/editCat/:id',
        component: EditCategoria
    },
    {
        name: 'homeUse',
        path: '/Use',
        component: AllUsuarios
    },
    {
        name: 'addUse',
        path: '/addUse',
        component: AddUsuarios
    },
    {
        name: 'editUse',
        path: '/editUse/:id',
        component: EditUsuarios
    }
];