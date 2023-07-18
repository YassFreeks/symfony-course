<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('The Dark Knight is a 2008 American comedy film written and directed by ...');
        $movie->setImagepath('https://images.ladepeche.fr/api/v1/images/view/5c34d2f53e454659430d33a5/large/image.jpg');
        $movie->addActor($this->getReference('actor-1'));
        $movie->addActor($this->getReference('actor-2'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers: Endgame');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('The Avengers: Endgame is a 2019 American action film written and directed ... ');
        $movie2->setImagepath('https://oblikon.net/wp-content/uploads/marvel-endgame-800x400.jpg');

        $movie2->addActor($this->getReference('actor-3'));
        $movie2->addActor($this->getReference('actor-4'));

        $manager->persist($movie2);

        $manager->flush();
    }
}
