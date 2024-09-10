<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_KAKAOTALK.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // https://dev.barobill.co.kr/docs/guides/바로빌-API-개발준비#FTP 를 참고하여 FTP에 이미지를 업로드하신 후 API를 실행해주세요.
    // ---------------------------------------------------------------------------------------------------

    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카카오톡전송-API#SendFIKakaotalk
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SenderID = '';
    $ChannelId = '';
    $SendDT = '';
    $AdYN = false;
    $ImageName = '';
    $ImageLink = '';
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

    $Result = $BaroService_KAKAOTALK->SendFIKakaotalk([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'ChannelId' => $ChannelId,
        'SendDT' => $SendDT,
        'AdYN' => $AdYN,
        'ImageName' => $ImageName,
        'ImageLink' => $ImageLink,
        'SmsReply' => $SmsReply,
        'SmsSenderNum' => $SmsSenderNum,
        'KakaotalkMessage' => $KakaotalkMessage,
    ])->SendFIKakaotalkResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
