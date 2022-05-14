# lv-setup

## Install

```bash
sh -c "$(curl -fsSL https://raw.githubusercontent.com/matuniverso/lv-setup/main/setup.sh)"
```

## Formatting (package.json)

```json
{
  "scripts": {
    "dev": "vite",
    "build": "vite build",
    "lint": "eslint --ext .ts,.vue --fix resources",
    "fix": "prettier --write resources/**/*.{ts,vue}"
  }
}
```
