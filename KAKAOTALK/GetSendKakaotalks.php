<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_KAKAOTALK.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카카오톡전송-API#GetSendKakaotalks
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';
    $SendKeyList = ['', '', ''];

    $Result = $BaroService_KAKAOTALK->GetSendKakaotalks([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
        'SendKeyList' => $SendKeyList,
    ])->GetSendKakaotalksResult;

    $Kakaotalks = !is_array($Result->Kakaotalk) ? [$Result->Kakaotalk] : $Result->Kakaotalk;

    if (count($Kakaotalks) == 1 && $Kakaotalks[0]->SendKey == '' && $Kakaotalks[0]->SendStatus < 0) { // 실패
        echo $Kakaotalks[0]->SendStatus;
    } else { // 호출 성공
        foreach ($Kakaotalks as $Kakaotalk) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($Kakaotalk);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
