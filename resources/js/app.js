import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import DrawingContent from './components/DrawingContent.vue'
app.component('example-component', ExampleComponent);
app.component('drawing-content', DrawingContent);

app.mount('#app');
