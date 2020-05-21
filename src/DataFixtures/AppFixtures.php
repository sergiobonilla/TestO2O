<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Recipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $recipe = new Recipe();
		$recipe->setName('Quesillo venezolano');
		$recipe->setDescription('Cómo hacer quesillo venezolano o flan de leche condensada. El quesillo es un postre típico, por un lado de nuestras Islas Canarias y por otro de varios países latinoamericanos, especialmente Venezuela. A priori parece un poco raro que un dulce que se prepare en nuestro país, sea de consumo habitual en otra cultura tan lejana');
		$recipe->setImage('http://www.mamacontemporanea.com/wp-content/uploads/2016/05/IMG_4493.jpg');
		$recipe->setTagLine('Queso');
		$recipe->setFirstBrewed(new DateTime('now'));
		$manager->persist($recipe);

		$recipe = new Recipe();
		$recipe->setName('Leche asada');
		$recipe->setDescription('La leche asada es un postre muy similar al flan de huevo, de hecho el proceso es casi idéntico variando el paso final de cocción. Un postre tradicional de América Latina, que siempre ha estado presente en las familias chilenas, en Perú, Ecuador, Colombia y México.');
		$recipe->setImage('https://www.midiariodecocina.com/wp-content/uploads/2007/03/Leche-asada-01.jpg');
		$recipe->setTagLine('Leche');
		$recipe->setFirstBrewed(new DateTime('now'));
		$manager->persist($recipe);

		$recipe = new Recipe();
		$recipe->setName('Tarta de fresas');
		$recipe->setDescription('Esta una esas recetas de postre que es un claro ejemplo de que no hace falta ser un cocinillas pro para hacer una tarta deliciosa.Una demostración práctica de que, en casa, sin muchos conocimientos de cocina, con sólo un poco de tiempo, podemos preparar postres y dulces de rechupete.');
		$recipe->setImage('https://es.rc-cdn.community.thermomix.com/recipeimage/xcqmk9aa-3cdd5-807254-cfcd2-877fvery/41d115dd-c1bc-4945-b9d4-ac5773e67ac2/main/tarta-de-fresas-y-nata-fria.jpg');
		$recipe->setTagLine('Tarta');
		$recipe->setFirstBrewed(new DateTime('now'));

		$manager->persist($recipe);

        $manager->flush();
    }
}
