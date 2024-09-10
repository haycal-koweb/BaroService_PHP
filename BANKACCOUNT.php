<?php include './_include/top.php'; ?>
<fieldset class="fieldset1">
    <legend>계좌조회 API</legend>
    <fieldset class="fieldset2">
        <legend>서비스 신청 및 해지</legend>
        <ul>
            <li><a href="BANKACCOUNT/RegistBankAccount.php">RegistBankAccount</a> - 계좌 등록</li>
            <li><a href="BANKACCOUNT/UpdateBankAccount.php">UpdateBankAccount</a> - 계좌 수정</li>
            <li><a href="BANKACCOUNT/StopBankAccount.php">StopBankAccount</a> - 계좌 해지</li>
            <li><a href="BANKACCOUNT/CancelStopBankAccount.php">CancelStopBankAccount</a> - 계좌 해지취소 (해지 당월에만 가능)</li>
            <li><a href="BANKACCOUNT/ReRegistBankAccount.php">ReRegistBankAccount</a> - 계좌 재신청 (해지 월이 지난 후)</li>
            <li><a href="BANKACCOUNT/GetBankAccountManagementURL.php">GetBankAccountManagementURL</a> - 계좌 관리 URL</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>계좌 목록 조회</legend>
        <ul>
            <li><a href="BANKACCOUNT/GetBankAccountEx.php">GetBankAccountEx</a> - 등록된 계좌 목록 조회</li>
        </ul>
    </fieldset>
    <fieldset class="fieldset2">
        <legend>입출금내역 조회</legend>
        <ul>
            <li><a href="BANKACCOUNT/GetPeriodBankAccountLogEx.php">GetPeriodBankAccountLogEx</a> - 입출금내역 조회</li>
            <li><a href="BANKACCOUNT/GetDailyBankAccountLogEx.php">GetDailyBankAccountLogEx</a> - 일별 입출금내역 조회</li>
            <li><a href="BANKACCOUNT/GetMonthlyBankAccountLogEx.php">GetMonthlyBankAccountLogEx</a> - 월별 입출금내역 조회</li>
            <li><a href="BANKACCOUNT/GetBankAccountLogURL.php">GetBankAccountLogURL</a> - 입출금내역 URL</li>
        </ul>
    </fieldset>
</fieldset>
<?php include './_include/bottom.php'; ?>
