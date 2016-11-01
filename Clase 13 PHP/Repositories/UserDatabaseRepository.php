<?php

class UserDatabaseRepository extends DatabaseRepository implements UserRepository
{
	private function rowToEntity(array $row)
	{
		$entity = new User(
			$row['nombre'],
			$row['apellido'],
			$row['email'],
			$row['username'],
			$row['password']
		);
		$entity->setId($row['id']);
		$entity->setBirthDate($row['fecha_nacimiento']);
		$entity->setBio($row['bio']);

		return $entity;
	}

	private function rowsToEntities(array $rows)
	{
		$entities = [];
		foreach($rows as $row)
		{
			$entities[] = $this->rowToEntity($row);
		}

		return $entities;
	}

	public function getById($id)
	{
		$conn = $this->getConnection();

		$stmt = $conn->prepare('
			SELECT
				usuarios.*
			FROM
				usuarios
			WHERE
				usuarios.id = :id
		');
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);

		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!$result)
		{
			return null;
		}

		return $this->rowToEntity($result);
	}

	public function getByEmail($email)
	{
		$conn = $this->getConnection();

		$stmt = $conn->prepare('
			SELECT
				usuarios.*
			FROM
				usuarios
			WHERE
				usuarios.email = :email
		');
		$stmt->bindValue(':email', strtolower($email), PDO::PARAM_STR);

		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!$result)
		{
			return null;
		}

		return $this->rowToEntity($result);
	}

	public function save(User $user)
	{
		$conn = $this->getConnection();

		$conn->beginTransaction();

		try
		{
			$stmt = $conn->prepare('
				INSERT INTO usuarios (nombre, apellido, email, username, password, fecha_nacimiento, bio)
				VALUES (:firstName, :lastName, :email, :username, :password, :birthDate, :bio);
			');

			$stmt->execute([
				':firstName' => $user->getFirstName(),
				':lastName' => $user->getLastName(),
				':email' => $user->getEmail(),
				':username' => $user->getUsername(),
				':password' => $user->getPassword(),
				':birthDate' => $user->getBirthDate(),
				':bio' => $user->getBio(),
			]);

			$user->setId($conn->lastInsertId());

			$stmt = $conn->prepare('INSERT INTO usuario_seccion VALUES(:user, :section)');
			foreach($user->getSections() as $section)
			{
				$stmt->execute([
					':user' => $user->getId(),
					':section' => $section->getId()
				]);
			}

			$conn->commit();
		}
		catch (Exception $e)
		{
			$conn->rollBack();

			throw $e;
		}
	}
}










