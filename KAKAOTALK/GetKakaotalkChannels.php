<?php include '../_include/top.php'; ?>
<?php include '../_lib/BaroService_KAKAOTALK.php'; ?>
<div class="result">
    <?php
    // ---------------------------------------------------------------------------------------------------
    // API 레퍼런스 : https://dev.barobill.co.kr/docs/references/카카오톡전송-API#GetKakaotalkChannels
    // ---------------------------------------------------------------------------------------------------
    $CERTKEY = '';
    $CorpNum = '';

    $Result = $BaroService_KAKAOTALK->GetKakaotalkChannels([
        'CERTKEY' => $CERTKEY,
        'CorpNum' => $CorpNum,
    ])->GetKakaotalkChannelsResult;

    if (!array_key_exists('KakaotalkChannel', $Result)) {
        $Channels = [];
    } else if (!is_array($Result->KakaotalkChannel)) {
        $Channels = [$Result->KakaotalkChannel];
    } else {
        $Channels = $Result->KakaotalkChannel;
    }

    if (count($Channels) == 1 && $Channels[0]->Status < 0) { // 실패
        echo $Channels[0]->Status;
    } else { // 호출 성공
        foreach ($Channels as $Channel) {
            // 필드정보는 레퍼런스를 참고해주세요.
            echo '<pre>';
            print_r($Channel);
            echo '</pre>';
        }
    }
    ?>
</div>
<?php include '../_include/bottom.php'; ?>
