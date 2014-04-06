<?php namespace Sairiz\Nlp;

class Nlp {

	protected $A;

	protected $B;

	protected $C;

	protected $D;

	protected $E;

	protected $F;

	protected $G;

	protected $H;

	protected $I;

	protected $J;

	protected $K;

	protected $L;

	protected $M;

	protected $N;

	protected $O;

	protected $P;

	protected $Q;

	protected $R;

	protected $S;

	protected $T;

	protected $U;

	protected $V;

	protected $W;

	protected $X;
	
	public function __construct($day, $month, $year)
	{
		$this->A = (int)$day[0];

		$this->B = (int)$day[1];

		$this->C = (int)$month[0];

		$this->D = (int)$month[1];

		$this->E = (int)$year[0];

		$this->F = (int)$year[1];

		$this->G = (int)$year[2];

		$this->H = (int)$year[3];

		$this->I = $this->one($this->A + $this->B);

		$this->J = $this->one($this->C + $this->D);

		$this->K = $this->one($this->E + $this->F);

		$this->L = $this->one($this->G + $this->H);

		$this->M = $this->one($this->I + $this->J);

		$this->N = $this->one($this->K + $this->L);

		$this->O = $this->one($this->M + $this->N);

		$this->P = $this->one($this->N + $this->O);

		$this->Q = $this->one($this->M + $this->O);

		$this->R = $this->one($this->P + $this->Q);

		$this->U = $this->one($this->I + $this->M);

		$this->V = $this->one($this->J + $this->M);

		$this->S = $this->one($this->U + $this->V);

		$this->W = $this->one($this->K + $this->N);

		$this->X = $this->one($this->L + $this->N);

		$this->T = $this->one($this->W + $this->X);
	}

	private function one($num)
	{
		$length = mb_strlen( (string)$num );

		if($length == 2)
		{
			$num = (string)$num;

			return ( (int)$num[0] + (int)$num[1] );
		} 

		return $num;
	}

	public function root()
	{
		return $this->O;
	}

	public function chassis()
	{
		return [$this->I,$this->J,$this->O];
	}

	public function mirror()
	{
		if($this->S === $this->T)
			$same = true;
		else $same = false;

		return [$this->S,$this->T,$same];
	}
}