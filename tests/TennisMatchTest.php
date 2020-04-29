<?php

use App\TennisMatch;
use PHPUnit\Framework\TestCase;


class TennisMatchTest extends TestCase
{
    /**
     * @test
     *@dataProvider scores 
     */
    function it_score_a_tennis_match($playerOnePint, $playerTwoPint, $score)
    {
        $match = new TennisMatch(
            $John = new player('John'),
            $Jane = new player('Jane'),
        );

        for($i = 0; $i < playerOnePoint; $i++) {
            $John->score();
        }

        for($i = 0; $i < playerTwoPoint; $i++) {
            $Jane->score();
        }
        

        $this->assertEquals($score, $match->score());
    }

    public function score()
    {
        return [
            [0,0, 'love-love'],
            [1,0, 'fifteen-love'],
            [1,1, 'fifteen-fifteen'],
            [2,0, 'thirty-love'],
            [3,0, 'forty-love'],
            [2,2,, 'thirty-thirty'],
            [3,3, 'deuce'],
            [4,4, 'deuce'],
            [5,5, 'deuce'],
            [4,3, 'Advantage: John'],
            [3,4, 'Advantage: Jane'],
            [4,0, 'Winner: John'],
            [0,4, 'Winner: Jane'],
        ];
    }
    /**@test*/
    function it_score_1_to_0()
    {
        $match = new TennisMatch();

        $match ->pointToPlayerOne();

        $this->assertEquals('fifteen-love',$match->score());
    }

    /**@test*/
    function it_score_2_to_0()
    {
        $match = new TennisMatch();

        $match ->pointToPlayerOne();

        $this->assertEquals('thirty-love',$match->score());
    }
}