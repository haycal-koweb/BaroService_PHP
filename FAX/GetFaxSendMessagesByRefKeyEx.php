<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_FAX.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/팩스전송-API#GetFaxSendMessagesByRefKeyEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $RefKey = '';

    $Result = $BaroService_FAX->GetFaxSendMessagesByRefKeyEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'RefKey' => $RefKey,
    ])->GetFaxSendMessagesByRefKeyExResult;

    $FaxMessages = !is_array($Result->FaxMessageEx) ? [$Result->FaxMessageEx] : $Result->FaxMessageEx;

    if ($FaxMessages[0]->SendState < 0) { // 실패
        echo $FaxMessages[0]->SendState;
    } else { // 호출 성공
        foreach ($FaxMessages as $FaxMessage) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($FaxMessage);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
