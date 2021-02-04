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
     * @param string $game_code
     * @param array $raw_detail
     * @return mixed
     */
    function genDetailUrl(string $game_code, array $raw_detail);
}

