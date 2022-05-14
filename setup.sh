#!/bin/bash

# Colors
BLUE="\e[34m"
ENDCOLOR="\e[0m"

# laravel-vite
npx @preset/cli apply laravel:inertia --no-pest

# composer install
composer require --dev -n friendsofphp/php-cs-fixer
curl -O https://raw.githubusercontent.com/matuniverso/lv-setup/main/.php-cs-fixer.php
echo .php-cs-fixer.cache >> .gitignore
vendor/bin/php-cs-fixer fix

# node install
npm install -D \
    eslint \
    eslint-config-standard \
    eslint-plugin-import \
    eslint-plugin-n \
    eslint-plugin-promise \
    eslint-plugin-vue \
    @typescript-eslint/eslint-plugin \
    @typescript-eslint/parser \
    eslint-config-prettier \
    prettier \
    @headlessui/vue \
    @tailwindcss/forms

curl -O https://raw.githubusercontent.com/matuniverso/lv-setup/main/.eslintrc.json
curl -O https://raw.githubusercontent.com/matuniverso/lv-setup/main/.prettierrc
npx eslint --ext .ts,.vue --fix resources
npx prettier --write resources/**/*.{ts,vue}
sed 's/plugins:\ \[]/plugins:\ \[require('@tailwindcss\\/forms')]/g' tailwind.config.js

# finishing
rm -rf tests/Unit
touch database/database.sqlite
php artisan optimize:clear
npm run build

echo -e "\n${BLUE}Tudo certo meu parceiro! 😎${ENDCOLOR}"
