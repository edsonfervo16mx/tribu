<?php
	class Evento{
		public $table = 'evento';

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
			$sql = 'SELECT evento.cve as evento_cve,
					evento.nombre as evento_nombre,
					evento.fecha_inicio as evento_fecha_inicio,
					evento.fecha_fin as evento_fecha_fin,
					evento.hora_inicio as evento_hora_inicio,
					evento.hora_fin as evento_hora_fin,
					evento.descripcion as evento_descripcion,
					evento.lugar as evento_lugar,
					evento.imagen as evento_imagen,
					evento.notificacion_cve as evento_notificacion_cve,
					evento.organizacion_clave as organizacion_clave,
					evento.estado as evento_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado
					from evento
					inner join organizacion on (evento.organizacion_clave = organizacion.clave)
					where evento.organizacion_clave ="'.$org.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT evento.cve as evento_cve,
					evento.nombre as evento_nombre,
					evento.fecha_inicio as evento_fecha_inicio,
					evento.fecha_fin as evento_fecha_fin,
					evento.hora_inicio as evento_hora_inicio,
					evento.hora_fin as evento_hora_fin,
					evento.descripcion as evento_descripcion,
					evento.lugar as evento_lugar,
					evento.imagen as evento_imagen,
					evento.notificacion_cve as evento_notificacion_cve,
					evento.organizacion_clave as organizacion_clave,
					evento.estado as evento_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado
					from evento
					inner join organizacion on (evento.organizacion_clave = organizacion.clave)
					where evento.organizacion_clave ="'.$org.'" and evento.estado = "active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT evento.cve as evento_cve,
					evento.nombre as evento_nombre,
					evento.fecha_inicio as evento_fecha_inicio,
					evento.fecha_fin as evento_fecha_fin,
					evento.hora_inicio as evento_hora_inicio,
					evento.hora_fin as evento_hora_fin,
					evento.descripcion as evento_descripcion,
					evento.lugar as evento_lugar,
					evento.imagen as evento_imagen,
					evento.notificacion_cve as evento_notificacion_cve,
					evento.organizacion_clave as organizacion_clave,
					evento.estado as evento_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado
					from evento
					inner join organizacion on (evento.organizacion_clave = organizacion.clave)
					where evento.organizacion_clave ="'.$org.'" and evento.estado = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT evento.cve as evento_cve,
					evento.nombre as evento_nombre,
					evento.fecha_inicio as evento_fecha_inicio,
					evento.fecha_fin as evento_fecha_fin,
					evento.hora_inicio as evento_hora_inicio,
					evento.hora_fin as evento_hora_fin,
					evento.descripcion as evento_descripcion,
					evento.lugar as evento_lugar,
					evento.imagen as evento_imagen,
					evento.notificacion_cve as evento_notificacion_cve,
					evento.organizacion_clave as organizacion_clave,
					evento.estado as evento_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado
					from evento
					inner join organizacion on (evento.organizacion_clave = organizacion.clave)
					where evento.cve ="'.$clave.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO evento(
						nombre,
						fecha_inicio,
						fecha_fin,
						hora_inicio,
						hora_fin,
						descripcion,
						lugar,
						imagen,
						notificacion_cve,
						organizacion_clave)
			 		VALUES ( upper("'.$atr['nombre'].'"),
						upper("'.$atr['fecha_inicio'].'"),
						upper("'.$atr['fecha_fin'].'"),
						upper("'.$atr['hora_inicio'].'"),
						upper("'.$atr['hora_fin'].'"),
						upper("'.$atr['descripcion'].'"),
						upper("'.$atr['lugar'].'"),
						upper("'.$atr['imagen'].'"),
						upper("'.$atr['notificacion_cve'].'"),
						upper("'.$atr['organizacion_clave'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE evento 
					SET nombre = upper("'.$atr['nombre'].'"),
					fecha_inicio = upper("'.$atr['fecha_inicio'].'"),
					fecha_fin = upper("'.$atr['fecha_fin'].'"),
					hora_inicio = upper("'.$atr['hora_inicio'].'"),
					hora_fin = upper("'.$atr['hora_fin'].'"),
					descripcion = upper("'.$atr['descripcion'].'"),
					lugar = upper("'.$atr['lugar'].'"),
					imagen = upper("'.$atr['imagen'].'"),
					notificacion_cve = upper("'.$atr['notificacion_cve'].'"),
					organizacion_clave = upper("'.$atr['organizacion_clave'].'")
					where cve = "'.$atr['cve'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE evento SET estado = "inactive" where cve = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE evento SET estado = "active" where cve = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>