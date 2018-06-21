<?php
     /* Affichage tableau */
     var_dump($msg_rows);
     echo "<caption> Boîte d'envoi:</caption>";    
     echo '<center><table><thead><tr><td>Date:</td><td>Date : </td><td>Envoyé à : </td><td> Contenu</td></tr></thead>';
     echo '<tbody>';
     $i=0;
     while($i < 2){
         while (list($key, $value) = each($msg_rows[$i])){
             if($key == "sent_to"){
                 echo "<tr><td>{$value}</td>";
             } else if($key =="content"){
                 echo "<td>{$value}</td></tr>";
             } else{
                 echo "<td>{$value}</td>";
             }
         }
         $i++;
     }
    echo '</tbody></table></center>';
?>