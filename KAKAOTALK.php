<?php include './_include/top.php'; ?>
<fieldset class="fieldset1">
    <legend>카카오톡전송 API</legend>
    <fieldset class="fieldset2">
        <legend>채널 등록</legend>
        <ul>
            <li><a href="KAKAOTALK/GetKakaotalkChannelManagementURL.php">GetKakaotalkChannelManagementURL</a> - 채널 관리 URL</li>
            <li><a href="KAKAOTALK/GetKakaotalkChannels.php">GetKakaotalkChannels</a> - 채널 목록 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>템플릿 등록</legend>
        <ul>
            <li><a href="KAKAOTALK/GetKakaotalkTemplateManagementURL.php">GetKakaotalkTemplateManagementURL</a> - 템플릿 관리 URL</li>
            <li><a href="KAKAOTALK/GetKakaotalkTemplates.php">GetKakaotalkTemplates</a> - 템플릿 목록 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>알림톡 전송</legend>
        <ul>
            <li><a href="KAKAOTALK/SendATKakaotalk.php">SendATKakaotalk</a> - 알림톡 단건 전송</li>
            <li><a href="KAKAOTALK/SendATKakaotalks.php">SendATKakaotalks</a> - 알림톡 대량 전송</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>친구톡 전송</legend>
        <ul>
            <li><a href="KAKAOTALK/SendFTKakaotalk.php">SendFTKakaotalk</a> - 친구톡(텍스트) 단건 전송</li>
            <li><a href="KAKAOTALK/SendFTKakaotalks.php">SendFTKakaotalks</a> - 친구톡(텍스트) 대량 전송</li>
            <li><a href="KAKAOTALK/SendFIKakaotalk.php">SendFIKakaotalk</a> - 친구톡(이미지) 단건 전송</li>
            <li><a href="KAKAOTALK/SendFIKakaotalks.php">SendFIKakaotalks</a> - 친구톡(이미지) 대량 전송</li>
            <li><a href="KAKAOTALK/SendFWKakaotalk.php">SendFWKakaotalk</a> - 친구톡(와이드) 단건 전송</li>
            <li><a href="KAKAOTALK/SendFWKakaotalks.php">SendFWKakaotalks</a> - 친구톡(와이드) 대량 전송</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>예약 취소</legend>
        <ul>
            <li><a href="KAKAOTALK/CancelReservedKakaotalk.php">CancelReservedKakaotalk</a> - 예약 취소</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>상태 조회</legend>
        <ul>
            <li><a href="KAKAOTALK/GetSendKakaotalk.php">GetSendKakaotalk</a> - 전송상태 및 내용 조회</li>
            <li><a href="KAKAOTALK/GetSendKakaotalks.php">GetSendKakaotalks</a> - 전송상태 및 내용 조회 (여러건)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>내역 조회</legend>
        <ul>
            <li><a href="KAKAOTALK/GetKakaotalkHistoryURL.php">GetKakaotalkHistoryURL</a> - 전송내역 URL</li>
        </ul>
    </fieldset>
</fieldset>
<?php include './_include/bottom.php'; ?>
