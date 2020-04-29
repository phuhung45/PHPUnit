    <?php


    namespace App;


    class conjured extends Item
    {
        public function tick()
        {
            $this->quality -= 1;
            $this->sellIn -= 2;

            if ($this->sellIn <= 0) {
                $this->quality -= 2;
            }

            if ($this->quality < 0) {
                $this->quality = 0;
            }
        }
    }