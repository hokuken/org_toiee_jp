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

`/scss/main.scss` を `/main.css` へコンパイルします。
その際、 `minify` や `autoprefix` を行い、 `sourcemap` も生成します。

`/scss/**/*.scss` を監視します。
変更があれば (1) のタスクを実行します。


## ビルド

- `$ gulp build`

`/scss/main.scss` を `/main.css` へコンパイルします。
開発用のコンパイルと違い、 `sourcemap` は生成しません。
