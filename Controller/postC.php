<?PHP
	include "../config.php";
	require_once '../Model/post.php';

	class postC {
		
		function ajouterpost($post){
			$sql="INSERT INTO post (id_user, first_name, date, topic, picture_post, id_react) 
			VALUES (:id_user,:first_name,:date, :topic, :picture_post, :id_react)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'id_user' => $post->getid_user(),
					'first_name' => $post->getfirst_name(),
					'date' => $post->getdate(),
					'topic' => $post->gettopic(),
					'picture_post' => $post->getpicture_post(),
					'id_react' => $post->getid_react(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherpost(){
			
			$sql="SELECT * FROM post";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerpost($id_post){
			$sql="DELETE FROM post WHERE id_post= :id_post";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_post',$id_post);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierpost($post, $id_post){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE post SET 
						id_user = :id_user,
						first_name = :first_name,
						date = :date,
						topic = :topic,
						picture_post = :picture_post,
						id_react = :id_react
					WHERE id_post = :id_post'
				);
				$query->execute([	
					'id_user' => $post->getid_user(),
					'first_name' => $post->getfirst_name(),
					'date' => $post->getdate(),
					'topic' => $post->gettopic(),
					'picture_post' => $post->getpicture_post(),
					'id_react' => $post->getid_react(),
					'id_post' => $id_post
					
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererpost($id_post){
			$sql="SELECT * from post where id_post=$id_post";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererpost1($id_post){
			$sql="SELECT * from post where id_post=$id_post";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		public function getpostByTitle($first_name) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'SELECT * FROM post WHERE first_name = :first_name'
                );
                $query->execute([
                    'first_name' => $first_name
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
		
	}

?>