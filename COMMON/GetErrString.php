<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/바로빌-API-오류코드#GetErrString
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $ErrCode = -32000;

    $Result = $BaroService_TI->GetErrString([
        'CERTKEY' => $CERTKEY,
        'ErrCode' => $ErrCode,
    ])->GetErrStringResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
