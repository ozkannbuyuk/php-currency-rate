<style>
    body {
        background-color: #FFFFFF;
        height: 100vh;
        display: grid;
        place-items: center;
    }

    table tr td {
        padding: 15px 30px;
        border: 1px solid gray;
    }
</style>

<?php
$jsonData = file_get_contents("https://finans.truncgil.com/today.json");
$data = json_decode($jsonData, 1);
?>

<table>
    <tr>
        <td>Döviz</td>
        <td>Alış</td>
        <td>Satış</td>
    </tr>
    <tr>
        <td>Dolar</td>
        <td><?= $data["USD"]["Alış"] ?></td>
        <td><?= $data["USD"]["Satış"] ?></td>
    </tr>
    <tr>
        <td>Euro</td>
        <td><?= $data["EUR"]["Alış"] ?></td>
        <td><?= $data["EUR"]["Satış"] ?></td>
    </tr>
</table>