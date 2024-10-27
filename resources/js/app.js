import { createApp } from 'vue';
import App from './components/App.vue';
import Profile from './components/Profile.vue';

const app = createApp(App);

app.component('profile', Profile); // Registra el componente Profile

app.mount('#app');
