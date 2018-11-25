<?php
	class Publicacion{

		public $table = 'publicacion';

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
			$sql = 'SELECT publicacion.cve as publicacion_clave,
					publicacion.fecha as publicacion_fecha,
					publicacion.titulo as publicacion_titulo,
					publicacion.descripcion as publicacion_descripcion,
					publicacion.adjunto as publicacion_adjunto,
					publicacion.organizacion_clave as organizacion_clave,
					publicacion.estado as publicacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from publicacion
					inner join organizacion on (publicacion.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where publicacion.perfil_administrador_clave = "'.$perfil.'"';
			$res = $request->consultaDatos($key,$sql);
			#echo $sql;
			return ($res);
		}

		public function listActive($key,$perfil){
			$request = $this->open($key);
			$sql = 'SELECT publicacion.cve as publicacion_clave,
					publicacion.fecha as publicacion_fecha,
					publicacion.titulo as publicacion_titulo,
					publicacion.descripcion as publicacion_descripcion,
					publicacion.adjunto as publicacion_adjunto,
					publicacion.organizacion_clave as organizacion_clave,
					publicacion.estado as publicacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from publicacion
					inner join organizacion on (publicacion.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where publicacion.perfil_administrador_clave = "'.$perfil.'" where publicacion.estado = "active"';
			$res = $request->consultaDatos($key,$sql);
			#echo $sql;
			return ($res);
		}

		public function listInactive($key,$perfil){
			$request = $this->open($key);
			$sql = 'SELECT publicacion.cve as publicacion_clave,
					publicacion.fecha as publicacion_fecha,
					publicacion.titulo as publicacion_titulo,
					publicacion.descripcion as publicacion_descripcion,
					publicacion.adjunto as publicacion_adjunto,
					publicacion.organizacion_clave as organizacion_clave,
					publicacion.estado as publicacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from publicacion
					inner join organizacion on (publicacion.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where publicacion.perfil_administrador_clave = "'.$perfil.'" where publicacion.estado = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			#echo $sql;
			return ($res);
		}

		public function viewData($key,$perfil,$clave){
			$request = $this->open($key);
			$sql = 'SELECT publicacion.cve as publicacion_clave,
					publicacion.fecha as publicacion_fecha,
					publicacion.titulo as publicacion_titulo,
					publicacion.descripcion as publicacion_descripcion,
					publicacion.adjunto as publicacion_adjunto,
					publicacion.organizacion_clave as organizacion_clave,
					publicacion.estado as publicacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					perfil_administrador.nombre as perfil_nombre,
					perfil_administrador.correo as perfil_correo,
					perfil_administrador.password as perfil_password,
					perfil_administrador.id_cuenta as perfil_id_cuenta,
					perfil_administrador.inicio_cuenta as perfil_inicio_cuenta,
					perfil_administrador.vencimiento_cuenta as perfil_vencimiento_cuenta,
					perfil_administrador.estado_cuenta as perfil_estado_cuenta
					from publicacion
					inner join organizacion on (publicacion.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where publicacion.perfil_administrador_clave = "'.$perfil.'" and publicacion.estado = "active" and publicacion.cve = "'.$clave.'"';
			$res = $request->consultaDatos($key,$sql);
			#echo $sql;
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO publicacion(
						fecha,
						titulo,
						descripcion,
						adjunto,
						organizacion_clave)
			 		VALUES ( upper("'.$atr['fecha'].'"),
			 			 upper("'.$atr['titulo'].'"),
			 			 upper("'.$atr['descripcion'].'"),
			 			 upper("'.$atr['adjunto'].'"),
			 			 upper("'.$atr['organizacion_clave'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE publicacion 
					SET fecha = upper("'.$atr['fecha'].'"),
						titulo = upper("'.$atr['titulo'].'"),
						descripcion = upper("'.$atr['descripcion'].'"),
						adjunto = upper("'.$atr['adjunto'].'"),
						organizacion_clave = upper("'.$atr['organizacion_clave'].'"),
						where clave = "'.$atr['clave'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$perfil,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE publicacion SET estado = "inactive" where organizacion_clave = "'.$perfil.'" and clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$perfil,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE publicacion SET estado = "active" where organizacion_clave = "'.$perfil.'" and clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>