import { defineConfig } from 'vite'
import path from 'path'

export default defineConfig({
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `@import "./resources/css/app.css";`
      }
    }
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname, '/resources/js'),
    }
  }
})
