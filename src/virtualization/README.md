- Dockerなどのツールを利用し、コンテナに対する基本的な操作ができる
- コンテナ（イメージ）をビルドできる

```
Dockerfileを作成してコードによるサーバー構築ができる
docker-composeを作成して複数コンテナの環境構築ができる

https://qiita.com/hagyyyy1992/items/99e6420103e582f19b61
https://qiita.com/hagyyyy1992/items/959c115e0a5001972604
```

- Dockerなどのツールを利用し、コンテナに対する基本的な操作ができる ※Dockerなど使ってない事業部の場合、自学自習の成果物と評価者からのヒアリング
    - コンテナの新規作成、起動、停止、再起動、削除ができる
    - コンテナの一覧表示や、CPU数等の設定変更が出来る
```
・イメージの一覧
docker images
・「すべての」イメージを表示（デフォルトは中間コンテナを非表示）
docker images -a
・すべてのイメージを強制削除
sudo docker rmi -f $(sudo docker images -qa)
・「現在起動している」コンテナ
docker ps
・「すべての」コンテナ
docker ps -a
・すべてのコンテナを強制削除
sudo docker rm -f $(sudo docker ps -qa)
```

- コンテナ（イメージ）をビルドできる ※Dockerなど使ってない事業部の場合、自学自習の成果物と評価者からのヒアリング
    - 基本的なwebサーバ構成について、Dockerfileなどを新規で用意してビルドできる
    - 既存のDockerfileなどを編集できる
    - 既存のDockerfileなどを利用してビルドできる
```
実務で使っている
他の項目でも使っている
```

- docker-compose を使用して複数のコンテナから成るサービスを構築できる
```
実務で使っている
他の項目でも使っている
```
