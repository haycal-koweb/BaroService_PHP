<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#GetTaxInvoicesPrintURL
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $ID = '';
    $PWD = '';
    $MgtKeyList = ['', '', ''];

    $Result = $BaroService_TI->GetTaxInvoicesPrintURL([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'MgtKeyList' => $MgtKeyList,
        'ID' => $ID,
        'PWD' => $PWD,
    ])->GetTaxInvoicesPrintURLResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
