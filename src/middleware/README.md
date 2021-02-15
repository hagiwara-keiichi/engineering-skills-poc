```
Webサーバの基本設定ができる

# 基準
- HTTPの仕様を理解している (RFC7540?)
HTTP クライアントとサーバーの通信のプロトコル 盗聴や改ざんができてしまう
HTTPS HTTPの通信部分をSSLで行う
サーバーからのリクエスト結果をステータスコードで伝える
HTTPでアクセス時にGETやPOSTなどのHTTPメソッドを指定する

HTTP2 
HTTP1から大幅に効率的に通信できるようにした規約、ストリームなどを用いて複数のリクエスト/レスポンスのやり取りを可能にしている
2015年から

HTTP3 
TCPで通信していたHTTP2以前から、UDPを使った通信規約
2020年から

- Webサーバを構築出来る
nginxなりapacheなりをインストールして起動する

- HTTPの仕様に沿ってWebサーバの設定が出来る
apacheはhttpd.confで設定する
sudo vi /etc/httpd/conf/httpd.conf
```

```
Webサーバのチューニングができる
- トラブルシューティングができる
- パフォーマンスチューニングを理解している

この辺の記事をみて調整できる
参考: https://www.atmarkit.co.jp/ait/articles/0509/16/news128.html
```

```
DBサーバの基本設定ができる

ユーザー作成、GRANTで権限の付与などができる
CREATE USER username@localhost IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON dbname.* TO "username"@"localhost";
SELECT user, host FROM mysql.user;

参考: https://www.dbonline.jp/mysql/user/
```

```
DBサーバの管理(運用)ができる
- DBサーバを構築出来る (応用)
- DBサーバをカスタマイズできる (configure, etc)


```

```
DBサーバーのチューニングができる
- トラブルシューティングができる
- パフォーマンスチューニングを理解している

リソースをいじりたい時はmy.cnfを修正したりする
参考: https://qiita.com/mamy1326/items/9c5eaee3c986cff65a55
```