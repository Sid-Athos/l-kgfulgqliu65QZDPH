<?php 
            /** Authentification compte client  */
    function log_check($POST){
                $rec= $_POST['category'];
                $nom= (".csv");
                $va= $_POST['category'].$nom;
                $file = fopen($va,"a+");
                $i=0;
                $j=5;
                $k=6;
                $n=0;
                $p=1;
                $check=false;
                $tab = array();
                $tableau = array(array($_POST['nick'],$_POST['pwd']));
                    while(!feof($file)){
                        $tab[$i] = fgetcsv($file);
                        if($tab[$i][$j]===$tableau[$n][$n]&&$tab[$i][$k]===$tableau[$n][$p]){
                            $check=true;
                            $i2=$i;
                        }
                        $i++;
                    }
                
                $_SESSION['addr']="".$tab[$i2][2]."</br>".$tab[$i2][3]."</br>".$tab[$i2][4]."</br>";
                fclose($file);
            return $check;
    }
?>
