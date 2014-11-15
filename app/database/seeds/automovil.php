<?php

class auromovil extends seeder{
	public function run(){
		automovil::create(array(
				'color'=>'rojo';
				'tipo'=>'campero';
				'capacidad'=>'5';
				'km/gal'=>'60';
				'vel_max'=>'190';
				'proveedor'=>'suzuki';
			));
		automovil::create(array(
				'color'=>'azul';
				'tipo'=>'automovil';
				'capacidad'=>'';
				'km/gal'=>'60';
				'vel_max'=>'120';
				'proveedor'=>'suzuki';
			));
		automovil::create(array(
				'color'=>'verde';
				'tipo'=>'todo terreno';
				'capacidad'=>'8';
				'km/gal'=>'30';
				'vel_max'=>'180';
				'proveedor'=>'suzuki';
			));
	}
}