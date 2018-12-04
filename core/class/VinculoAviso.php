<?php
	class VinculoAviso{
		public $table = 'vinculo_aviso';

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
			$sql = 'SELECT vinculo_aviso.id as vinculo_aviso_id,
					vinculo_aviso.aviso_cve as aviso_cve,
					vinculo_aviso.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_aviso.estado as vinculo_estado,
					aviso.nombre as aviso_nombre,
					aviso.fecha_inicio as aviso_fecha_inicio,
					aviso.fecha_fin as aviso_fecha_fin,
					aviso.hora_inicio as aviso_hora_inicio,
					aviso.hora_fin as aviso_hora_fin,
					aviso.descripcion as aviso_descripcion,
					aviso.notificacion_cve as aviso_notificacion_cve,
					aviso.organizacion_clave as organizacion_clave,
					aviso.estado as aviso_estado,
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
					from vinculo_aviso
					inner join aviso on (vinculo_aviso.aviso_cve = aviso.cve)
					inner join organizacion on (aviso.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_aviso.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where aviso.organizacion_clave = "'.$org.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT vinculo_aviso.id as vinculo_aviso_id,
					vinculo_aviso.aviso_cve as aviso_cve,
					vinculo_aviso.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_aviso.estado as vinculo_estado,
					aviso.nombre as aviso_nombre,
					aviso.fecha_inicio as aviso_fecha_inicio,
					aviso.fecha_fin as aviso_fecha_fin,
					aviso.hora_inicio as aviso_hora_inicio,
					aviso.hora_fin as aviso_hora_fin,
					aviso.descripcion as aviso_descripcion,
					aviso.notificacion_cve as aviso_notificacion_cve,
					aviso.organizacion_clave as organizacion_clave,
					aviso.estado as aviso_estado,
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
					from vinculo_aviso
					inner join aviso on (vinculo_aviso.aviso_cve = aviso.cve)
					inner join organizacion on (aviso.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_aviso.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where aviso.organizacion_clave = "'.$org.'" and vinculo_aviso.estado = "active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT vinculo_aviso.id as vinculo_aviso_id,
					vinculo_aviso.aviso_cve as aviso_cve,
					vinculo_aviso.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_aviso.estado as vinculo_estado,
					aviso.nombre as aviso_nombre,
					aviso.fecha_inicio as aviso_fecha_inicio,
					aviso.fecha_fin as aviso_fecha_fin,
					aviso.hora_inicio as aviso_hora_inicio,
					aviso.hora_fin as aviso_hora_fin,
					aviso.descripcion as aviso_descripcion,
					aviso.notificacion_cve as aviso_notificacion_cve,
					aviso.organizacion_clave as organizacion_clave,
					aviso.estado as aviso_estado,
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
					from vinculo_aviso
					inner join aviso on (vinculo_aviso.aviso_cve = aviso.cve)
					inner join organizacion on (aviso.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_aviso.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where aviso.organizacion_clave = "'.$org.'" and vinculo_aviso.estado = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT vinculo_aviso.id as vinculo_aviso_id,
					vinculo_aviso.aviso_cve as aviso_cve,
					vinculo_aviso.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_aviso.estado as vinculo_estado,
					aviso.nombre as aviso_nombre,
					aviso.fecha_inicio as aviso_fecha_inicio,
					aviso.fecha_fin as aviso_fecha_fin,
					aviso.hora_inicio as aviso_hora_inicio,
					aviso.hora_fin as aviso_hora_fin,
					aviso.descripcion as aviso_descripcion,
					aviso.notificacion_cve as aviso_notificacion_cve,
					aviso.organizacion_clave as organizacion_clave,
					aviso.estado as aviso_estado,
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
					from vinculo_aviso
					inner join aviso on (vinculo_aviso.aviso_cve = aviso.cve)
					inner join organizacion on (aviso.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_aviso.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where aviso.organizacion_clave = "'.$clave.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO vinculo_aviso(
						aviso_cve,
						rel_equipo_persona_id)
			 		VALUES (upper("'.$atr['aviso_cve'].'"),
						upper("'.$atr['rel_equipo_persona_id'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE vinculo_aviso 
					SET aviso_cve = upper("'.$atr['aviso_cve'].'"),
					rel_equipo_persona_id = upper("'.$atr['rel_equipo_persona_id'].'")
					where id = "'.$atr['id'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE vinculo_aviso SET estado = "inactive" where id = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE vinculo_aviso SET estado = "active" where id = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>