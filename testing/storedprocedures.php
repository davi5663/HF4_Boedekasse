<?php

echo '<div class="leftcolumn">';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result = mysqli_query($conn, "CALL AllReceipts");
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo '
    <div class="card">
        <h3>' . $row['Fine'] . '</h3>
        <h5>' . $row['Player Name'] . '</h5>
        <p>' . $row['Description'] . '</p>
        <button class="fakeimg">Betal ' . $row['Price'] . ',- </button>
    </div>';
    }
}
echo '</div>';

mysqli_free_result($result);
mysqli_next_result($conn);


echo '<div class="rightcolumn">';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result = mysqli_query($conn, "CALL PlayerWithMostFines");
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo '
    <div class="card">
        <div class="fakeimg"><strong>Navn</strong> <br> ' . $row['Player Name'] . '</div><br>
        <div class="fakeimg"><strong>Antal Bøder</strong> <br>' . $row['Most Fines'] . '</div>
    </div>
';
    }
}
echo '</div>';

mysqli_free_result($result);
mysqli_next_result($conn);
mysqli_close($conn);
