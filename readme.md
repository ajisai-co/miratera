# ベースファイル使用方法
## フォルダ構成(詳細は省略)
dist：作業フォルダ
public：静的出力フォルダ
WP：WordPress出力フォルダ
    ├─dist
    |   ├─assets
    |       ├─sass
    |       ├─js
    |       ├─images
    |   ├─ejs
    |   ├─package.json
    |   ├─gulpfile.js
    |   ├─convert.mjs
    |   └─optimise.mjs
    ├─public
    |   ├─assets
    |       ├─css
    |       ├─js
    |       ├─images
    |   ├─*.html
    ├─wp
    |   ├─functions
    |       ├─*.php
    |   ├─templete
    |       ├─*.php
    |   ├─*.php

## 静的構築時
1. コマンドラインで npm install 実行
2. コマンドラインで npm install -D gulp 実行（gulpをプロジェクトファイル内にインストール）
3. 画像追加
4. コマンドラインで npm run optimise 実行（圧縮）
5. コマンドラインで npm run convert 実行（webp変換）
6. コマンドラインで npx gulp 実行
7. 構築開始

## WP構築時
静的からWPに移った際も、scssやjsは変わらずdistの中で作業します。出力先の切り替えをお願いします。
1. public/assets を丸ごと wp直下にコピーする
2. 各ファイルの出力先を変更
   【対象ファイル】※コメントアウトで残しているので切り替えてください。”キリカエ”で検索
   ・gulpfile.js
   ・optimise.mjs
   ・convert.mjs
3. コマンドラインで npx gulp 実行
4. 構築開始
※画像追加時は静的構築時の3,4を都度実行する。

