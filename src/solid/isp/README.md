# ISP (Interface segregation principle) インターフェース分離の原則

## 原則の説明
- インターフェースをファットにしてはいけない
- 何でも詰め込むと必要のない依存が発生してしまう
- 適切にインターフェースを分割すること

## 原則に従って書いた自身のコード
- bad
    - BardもDogもAnimalを継承している
    - runはBardには必要だがDogには必要がないので、不要な依存が発生している
- good
    - AnimalがFlyableとWalkableを継承するようにした
    - Flyableはrunを定義する
    - Walkableはwalkを定義する
    - DogはAnimalを継承せずにWalkableを継承しているので、flyを実装せずに済む

## 参考
- クリーンアーキテクチャ 第10章 ISP: インターフェース分離の原則
