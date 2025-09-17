import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js',
            'resources/css/social-media-marketing.css','resources/js/social-media-marketing.js', 
            'resources/css/brand-strategy.css', 'resources/js/brand-strategy.js', 
            'resources/css/content-creation.css' ,'resources/js/content-creation.js',
            'resources/css/search-engine-optimisation.css' ,'resources/js/search-engine-optimisation.js',
            'resources/css/ecommerce-development.css' ,'resources/js/ecommerce-development.js',
            'resources/css/web-development-services.css' ,'resources/js/web-development-services.js',  ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // This is the output directory
        manifest: true,
    },
});