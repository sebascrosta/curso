select p.titulo, g.nombre
from pelicula as p
inner join genero as g ON g.id = p.id_genero;

select a.nombre, a.apellido, p.titulo
from actor as a
inner join pelicula as p ON p.id = a.id_pelicula_preferida;

/*Ej 4 a. Obtener el nombre de las series y el nombre de su género*/

select s.titulo, g.nombre
from serie as s
inner join genero as g ON g.id = s.id_genero;

/*b. Obtener el nombre de las series, el nombre de su género, el número y
nombre de temporada.*/

select s.titulo, g.nombre, t.numero, t.titulo
from serie as s
inner join genero as g ON g.id = s.id_genero
inner join temporada as t ON t.id_serie = s.id;

/*c. Obtener el nombre de las series, el nombre de su género, el número de
temporada, nombre de temporada, número de capítulo y nombre del capítulo.*/

select s.titulo as titulo_serie, 
       g.nombre as genero,
	   coalesce(t.numero,"Falta información") as numero_temp,
	   coalesce(t.titulo,"Falta información") as nombre_temp, 
	   coalesce(e.numero, "Falta información") as numero_epi, 
	   coalesce(e.titulo, "Falta información") as titulo_epi
from serie as s
inner join genero as g ON g.id = s.id_genero
inner join temporada as t ON t.id_serie = s.id
inner join episodio as e ON e.id_temporada = t.id;

/*Obtener el nombre de las series, el nombre de su género, el número de
temporada, nombre de temporada, número de capítulo, nombre del capítulo,
nombre y apellido del actor.*/

select s.titulo as titulo_serie, 
       g.nombre as genero,
	   coalesce(t.numero,"Falta información") as numero_temp,
	   coalesce(t.titulo,"Falta información") as nombre_temp, 
	   coalesce(e.numero, "Falta información") as nro_epi, 
	   coalesce(e.titulo, "Falta información") as titulo_epi,
       concat(a.nombre, " ", a.apellido) as actor
from serie as s
inner join genero as g ON g.id = s.id_genero
inner join temporada as t ON t.id_serie = s.id
inner join episodio as e ON e.id_temporada = t.id
inner join actor_episodio ON actor_episodio.id_episodio = e.id
inner join actor as a ON a.id = actor_episodio.id_actor;

select distinct concat(actor.nombre, " ", actor.apellido) as actor
from actor
inner join actor_pelicula ON actor_pelicula.id_actor = actor.id
inner join pelicula ON pelicula.id = actor_pelicula.id_pelicula
where pelicula.fecha_de_estreno > '2000';

/*1. Traer todos los géneros y la cantidad de películas del mismo*/

select genero.nombre, count(pelicula.id) as cantidad
from genero
inner join pelicula ON pelicula.id_genero = genero.id
group by genero.nombre
order by cantidad desc;

/*4. Obtener los títulos de las series y la cantidad de temporadas*/

select serie.titulo, count(temporada.numero) as temporadas
from serie
inner join temporada ON temporada.id_serie = serie.id
group by serie.titulo
order by temporadas desc;

/*13- Crear una consulta que sólo muestre como resultado el año en que más episodios
se estrenaron considerando todas las series. */

SELECT DATE_FORMAT(episodio.fecha_de_estreno, '%Y') as anio
from episodio
group by anio
order by count(episodio.fecha_de_estreno) desc
limit 1;


