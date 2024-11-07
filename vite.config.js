import { defineConfig } from 'vite';
import { glob } from 'glob';
import { resolve } from 'node:path';
import injectHTML from 'vite-plugin-html-inject';
import { createSvgIconsPlugin } from 'vite-plugin-svg-icons';

export default defineConfig(() => {
   return {
      root: 'src',
      plugins: [
         injectHTML(),
         createSvgIconsPlugin({
            iconDirs: [resolve(process.cwd(), 'src/public/icon')],
            symbolId: '[name]',
            customDomId: 'sprite',
         }),
      ],

      css: {
         preprocessorOptions: {
            scss: {
               silenceDeprecations: ['legacy-js-api'],
            },
         },
      },
      build: {
         sourcemap: true,
         rollupOptions: {
            input: glob.sync('./src/*.html'),
            output: {
               manualChunks(id) {
                  if (id.includes('node_modules')) {
                     return 'vendor';
                  }
               },
               entryFileNames: (chunkInfo) => {
                  if (chunkInfo.name === 'commonHelpers') {
                     return 'commonHelpers.js';
                  }
                  return '[name].js';
               },
               assetFileNames: (assetInfo) => {
                  if (assetInfo.name && assetInfo.name.endsWith('.html')) {
                     return '[name].[ext]';
                  }
                  return 'assets/[name]-[hash][extname]';
               },
            },
         },
         outDir: '../dist',
         assetsDir: 'assets',
         emptyOutDir: true,
      },
   };
});
