#!/bin/bash

# Colors
BLUE="\e[34m"
GREEN="\e[32m"
ENDCOLOR="\e[0m"

echo "\n${BLUE}Setting up your project...${ENDCOLOR}"

# laravel-vite
npx @preset/cli apply laravel:inertia --no-pest

# composer install
composer require --dev -n friendsofphp/php-cs-fixer
curl -O https://raw.githubusercontent.com/matphp/lv-setup/main/.php-cs-fixer.php
echo .php-cs-fixer.cache >> .gitignore
vendor/bin/php-cs-fixer fix

# node install
npm install -D \
    eslint \
    prettier \
    eslint-config-prettier \
    eslint-config-standard \
    eslint-plugin-import \
    eslint-plugin-n \
    eslint-plugin-promise \
    eslint-plugin-vue \
    @typescript-eslint/eslint-plugin \
    @typescript-eslint/parser \
    @inertiajs/progress \
    @tailwindcss/forms \
    @headlessui/vue

curl -O https://raw.githubusercontent.com/matphp/lv-setup/main/.eslintrc.json \
     -O https://raw.githubusercontent.com/matphp/lv-setup/main/.prettierrc

npx eslint --ext .ts,.vue --fix resources
npx prettier --write resources/**/*.{ts,vue}

# finishing
php artisan optimize:clear
npm run build

echo "\n${GREEN}All done bro! 😎${ENDCOLOR}"
echo "${GREEN}Execute \"php artisan serve\" to see your app\!${ENDCOLOR}"
