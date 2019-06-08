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
    <h1>에그 조르기(폼 방식) 데모 페이지</h1>
</header>
<article>
    <h1>요청할 내용</h1>
    <form method="get" action="<?= $ENDPOINT ?>">
        <ul>
            <li>
                <label for="wallet">지갑주소</label>
                <input id="wallet" type="text" name="wallet" value="<?= $OPTION_WALLET ?>" />
            </li>
            <li>
                <label for="amount">요청수량</label>
                <input id="amount" type="number" name="amount" value="<?= $OPTION_AMOUNT ?>" />
            </li>
            <li>
                <label for="memo">요청메모</label>
                <input id="memo" type="text" name="memo" value="<?= $OPTION_MEMO ?>" />
            </li>
            <li>
                <label for="success">성공시 리턴 URL</label>
                <input id="success" type="text" name="success" value="<?= $OPTION_SUCCESS ?>" />
            </li>
            <li>
                <label for="failed">실패시 리턴 URL</label>
                <input id="failed" type="text" name="failed" value="<?= $OPTION_FAILED ?>" />
            </li>
        </ul>
        <input type="submit" value="요청하기" />
    </form>
</article>
</body>
</html>

