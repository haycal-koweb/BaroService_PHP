<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_KAKAOTALK.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카카오톡전송-API#SendATKakaotalk
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SenderID = '';
    $TemplateName = '';
    $SendDT = '';
    $SmsReply = '';
    $SmsSenderNum = '';
    $KakaotalkMessage = [
        'ReceiverNum' => '',
        'ReceiverName' => '',
        'Title' => '',
        'Message' => '',
        'SmsSubject' => '',
        'SmsMessage' => '',
    ];

    $Result = $BaroService_KAKAOTALK->SendATKakaotalk([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'TemplateName' => $TemplateName,
        'SendDT' => $SendDT,
        'SmsReply' => $SmsReply,
        'SmsSenderNum' => $SmsSenderNum,
        'KakaotalkMessage' => $KakaotalkMessage,
    ])->SendATKakaotalkResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
