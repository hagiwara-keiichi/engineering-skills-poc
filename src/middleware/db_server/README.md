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

docker-composeでmysql環境を構築できる
参考: https://qiita.com/A-Kira/items/f401aea261693c395966
```

```
DBサーバーのチューニングができる
- トラブルシューティングができる
- パフォーマンスチューニングを理解している

リソースをいじりたい時はmy.cnfを修正したりする
参考: https://qiita.com/mamy1326/items/9c5eaee3c986cff65a55
```
