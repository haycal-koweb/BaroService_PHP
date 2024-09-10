<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_KAKAOTALK.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카카오톡전송-API#SendFTKakaotalk
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SenderID = '';
    $ChannelId = '';
    $SendDT = '';
    $AdYN = false;
    $SmsReply = '';
    $SmsSenderNum = '';
    $KakaotalkMessage = [
        'ReceiverNum' => '',
        'ReceiverName' => '',
        'Message' => '',
        'SmsSubject' => '',
        'SmsMessage' => '',
        'Buttons' => [
            'KakaotalkButton' => [
                [
                    'Name' => '',
                    'ButtonType' => '',
                    'Url1' => '',
                    'Url2' => '',
                ]
            ]
        ]
    ];

    $Result = $BaroService_KAKAOTALK->SendFTKakaotalk([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'ChannelId' => $ChannelId,
        'SendDT' => $SendDT,
        'AdYN' => $AdYN,
        'SmsReply' => $SmsReply,
        'SmsSenderNum' => $SmsSenderNum,
        'KakaotalkMessage' => $KakaotalkMessage,
    ])->SendFTKakaotalkResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
