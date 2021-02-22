<?php
declare(strict_types=1);

namespace myapp\dry;

/**
 * Class Good
 *
 * @package myapp\dry
 */
class Good
{
    public function previewAction()
    {
        $this->processingA();
        $request = $this->getRequest();
        if ($request['pc']) {
            $this->pcPreviewProcessing();
        } elseif ($request['sp']) {
            $this->spPreviewProcessing();
        }
        $this->processingB();
    }

    private function processingA()
    {
        // 処理A
    }

    private function processingB()
    {
        // 処理B
    }

    private function pcPreviewProcessing()
    {
        // PCプレビュー用処理
    }

    private function spPreviewProcessing()
    {
        // PCプレビュー用処理
    }
}
