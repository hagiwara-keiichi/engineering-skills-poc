# SRP (Single Responsibility Principle) 単一責務の原則

## 原則の説明

- あるモジュールが複数のアクターから利用されることは好ましくない
- なぜならあるアクターの何らかの処理の変更が別のアクターに影響を及ぼしてしまうケースがあるから
- 複数から参照されているならばクラスを分割するなどリファクタリングするべきである

## 原則に従って書いた自身のコード

- badは、calculatePay()、reportHours()から共通で呼び出されるregularHours()に変更を加えたときに、開発者が気が付かず片方しか満たさない想定外の損害が発生してしまうかもしれない
- goodは、アクターごとに適切にクラス分割し、Facadeパターンを適用しFacadeクラスを経由して呼び出す様になっているので、互いの変更が影響を及ぼすことがなくなる

## 参考

- クリーンアーキテクチャ 第7章 SRP:単一責任の原則