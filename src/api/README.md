- RESTful API の設計・利用ができる（サーバサイドは実装もできると加点）
- 作っているAPI を自分の言葉で説明できること
  - 例: https://confl.arms.dmm.com/pages/viewpage.action?pageId=648332149#id-%E8%AA%8D%E8%A8%BC%E3%83%BB%E8%AA%8D%E5%8F%AF-DMM%E3%82%A2%E3%82%AB%E3%82%A6%E3%83%B3%E3%83%88%E3%81%A7%E3%81%AE%E8%AA%8D%E8%A8%BC

  - 該当チームの方針に従ったAPI設計ができる
    - GatewayはClientからRestful通信を受けてマイクロサービスを呼び出すBFFとして機能する
    - マイクロサービス間の通信規格はgrpcを利用して設計する

  - どのような良い点と悪い点があるか(pros and cons)
    - good
      - Gatewayに色々な共通のミドルウェアレベルの処理をもたせることができるが
    - bad
      - Gatewayでの責務をどこまでにするかの設計が難しい

  - どのような観点に気をつけて実行するのか
    - クライアントからセッションで送られてくるか、アクセストークンで送られてくるかでWebかアプリか判断する

- 任意のツールを用いて APIを実装できること
  - GatewayサービスはNode.js/Typescriptで構築している
  - https://github.com/dmm-com/salon-gateway
