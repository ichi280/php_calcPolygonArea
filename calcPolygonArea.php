<?php
/**
 * 任意のn角形の面積を返す
 *
 * @param    array $arrPol n角形の座標データ
 * @param    int $int n角形
 * @return   double n角形の面積
 */
function calcArea($arrPol,$int){
	$area = 0;

	for($i = 0; $i < $int; $i++){
		$pt1 = $arrPol[$i];
		$pt2 = ($int <= $i+1)? $arrPol[0] : $arrPol[$i + 1];

		$area += ($pt1[0] - $pt2[0]) * ($pt1[1] + $pt2[1]);
	}
	return abs($area * 0.5);
}
?>