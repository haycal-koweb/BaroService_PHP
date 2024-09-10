<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_KAKAOTALK.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카카오톡전송-API#SendFTKakaotalks
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SenderID = '';
    $ChannelId = '';
    $SendDT = '';
    $AdYN = false;
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

    $Result = $BaroService_KAKAOTALK->SendFTKakaotalks([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'ChannelId' => $ChannelId,
        'SendDT' => $SendDT,
        'AdYN' => $AdYN,
        'SmsReply' => $SmsReply,
        'SmsSenderNum' => $SmsSenderNum,
        'KakaotalkMessages' => $KakaotalkMessages,
    ])->SendFTKakaotalksResult;

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
