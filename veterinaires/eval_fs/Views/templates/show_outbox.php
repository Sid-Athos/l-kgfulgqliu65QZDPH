<?php
echo'
<caption> Messages envoyés:</caption>
<table style="color = white; font-size=10px;"><thead><tr><td>Date:</td><td>Date : </td><td>Envoyé à : </td><td> Contenu</td></tr></thead>
<tbody>';
    var_dump($msg_rows);
     if($msg_rows){
        foreach($msg_rows as $key0 => $value0){
            foreach($value0 as $key => $value){
                if($key == "dates"){
                    echo "<tr class='tr-scroll'><td>{$value}</td>";
                } else if($key =="sent_to"){
                    echo "<td>{$value}</td></tr>";
                } else{
                    echo "<td>{$value}</td>";
                }
            }
        }
    }
echo '</tbody></table>';
?>