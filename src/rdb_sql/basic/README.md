- 基本文法を理解し、仕様に基づき正しく実装できる

- DMLを理解し実装できる (Insert, Select, Update, Delete)
  - SELECT col_name1 [, col_name2 ...] FROM table_name
  - INSERT INTO tbl_name (col_name1, col_name2, ...) VALUES (value1, value2, ...);
  - UPDATE table_reference SET col_name1 = value1;
  - DELETE FROM tbl_name [WHERE where_condition]

- 一部の集計(group by, having句, サブクエリ, join)
  - group by カラム値を基準にデータをグループ化したいとき
    - SELECT col_name1 [, col_name2 ...] FROM table_name GROUP BY col_name, ...;
  - having group byでグループ化したデータの条件設定
    - SELECT col_name1 [, col_name2 ...] FROM table_name GROUP BY col_name, ... HAVING where_condition
  - サブクエリ SELECTで取得した結果を使いたいとき
    - SELECT col_name1 FROM table_name WHERE col_name1 = (SELECT col_name2 FROM table_name2 WHERE ...)
  - join テーブル同士を結合したいとき
    - SELECT table_name.col_name1 [, table_name.col_name2 ...] FROM table_name1 INNER JOIN tbl_name2 ON table_name1.col_name1 = table_name2.col_name2;

- 参考
  - https://www.dbonline.jp/mysql/
