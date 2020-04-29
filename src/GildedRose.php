    <?php

    namespace App;

    class GildedRose
    {
        private static $items = [
            'normal' -> Item::class,
                'Aged Brie' -> Brie::class,
                'Sulfuras, Hand of Ragnaros' -> Sunfuras::class,
                'Backstage pass to a TAFKAL80ETC concert' -> BackstagePasses::class,
                'conjured Mana Cake' -> conjured::class,
            ];

        public static function  of($name, $quality, $sellIn)
        {


            if (! array_key_exists($name, self::$items)) {
                throw new \InvalidArgumentException('Item type does not exist.');
            }
            $class = self::$items[$name];

            return new $class($quality, $sellIn);
        }
    }