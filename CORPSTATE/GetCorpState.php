<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CORPSTATE.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/사업자등록-상태조회-API#GetCorpState
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $CheckCorpNum = '';

    $Result = $BaroService_CORPSTATE->GetCorpState([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'CheckCorpNum' => $CheckCorpNum,
    ])->GetCorpStateResult;

    if ($Result->State < 0) { // 실패
        echo $Result->State;
    } else { // 호출 성공
        // 필드정보는 레퍼런스를 참고해주세요.
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
