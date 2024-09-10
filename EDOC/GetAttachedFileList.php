<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_EDOC.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/전자문서-API#GetAttachedFileList
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $MgtKey = '';

    $Result = $BaroService_EDOC->GetAttachedFileList([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'MgtKey' => $MgtKey,
    ])->GetAttachedFileListResult;

    if (!array_key_exists('AttachedFile', $Result)) {
        $AttachedFiles = [];
    } else if (!is_array($Result->AttachedFile)) {
        $AttachedFiles = [$Result->AttachedFile];
    } else {
        $AttachedFiles = $Result->AttachedFile;
    }

    if (count($AttachedFiles) == 1 && $AttachedFiles[0]->FileIndex < 0) { // 실패
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
