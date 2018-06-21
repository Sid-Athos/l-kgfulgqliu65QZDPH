<caption> Boîte d'envoi:</caption>
<table style="color = white; font-size=10px;"><thead><tr><td>Date:</td><td>Date : </td><td>Envoyé à : </td><td> Contenu</td></tr></thead>
<tbody>
<?php
    var_dump($msg_rows);
     $i=0;
     while($i < count($msg_rows)){
         while (list($key, $value) = each($msg_rows[$i])){
             if($key == "sent_to"){
                 echo '<tr><td>'.$value.'</td>';
             } else if($key =="content"){
                 echo '<td>{$value}</td></tr>';
             } else if($key == 'dates') {
                 echo '<td>{$value}</td>';
             }
         }
         $i++;
     }
?>
</tbody></table>