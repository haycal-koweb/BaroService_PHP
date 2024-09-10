<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_EDOC.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/전자문서-API#DeleteAttachFileWithFileIndex
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $UserID = '';
    $MgtKey = '';
    $FileIndex = 1;

    $Result = $BaroService_EDOC->DeleteAttachFileWithFileIndex([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'UserID' => $UserID,
        'MgtKey' => $MgtKey,
        'FileIndex' => $FileIndex,
    ])->DeleteAttachFileWithFileIndexResult;

    if ($Result < 0) { // 호출 실패
        echo $Result;
    } else { // 호출 성공
        print_r($Result);
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
