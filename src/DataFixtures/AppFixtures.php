<?php

namespace App\DataFixtures;

use App\Entity\Recipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Recipe();
        $product->setName('Quesillo venezolano');
        $product->setDescription('Cómo hacer quesillo venezolano o flan de leche condensada. El quesillo es un postre típico, por un lado de nuestras Islas Canarias y por otro de varios países latinoamericanos, especialmente Venezuela. A priori parece un poco raro que un dulce que se prepare en nuestro país, sea de consumo habitual en otra cultura tan lejana');
        $manager->persist($product);

		$product = new Recipe();
		$product->setName('Leche asada');
		$product->setDescription('La leche asada es un postre muy similar al flan de huevo, de hecho el proceso es casi idéntico variando el paso final de cocción. Un postre tradicional de América Latina, que siempre ha estado presente en las familias chilenas, en Perú, Ecuador, Colombia y México.');
		$manager->persist($product);

		$product = new Recipe();
		$product->setName('Tarta de fresas');
		$product->setDescription('Esta una esas recetas de postre que es un claro ejemplo de que no hace falta ser un cocinillas pro para hacer una tarta deliciosa.Una demostración práctica de que, en casa, sin muchos conocimientos de cocina, con sólo un poco de tiempo, podemos preparar postres y dulces de rechupete.');
		$manager->persist($product);

        $manager->flush();
    }
}
