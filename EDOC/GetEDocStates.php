<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_EDOC.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/전자문서-API#GetEDocStates
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $MgtKeyList = ['', '', ''];

    $Result = $BaroService_EDOC->GetEDocStates([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'MgtKeyList' => $MgtKeyList,
    ])->GetEDocStatesResult;

    $States = !is_array($Result->EDocState) ? [$Result->EDocState] : $Result->EDocState;

    if (count($States) == 1 && $States[0]->MgtKey == '' && $States[0]->BarobillState < 0) { // 실패
        echo $States[0]->BarobillState;
    } else { // 호출 성공
        foreach ($States as $State) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($State);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
