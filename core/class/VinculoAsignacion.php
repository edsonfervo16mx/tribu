<?php
	class VinculoAsignacion{
		public $table = 'vinculo_asignacion';

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
			$sql = 'SELECT vinculo_asignacion.cve as vinculo_asignacion_cve,
					vinculo_asignacion.asignacion_cve as asignacion_cve,
					vinculo_asignacion.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_asignacion.estado as vinculo_estado,
					asignacion.nombre as asignacion_nombre,
					asignacion.fecha_inicio as asignacion_fecha_inicio,
					asignacion.fecha_fin as asignacion_fecha_fin,
					asignacion.hora_inicio as asignacion_hora_inicio,
					asignacion.hora_fin as asignacion_hora_fin,
					asignacion.descripcion as asignacion_descripcion,
					asignacion.notificacion_cve as asignacion_notificacion_cve,
					asignacion.organizacion_clave as organizacion_clave,
					asignacion.estado as asignacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.estado as equipo_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.estado as persona_estado
					from vinculo_asignacion
					inner join asignacion on (vinculo_asignacion.asignacion_cve = asignacion.cve)
					inner join organizacion on (asignacion.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_asignacion.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where asignacion.organizacion_clave = "'.$org.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT vinculo_asignacion.cve as vinculo_asignacion_cve,
					vinculo_asignacion.asignacion_cve as asignacion_cve,
					vinculo_asignacion.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_asignacion.estado as vinculo_estado,
					asignacion.nombre as asignacion_nombre,
					asignacion.fecha_inicio as asignacion_fecha_inicio,
					asignacion.fecha_fin as asignacion_fecha_fin,
					asignacion.hora_inicio as asignacion_hora_inicio,
					asignacion.hora_fin as asignacion_hora_fin,
					asignacion.descripcion as asignacion_descripcion,
					asignacion.notificacion_cve as asignacion_notificacion_cve,
					asignacion.organizacion_clave as organizacion_clave,
					asignacion.estado as asignacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.estado as equipo_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.estado as persona_estado
					from vinculo_asignacion
					inner join asignacion on (vinculo_asignacion.asignacion_cve = asignacion.cve)
					inner join organizacion on (asignacion.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_asignacion.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where asignacion.organizacion_clave = "'.$org.'" and vinculo_asignacion.estado = "active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT vinculo_asignacion.cve as vinculo_asignacion_cve,
					vinculo_asignacion.asignacion_cve as asignacion_cve,
					vinculo_asignacion.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_asignacion.estado as vinculo_estado,
					asignacion.nombre as asignacion_nombre,
					asignacion.fecha_inicio as asignacion_fecha_inicio,
					asignacion.fecha_fin as asignacion_fecha_fin,
					asignacion.hora_inicio as asignacion_hora_inicio,
					asignacion.hora_fin as asignacion_hora_fin,
					asignacion.descripcion as asignacion_descripcion,
					asignacion.notificacion_cve as asignacion_notificacion_cve,
					asignacion.organizacion_clave as organizacion_clave,
					asignacion.estado as asignacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.estado as equipo_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.estado as persona_estado
					from vinculo_asignacion
					inner join asignacion on (vinculo_asignacion.asignacion_cve = asignacion.cve)
					inner join organizacion on (asignacion.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_asignacion.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where asignacion.organizacion_clave = "'.$org.'" and vinculo_asignacion.estado = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT vinculo_asignacion.cve as vinculo_asignacion_cve,
					vinculo_asignacion.asignacion_cve as asignacion_cve,
					vinculo_asignacion.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_asignacion.estado as vinculo_estado,
					asignacion.nombre as asignacion_nombre,
					asignacion.fecha_inicio as asignacion_fecha_inicio,
					asignacion.fecha_fin as asignacion_fecha_fin,
					asignacion.hora_inicio as asignacion_hora_inicio,
					asignacion.hora_fin as asignacion_hora_fin,
					asignacion.descripcion as asignacion_descripcion,
					asignacion.notificacion_cve as asignacion_notificacion_cve,
					asignacion.organizacion_clave as organizacion_clave,
					asignacion.estado as asignacion_estado,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as perfil_clave,
					organizacion.estado as organizacion_estado,
					equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.estado as equipo_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.estado as persona_estado
					from vinculo_asignacion
					inner join asignacion on (vinculo_asignacion.asignacion_cve = asignacion.cve)
					inner join organizacion on (asignacion.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_asignacion.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where vinculo_asignacion.cve = "'.$clave.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO vinculo_asignacion(
						asignacion_cve,
						rel_equipo_persona_id)
			 		VALUES (upper("'.$atr['asignacion_cve'].'"),
						upper("'.$atr['rel_equipo_persona_id'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE vinculo_asignacion 
					SET asignacion_cve = upper("'.$atr['asignacion_cve'].'"),
					rel_equipo_persona_id = upper("'.$atr['rel_equipo_persona_id'].'")
					where cve = "'.$atr['cve'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE vinculo_asignacion SET estado = "inactive" where cve = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE vinculo_asignacion SET estado = "active" where cve = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>