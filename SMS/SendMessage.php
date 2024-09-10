<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_SMS.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/문자전송-API#SendMessage
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SenderID = '';
    $FromNumber = '';
    $ToName = '';
    $ToNumber = '';
    $Contents = '';
    $SendDT = '';
    $RefKey = '';

    $Result = $BaroService_SMS->SendMessage([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'FromNumber' => $FromNumber,
        'ToName' => $ToName,
        'ToNumber' => $ToNumber,
        'Contents' => $Contents,
        'SendDT' => $SendDT,
        'RefKey' => $RefKey,
    ])->SendMessageResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
