<?php
echo 
    '
    <div class="leftcolumn">
    ';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result = mysqli_query($conn, "CALL AllFines");
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo '
    <div class="card">
        <h4>' . $row['F_Fine'] . '</h4>
        <h5>' . $row['F_Description'] . '</h5>
        <h5>' . $row['F_Price'] . '</h5>
    </div>';
    }
}
echo '</div>';

mysqli_free_result($result);
mysqli_next_result($conn);