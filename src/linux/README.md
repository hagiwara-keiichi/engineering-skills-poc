```
- ユーザーとグループを適切に設定できる

コンテナまたはEC2インスタンスに入り以下の記事を参考にユーザーとグループの追加、編集、削除ができた
https://kazmax.zpp.jp/linux_beginner/
```

```
- ファイルパーミッションを適切に設定できる

chmodでファイルのパーミッションを変更する（所有者、グループ、その他の権限を付与する）
chmod アクセス権限 ファイル名
```

```
- ifconfig, route, ip, iptables といったコマンドを使用してネットワーク調査ができる

Webサーバー用のEC2インスタンス上で以下のコマンドを実行して確認できる
ifconfig ネットワークインターフェースの確認、自分のIPアドレスを知りたいときなどに使う
route ルーティングテーブルの確認など
ip ネットワークデバイスのIPアドレスを調べる
iptables ファイアウォールの設定など
参考
https://www.atmarkit.co.jp/ait/articles/0109/29/news004.html
https://www.atmarkit.co.jp/ait/articles/0111/01/news002.html
https://www.atmarkit.co.jp/ait/articles/1709/22/news019.html
https://www.atmarkit.co.jp/ait/articles/0503/18/news122.html
```

```
- ps, sar, vmstat といったコマンドを使用してボトルネック調査ができる

Webサーバー用のEC2インスタンス上で以下のコマンドを実行して確認できる
ps プロセス情報
sar CPU使用率およびディスクI/O
vmstat メモリやCPUの情報だけでなく、スワップやプロセスの情報を出力する
参考
https://sisidovski.hatenablog.com/entry/2015/07/07/072150
```

```
- 必要に応じて、ミドルウェアやライブラリをコンパイルできる

以下の記事を参考にEC2インスタンス上にwordpressをインストールして構築できる
https://dev.classmethod.jp/articles/sales-ec2-wordpress-launch/
```

```
- 必要に応じて、initスクリプトやsystemd unitファイルを作成できる

以下の記事を参考にEC2インスタンスの起動設定ができる
https://dev.classmethod.jp/articles/ec2shell/
```
