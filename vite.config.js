import { defineConfig } from 'vite';

export default defineConfig({
  server: {
    // Vite server configuration if running via Vite
    port: 3000,
  },
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: 'assets/js/main.js',
      output: {
        entryFileNames: 'assets/index.js',
        assetFileNames: 'assets/index.[ext]'
      }
    }
  }
});
