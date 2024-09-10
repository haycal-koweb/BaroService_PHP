<?php include './_include/top.php'; ?>
<fieldset class="fieldset1">
    <legend>문자전송 API</legend>
    <fieldset class="fieldset2">
        <legend>발신번호 사전등록</legend>
        <ul>
            <li><a href="SMS/GetSMSFromNumberURL.php">GetSMSFromNumberURL</a> - 발신번호 관리 URL</li>
            <li><a href="SMS/CheckSMSFromNumber.php">CheckSMSFromNumber</a> - 발신번호 등록여부 확인</li>
            <li><a href="SMS/GetSMSFromNumbers.php">GetSMSFromNumbers</a> - 등록된 발신번호 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>단건 전송</legend>
        <ul>
            <li><a href="SMS/SendMessage.php">SendMessage</a> - 문자 전송 (단문/장문 자동분류)</li>
            <li><a href="SMS/SendSMSMessage.php">SendSMSMessage</a> - 단문(SMS) 전송</li>
            <li><a href="SMS/SendLMSMessage.php">SendLMSMessage</a> - 장문(LMS) 전송</li>
            <li><a href="SMS/SendMMSMessageFromFTP.php">SendMMSMessageFromFTP</a> - 포토(MMS) 전송</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>대량 전송</legend>
        <ul>
            <li><a href="SMS/SendMessages.php">SendMessages</a> - 문자 대량전송 (단문/장문 자동분류)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>예약 취소</legend>
        <ul>
            <li><a href="SMS/CancelReservedSMSMessage.php">CancelReservedSMSMessage</a> - 예약 취소</li>
            <li><a href="SMS/CancelReservedSMSMessageByReceiptNum.php">CancelReservedSMSMessageByReceiptNum</a> - 예약 취소 (대량전송 건)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>상태 조회</legend>
        <ul>
            <li><a href="SMS/GetSMSSendState.php">GetSMSSendState</a> - 전송상태 조회</li>
            <li><a href="SMS/GetSMSSendMessage.php">GetSMSSendMessage</a> - 전송상태 및 내용 조회</li>
            <li><a href="SMS/GetSMSSendMessages.php">GetSMSSendMessages</a> - 전송상태 및 내용 대량조회</li>
            <li><a href="SMS/GetSMSSendMessagesByRefKey.php">GetSMSSendMessagesByRefKey</a> - 전송상태 및 내용 조회 (관리번호 사용)</li>
            <li><a href="SMS/GetMessagesByReceiptNum.php">GetMessagesByReceiptNum</a> - 전송상태 및 내용 조회 (대량전송 건)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>내역 조회</legend>
        <ul>
            <li><a href="SMS/GetSMSHistoryURL.php">GetSMSHistoryURL</a> - 전송내역 URL</li>
        </ul>
    </fieldset>
</fieldset>
<?php include './_include/bottom.php'; ?>
