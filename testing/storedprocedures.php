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
        <a href="https://mobilepay.dk/box?id=2ccf17fd-c8df-4c22-b875-6f6479681ec4&phone=6891YK&v=6p4" target="_blank">
            <button class="fakeimg">Betal ' . $row['Price'] . ',- </button>
        </a>
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
        <h4>Flest Bøder</h4>
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
