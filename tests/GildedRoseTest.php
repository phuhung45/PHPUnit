    <?php

    use App\GildedRose;
    use PHPUnit\Framework\TestCase;

    class GildedRoseTest extends TestCase
    {
        /** @test */
        function update_normal_items_before_sell_date()
        {
            $item = GildedRose::of('conjured Mana Cake', 10, 5); // quality, sell in X days

            $item->tick();

            $this->assertEquals(9, $item->quality);
            $this->assertEquals(4, $item->sellIn);
        }

        /** @test */
        function update_normal_items_on_the_sell_date()
        {
            $item = GildedRose::of('conjured Mana Cake', 10, 0);

            $item->tick();

            $this->assertEquals(8, $item->quality);
            $this->assertEquals(-1, $item->sellIn);
        }

        /** @test */
        function update_normal_items_on_the_sell_date_at_0_quality()
        {
            $item = GildedRose::of('conjured Mana Cake', 0, 0);

            $item->tick();

            $this->assertEquals(0, $item->quality);
            $this->assertEquals(-1, $item->sellIn);
        }

        /** @test */
        function update_backstage_pass_items_close_to_the_sell_data_at_max_quality()
        {
            $item = GildedRose::of(
                'conjured Mana Cake', 50, 10);

            $item->tick();

            $this->assertEquals(50, $item->quality);
            $this->assertEquals(9, $item->sellIn);
        }

        /** @test */
        function update_backstage_pass_items_long_before_the_sell_date()
        {
            $item = GildedRose::of(
                'conjured Mana Cake', 10, 11);

            $item->tick();

            $this->assertEquals(11, $item->quality);
            $this->assertEquals(10, $item->sellIn);
        }

        /** @test */
        function update_conjured_items_before_the_sell_date()
        {
            $item = GildedRose::of(
                'conjured Mana Cake', 10, 10);

            $item->tick();

            $this->assertEquals(8, $item->quality);
            $this->assertEquals(9, $item->sellIn);
        }

        /** @test */
        function update_conjured_items_at_zero_quality()
        {
            $item = GildedRose::of(
                'conjured Mana Cake', 0, 10);

            $item->tick();

            $this->assertEquals(0, $item->quality);
            $this->assertEquals(9, $item->sellIn);
        }

        /** @test */
        function update_conjured_items_after_the_sell_date()
        {
            $item = GildedRose::of(
                'conjured Mana Cake', 10, -10);

            $item->tick();

            $this->assertEquals(6, $item->quality);
            $this->assertEquals(-11, $item->sellIn);
        }

        /** @test */
        function update_conjured_items_after_the_sell_date_at_zero_quality()
        {
            $item = GildedRose::of(
                'conjured Mana Cake', 0, -10);

            $item->tick();

            $this->assertEquals(0, $item->quality);
            $this->assertEquals(-11, $item->sellIn);
        }
    }