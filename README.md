<!-- readme.md -->

# データエンジニアカタパルトPhase1のハンズオン学習内容
CRAD操作を実装したSNSを作成.

### 1限目
git, githubの学習.  
gitコマンド, add, commit, pushを学習  

### 2限目
#### gitブランチの学習. laravelのログイン機能, テストデータの作成.  
gitでブランチを利用した開発方法を学習  
#### Laravel Breezeの導入 →認証機能を追加するスターターキット  
seeder機能を利用. seederはデータベースにデータを追加する機能  

### 3限目
#### モデルとテーブルの作成.  
テーブルの用意  
1. Tweetモデル, マイグレーションファイル, コントローラ, ファクトリを作成.  
2. マイグレーションファイルにtweetカラムとuser_idカラムを追加する.  
モデルファイルの設定
1. `app/Models/User.php`ファイルのUserモデルにTweetモデルとの関連を追加する.  
2. `app/Models/Tweet.php`ファイルのTweetモデルにUserモデルとの関連を追加する.  
ルーティング  
`routes/web.php`ファイルにTweetに関するルートを設定する. 

<テーブル名の単数形>_<カラム名>  