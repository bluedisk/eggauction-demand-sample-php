<?php
$SERVER_TYPE = "develop";

if ($SERVER_TYPE == "develop") {
    $ENDPOINT = "https://develop.eggauction.net/wallet/demand";
} else {
    $ENDPOINT = "https://eggauction.net/wallet/demand";
}

// 전달할 설정 기본값
$OPTION_WALLET = "c686f752-f727-4a8f-a103-9104bffff999";
$OPTION_AMOUNT = "10";
$OPTION_MEMO = "test-demand-1";
$OPTION_SUCCESS = "https://demo.eggauction.net/result_success.php";
$OPTION_FAILED = "https://demo.eggauction.net/result_failed.php";

// 링크 URL로 만들기
$LINK = $ENDPOINT . "?" . http_build_query(array(
        'wallet' => $OPTION_WALLET,
        'amount' => $OPTION_AMOUNT,
        'memo' => $OPTION_MEMO,
        'success' => $OPTION_SUCCESS,
        'failed' => $OPTION_FAILED
    ));
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>에그 조르기 데모</title>
    <meta name="description" content="에그 조르기 데모">
</head>
<body>
<header>
    <h1>에그 조르기(링크 방식) 데모 페이지</h1>
</header>
<article>
    <h1>요청할 내용</h1>
    <ul>
        <li>
            <p>지갑주소: <?= $OPTION_WALLET ?></p>
        </li>
        <li>
            <p>요청수량: <?= $OPTION_AMOUNT ?></p>
        </li>
        <li>
            <p>요청메모: <?= $OPTION_MEMO ?></p>
        </li>
        <li>
            <p>성공시 리턴 URL: <?= $OPTION_SUCCESS ?></p>
        </li>
        <li>
            <p>실패시 리턴 URL: <?= $OPTION_FAILED ?></p>
        </li>
    </ul>
    <a href="<?= $LINK ?>"><h2>요청하기</h2></a>
</article>
</body>
</html>

