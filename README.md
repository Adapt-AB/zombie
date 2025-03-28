# ZOMBIE

**A WordPress Starter Theme by Adapt**

**Version 1.0**

Zombie is a bare-bones WordPress theme designed as a starting point for theme designers. It comes pre-integrated with Twitter Bootstrap and full Sass support, making it easy to customize and extend. This project also uses Composer for PHP dependencies and npm for front-end build tasks.

---

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [File Structure](#file-structure)
- [Development Workflow](#development-workflow)
- [Production Build](#production-build)
- [Dependencies](#dependencies)
- [Contributing](#contributing)
- [License](#license)

---

## Features

- **WordPress Starter Theme:** Minimal setup to kickstart theme development.
- **Bootstrap Integration:** Twitter Bootstrap is included for responsive design.
- **Sass Support:** Write modular styles with SCSS and compile them via npm scripts.
- **Automated Build Process:** Use npm scripts to build, watch, and minify CSS and JS.
- **Environment Variables:** Manage configuration with a .env file (using phpdotenv and Composer).

---

## Installation

1. **Set Up Your Project Directory:**

    ```bash
    mkdir example.local && cd example.local
    ```

2. **Clone the Repository:**

    ```bash
    git clone git@github.com:Adapt-AB/zombie.git .
    ```

3. **Install Composer Dependencies:**

    ```bash
    composer install
    ```

4. **Download WordPress Core:**

    ```bash
    wp core download
    ```

5. **Navigate to the Theme Folder:**

    ```bash
    cd wp-content/themes/zombie
    ```

6. **Install npm Dependencies:**

    ```bash
    npm install
    ```

---

## File Structure

A quick overview of the key directories and files:

- **wp-content/themes/zombie/**
  - `assets/` – Contains your source SCSS and JS files.
  - `dist/` – Build output (compiled CSS/JS) is generated here.
  - `partials/` – SCSS partials for modular styling.
  - `bs-config.js` – BrowserSync configuration file.
  - `package.json` & `package-lock.json` – npm configuration and dependency lock file.

- **Root Directory:**
  - `.env-zombie` – Environment variables for configuration (e.g., database credentials, local URL). Rename this file `.env`
  - `wp-config-zombie.php` – Modified config file to use environment variables. Rename this file `wp-config.php` if needed.
  - `composer.json` & `composer.lock` – PHP dependency management via Composer.
  - Core WordPress files are not version-controlled.

---

## Development Workflow

- **Local Development Build (without BrowserSync):**

    ```bash
    npm run dev
    ```

    This command will:
    - Clean the `dist` folder.
    - Build CSS (compiling Sass and processing with PostCSS).
    - Build JS (concatenating and minifying).
    - Start watchers for SCSS and JS changes.

- **Development with BrowserSync (Live Reload):**

    ```bash
    npm run sync
    ```

    This runs the same development build as above but additionally launches BrowserSync to proxy your local WordPress site and inject changes automatically.

---

## Production Build

To generate production-ready assets (without source maps and with full minification):

```bash
npm run prod
```

---

## Dependencies

### PHP Dependencies (via Composer)
- **vlucas/phpdotenv:** Loads environment variables from a .env file.

### Front-End Dependencies (via npm)
- **Bootstrap:** Version ^5.3.3
- **Sass:** For compiling SCSS.
- **PostCSS, Autoprefixer, cssnano:** For processing and minifying CSS.
- **Concat-cli & Terser:** For concatenating and minifying JS.
- **BrowserSync:** For live-reloading in development.
- **Concurrently & Onchange:** For running tasks concurrently and watching for file changes.
- **Rimraf:** For cleaning build directories.
