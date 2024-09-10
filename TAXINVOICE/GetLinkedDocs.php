<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_TI.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/세금계산서-API#GetLinkedDocs
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $DocType = 1;
    $MgtKey = '';

    $Result = $BaroService_TI->GetLinkedDocs([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'DocType' => $DocType,
        'MgtKey' => $MgtKey,
    ])->GetLinkedDocsResult;

    if (!array_key_exists('LinkedDoc', $Result)) {
        $LinkedDocs = [];
    } else if (!is_array($Result->LinkedDoc)) {
        $LinkedDocs = [$Result->LinkedDoc];
    } else {
        $LinkedDocs = $Result->LinkedDoc;
    }

    if (count($LinkedDocs) == 1 && $LinkedDocs[0]->DocType < 0) { // 호출 실패
        echo $LinkedDocs[0]->DocType;
    } else { // 호출 성공
        foreach ($LinkedDocs as $LinkedDoc) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($LinkedDoc);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
