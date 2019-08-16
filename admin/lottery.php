<?php
    $link = DBConnect();
    $pts = $link->query("SELECT identification FROM tb_registered");
    $participantes = array();
    foreach($pts as $part){
        array_push($participantes, $part['identification']);
    }
    // Defining the number of participants
    $numParticipants = $pts->num_rows;
    
    $chances = round((1 / $numParticipantes) * 100);
    
    #  Pick a Random Winner
    $sorteado = $participantes[rand(0,$numParticipants - 1)];
    
    $ganhador = $link->query("SELECT * FROM tb_registered WHERE identification = $sorted");
    foreach($winner as $data){
        $name = $data['name'];
        $id = $data['identification'];
    }

    $link = null;
?>
<div class="container">
    <p>We had a total of <b><?=$numParticipantes?></b> participants;</p>
    <p>each participant had <b><?=$chances?>%</b> of winning chance;</p>
    <p>And the winner was....</p>
    <h1><?=$name?>, ID <?=$ra?> </h1>
</div>
