<?php
$SERVER_TYPE = "develop";

if ($SERVER_TYPE == "develop") {
    $ENDPOINT = "https://develop.eggauction.net/wallet/demand";
} else {
    $ENDPOINT = "https://eggauction.net/wallet/demand";
}
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
    <h1>에그 조르기 데모 페이지</h1>
</header>
<article>
    <h1>요청할 내용</h1>
    <form method="get" action="<?= $ENDPOINT ?>">
        <ul>
            <li>
                <label>지갑주소</label>
                <input type="text" name="wallet" value="c686f752-f727-4a8f-a103-9104bffff999" />
            </li>
            <li>
                <label>요청수량</label>
                <input type="number" name="amount" value="10" />
            </li>
            <li>
                <label>요청메모</label>
                <input type="text" name="memo" value="test123" />
            </li>
            <li>
                <label>성공시 리턴 URL</label>
                <input type="text" name="success" value="http://localhost:8080/result_success.php" />
            </li>
            <li>
                <label>실패시 리턴 URL</label>
                <input type="text" name="failed" value="http://localhost:8080/result_failed.php" />
            </li>
        </ul>
        <input type="submit" value="요청하기" />
    </form>
</article>
</body>
</html>

