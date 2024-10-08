<!-- readme.md -->

# データエンジニアカタパルトPhase1のハンズオン学習内容
CRAD操作を実装したSNSを作成.

## 1限目
git, githubの学習.  
gitコマンド, add, commit, pushを学習  

## 2限目
### gitブランチの学習. laravelのログイン機能, テストデータの作成.  
gitでブランチを利用した開発方法を学習  
### Laravel Breezeの導入 →認証機能を追加するスターターキット  
seeder機能を利用. seederはデータベースにデータを追加する機能  

## 3限目
### モデルとテーブルの作成.  
テーブルの用意  
1. Tweetモデル, マイグレーションファイル, コントローラ, ファクトリを作成.  
2. マイグレーションファイルにtweetカラムとuser_idカラムを追加する.  
モデルファイルの設定
1. `app/Models/User.php`ファイルのUserモデルにTweetモデルとの関連を追加する.  
2. `app/Models/Tweet.php`ファイルのTweetモデルにUserモデルとの関連を追加する.  
ルーティング  
`routes/web.php`ファイルにTweetに関するルートを設定する.  

### Bladeテンプレートの作成
1. ビューファイルの作成  
   tailwindcssを使用したスタイリング
2. 各画面へのリンク追加  
   ナビゲーションバーにリンクを追加

### 一覧画面と作成画面の実装
1. コントローラのメソッド  
   indexメソッド, createメソッド
2. 一覧, 作成画面の作成  
3. Tailwindcssの適用

### Tweet作成処理と詳細画面の実装
1. Tweet作成処理の実装
   storeメソッドに記載
2. Tweet詳細画面の実装
   showメソッドに記載
3. 詳細画面の作成

## 4限目
### Tweet更新処理と削除処理の実装
1. Tweet更新画面への遷移の実装
   Controller層の作成
2. 編集画面の作成
   viewsディレクトリにあるファイルを編集して編集画面を作成する
   ※ HTMLにはPUTメソッドが存在しないのでPHPの機能を利用してPUTメソッドを実装する
3. 更新処理の実装
   Controller層の作成
4. Tweet削除処理の実装

### Tweet CRUD 処理のテスト
Pestを利用してテストコードを作成する  
   testsフォルダにテストコードを書く

## 5限目
1. 中間テーブルの作成と各モデルの連携
2. コントローラにLike機能の実装
3. ビューファイルにlikeボタンを設置

### Like機能の実装(多対多のリレーション)
1. 中間テーブルの作成と各モデルの連携
2. マイグレーションファイルの記述と実行
3. モデルの編集

### Like機能の実装(多対多データの操作)
1. コントローラの作成
2. ルーティングの追加
3. Like機能の実装
4. likeボタンの設置(ビューファイル編集)

## 6限目
### Like機能のテスト
テストをコマンドで作成する  
- likeおよびdislikeは実行後に元ページにリダイレクトされるため, 302が帰ってくることを確認する
- likeはtweet_userテーブルにデータが追加されることを確認する
- dislikeは一度likeしてからdislikeを行い, tweet_userテーブルからデータが削除されることを確認する

### Comment機能の実装(ファイルの準備と設定)
1. 必要なファイルの作成
2. マイグレーションファイルの編集
3. モデルファイルの設定
4. ビューファイルの作成
5. ルーティングの設定

### Comment作成処理と詳細画面の実装
1. Tweet詳細画面にCommentを一覧表示する
2. コメント作成画面の作成
3. Comment作成処理
4. Commentの詳細画面

### Comment更新処理と削除処理の実装
1. 編集と削除の実装
2. 更新処理
3. 削除処理

### Comment CRUD処理のテスト
1. テストで使用するFactoryの準備
2. テストコードの作成

## 7限目
### 検索機能実装の準備（ファイルの準備と設定）
1. 検索用テストデータの作成
2. ビューファイルの作成
3. ルーティングの設定

### 検索機能の実装
1. リンクの設定
2. 検索処理の実装
3. 検索画面の実装

### 検索機能のテスト
1. テストコードの作成

## 8限目
### ユーザページの実装
1. ユーザページの作成
2. ルーティング設定
3. コントローラの実装
4. ビューの実装
5. リンクの追加

### フォロー機能の実装（テーブルとデータの設定）
1. 中間テーブルの作成
2. モデルの設定
3. コントローラの実装
4. ルーティング設定
5. ビューの実装

### フォロー機能の実装（フォローと表示の追加）
1. ユーザページに自分とフォローユーザのTweetを表示

### フォロー機能のテスト
1. テストファイルの作成
2. テストの実装