<?php
	class Aviso{
		public $table = 'aviso';

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
			$sql = 'SELECT aviso.cve as aviso_cve,
					aviso.nombre as aviso_nombre,
					aviso.fecha_inicio as aviso_fecha_inicio,
					aviso.fecha_fin as aviso_fecha_fin,
					aviso.hora_inicio as aviso_hora_inicio,
					aviso.hora_fin as aviso_hora_fin,
					aviso.descripcion as aviso_descripcion,
					aviso.notificacion_cve as aviso_notificacion_cve,
					aviso.organizacion_clave as aviso_organizacion_clave,
					aviso.estado as aviso_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from aviso
					inner join organizacion on (aviso.organizacion_clave = organizacion.clave)
					where aviso.organizacion_clave = "'.$org.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT aviso.cve as aviso_cve,
					aviso.nombre as aviso_nombre,
					aviso.fecha_inicio as aviso_fecha_inicio,
					aviso.fecha_fin as aviso_fecha_fin,
					aviso.hora_inicio as aviso_hora_inicio,
					aviso.hora_fin as aviso_hora_fin,
					aviso.descripcion as aviso_descripcion,
					aviso.notificacion_cve as aviso_notificacion_cve,
					aviso.organizacion_clave as aviso_organizacion_clave,
					aviso.estado as aviso_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from aviso
					inner join organizacion on (aviso.organizacion_clave = organizacion.clave)
					where aviso.organizacion_clave = "'.$org.'" and aviso.estado ="active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT aviso.cve as aviso_cve,
					aviso.nombre as aviso_nombre,
					aviso.fecha_inicio as aviso_fecha_inicio,
					aviso.fecha_fin as aviso_fecha_fin,
					aviso.hora_inicio as aviso_hora_inicio,
					aviso.hora_fin as aviso_hora_fin,
					aviso.descripcion as aviso_descripcion,
					aviso.notificacion_cve as aviso_notificacion_cve,
					aviso.organizacion_clave as aviso_organizacion_clave,
					aviso.estado as aviso_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from aviso
					inner join organizacion on (aviso.organizacion_clave = organizacion.clave)
					where aviso.organizacion_clave = "'.$org.'" and aviso.estado ="inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT aviso.cve as aviso_cve,
					aviso.nombre as aviso_nombre,
					aviso.fecha_inicio as aviso_fecha_inicio,
					aviso.fecha_fin as aviso_fecha_fin,
					aviso.hora_inicio as aviso_hora_inicio,
					aviso.hora_fin as aviso_hora_fin,
					aviso.descripcion as aviso_descripcion,
					aviso.notificacion_cve as aviso_notificacion_cve,
					aviso.organizacion_clave as aviso_organizacion_clave,
					aviso.estado as aviso_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from aviso
					inner join organizacion on (aviso.organizacion_clave = organizacion.clave)
					where aviso.cve = "'.$org.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO aviso(
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
			$sql = 'UPDATE aviso 
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
			$sql = 'UPDATE aviso SET estado = "inactive" where cve = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE aviso SET estado = "active" where cve = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}


	}
?>