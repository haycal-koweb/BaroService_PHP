<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#GetAttachedFileListEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $MgtKey = '';

    $Result = $BaroService_TI->GetAttachedFileListEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'MgtKey' => $MgtKey,
    ])->GetAttachedFileListExResult;

    if (!array_key_exists('AttachedFileEx', $Result)) {
        $AttachedFiles = [];
    } else if (!is_array($Result->AttachedFileEx)) {
        $AttachedFiles = [$Result->AttachedFileEx];
    } else {
        $AttachedFiles = $Result->AttachedFileEx;
    }

    if (count($AttachedFiles) == 1 && $AttachedFiles[0]->FileIndex < 0) { // 호출 실패
        echo $AttachedFiles[0]->FileIndex;
    } else { // 호출 성공
        foreach ($AttachedFiles as $AttachedFile) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($AttachedFile);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
