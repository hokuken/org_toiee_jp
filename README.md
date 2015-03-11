# toiee.jp 用 QHM テンプレート

## 開発

### 準備

QHMをインストールしたフォルダ内にレポジトリを clone します。

- `$ cd skin/hokukenstyle`
- `$ git clone git@github.com:hokuken/org_toiee_jp`
- `$ cd org_toiee_jp`
- `$ npm install`


### 開発

- `$ gulp`

1. `/scss/main.scss` をコンパイルして `minify` して `/main.css` として設置します。
2. `/scss/**/*.scss` を監視して変更があれば (1) のタスクを実行します。
