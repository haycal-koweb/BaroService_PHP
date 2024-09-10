<?php include './_include/top.php'; ?>
<fieldset class="fieldset1">
    <legend>전자문서 API</legend>
    <fieldset class="fieldset2">
        <legend>저장</legend>
        <ul>
            <li><a href="EDOC/RegistEDoc.php">RegistEDoc</a> - 저장</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>수정</legend>
        <ul>
            <li><a href="EDOC/UpdateEDoc.php">UpdateEDoc</a> - 수정</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>발급</legend>
        <ul>
            <li><a href="EDOC/IssueEDoc.php">IssueEDoc</a> - 발급</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>취소/삭제</legend>
        <ul>
            <li><a href="EDOC/CancelEDoc.php">CancelEDoc</a> - 발급취소</li>
            <li><a href="EDOC/DeleteEDoc.php">DeleteEDoc</a> - 삭제</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>상태 조회</legend>
        <ul>
            <li><a href="EDOC/GetEDocState.php">GetEDocState</a> - 상태 조회</li>
            <li><a href="EDOC/GetEDocStates.php">GetEDocStates</a> - 상태 조회 (여러건)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>이력 조회</legend>
        <ul>
            <li><a href="EDOC/GetEDocLog.php">GetEDocLog</a> - 처리 이력 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>내용 조회</legend>
        <ul>
            <li><a href="EDOC/GetEDoc.php">GetEDoc</a> - 내용 조회</li>
            <li><a href="EDOC/GetEDocPopUpURL.php">GetEDocPopUpURL</a> - 내용보기 URL</li>
            <li><a href="EDOC/GetEDocMailURL.php">GetEDocMailURL</a> - 내용보기 URL (거래처 관점)</li>
            <li><a href="EDOC/GetEDocPrintURL.php">GetEDocPrintURL</a> - 인쇄 URL</li>
            <li><a href="EDOC/GetEDocsPrintURL.php">GetEDocsPrintURL</a> - 인쇄 URL (여러건)</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>파일 첨부</legend>
        <ul>
            <li><a href="EDOC/AttachFileByFTP.php">AttachFileByFTP</a> - 파일 첨부</li>
            <li><a href="EDOC/AttachFilesByFTP.php">AttachFilesByFTP</a> - 파일 여러개 첨부</li>
            <li><a href="EDOC/DeleteAttachFileWithFileIndex.php">DeleteAttachFileWithFileIndex</a> - 첨부파일 삭제</li>
            <li><a href="EDOC/DeleteAttachFile.php">DeleteAttachFile</a> - 첨부파일 전체삭제</li>
            <li><a href="EDOC/GetAttachedFileList.php">GetAttachedFileList</a> - 첨부파일 목록</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>이메일/문자/팩스 전송</legend>
        <ul>
            <li><a href="EDOC/SendEmail.php">SendEmail</a> - 이메일 전송</li>
            <li><a href="EDOC/SendSMS.php">SendSMS</a> - 문자 전송</li>
            <li><a href="EDOC/SendFax.php">SendFax</a> - 팩스 전송</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>다른 문서와 연결</legend>
        <ul>
            <li><a href="EDOC/MakeDocLinkage.php">MakeDocLinkage</a> - 연결</li>
            <li><a href="EDOC/RemoveDocLinkage.php">RemoveDocLinkage</a> - 연결 해제</li>
            <li><a href="EDOC/GetLinkedDocs.php">GetLinkedDocs</a> - 연결된 문서 목록 조회</li>
        </ul>
    </fieldset>
</fieldset>
<?php include './_include/bottom.php'; ?>
