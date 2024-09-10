<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_FAX.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/팩스전송-API#GetFaxMessageEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SendKey = '';

    $Result = $BaroService_FAX->GetFaxMessageEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SendKey' => $SendKey,
    ])->GetFaxMessageExResult;

    if ($Result->SendState < 0) { // 실패
        echo $Result->SendState;
    } else { // 호출 성공
        // 필드정보는 레퍼런스를 참고해주세요.
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
