<?php
declare(strict_types=1);

namespace myapp\test\end_to_end_test;

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

/**
 * Class Hello
 * @package myapp\test\end_to_end_test
 */
class Hello
{

    /**
     * Chromeを開いてスクリーンショットを撮る
     */
    public static function openChromeAndScreenshot()
    {
        // selenium
        $host = 'http://localhost:4444/wd/hub';

        // chrome ドライバーの起動
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

        // 指定URLへ遷移 (Google)
        $driver->get('https://www.google.co.jp/');

        // スクリーンショットを撮って保存する
        $file = __DIR__ . '/' . __METHOD__ . ".png";
        $driver->takeScreenshot($file);

        // ブラウザを閉じる
        $driver->close();
    }
}
