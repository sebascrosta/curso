/*Esto es para buscar una película que no sea la preferida de nadie.*/

INSERT INTO pelicula VALUES (22, 'Pulp Fiction', 9.9, 3, '1991-01-01', 132, 2);

select * from pelicula order by id desc;

select p.id, p.titulo
from pelicula as p
left join actor as a on a.id_pelicula_preferida = p.id
where a.id is null;


select p.id, p.titulo
from pelicula as p
where not exists (
	select a.id
    from actor as a
    where a.id_pelicula_preferida = p.id);
    
/*1. Traer todos los géneros que estén rankeados en los puestos 4, 7 y 9.*/
select *
from genero
where genero.ranking IN (4,7,9);

/*2. Traer todos los episodios que se hayan emitido en el 2010, 2013 o en el 2015.*/
select *
from episodio
where date_format(episodio.fecha_de_estreno, '%Y') in (2010,2013,2015);


-- 1. Traer todos los actores cuya película favorita contenga la letra t
	Select a.nombre, a.apellido
    from actor as a
    inner join pelicula as p ON p.id = a.id_pelicula_preferida
		where p.titulo like "%T%";
        
	Select a.nombre, a.apellido
    from actor as a
    where a.id_pelicula_preferida IN (select pelicula.id from pelicula where pelicula.titulo like "%T%");
-- 2. Traer todas los actores y las películas en las que actúan salvo la película favorita del
-- actor contenga la letra t, en ese caso el actor no debe aparecer.


-- 3. Traer todos los géneros que tengan series que se hayan estrenado a partir del 2010.
	select nombre
    from genero
    where id in ( select id_genero from serie where fecha_de_estreno > '2010-01-01');
    
-- a. Obtener lo mismo mediante una consulta que no contenga subqueries.
	
    select g.nombre
    from genero as g
    inner join serie as s on s.id_genero = g.id
    where s.fecha_de_estreno > '2010-01-01';

-- 4. Traer todos los géneros que no tengan series que se hayan estrenado a partir del 2010.
	select nombre
    from genero
    where id not in ( select id_genero from serie where fecha_de_estreno > '2010-01-01');
    
-- a. ¿Se puede obtener el mismo resultado sin utilizar subqueries?*/
    select g.nombre
    from genero as g
    left join serie as s on s.id_genero = g.id
    where s.fecha_de_estreno <= '2010-01-01'
    OR s.fecha_de_estreno is null;


-- 1. Obtener los géneros que estén en series y en películas.

	select nombre, id
    from genero
    where id in (select distinct id_genero from pelicula)
    and id in (select distinct id_genero from serie);

-- 2. Obtener los géneros que no tengan series.

	select nombre
	from genero
	where id not in (select distinct id_genero from serie);
    
-- 3. Obtener aquellas películas que no sean preferidas por ningún actor a menos que
-- sean del género “Drama”, que hay que mostrarlas de todos modos.
	
    select titulo
    from pelicula as p
    where id_genero in (select id from genero where nombre = 'Drama')
    or not exists (select id from actor where id_pelicula_preferida = p.id);
    
-- Crear un índice compuesto de 2 campos, uno de ellos ponerlo en el SELECT y el
-- otro usarlo en el WHERE. Probar hacer el EXPLAIN SELECT antes y después de
-- crear el índice.

ALTER TABLE pelicula add key (id, titulo);
EXPLAIN select titulo from pelicula where id = 3;