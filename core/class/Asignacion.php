<?php
	class Asignacion{
		public $table = 'asignacion';

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
			$sql = 'SELECT asignacion.cve as asignacion_cve,
					asignacion.nombre as asignacion_nombre,
					asignacion.fecha_inicio as asignacion_fecha_inicio,
					asignacion.fecha_fin as asignacion_fecha_fin,
					asignacion.hora_inicio as asignacion_hora_inicio,
					asignacion.hora_fin as asignacion_hora_fin,
					asignacion.descripcion as asignacion_descripcion,
					asignacion.notificacion_cve as asignacion_notificacion_cve,
					asignacion.organizacion_clave as asignacion_organizacion_clave,
					asignacion.estado as asignacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from asignacion
					inner join organizacion on (asignacion.organizacion_clave = organizacion.clave)
					where asignacion.organizacion_clave = "'.$org.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT asignacion.cve as asignacion_cve,
					asignacion.nombre as asignacion_nombre,
					asignacion.fecha_inicio as asignacion_fecha_inicio,
					asignacion.fecha_fin as asignacion_fecha_fin,
					asignacion.hora_inicio as asignacion_hora_inicio,
					asignacion.hora_fin as asignacion_hora_fin,
					asignacion.descripcion as asignacion_descripcion,
					asignacion.notificacion_cve as asignacion_notificacion_cve,
					asignacion.organizacion_clave as asignacion_organizacion_clave,
					asignacion.estado as asignacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from asignacion
					inner join organizacion on (asignacion.organizacion_clave = organizacion.clave)
					where asignacion.organizacion_clave = "'.$org.'" and asignacion.estado = "active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT asignacion.cve as asignacion_cve,
					asignacion.nombre as asignacion_nombre,
					asignacion.fecha_inicio as asignacion_fecha_inicio,
					asignacion.fecha_fin as asignacion_fecha_fin,
					asignacion.hora_inicio as asignacion_hora_inicio,
					asignacion.hora_fin as asignacion_hora_fin,
					asignacion.descripcion as asignacion_descripcion,
					asignacion.notificacion_cve as asignacion_notificacion_cve,
					asignacion.organizacion_clave as asignacion_organizacion_clave,
					asignacion.estado as asignacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from asignacion
					inner join organizacion on (asignacion.organizacion_clave = organizacion.clave)
					where asignacion.organizacion_clave = "'.$org.'" and asignacion.estado = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT asignacion.cve as asignacion_cve,
					asignacion.nombre as asignacion_nombre,
					asignacion.fecha_inicio as asignacion_fecha_inicio,
					asignacion.fecha_fin as asignacion_fecha_fin,
					asignacion.hora_inicio as asignacion_hora_inicio,
					asignacion.hora_fin as asignacion_hora_fin,
					asignacion.descripcion as asignacion_descripcion,
					asignacion.notificacion_cve as asignacion_notificacion_cve,
					asignacion.organizacion_clave as asignacion_organizacion_clave,
					asignacion.estado as asignacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from asignacion
					inner join organizacion on (asignacion.organizacion_clave = organizacion.clave)
					where asignacion.cve = "'.$clave.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO asignacion(
						nombre,
						fecha_inicio,
						fecha_fin,
						hora_inicio,
						hora_fin,
						descripcion,
						notificacion_cve,
						organizacion_clave)
			 		VALUES ( upper("'.$atr['nombre'].'"),
						upper("'.$atr['fecha_inicio'].'"),
						upper("'.$atr['fecha_fin'].'"),
						upper("'.$atr['hora_inicio'].'"),
						upper("'.$atr['hora_fin'].'"),
						upper("'.$atr['descripcion'].'"),
						upper("'.$atr['notificacion_cve'].'"),
						upper("'.$atr['organizacion_clave'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE asignacion 
					SET nombre = upper("'.$atr['nombre'].'"),
					fecha_inicio = upper("'.$atr['fecha_inicio'].'"),
					fecha_fin = upper("'.$atr['fecha_fin'].'"),
					hora_inicio = upper("'.$atr['hora_inicio'].'"),
					hora_fin = upper("'.$atr['hora_fin'].'"),
					descripcion = upper("'.$atr['descripcion'].'"),
					notificacion_cve = upper("'.$atr['notificacion_cve'].'"),
					organizacion_clave = upper("'.$atr['organizacion_clave'].'")
					where cve = "'.$atr['cve'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE asignacion SET estado = "inactive" where cve = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE asignacion SET estado = "active" where cve = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>