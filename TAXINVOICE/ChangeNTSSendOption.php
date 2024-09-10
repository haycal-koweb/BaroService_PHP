<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#ChangeNTSSendOption
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $ID = '';
    $NTSSendOption = [
        'TaxationOption' => 1,
        'TaxationAddTaxAllowYN' => 1,
        'TaxExemptionOption' => 1,
        'TaxExemptionAddTaxAllowYN' => 1
    ];

    $Result = $BaroService_TI->ChangeNTSSendOption([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'ID' => $ID,
        'NTSSendOption' => $NTSSendOption,
    ])->ChangeNTSSendOptionResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
