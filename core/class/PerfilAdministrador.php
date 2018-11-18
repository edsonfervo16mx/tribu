<?php 
	class PerfilAdministrador{

		public $table = 'perfil_administrador';

		public function open($key){
			$stringConnection = new Connection;
			$stringConnection->abrir($key);
			return $stringConnection;
		}

		public function schema($key){
			$request = $this->open($key);
			$res = $request->table_schema($key,$this->table);
			return ($res);
		}

		public function listAll($key){
			$request = $this->open($key);
			$sql = 'SELECT perfil_administrador.clave,
						perfil_administrador.nombre,
						perfil_administrador.correo,
						perfil_administrador.password,
						perfil_administrador.id_cuenta,
						perfil_administrador.inicio_cuenta,
						perfil_administrador.vencimiento_cuenta,
						perfil_administrador.estado_cuenta
					from '.$this->table;
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key){
			$request = $this->open($key);
			$sql = 'SELECT perfil_administrador.clave,
						perfil_administrador.nombre,
						perfil_administrador.correo,
						perfil_administrador.password,
						perfil_administrador.id_cuenta,
						perfil_administrador.inicio_cuenta,
						perfil_administrador.vencimiento_cuenta,
						perfil_administrador.estado_cuenta
					from '.$this->table.' where estado_cuenta = "active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key){
			$request = $this->open($key);
			$sql = 'SELECT perfil_administrador.clave,
						perfil_administrador.nombre,
						perfil_administrador.correo,
						perfil_administrador.password,
						perfil_administrador.id_cuenta,
						perfil_administrador.inicio_cuenta,
						perfil_administrador.vencimiento_cuenta,
						perfil_administrador.estado_cuenta
					from '.$this->table.' where estado_cuenta = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO '.$this->table.'(
						nombre,
						correo,
						password,
						id_cuenta,
						inicio_cuenta,
						vencimiento_cuenta)
			 		VALUES ("'.$atr['nombre'].'",
			 			"'.$atr['correo'].'",
			 			"'.$atr['password'].'",
			 			"'.$atr['id_cuenta'].'",
			 			"'.$atr['inicio_cuenta'].'",
			 			"'.$atr['vencimiento_cuenta'].'"
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>