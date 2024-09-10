<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_KAKAOTALK.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // https://dev.barobill.co.kr/docs/guides/바로빌-API-개발준비#FTP 를 참고하여 FTP에 이미지를 업로드하신 후 API를 실행해주세요.
    // ---------------------------------------------------------------------------------------------------

    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카카오톡전송-API#SendFIKakaotalks
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
    $KakaotalkMessages = [
        'KakaotalkFTMessage' => [
            [
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
            ],
            [
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
            ]
        ]
    ];

    $Result = $BaroService_KAKAOTALK->SendFIKakaotalks([
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
        'KakaotalkMessages' => $KakaotalkMessages,
    ])->SendFIKakaotalksResult;

    $SendKeys = !is_array($Result->string) ? [$Result->string] : $Result->string;

    if ($SendKeys[0] < 0) { // 실패
        echo $SendKeys[0];
    } else { // 호출 성공
        foreach ($SendKeys as $SendKey) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($SendKey);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
