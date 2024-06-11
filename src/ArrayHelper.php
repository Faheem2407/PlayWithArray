<?php 

namespace Faheem2407\PlayWithArray;

class ArrayHelper
{
	protected $datas = array();
	
	public function __construct($value = array()){
		$this->datas = $value;
	}

	//linear search
	public function searchPosition($item){
		$numbers = $this->datas;
		$n = count($this->datas);
		$flag = 0;
		for($i=0; $i<$n; $i++){
			if($item==$numbers[$i]){
				$flag++;
				return $item." is found at position ".$i+1;
				break;
			}
		}
		if($flag==0){
			return $item." is not present in this array.";
		}
	}
	
	//bubble sort
	public function sortArray(){
		$numbers = $this->datas;
		$length = count($numbers);
		for($i=0; $i<$length-1; $i++){
			for($j=0; $j<$length-1; $j++){
				if($numbers[$j]>$numbers[$j+1]){
					$temp = $numbers[$j+1];
					$numbers[$j+1]=$numbers[$j];
					$numbers[$j]=$temp;
				}
			}
		}
		return $numbers;	
	}
}
