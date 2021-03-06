- 任意のツール等を使用して自動ビルド・自動テストができる
  - .circleci/config.ymlでci設定を行いcircleci.comで実施できるようにした

- 継続的インテグレーションを自分の言葉で説明できること
  - どのように実行するかの事例の口頭説明
    ```
    CircleCI
    configファイルを作ってGithubとCircleCIを連携させる
    ```
  - どのような理由で行うのか
    ```
    ビルド、テスト、デプロイを自動で行えるため
    ```
  - どのような観点に気をつけて実行するのか
    ```
    本番環境、ステージング環境など環境毎にステップを分けるとか
    ```

- 任意のツールを用いて自動テストが回せること
  - CircleCI

- 任意のツールについての特徴を自分の言葉で説明できること (任意の他のツールと比較して述べること)
  - どのような理由でそのツールを選定 or 良いと思った?
    ```
    Githubの機能との親和性の高さからGithub Actionsも候補として考えられる。
    これらの機能をそこまで求めてないならCircleCIほど枯れている技術ではなく発展途上なのでまだCircleCIでもよさそう。
    ```
  - そのツールで起こった一番大きな課題は何か? またそれはどのように解決した？
    ```
    本番デプロイでビルドしてdistをgit差分に含めないようにしたりとか
    CLIを使用すればローカルジョブで実行を確認できることとか
    ```
