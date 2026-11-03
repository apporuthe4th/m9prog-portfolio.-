# Front-end build

Run these commands from this theme directory:

- `npm ci` installs the exact dependencies recorded in `package-lock.json`.
- `npm run dev` watches the Sass and JavaScript sources while developing.
- `npm run build` creates the production assets in `dist/`.

Webpack compiles `src/js/main.js` and its `src/scss/main.scss` import into `dist/main.js` and `dist/main.css`. The Sass file imports Bootstrap and overrides its primary color, page background, text color, and spacing scale.

WordPress loads only the compiled files. Include `dist/` with the deployed theme; `style.css` contains the WordPress theme metadata.
