import {defineConfig} from 'vite'
// import react from '@vitejs/plugin-react'

// https://vitejs.dev/config/
export default defineConfig(({command}) => {
    const primary_url = process.env.DDEV_PRIMARY_URL || 'http://localhost';
    const origin = primary_url.replace(/:\d+$/, "") + `:5173`;
    return {
        server: {
            host: '0.0.0.0',
            port: 5173,
        },
        alias: {
            alias: [{find: '@', replacement: './app/client/src'}],
        },
        // base: (command === 'build') ? '/_resources/themes/mytheme/dist/' : '/', // TODO: .env variable, only on build
        base: './',
        publicDir: '/public',
        build: {
            // cssCodeSplit: false,
            outDir: './app/client/dist',
            manifest: true,
            sourcemap: true,
            rollupOptions: {
                input: {
                    'main.jsx': './app/client/src/js/main.js',
                    'main.scss': './app/client/src/scss/main.scss',
                    'editor.scss': './app/client/src/scss/editor.scss',
                },
            },
        },
        css: {
            devSourcemap: true,
        },
        plugins: [
            // react(),
        ]
    }
})
