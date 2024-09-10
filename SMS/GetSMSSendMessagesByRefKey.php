<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_SMS.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/문자전송-API#GetSMSSendMessagesByRefKey
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $RefKey = '';

    $Result = $BaroService_SMS->GetSMSSendMessagesByRefKey([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'RefKey' => $RefKey,
    ])->GetSMSSendMessagesByRefKeyResult;

    $SmsMessages = !is_array($Result->SMSMessage) ? [$Result->SMSMessage] : $Result->SMSMessage;

    if ($SmsMessages[0]->SendState < 0) { // 실패
        echo $SmsMessages[0]->SendState;
    } else { // 호출 성공
        foreach ($SmsMessages as $SmsMessage) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($SmsMessage);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
