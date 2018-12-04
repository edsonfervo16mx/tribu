<?php
	class VinculoReunion{
		public $table = 'vinculo_reunion';

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
			$sql = 'SELECT vinculo_reunion.cve as vinculo_reunion_cve,
					vinculo_reunion.reunion_cve as reunion_cve,
					vinculo_reunion.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_reunion.estado as vinculo_estado,
					reunion.nombre as reunion_nombre,
					reunion.fecha_inicio as reunion_fecha_inicio,
					reunion.fecha_fin as reunion_fecha_fin,
					reunion.hora_inicio as reunion_hora_inicio,
					reunion.hora_fin as reunion_hora_fin,
					reunion.descripcion as reunion_descripcion,
					reunion.notificacion_cve as reunion_notificacion_cve,
					reunion.organizacion_clave as organizacion_clave,
					reunion.estado as reunion_estado,
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
					from vinculo_reunion
					inner join reunion on (vinculo_reunion.reunion_cve = reunion.cve)
					inner join organizacion on (reunion.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_reunion.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where reunion.organizacion_clave = "'.$org.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT vinculo_reunion.cve as vinculo_reunion_cve,
					vinculo_reunion.reunion_cve as reunion_cve,
					vinculo_reunion.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_reunion.estado as vinculo_estado,
					reunion.nombre as reunion_nombre,
					reunion.fecha_inicio as reunion_fecha_inicio,
					reunion.fecha_fin as reunion_fecha_fin,
					reunion.hora_inicio as reunion_hora_inicio,
					reunion.hora_fin as reunion_hora_fin,
					reunion.descripcion as reunion_descripcion,
					reunion.notificacion_cve as reunion_notificacion_cve,
					reunion.organizacion_clave as organizacion_clave,
					reunion.estado as reunion_estado,
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
					from vinculo_reunion
					inner join reunion on (vinculo_reunion.reunion_cve = reunion.cve)
					inner join organizacion on (reunion.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_reunion.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where reunion.organizacion_clave = "'.$org.'" and vinculo_reunion.estado = "active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT vinculo_reunion.cve as vinculo_reunion_cve,
					vinculo_reunion.reunion_cve as reunion_cve,
					vinculo_reunion.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_reunion.estado as vinculo_estado,
					reunion.nombre as reunion_nombre,
					reunion.fecha_inicio as reunion_fecha_inicio,
					reunion.fecha_fin as reunion_fecha_fin,
					reunion.hora_inicio as reunion_hora_inicio,
					reunion.hora_fin as reunion_hora_fin,
					reunion.descripcion as reunion_descripcion,
					reunion.notificacion_cve as reunion_notificacion_cve,
					reunion.organizacion_clave as organizacion_clave,
					reunion.estado as reunion_estado,
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
					from vinculo_reunion
					inner join reunion on (vinculo_reunion.reunion_cve = reunion.cve)
					inner join organizacion on (reunion.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_reunion.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where reunion.organizacion_clave = "'.$org.'" and vinculo_reunion.estado = "inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT vinculo_reunion.cve as vinculo_reunion_cve,
					vinculo_reunion.reunion_cve as reunion_cve,
					vinculo_reunion.rel_equipo_persona_id as rel_equipo_persona_id,
					vinculo_reunion.estado as vinculo_estado,
					reunion.nombre as reunion_nombre,
					reunion.fecha_inicio as reunion_fecha_inicio,
					reunion.fecha_fin as reunion_fecha_fin,
					reunion.hora_inicio as reunion_hora_inicio,
					reunion.hora_fin as reunion_hora_fin,
					reunion.descripcion as reunion_descripcion,
					reunion.notificacion_cve as reunion_notificacion_cve,
					reunion.organizacion_clave as organizacion_clave,
					reunion.estado as reunion_estado,
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
					from vinculo_reunion
					inner join reunion on (vinculo_reunion.reunion_cve = reunion.cve)
					inner join organizacion on (reunion.organizacion_clave  = organizacion.clave)
					inner join rel_equipo_persona on (vinculo_reunion.rel_equipo_persona_id = rel_equipo_persona.id)
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					where vinculo_reunion.cve = "'.$clave.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO vinculo_reunion(
						reunion_cve,
						rel_equipo_persona_id)
			 		VALUES (upper("'.$atr['reunion_cve'].'"),
						upper("'.$atr['rel_equipo_persona_id'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE vinculo_reunion 
					SET reunion_cve = upper("'.$atr['reunion_cve'].'"),
					rel_equipo_persona_id = upper("'.$atr['rel_equipo_persona_id'].'")
					where cve = "'.$atr['cve'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE vinculo_reunion SET estado = "inactive" where cve = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE vinculo_reunion SET estado = "active" where cve = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>