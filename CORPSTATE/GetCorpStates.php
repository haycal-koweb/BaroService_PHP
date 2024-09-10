<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CORPSTATE.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/사업자등록-상태조회-API#GetCorpStates
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $CheckCorpNumList = ['', '', ''];

    $Result = $BaroService_CORPSTATE->GetCorpStates([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'CheckCorpNumList' => $CheckCorpNumList,
    ])->GetCorpStatesResult;

    $CorpStates = !is_array($Result->CorpState) ? [$Result->CorpState] : $Result->CorpState;

    if (count($CorpStates) == 1 && $CorpStates[0]->CorpNum == '' && $CorpStates[0]->State < 0) { // 실패
        echo $CorpStates[0]->State;
    } else { // 호출 성공
        foreach ($CorpStates as $CorpState) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($CorpState);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
