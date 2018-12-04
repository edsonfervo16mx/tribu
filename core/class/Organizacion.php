<?php
	class Organizacion{

		public $table = 'organizacion';

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

		public function listAll($key,$perfil){
			$request = $this->open($key);
			$sql = 'SELECT organizacion.clave as organizacion_clave,
						organizacion.nombre as organizacion_nombre,
						organizacion.eslogan as organizacion_eslogan,
						organizacion.correo as organizacion_correo,
						organizacion.telefono as organizacion_telefono,
						organizacion.logo as organizacion_logo,
						organizacion.descripcion as organizacion_descripcion,
						organizacion.perfil_administrador_clave as organizacion_perfil,
						organizacion.estado as organizacion_estado,
						perfil_administrador.nombre as perfil_nombre,
						perfil_administrador.correo as perfil_correo,
						perfil_administrador.password as perfil_password,
						perfil_administrador.id_cuenta as perfil_id,
						perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
						perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
						perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from organizacion
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where organizacion.perfil_administrador_clave = "'.$perfil.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$perfil){
			$request = $this->open($key);
			$sql = 'SELECT organizacion.clave as organizacion_clave,
						organizacion.nombre as organizacion_nombre,
						organizacion.eslogan as organizacion_eslogan,
						organizacion.correo as organizacion_correo,
						organizacion.telefono as organizacion_telefono,
						organizacion.logo as organizacion_logo,
						organizacion.descripcion as organizacion_descripcion,
						organizacion.perfil_administrador_clave as organizacion_perfil,
						organizacion.estado as organizacion_estado,
						perfil_administrador.nombre as perfil_nombre,
						perfil_administrador.correo as perfil_correo,
						perfil_administrador.password as perfil_password,
						perfil_administrador.id_cuenta as perfil_id,
						perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
						perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
						perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from organizacion
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where organizacion.estado = "active" and organizacion.perfil_administrador_clave = "'.$perfil.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$perfil){
			$request = $this->open($key);
			$sql = 'SELECT organizacion.clave as organizacion_clave,
						organizacion.nombre as organizacion_nombre,
						organizacion.eslogan as organizacion_eslogan,
						organizacion.correo as organizacion_correo,
						organizacion.telefono as organizacion_telefono,
						organizacion.logo as organizacion_logo,
						organizacion.descripcion as organizacion_descripcion,
						organizacion.perfil_administrador_clave as organizacion_perfil,
						organizacion.estado as organizacion_estado,
						perfil_administrador.nombre as perfil_nombre,
						perfil_administrador.correo as perfil_correo,
						perfil_administrador.password as perfil_password,
						perfil_administrador.id_cuenta as perfil_id,
						perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
						perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
						perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from organizacion
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where organizacion.estado = "inactive" and organizacion.perfil_administrador_clave = "'.$perfil.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$perfil,$clave){
			$request = $this->open($key);
			$sql = 'SELECT organizacion.clave as organizacion_clave,
						organizacion.nombre as organizacion_nombre,
						organizacion.eslogan as organizacion_eslogan,
						organizacion.correo as organizacion_correo,
						organizacion.telefono as organizacion_telefono,
						organizacion.logo as organizacion_logo,
						organizacion.descripcion as organizacion_descripcion,
						organizacion.perfil_administrador_clave as organizacion_perfil,
						organizacion.estado as organizacion_estado,
						perfil_administrador.nombre as perfil_nombre,
						perfil_administrador.correo as perfil_correo,
						perfil_administrador.password as perfil_password,
						perfil_administrador.id_cuenta as perfil_id,
						perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
						perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
						perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from organizacion
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where organizacion.estado = "active" and organizacion.perfil_administrador_clave = "'.$perfil.'" and organizacion.clave = "'.$clave.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO organizacion(
						nombre,
						eslogan,
						correo,
						telefono,
						logo,
						descripcion,
						perfil_administrador_clave)
			 		VALUES ( upper("'.$atr['nombre'].'"),
			 			 upper("'.$atr['eslogan'].'"),
			 			 upper("'.$atr['correo'].'"),
			 			 upper("'.$atr['telefono'].'"),
			 			 upper("'.$atr['logo'].'"),
			 			 upper("'.$atr['descripcion'].'"),
			 			 upper("'.$atr['perfil_administrador_clave'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			#echo $sql;
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE organizacion 
					SET nombre = upper("'.$atr['nombre'].'"),
						eslogan = upper("'.$atr['eslogan'].'"),
						correo = upper("'.$atr['correo'].'"),
						telefono = upper("'.$atr['telefono'].'"),
						logo = upper("'.$atr['logo'].'"),
						descripcion = upper("'.$atr['descripcion'].'"),
						perfil_administrador_clave = upper("'.$atr['perfil_administrador_clave'].'")
						where clave = "'.$atr['clave'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$perfil,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE organizacion SET estado = "inactive" where perfil_administrador_clave = "'.$perfil.'" and clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$perfil,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE organizacion SET estado = "active" where perfil_administrador_clave = "'.$perfil.'" and clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>