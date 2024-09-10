<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_FAX.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // https://dev.barobill.co.kr/docs/guides/바로빌-API-개발준비#FTP 를 참고하여 FTP에 파일을 업로드하신 후 API를 실행해주세요.
    // ---------------------------------------------------------------------------------------------------

    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/팩스전송-API#SendFaxesFromFTPEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SenderID = '';
    $FileCount = 2;
    $FileNames = ['', ''];
    $SendCount = 2;
    $SendDT = '';
    $Messages = [
        'FaxMessage' => [
            [
                'SenderNum' => '',
                'ReceiverNum' => '',
                'ReceiveCorp' => '',
                'ReceiverName' => '',
                'SendState' => '',
                'SendPageCount' => '',
                'SuccessPageCount' => '',
                'RefKey' => '',
            ],
            [
                'SenderNum' => '',
                'ReceiverNum' => '',
                'ReceiveCorp' => '',
                'ReceiverName' => '',
                'SendState' => '',
                'SendPageCount' => '',
                'SuccessPageCount' => '',
                'RefKey' => '',
            ]
        ]
    ];

    $Result = $BaroService_FAX->SendFaxesFromFTPEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SenderID' => $SenderID,
        'FileCount' => $FileCount,
        'FileNames' => $FileNames,
        'SendCount' => $SendCount,
        'SendDT' => $SendDT,
        'Messages' => $Messages,
    ])->SendFaxesFromFTPExResult;

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
