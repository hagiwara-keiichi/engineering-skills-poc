# LSP (Liskov-Substitution Principle) リスコフの置換原則

## 原則の説明
- クラスAと依存するクラスBがあるなら、どちらを使っても動作が保証されるようになっていなければならない
- これが満たされないなら依存関係を解消して、インターフェースにだけ依存させるべき
- LSPは継承やインターフェースの使い方の指針としてだけでなく、アーキテクチャの設計指針でも置換可能性を違反しない様に考えるべきである

## 原則に従って書いた自身のコード
- bad
  - Rectangleはheightとwidthを独立して変えることができる
  - Squareはheightとwidthを同時に変える必要がある
  - SquareはRectangleを継承している
  - ユーザーがSquareもRectangleであると信じてSquareを利用すると想定外の結果になる(確かに数学的にはSquareはRectangleではあるが)
  - UserがRectangleとSquareの2つの派生型に依存してしまっている問題
- good
  - Userが2つの派生型に依存しないようにLSPを満たしている
  - UserはPolygonだけに依存させるようにする

## 参考
- クリーンアーキテクチャ 第9章 LSP: リスコフの置換原則
