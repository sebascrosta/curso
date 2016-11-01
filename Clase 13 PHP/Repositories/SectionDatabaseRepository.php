<?php

class SectionDatabaseRepository extends DatabaseRepository implements SectionRepository
{
	private function rowToEntity(array $row)
	{
		$entity = new Section($row['nombre']);
		$entity->setId($row['id']);

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

	public function listAll()
	{
		//conectarse a la base
		$conn = $this->getConnection();

		//ejecutar la busqueda
		$stmt = $conn->prepare('
			SELECT
				secciones.*
			FROM
				secciones
			ORDER BY
				secciones.nombre ASC
		');

		$stmt->execute();

		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		//mapear los resultados
		return $this->rowsToEntities($results);
	}

	public function getById($id)
	{
		$conn = $this->getConnection();

		$stmt = $conn->prepare('
			SELECT
				secciones.*
			FROM
				secciones
			WHERE
				secciones.id = :id
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
}