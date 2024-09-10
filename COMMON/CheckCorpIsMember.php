<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/바로빌-공통-API#CheckCorpIsMember
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $CheckCorpNum = '';

    $Result = $BaroService_TI->CheckCorpIsMember([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'CheckCorpNum' => $CheckCorpNum,
    ])->CheckCorpIsMemberResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
