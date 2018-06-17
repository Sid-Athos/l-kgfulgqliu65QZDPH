<?php
function insert ($datas) {

	$bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma');

	$req = $bdd->prepare('INSERT INTO USERS(id_user, username, pw, category) VALUES(:id_user, :username, :pw, :category)');
                $req->execute(array(
			'id_user' => NULL,
                        'username' => $datas[0],
                        'pw' => $datas[2],
			//'key' => $datas[3],
                        'category' => $datas[1],
			));
}
?>
