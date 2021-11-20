<?php
   class Bank
    {
	    public $accountNumber,$accountholderNm,$balance;

            public function setDetails($accountNumber,$accountholderNm,$balance)
	         {
		      $this->accountNumber=$accountNumber;
                      $this->accountholderNm=$accountholderNm;
                      $this->balance=$balance;
	          }


	      public function deposit($amount)
	          {
		       if($amount>0) 
                           {
			        $this->balance += $amount;
		          }
                       else
                         {
                            echo "Please Enter Amount for Deposit.<br/>"; 
                         }
	          }


	  public function withdraw($amount)
	        {
		     if ($amount <= $this->balance) 
                         {
			        $this->balance -= $amount;
                          }
                        else
                         {
        echo "<p style='color: blue; font-weight:bold'>Blance is to Low :-- $this->balance</p>"; 
                         }
	        }

         public function printStatement()
                {

                  echo "***********************************<br/>";
                  echo "<b> Account Number is :--".$this->accountNumber."</b>"."<br/>";
                  echo "<b> Account Holder Name is :--".$this->accountholderNm."</b>"."<br/>";
                  echo "<b> Balance is :--".$this->balance."</b>"."<br/>";
                  echo "************************************<br/>";
                  echo "<br/>";

                  }
    }

$ObjBnk = new Bank();
$ObjBnk-> setDetails(100,"Sarita Maurya",500);

$ObjBnk->deposit(500);
$ObjBnk->deposit(1000);
$ObjBnk->deposit(1500);

$ObjBnk->printStatement();

$ObjBnk->withdraw(2000);

$ObjBnk->printStatement();
?>