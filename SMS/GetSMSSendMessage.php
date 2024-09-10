<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_SMS.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/문자전송-API#GetSMSSendMessage
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SendKey = '';

    $Result = $BaroService_SMS->GetSMSSendMessage([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SendKey' => $SendKey,
    ])->GetSMSSendMessageResult;

    if ($Result->SendState < 0) { // 실패
        echo $Result->SendState;
    } else { // 호출 성공
        // 필드정보는 레퍼런스를 참고해주세요.
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
