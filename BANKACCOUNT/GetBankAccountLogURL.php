<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_BANKACCOUNT.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/계좌조회-API#GetBankAccountLogURL
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $ID = '';
    $PWD = '';

    $Result = $BaroService_BANKACCOUNT->GetBankAccountLogURL([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'ID' => $ID,
        'PWD' => $PWD,
    ])->GetBankAccountLogURLResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
