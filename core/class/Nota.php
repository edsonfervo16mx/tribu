<?php
	class Nota{

		public $table = 'nota';

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

		public function listAll($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT nota.cve as nota_cve,
					nota.nombre as nota_nombre,
					nota.fecha_inicio as nota_fecha_inicio,
					nota.fecha_fin as nota_fecha_fin,
					nota.hora_inicio as nota_hora_inicio,
					nota.hora_fin as nota_hora_fin,
					nota.descripcion as nota_descripcion,
					nota.estado as nota_estado,
					organizacion.clave as organizacion_clave,
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
					from nota
					inner join organizacion on (nota.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where nota.organizacion_clave = "'.$org.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT nota.cve as nota_cve,
					nota.nombre as nota_nombre,
					nota.fecha_inicio as nota_fecha_inicio,
					nota.fecha_fin as nota_fecha_fin,
					nota.hora_inicio as nota_hora_inicio,
					nota.hora_fin as nota_hora_fin,
					nota.descripcion as nota_descripcion,
					nota.estado as nota_estado,
					organizacion.clave as organizacion_clave,
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
					from nota
					inner join organizacion on (nota.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where nota.organizacion_clave = "'.$org.'" and nota.estado ="active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT nota.cve as nota_cve,
					nota.nombre as nota_nombre,
					nota.fecha_inicio as nota_fecha_inicio,
					nota.fecha_fin as nota_fecha_fin,
					nota.hora_inicio as nota_hora_inicio,
					nota.hora_fin as nota_hora_fin,
					nota.descripcion as nota_descripcion,
					nota.estado as nota_estado,
					organizacion.clave as organizacion_clave,
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
					from nota
					inner join organizacion on (nota.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where nota.organizacion_clave = "'.$org.'" and nota.estado ="inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT nota.cve as nota_cve,
					nota.nombre as nota_nombre,
					nota.fecha_inicio as nota_fecha_inicio,
					nota.fecha_fin as nota_fecha_fin,
					nota.hora_inicio as nota_hora_inicio,
					nota.hora_fin as nota_hora_fin,
					nota.descripcion as nota_descripcion,
					nota.estado as nota_estado,
					organizacion.clave as organizacion_clave,
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
					from nota
					inner join organizacion on (nota.organizacion_clave = organizacion.clave)
					inner join perfil_administrador on (organizacion.perfil_administrador_clave = perfil_administrador.clave)
					where nota.cve = "'.$clave.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO nota(
						nombre,
						fecha_inicio,
						fecha_fin,
						hora_inicio,
						hora_fin,
						descripcion,
						organizacion_clave)
			 		VALUES ( upper("'.$atr['nombre'].'"),
						upper("'.$atr['fecha_inicio'].'"),
						upper("'.$atr['fecha_fin'].'"),
						upper("'.$atr['hora_inicio'].'"),
						upper("'.$atr['hora_fin'].'"),
						upper("'.$atr['descripcion'].'"),
						upper("'.$atr['organizacion_clave'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE nota 
					SET nombre = upper("'.$atr['nombre'].'"),
					fecha_inicio = upper("'.$atr['fecha_inicio'].'"),
					fecha_fin = upper("'.$atr['fecha_fin'].'"),
					hora_inicio = upper("'.$atr['hora_inicio'].'"),
					hora_fin = upper("'.$atr['hora_fin'].'"),
					descripcion = upper("'.$atr['descripcion'].'"),
					organizacion_clave = upper("'.$atr['organizacion_clave'].'"),
					where clave = "'.$atr['clave'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE nota SET estado = "inactive" where clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$perfil,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE nota SET estado = "active" where clave = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>