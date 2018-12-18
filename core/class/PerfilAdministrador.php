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
					from perfil_administrador';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT perfil_administrador.clave,
						perfil_administrador.nombre,
						perfil_administrador.correo,
						perfil_administrador.password,
						perfil_administrador.id_cuenta,
						perfil_administrador.inicio_cuenta,
						perfil_administrador.vencimiento_cuenta,
						perfil_administrador.estado_cuenta
					from perfil_administrador 
					where perfil_administrador.estado_cuenta = "active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT perfil_administrador.clave,
						perfil_administrador.nombre,
						perfil_administrador.correo,
						perfil_administrador.password,
						perfil_administrador.id_cuenta,
						perfil_administrador.inicio_cuenta,
						perfil_administrador.vencimiento_cuenta,
						perfil_administrador.estado_cuenta
					from perfil_administrador 
					where perfil_administrador.estado_cuenta = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT perfil_administrador.clave,
						perfil_administrador.nombre,
						perfil_administrador.correo,
						perfil_administrador.password,
						perfil_administrador.id_cuenta,
						perfil_administrador.inicio_cuenta,
						perfil_administrador.vencimiento_cuenta,
						perfil_administrador.estado_cuenta
					from perfil_administrador where estado_cuenta = "inactive" and perfil_administrador.clave = "'.$clave.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			#echo $sql;
			return ($res);
		}

		public function viewDataForEmail($key,$email){
			$request = $this->open($key);
			$sql = 'SELECT perfil_administrador.clave,
						perfil_administrador.nombre,
						perfil_administrador.correo,
						perfil_administrador.password,
						perfil_administrador.id_cuenta,
						perfil_administrador.inicio_cuenta,
						perfil_administrador.vencimiento_cuenta,
						perfil_administrador.estado_cuenta
					from perfil_administrador where perfil_administrador.correo = "'.$email.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			#echo $sql;
			return ($res);
		}

		public function viewExist($key,$email){
			$request = $this->open($key);
			$sql = 'SELECT perfil_administrador.correo
					from perfil_administrador where perfil_administrador.correo = "'.$email.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			#echo $sql;
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO perfil_administrador(
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

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE perfil_administrador 
					SET nombre = upper("'.$atr['nombre'].'"),
						correo = upper("'.$atr['correo'].'"),
						password = upper("'.$atr['password'].'"),
						id_cuenta = upper("'.$atr['id_cuenta'].'"),
						inicio_cuenta = upper("'.$atr['inicio_cuenta'].'"),
						vencimiento_cuenta = upper("'.$atr['vencimiento_cuenta'].'")
						where clave = "'.$atr['clave'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function changePassword($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE perfil_administrador SET password = "'.$atr['password'].'" where clave = "'.$atr['clave'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function disableService($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE perfil_administrador SET estado_cuenta = "inactive" where clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function enableService($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE perfil_administrador 
					SET estado_cuenta = "active"
					where clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>