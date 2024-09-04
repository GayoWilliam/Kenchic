import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',  // Listen on all interfaces
        port: 5173,        // You can change this to the desired port
        hmr: {
            host: '192.168.6.80', // Your Ubuntu server's IP address
        },
    },
});
