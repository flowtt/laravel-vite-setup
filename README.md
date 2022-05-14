# lv-setup

## Install

```bash
sh -c "$(curl -fsSL https://raw.githubusercontent.com/matuniverso/lv-setup/main/setup.sh)"
```

## Post-install

### tailwind.config.js
```js
plugins: [require('@tailwindcss/forms')]
```

### resources/scripts/main.ts
```js
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init()
```

## Formatting (package.json)

```json
"scripts": {
    "lint": "eslint --ext .ts,.vue --fix resources",
    "fix": "prettier --write resources/**/*.{ts,vue}"
}
```
