<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_SMS.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/문자전송-API#SendMessages
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SenderID = '';
    $SendCount = 2;
    $CutToSMS = false;
    $Messages = [
        'XMSMessage' => [
            [
                'SenderNum' => '',
                'ReceiverName' => '',
                'ReceiverNum' => '',
                'Message' => '',
                'RefKey' => '',
            ],
            [
                'SenderNum' => '',
                'ReceiverName' => '',
                'ReceiverNum' => '',
                'Message' => '',
                'RefKey' => '',
            ]
        ]
    ];
    $SendDT = '';

    $Result = $BaroService_SMS->SendMessages([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'SendCount' => $SendCount,
        'CutToSMS' => $CutToSMS,
        'Messages' => $Messages,
        'SendDT' => $SendDT,
    ])->SendMessagesResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
