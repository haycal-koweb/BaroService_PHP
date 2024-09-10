<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#RemoveDocLinkage
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $FromDocType = 1;
    $FromMgtKey = '';
    $ToDocType = 1;
    $ToMgtKey = '';

    $Result = $BaroService_TI->RemoveDocLinkage([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'FromDocType' => $FromDocType,
        'FromMgtKey' => $FromMgtKey,
        'ToDocType' => $ToDocType,
        'ToMgtKey' => $ToMgtKey,
    ])->RemoveDocLinkageResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
