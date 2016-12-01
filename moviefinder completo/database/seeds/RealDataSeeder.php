<?php

use Illuminate\Database\Seeder;

class RealDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert($this->genres());
        DB::insert($this->movies());
        DB::insert($this->series());
        DB::insert($this->seasons());
        DB::insert($this->episodes());
        DB::insert($this->actors());
        DB::insert($this->actorMovie());
        DB::insert($this->actorEpisode());
    }

    private function genres()
    {
        return "INSERT INTO genres (name, ranking, active, created_at) VALUES
            ('Comedia', 1, 1, '2016-7-04'),
            ('Terror', 2, 1, '2014-7-04'),
            ('Drama', 3, 1, '2013-7-04'),
            ('Accion', 4, 1, '2011-7-04'),
            ('Ciencia Ficcion', 5, 1, '2010-7-04'),
            ('Suspenso', 6, 1, '2013-7-04'),
            ('Animacion', 7, 1, '2005-7-04'),
            ('Aventuras', 8, 1, '2003-7-04'),
            ('Documental', 9, 1, '2008-7-04'),
            ('Infantiles', 10, 1, '2013-7-04'),
            ('Fantasia', 11, 1, '2011-7-04'),
            ('Musical', 12, 1, '2013-7-04')
        ;";
    }

    private function movies()
    {
        return "INSERT INTO movies (title, rating, awards, release_date, length, genre_id) VALUES 
            ('Avatar', 7.9, 3, '2010-10-04', 120, 5),
            ('Titanic', 7.7, 11, '1997-9-04', 320, 3),
            ('La Guerra de las galaxias: Episodio VI', 9.1, 7, '2004-7-04', NULL, 5),
            ('La Guerra de las galaxias: Episodio VII', 9, 6, '2003-11-04', 180, 5),
            ('Parque Jurasico', 8.3, 5, '1999-1-04', 270, 5),
            ('Harry Potter y las Reliquias de la Muerte - Parte 2', 9, 2, '2008-7-04', 190, 6),
            ('Transformers: el lado oscuro de la luna', 0.9, 1, '2005-7-04', NULL, 5),
            ('Harry Potter y la piedra filosofal', 10, 1, '2008-4-04', 120, 8),
            ('Harry Potter y la cámara de los secretos', 3.5, 2, '2009-8-04', 200, 8),
            ('El rey león', 9.1, 3, '2000-2-04', NULL, 10),
            ('Alicia en el país de las maravillas', 5.7, 2, '2008-7-04', 120, NULL),
            ('Buscando a Nemo', 8.3, 2, '2000-7-04', 110, 7),
            ('Toy Story', 6.1, 0, '2008-3-04', 150, 7),
            ('Toy Story 2', 3.2, 2, '2003-4-04', 120, 7),
            ('La vida es bella', 8.3, 5, '1994-10-04', NULL, 3),
            ('Mi pobre angelito', 3.2, 1, '1989-1-04', 120, 1),
            ('Intensamente', 9, 2, '2008-7-04', 120, 7),
            ('Carrozas de fuego', 9.9, 7, '1980-7-04', 180, NULL),
            ('Big', 7.3, 2, '1988-2-04', 130, 8),
            ('I am Sam', 9, 4, '1999-3-04', 130, 3),
            ('Hotel Transylvania', 7.1, 1, '2012-5-04', 90, 10)
        ;";
    }

    private function series()
    {
        return "INSERT INTO series(title, release_date, end_date, genre_id) VALUES
            ('Game of Thrones', '2011-1-01', '2016-3-04', 11),
            ('Supernatural', '2005-1-01', '2016-1-04', 6),
            ('The Walking Dead', '2010-1-01', '2016-1-04', 2),
            ('Person of Interest', '2011-1-01', '2015-1-04', 4),
            ('The Big Bang Theory', '2007-1-01', '2016-1-04', 1),
            ('Breaking Bad', '2008-1-01', '2013-1-04', 3)
        ;";
    }

    private function seasons()
    {
        return "INSERT INTO seasons (title, number, release_date, end_date, serie_id) VALUES
            ('Primer Temporada', 1, '2011-1-01', '2011-1-01',  1),
            ('Segunda Temporada', 2, '2012-1-01', '2012-1-01',  1),
            ('Tercer Temporada', 3, '2013-1-01', '2013-1-01',  1),
            ('Cuarta Temporada', 4, '2014-1-01', '2014-1-01',  1),
            ('Quinta Temporada', 5, '2015-1-01', '2015-1-01',  1),
            ('Sexta Temporada', 6, '2016-1-01', '2016-1-01',  1),
            ('Septima Temporada', 7, '2017-1-01', '2017-1-01',  1),
        
            ('Primer Temporada', 1, '2005-1-01', '2006-1-01',  2),
            ('Segunda Temporada', 2, '2006-1-01', '2007-1-01',  2),
            ('Tercer Temporada', 3, '2007-1-01', '2008-1-01',  2),
            ('Cuarta Temporada', 4, '2008-1-01', '2009-1-01',  2),
            ('Quinta Temporada', 5, '2009-1-01', '2010-1-01',  2),
            ('Sexta Temporada', 6, '2010-1-01', '2011-1-01',  2),
            ('Septima Temporada', 7, '2011-1-01', '2012-1-01',  2),
            ('Octava Temporada', 8, '2012-1-01', '2013-1-01',  2),
            ('Novena Temporada', 9, '2013-1-01', '2014-1-01',  2),
            ('Decima Temporada', 10, '2014-1-01', '2015-1-01',  2),
            ('Undecima Temporada', 11, '2015-1-01', '2016-1-01',  2),
            ('Duodecima Temporada', 12, '2016-1-01', '2017-1-01',  2),
        
            ('Primer Temporada', 1, '2010-1-01', '2010-1-01',  3),
            ('Segunda Temporada', 2, '2011-1-01', '2012-1-01',  3),
            ('Tercer Temporada', 3, '2012-1-01', '2013-1-01',  3),
            ('Cuarta Temporada', 4, '2013-1-01', '2014-1-01',  3),
            ('Quinta Temporada', 5, '2014-1-01', '2015-1-01',  3),
            ('Sexta Temporada', 6, '2015-1-01', '2016-1-01',  3),
            ('Septima Temporada', 7, '2016-1-01', '2017-1-01', 3),
        
            ('Primer Temporada', 1, '2011-1-01', '2012-1-01',  4),
            ('Segunda Temporada', 2, '2012-1-01', '2013-1-01', 4),
            ('Tercer Temporada', 3, '2013-1-01', '2014-1-01',  4),
            ('Cuarta Temporada', 4, '2014-1-01', '2015-1-01',  4),
            ('Quinta Temporada', 5, '2015-1-01', '2016-1-01',  4),
        
            ('Primer Temporada', 1, '2006-1-01', '2008-1-01',  5),
            ('Segunda Temporada', 2, '2008-1-01', '2009-1-01',  5),
            ('Tercer Temporada', 3, '2009-1-01', '2010-1-01',  5),
            ('Cuarta Temporada', 4, '2010-1-01', '2011-1-01',  5),
            ('Quinta Temporada', 5, '2011-1-01', '2012-1-01',  5),
            ('Sexta Temporada', 6, '2012-1-01', '2013-1-01',  5),
            ('Septima Temporada', 7, '2013-1-01', '2014-1-01',  5),
            ('Octava Temporada', 8, '2014-1-01', '2015-1-01',  5),
            ('Novena Temporada', 9, '2015-1-01', '2016-1-01',  5),
            ('Decima Temporada', 10, '2016-1-01', '2017-1-01',  5),
        
            ('Primer Temporada', 1, '2008-1-01', '2008-1-01',  6),
            ('Segunda Temporada', 2, '2009-1-01', '2009-1-01', 6),
            ('Tercer Temporada', 3, '2010-1-01', '2010-1-01',  6),
            ('Cuarta Temporada', 4, '2011-1-01', '2011-1-01',  6),
            ('Quinta Temporada', 5, '2012-1-01', '2012-1-01',  6)
        ;";
    }

    private function episodes()
    {
        return "INSERT INTO episodes (title, number, release_date, rating, season_id) VALUES
            ('Winter Is Coming', 1, '2011-1-01', 7.3, 1),
            ('The North Remembers', 1, '2012-1-01', 8.3, 2),
            ('Valar Dohaeris', 1, '2013-1-01', 6.3, 3),
            ('Two Swords', 1, '2014-1-01', 7.5, 4),
            ('The Wars to Come', 1, '2015-1-01', 9.3, 5),
            ('The Red Woman', 1, '2016-1-01', 7.7, 6),
        
            ('Pilot', 1, '2005-1-01', 7.3, 8),
            ('In My Time of Dying', 1, '2006-1-01', 8.3, 9),
            ('The Magnificent Seven', 1, '2007-1-01', 6.3, 10),
            ('Lazarus Rising', 1, '2008-1-01', 7.5, 11),
            ('Sympathy for the Devil', 1, '2009-1-01', 9.3, 12),
            ('Exile on Main St.', 1, '2010-1-01', 7.7, 13),
            ('Meet the New Boss', 1, '2011-1-01', 7.3, 14),
            ('We Need to Talk About Kevin', 1, '2012-1-01', 8.3, 15),
            ('I Think Im Gonna Like It Here', 1, '2013-1-01', 6.3, 16),
            ('A Very Special Supernatural Special', 1, '2014-1-01', 7.5, 17),
            ('Out of the Darkness, Into the Fire', 1, '2015-1-01', 9.3, 18),
            
            ('Days Gone Bye', 1, '2010-1-01', 7.3, 20),
            ('What Lies Ahead', 1, '2011-1-01', 8.3, 21),
            ('Seed', 1, '2012-1-01', 6.3, 22),
            ('30 Days Without an Accident', 1, '2013-1-01', 7.5, 23),
            ('No Sanctuary', 1, '2014-1-01', 9.3, 24),
            ('First Time Again', 1, '2015-1-01', 7.7, 25),
            
            ('Pilot', 1, '2011-1-01', 7.3, 27),
            ('The Contingency', 1, '2012-1-01', 8.3, 28),
            ('Liberty', 1, '2013-1-01', 6.3, 29),
            ('Panopticon', 1, '2015-1-01', 7.5, 30),
            ('B.S.O.D.', 1, '2016-1-01', 9.3, 31),
            
            ('Pilot', 1, '2005-1-01', 7.3, 32),
            ('The Bad Fish Paradigm', 1, '2006-1-01', 8.3, 33),
            ('The Electric Can Opener Fluctuation', 1, '2007-1-01', 6.3, 34),
            ('The Robotic Manipulation', 1, '2008-1-01', 7.5, 35),
            ('The Skank Reflex Analysis', 1, '2009-1-01', 9.3, 36),
            ('The Date Night Variable', 1, '2010-1-01', 7.7, 37),
            ('The Hofstadter Insufficiency', 1, '2011-1-01', 7.3, 38),
            ('The Locomotion Interruption', 1, '2012-1-01', 8.3, 39),
            ('The Matrimonial Momentum', 1, '2013-1-01', 6.3, 40),
            
            ('Pilot', 1, '2009-1-01', 7.3, 42),
            ('Seven Thirty-Seven', 1, '2010-1-01', 8.3, 43),
            ('No Más', 1, '2011-1-01', 6.3, 44),
            ('Box Cutter', 1, '2012-1-01', 7.5, 45),
            ('Live Free or Die', 1, '2013-1-01', 9.3, 46),
            ('Madrigal', 2, '2013-2-01', 9.3, 46),
            ('Hazard Pay', 3, '2013-3-01', 9.3, 46),
            ('Fifty-One', 4, '2013-4-01', 9.3, 46),
            ('Dead Freight', 5, '2013-5-01', 9.3, 46),
            ('Buyout', 6, '2013-6-01', 9.3, 46),
            ('Say My Name', 7, '2013-6-01', 9.3, 46),
            ('Gliding Over All', 8, '2013-7-01', 9.3, 46),
            ('Blood Money', 9, '2013-7-01', 9.3, 46),
            ('Buried', 10, '2013-7-01', 9.3, 46),
            ('Confessions', 11, '2013-8-01', 9.3, 46),
            ('Rabid Dog', 12, '2013-9-01', 9.3, 46),
            ('To hajiilee', 13, '2013-10-01', 9.3, 46),
            ('Ozymandias', 14, '2013-11-01', 9.3, 46),
            ('Granite State', 15, '2013-12-01', 9.3, 46),
            ('Felina', 16, '2013-12-01', 9.3, 46)
        ;";
    }

    private function actors()
    {
        return "INSERT INTO actors (first_name, last_name, rating, favorite_movie_id) VALUES
            ('Sam', 'Worthington', 7.5, 1),
            ('Zoe', 'Saldana', 5.5, 2),
            ('Sigourney', 'Weaver', 9.7, NULL),
            ('Leonardo', 'Di Caprio', 3.5, 4),
            ('Kate', 'Winslet', 1.5, 5),
            ('Billy', 'Zane', 7.5, 6),
            ('Mark', 'Hamill', 6.5, 7),
            ('Harrison', 'Ford', 7.5, 8),
            ('Carrie', 'Fisher', 7.5, 9),
            ('Sam', 'Neill', 2.5, 10),
            ('Laura', 'Dern', 7.5, 11),
            ('Jeff', 'Goldblum', 4.5, NULL),
            ('Daniel', 'Radcliffe', 7.5, 13),
            ('Emma', 'Watson', 2.5, 14),
            ('Rupert', 'Grint', 6.2, 15),
            ('Shia', 'LaBeouf', 9.5, 16),
            ('Rosie', 'Huntington-Whiteley', 1.5, 17),
            ('Matthew', 'Broderick', 6.1, 18),
            ('James', 'Earl Jones', 7.5, 19),
            ('Jeremy', 'Irons', 7.2, 20),
            ('Johnny', 'Depp', 1.5, 21),
            ('Helena', 'Bonham Carter', 7.5, 1),
            ('Mia', 'Wasikowska', 7.5, 2),
            ('Albert', 'Brooks', 2.5, 3),
            ('Ellen', 'DeGeneres', 2.6, 4),
            ('Alexander', 'Gould', 7.5, 5),
            ('Tom', 'Hanks', 4.4, 6),
            ('Tim', 'Allen', 7.5, 7),
            ('Sean', 'Penn', 9.2, 8),
            ('Adam', 'Sandler', 3.1, 9),
            ('Renee', 'Zellweger', 9.5, 10),
            ('Emilia', 'Clarke', 8.2, 11),
            ('Peter', 'Dinklage', 2.3, 12),
            ('Kit', 'Harington', 2.4, NULL),
            ('Jared', 'Padalecki', 2.8, 14),
            ('Jensen', 'Ackles', 5.5, 15),
            ('Jim', 'Beaver', 2.6, 16),
            ('Andrew', 'Lincoln', 3.3, 17),
            ('Jon', 'Bernthal', 2.9, NULL),
            ('Sarah', 'Callies', 2.4, 19),
            ('Jim', 'Caviezel', 1.9, 20),
            ('Taraji', 'Henson', 5.9, 21),
            ('Kevin', 'Chapman', 2.9, 1),
            ('Johnny', 'Galecki', 2.3, 2),
            ('Jim', 'Parsons', 6.9, 3),
            ('Kaley', 'Cuoco', 2.3, 4),
            ('Bryan', 'Cranston', 7.9, NULL),
            ('Aaron', 'Paul', 5.9, 6),
            ('Anna', 'Gunn', 3.1, 7)
        ;";
    }

    private function actorMovie()
    {
        return "INSERT INTO actor_movie (actor_id, movie_id) VALUES
            (1, 1),
            (2, 1),
            (3, 1),
            (4, 2),
            (5, 2),
            (6, 2),
            (7, 3),
            (7, 4),
            (8, 3),
            (8, 4),
            (9, 3),
            (9, 4),
            (10, 5),
            (11, 5),
            (12, 5),
            (13, 6),
            (13, 8),
            (13, 9),
            (14, 6),
            (14, 8),
            (14, 9),
            (15, 6),
            (15, 8),
            (15, 9),
            (16, 7),
            (17, 7),
            (18, 7),
            (19, 10),
            (20, 10),
            (21, 11),
            (22, 11),
            (22, 9),
            (23, 11),
            (24, 12),
            (25, 12),
            (26, 12),
            (27, 13),
            (27, 14),
            (27, 19),
            (28, 13),
            (28, 14),
            (29, 20),
            (30, 21)
        ;";
    }

    private function actorEpisode()
    {
        return "INSERT INTO actor_episode (actor_id, episode_id) VALUES
            (32, 1),
            (32, 2),
            (32, 3),
            (32, 4),
            (32, 5),
            (33, 1),
            (33, 2),
            (33, 3),
            (33, 4),
            (33, 5),
            (33, 6),
            (34, 1),
            (34, 2),
            (34, 4),
            (34, 5),
            (34, 6),
            
            (35, 7),
            (35, 8),
            (35, 9),
            (35, 10),
            (35, 11),
            (35, 12),
            (35, 13),
            (35, 15),
            (35, 16),
            (35, 17),
            (36, 7),
            (36, 8),
            (36, 9),
            (36, 10),
            (36, 13),
            (36, 14),
            (36, 15),
            (36, 16),
            (36, 17),
            (37, 7),
            (37, 8),
            (37, 9),
            (37, 10),
            (37, 11),
            (37, 12),
            (37, 13),
            (37, 14),
            (37, 15),
            (37, 17),
            
            (38, 18),
            (38, 19),
            (38, 20),
            (38, 22),
            (38, 23),
            (39, 18),
            (39, 19),
            (39, 20),
            (39, 21),
            (39, 22),
            (39, 23),
            (40, 19),
            (40, 20),
            (40, 21),
            (40, 22),
            (40, 23),
            
            (41, 24),
            (41, 25),
            (41, 26),
            (41, 27),
            (41, 28),
            (42, 24),
            (42, 25),
            (42, 26),
            (42, 27),
            (42, 28),
            (43, 24),
            (43, 26),
            (43, 27),
            (43, 28),
            
            (44, 29),
            (44, 30),
            (44, 31),
            (44, 32),
            (44, 33),
            (44, 34),
            (44, 35),
            (44, 36),
            (44, 37),
            (45, 29),
            (45, 31),
            (45, 32),
            (45, 33),
            (45, 34),
            (45, 35),
            (45, 36),
            (45, 37),
            (46, 29),
            (46, 30),
            (46, 33),
            (46, 35),
            (46, 36),
            (46, 37),
            
            (47, 38),
            (47, 39),
            (47, 40),
            (47, 41),
            (47, 42),
            (47, 45),
            (47, 46),
            (47, 47),
            (47, 48),
            (47, 49),
            (47, 50),
            (47, 51),
            (47, 52),
            (47, 53),
            (47, 54),
            (47, 55),
            (47, 56),
            (48, 40),
            (48, 41),
            (48, 42),
            (48, 43),
            (48, 44),
            (48, 45),
            (48, 47),
            (48, 48),
            (48, 49),
            (48, 50),
            (48, 51),
            (48, 52),
            (48, 54),
            (48, 55),
            (48, 56),
            (48, 57),
            (49, 38),
            (49, 39),
            (49, 40),
            (49, 41),
            (49, 42),
            (49, 43),
            (49, 44),
            (49, 46),
            (49, 47),
            (49, 48),
            (49, 49),
            (49, 50),
            (49, 51),
            (49, 52),
            (49, 54),
            (49, 55),
            (49, 57)
        ;";
    }
}
