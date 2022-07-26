<?php  

class Bid{
	private $minbid = 5;
	private $bidamount;

	public function setBidAmount($amount){
		if($amount < $this->minbid){
			$this->bidamount = $this->minbid;
			return;
		}

		$this->bidamount = $amount;
	}

	public function getBidAmount(){
		return $this->bidamount;
	}
}


?>