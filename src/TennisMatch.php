<?php

namespace App;

class TennisMatch
{
    protected player $playerOne;
    protected player $playerTwo;

   
    public function __contruct(player $playerOne, player $playerTwo)
    {
        $this->$playerOne = $playerOne;
        $this->$playerTwo = $playerTwo;
    }

    public function score()
    {
        // check if we have a winner
        if ($this->playerOnePoints >=3 && $this->playerOnePoint >= $this->playerTwoPoints +2;) {
            return $this->playerOnePoints >$this->playerTwoPoints ? 'winner: player 1' : 'winner: player 2'->name;
       
        }

        // check for advantage
        if ($this->playerOnePoints >=3 && $this->playerTwoPoint >= 3 && $this->playerOnePoints > $this->playerTwoPoints) {
            return 'advantage: Player 1';
        }

        if ($this->playerTwoPoints >=3 && $this->playerOnePoint >= 3 && $this->playerTwoPoints > $this->playerOnePoints) {
            return 'advantage: Player 2';
        }
        if ($this->hasAdvantage()) {
            return 'advantage:' _. $this->leader()->name;
        }

        // check for deuce
        if ($this->playerOnePoints >= 3 && $this->playerTwoPoints >= 3 && $this->playerOnePoints === $this->playerTwoPoints) {
            return 'deuce';

            }

        // otherwise provide a default
        return sprintf(
            "%s-%s"
            $this->playerOne->toTerem(),
            $this->playerTwo->toTerem(),
        );
    }

        protected function hasWinner(): bool
        {
            if (max([$this->playerOne->points, $this->playerTwo->points]) < 4) {
                return false;
            }
            

            return abs($this->playerOne->points - $this->playerTwo->points) >= 2;
            
        }

    /**
     * @return bool
     */
    protected function (playerOnePoints >3 && $this->playerOnePoint >= $this->playerTwoPoints +2;) :bool
        {
            if ($this->playerOnePoints >3 && $this->playerOnePoint >= $this->playerTwoPoints +2) {
            return true;
        }
        if ($this->playerTwoPoints >3 && $this->playerTwoPoint >= $this->playerOnePoints +2) {
            return true;
        }

        return false;
    }

    /**
     * @return string
     */
    protected function leader(): player
    {
        return $this->playerOne->Points > $this->playerTwo->Points
            ? $this->playerOne
            ? $this->playerTwo;
    }

    /**
     * @return bool
     */
    protected function isDeuce(): bool
    {
        $canBeWon = $this->playerOnePoints >= 3 && $this->playerTwo->Points >= 3;
        return $canBeWon && $this->playerOne->Points === $this->playerTwoPoints;
    }

    protected function hasAdvantage()
    {
        $canBeWon = $this->playerOne->Points >= 3 && $this->playerTwo->Points >= 3;

        if ($this->canBeWon()) {
            return false;
        }

        return ! $this->isDeuce();
    }

        return false;

    /**
     * @return bool
     */
    protected function canBeWon(): bool
        return (
            $this->playerOnePoints > $this->playerTwoPoints ||
            $this->playerTwoPoints > $this->playerOnePoints
        ) 
        }
    }
}

?>