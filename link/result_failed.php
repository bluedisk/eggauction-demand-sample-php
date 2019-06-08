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
    <h1>에그 조르기 데모 결과 실패 페이지</h1>
</header>
<article>
    <h1>요청 실패!</h1>
    <?php
    echo "결과 코드: " . $_GET['code'] . " = ";

    switch ($_GET['code']) {
        case "7010":
            echo "받을 대상자 존재 하지 않음";
            break;
        case "7060":
            echo "받을 대상자의 지갑이 비활성화 되어 있음";
            break;
        case "7090":
            echo "받을 대상자의 인증이 완료 되지 않은 상태";
            break;
        case "6010":
            echo "보낼 대상자의 지갑이 비활성화 되어 있음";
            break;
        case "6060":
            echo "보낼 대상자의 인증이 완료 되지 않은 상태";
            break;
        case "6090":
            echo "보낼 대상자의 처리 가능 수량 초과";
            break;
        case "5050":
            echo "보내기 처리중 에러";
            break;
        case "5060":
            echo "자신의 지갑으로 전송시";
            break;
        case "5070":
            echo "sms 인증 문자 불일치";
            break;
    }
    ?>
</article>
</body>
</html>

