<?php
declare(strict_types=1);
namespace GiocoPlus\ParseDetail\Contract;
/**
 * 解析遊戲詳情
 */
interface ParseDetailServiceInterface {
    /**
     * 產生遊戲詳情網址
     *
     * @param string $gameCode 遊戲代碼
     * @param array $rawDetail 原始詳情
     * @return mixed
     */
    function genDetailUrl(string $gameCode, array $rawDetail);
}

