import { createRouter, createWebHistory } from 'vue-router';
import AttendanceView from '@/views/AttendanceView.vue';
import ClearanceView from '@/views/ClearanceView.vue';
import HomeView from '@/views/HomeView.vue';

const routes = [
  {
    path: '/Home',
    name: 'Home',
    component: HomeView,
  },
  {
    path: '/attendance',
    name: 'Attendance',
    component: AttendanceView,
  },
  {
    path: '/clearance',
    name: 'Clearance',
    component: ClearanceView,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
