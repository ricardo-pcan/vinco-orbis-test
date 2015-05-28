<?php
  
  class VincoOrbis
  {

    public function fibonacci_rec($num)
    {
      if ($num < 2)
      {
        return 1;
      }
      else
      {
        return $this->fibonacci_rec($num - 2) + $this->fibonacci_rec($num - 1);
      }
    }

    public function factorial_it($num)
    {
      $factorial = 1;
      for ( $i = 1; $i <= $num; $i++ )
      {
        $factorial *= $i;
      }
      return $factorial;
    }

    public function factorial_rec($num)
    {
      if ($num == 1)
      {
        return 1;
      }
      else 
      {
        return $num * $this->factorial_rec($num - 1);
      }
    }

  }

  $model = new VincoOrbis();

  echo $model->factorial_rec(4);

  ?>