<?php
echo 
    '
    <div class="leftcolumn">
    <div class="card">
        <h3>Bødekasse Medlemmer</h3>
    ';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result = mysqli_query($conn, "CALL AllPlayers");
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo 
        '
            <div class="card">
                <h5>' . $row['PL_Name'] . '</h5>
                <h5>' . $row['PL_Phone'] . '</h5>
            </div>
            
        ';
    }
}
mysqli_free_result($result);
mysqli_next_result($conn);
echo '</div> </div>';




echo 
    '
    <div class="rightcolumn">
    <div class="card">
    <h3>Kontakt Info</h3>
    ';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result = mysqli_query($conn, "CALL getAdmin");
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo 
        '
            <div class="card pt-1" >
                <h4 class="pt-1">' . $row['A_Name'] . '</h4>
                <h5 class="pt-1">' . $row['A_Mail'] . '</h5>
                <h5 class="pt-1">' . $row['A_Phone'] . '</h5>
            </div>
            
        ';
    }
}
mysqli_free_result($result);
mysqli_next_result($conn);
echo '</div></div>';
?>