<?php  
class Reservation{

	private $host = 'Host class'; //
	private $guest = 'Guest class';

	//cancel
	public function cancel(){

		$this->sendCancellationNotification();

		$this->refundGuest();

		echo "And a load of other stuff that you dont need to know about";
		//Check whether cancellation is an option

		//refund the guest...if refunds applicable(Guest)

		//Make the room avaiable again[Room]

		//Nofify the host[Host]

			//In app notification [Nofitication]
			//send them an email/SMS

		//Send confirmation to guest [email,sms]
	}

	private function sendCancellationNotification(){
		echo 'Sending nofitication to' . $this->host .'<br/>';
	}

	private function refundGuest(){
		echo 'Refunding ' . $this->guest.'<br/>';
	}
}



?>