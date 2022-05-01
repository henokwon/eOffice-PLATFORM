import { createRouter, createWebHistory } from 'vue-router'
import DepartementsIndex from '../components/departements/DepartementsIndex.vue'
import CustomerFormComponent from '../components/eService/CustomerFormComponent.vue'
import LeaveForm from '../components/eService/LeaveForm.vue'
import TourForm from '../components/eService/TourForm.vue'
const routes = [
    {
        path: '/departement',
        name: 'departements.index',
        component: DepartementsIndex
    },
    {
        path: '/eService/customer-form',
        component: CustomerFormComponent,
    },
    {
        path: "/eService/leave-form",
        component: LeaveForm,
    },
    {
        path: '/eService/tour-form',
        component: TourForm,
    },
];

export default createRouter({
    history: createWebHistory(),
    routes
})