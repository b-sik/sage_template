Personal Sage 9 template

`composer install && yarn && yarn start` to begin developing

use `Node 14.15.0` if problems with `yarn`

---
remember to add `config.json` to `/resources/assets/`
```
{
  "entry": {
    "main": [
      "./scripts/main.js",
      "./styles/main.scss"
    ],
    "customizer": [
      "./scripts/customizer.js"
    ]
  },
  "publicPath": "/wp-content/themes/sage_template",
  "devUrl": "http://example.test",
  "proxyUrl": "http://localhost:3000",
  "cacheBusting": "[name]_[contenthash]",
  "watch": [
    "app/**/*.php",
    "config/**/*.php",
    "resources/views/**/*.php"
  ]
}
```
