<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#GetNTSSendOption
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';

    $Result = $BaroService_TI->GetNTSSendOption([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
    ])->GetNTSSendOptionResult;

    if ($Result->TaxationOption < 0) { // 호출 실패
        echo $Result->TaxationOption;
    } else { // 호출 성공
        // 필드정보는 레퍼런스를 참고해주세요.
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
