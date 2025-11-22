import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin'; // Плагин для Laravel
import react from '@vitejs/plugin-react'; // Плагин для React
import tailwindcss from '@tailwindcss/vite'; // Плагин для TailwindCSS
import path from 'path'; // Для работы с путями

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',  // Убедитесь, что путь к стилям правильный
        'resources/js/app.js',    // Убедитесь, что путь к JS файлам правильный
      ],
      refresh: true,
    }),
    react(), // Добавляем поддержку React
    tailwindcss(), // Добавляем поддержку TailwindCSS
  ],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources'), // Убедитесь, что это правильно
    },
  },
  esbuild: {
    jsx: 'react', // Убедимся, что esbuild будет обрабатывать JSX
  },
  server: {
    watch: {
      usePolling: true, // Включаем polling, чтобы сервер работал на некоторых системах
    },
  },
});
