<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_CARD.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카드조회-API#GetCardEx
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $AvailOnly = 0;

    $Result = $BaroService_CARD->GetCardEx([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'AvailOnly' => $AvailOnly,
    ])->GetCardExResult;

    if (!array_key_exists('Card', $Result)) {
        $Cards = [];
    } else if (!is_array($Result->Card)) {
        $Cards = [$Result->Card];
    } else {
        $Cards = $Result->Card;
    }

    if (count($Cards) == 1 && $Cards[0]->CardNum < 0) { // 실패
        echo $Cards[0]->CardNum;
    } else { // 호출 성공
        foreach ($Cards as $Card) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($Card);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
