import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            '~/resources/scss/app.scss', // Percorso relativo della tua app SCSS
            '~/resources/js/app.js', // Percorso relativo della tua app JavaScript
        ]),
    ],
    resolve: {
        alias: {
            '~/resources': '/resources/', // Alias per la directory delle risorse
        },
    },
});
