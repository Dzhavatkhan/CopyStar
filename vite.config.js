import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/admin.css','resources/css/log.css','resources/js/profile.js', 'resources/css/profile.css', 'resources/css/reg.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
