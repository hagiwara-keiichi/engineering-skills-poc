```
MVCを理解しており、原則に従った実装ができる
```

```
1. MVCを自分の言葉で説明できること
Model,View,Controllerで構成されるアプリケーションのアーキテクチャ
Modelはビジネスロジックやテーブル操作などを担う
Viewはテンプレートの操作などを担う
ControllerはModelやViewの制御などを担う

  1.1 どのように実行するか
  クライアントからRestで通信してControllerで受け付け必要なModelやViewを制御する

  1.2 どのような理由で行うのか
  各レイヤーでの責務が分かりやすい
  正しく利用すれば変更もしやすい

  1.3 どのような観点に気をつけて実行するのか
  ControllerはModelとViewの操作だけの記述にしないと肥大化しやすい
  Controllerにがっつりビジネスロジックを書いてしまっているコードをよく見かけるため

2. MVCを実装できること
CakePHPならModel,View,Controller,Componentで構成される
ComponentはControllerとModelの間で緩衝剤的な役割を持ち、ビジネスロジックを記述したりModelやViewの操作を持ったりする
LaravelやZendでもMVCの構成で実装できる

```
