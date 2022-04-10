import { createRouter, createWebHistory } from 'vue-router'
import DepartementsIndex from '../components/departements/DepartementsIndex.vue'
import CustomerFormComponent from '../components/eService/customerFormComponent.vue'
const routes = [
    {
        path: '/departement',
        name: 'departements.index',
        component: DepartementsIndex
    },
    {
        path: '/customer-form',
        component: CustomerFormComponent,
    },
];

export default createRouter({
    history: createWebHistory(),
    routes
})