import './bootstrap';
import { createApp } from 'vue';

// Import components
import MyComponent from './About.vue';
import AnotherComponent from './Home.vue';
import ExampleComponent from './School.vue';
import FourthComponent from './/Skills.vue';

// Create Vue app and register components
const app = createApp({});

app.component('my-component', MyComponent);
app.component('another-component', AnotherComponent);
app.component('example-component', ExampleComponent);
app.component('fourth-component', FourthComponent);

app.mount('#app');