- 概念設計と論理設計、物理設計ができる (ER図, テーブル定義, 正規化, 非正規化)

- 業務で特定RDBMSを利用していればその仕様、そうでなければSQL2011標準の仕様にすること

- DDLを理解し実装できる
  - CREATE TABLE [IF NOT EXISTS] db_name.tbl_name (col_name data_type, ...)
  - DROP TABLE [IF EXISTS] tbl_name [, tbl_name] ...
  - ALTER TABLE tbl_name RENAME COLUMN old_col_name TO new_col_name

- 第1～第3正規形を理解している
  - 非正規系 1行のレコードの中に同じ項目が繰り返し存在している表
  - 第1正規形 非正規系から繰り返し部分を取り除いた表
  - 第2正規形 第1正規形から部分関数従属性を排除した表
  - 第3正規形 第2正規形から推移的関数従属性を排除した表

- ER図を書くことができる
  - https://confl.arms.dmm.com/pages/viewpage.action?pageId=714965657&preview=/714965657/715169561/carib-account-db-architect.png

- 非正規化
  - 正規化を進めることでデータの矛盾や重複を発生しにくくすることができるが、
  - めったに更新削除の発生しない粒度まで正規化を進めるとデータ取得のクエリが難しくなったり、
  - 必要以上に関係データベースが複雑になる弊害もあったりするので正規化を進めずにとどめたりする
