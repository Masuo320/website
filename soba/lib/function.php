<?php
/**
 * XSS対策の参照名省略
 *
 * @param string string
 * @return string
 *
 */
function h(?string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

/**
 * 登録編集の出し分け
 *
 * @param string $action
 * @return string
 */

function showAction(string $action): string
{
    $actions=[
        'create' => '登録',
        'edit'   => '編集'
    ];
    return $actions[$action];
}
