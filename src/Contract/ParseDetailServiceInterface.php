<?php
declare(strict_types=1);
namespace GiocoPlus\ParseDetail\Contract;
/**
 * 解析遊戲詳情
 */
interface ParseDetailServiceInterface {
    /**
     * 遊戲詳情網址產生
     *
     * @param string $opCode 營商代碼
     * @param string $gameCode 遊戲代碼
     * @param string $betId 注單號
     * @return array
     */
    function genDetailUrl(string $opCode, string $gameCode, string $betId): array;
}

