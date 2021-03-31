<?php
declare(strict_types=1);
namespace GiocoPlus\Detail\Contract;
/**
 * 解析遊戲詳情
 */
interface DetailServiceInterface {
    /**
     * 遊戲詳情網址產生
     * @param string $gameCode 遊戲代碼
     * @param array $rawDetail 需解析的原始資料
     * @param string $lang 語系
     * @return string
     */
    function genUrl(string $gameCode, array $rawDetail, string $lang = 'zh'): string;
}

