<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_EDOC.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/전자문서-API#RemoveDocLinkage
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $FromDocType = 3;
    $FromMgtKey = '';
    $ToDocType = 3;
    $ToMgtKey = '';

    $Result = $BaroService_EDOC->RemoveDocLinkage([
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
