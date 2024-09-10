<?php include './_include/top.php'; ?>
<fieldset class="fieldset1">
    <legend>팩스전송 API</legend>
    <fieldset class="fieldset2">
        <legend>전송</legend>
        <ul>
            <li><a href="FAX/SendFaxFromFTP.php">SendFaxFromFTP</a> - 팩스 전송</li>
            <li><a href="FAX/SendFaxFromFTPEx.php">SendFaxFromFTPEx</a> - 팩스 전송 (여러파일)</li>
            <li><a href="FAX/SendFaxesFromFTP.php">SendFaxesFromFTP</a> - 팩스 동보전송</li>
            <li><a href="FAX/SendFaxesFromFTPEx.php">SendFaxesFromFTPEx</a> - 팩스 동보전송 (여러파일)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>재전송</legend>
        <ul>
            <li><a href="FAX/ReSendFax.php">ReSendFax</a> - 재전송</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>예약 취소</legend>
        <ul>
            <li><a href="FAX/CancelReservedFaxMessage.php">CancelReservedFaxMessage</a> - 예약 취소</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>상태 조회</legend>
        <ul>
            <li><a href="FAX/GetFaxSendState.php">GetFaxSendState</a> - 전송상태 조회</li>
            <li><a href="FAX/GetFaxMessageEx.php">GetFaxMessageEx</a> - 전송상태 및 내용 조회</li>
            <li><a href="FAX/GetFaxSendMessagesEx.php">GetFaxSendMessagesEx</a> - 전송상태 및 내용 조회 (여러건)</li>
            <li><a href="FAX/GetFaxSendMessagesByRefKeyEx.php">GetFaxSendMessagesByRefKeyEx</a> - 전송상태 및 내용 조회 (관리번호 사용)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>내역 조회</legend>
        <ul>
            <li><a href="FAX/GetFaxHistoryURL.php">GetFaxHistoryURL</a> - 전송내역 URL 반환</li>
            <li><a href="FAX/GetFaxFileURL.php">GetFaxFileURL</a> - 파일 다운로드 URL 반환</li>
        </ul>
    </fieldset>
</fieldset>
<?php include './_include/bottom.php'; ?>
