<?php
	class RelEquipoPersona{
		public $table = 'rel_equipo_persona';

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
			$sql = 'SELECT rel_equipo_persona.id as rel_equipo_persona_id,
					rel_equipo_persona.estado as rel_equipo_persona_estado,
					equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.organizacion_clave as equipo_organizacion_clave,
					equipo.estado as equipo_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as persona_organizacion_clave,
					persona.estado as persona_estado,
					organizacion.clave as organizacion_clave,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from rel_equipo_persona
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					inner join organizacion on (equipo.organizacion_clave = organizacion.clave)
					where organizacion.clave = "'.$org.'"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listActive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT rel_equipo_persona.id as rel_equipo_persona_id,
					rel_equipo_persona.estado as rel_equipo_persona_estado,
					equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.organizacion_clave as equipo_organizacion_clave,
					equipo.estado as equipo_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as persona_organizacion_clave,
					persona.estado as persona_estado,
					organizacion.clave as organizacion_clave,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from rel_equipo_persona
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					inner join organizacion on (equipo.organizacion_clave = organizacion.clave)
					where organizacion.clave = "'.$org.'" and rel_equipo_persona.estado ="active"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function listInactive($key,$org){
			$request = $this->open($key);
			$sql = 'SELECT rel_equipo_persona.id as rel_equipo_persona_id,
					rel_equipo_persona.estado as rel_equipo_persona_estado,
					equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.organizacion_clave as equipo_organizacion_clave,
					equipo.estado as equipo_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as persona_organizacion_clave,
					persona.estado as persona_estado,
					organizacion.clave as organizacion_clave,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from rel_equipo_persona
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					inner join organizacion on (equipo.organizacion_clave = organizacion.clave)
					where organizacion.clave = "'.$org.'" and rel_equipo_persona.estado ="inactive"';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function viewData($key,$clave){
			$request = $this->open($key);
			$sql = 'SELECT rel_equipo_persona.id as rel_equipo_persona_id,
					rel_equipo_persona.estado as rel_equipo_persona_estado,
					equipo.clave as equipo_clave,
					equipo.nombre as equipo_nombre,
					equipo.descripcion as equipo_descripcion,
					equipo.color as equipo_color,
					equipo.organizacion_clave as equipo_organizacion_clave,
					equipo.estado as equipo_estado,
					persona.clave as persona_clave,
					persona.nombre as persona_nombre,
					persona.mote as persona_mote,
					persona.correo as persona_correo,
					persona.password as persona_password,
					persona.id_persona as persona_id_persona,
					persona.telefono as persona_telefono,
					persona.organizacion_clave as persona_organizacion_clave,
					persona.estado as persona_estado,
					organizacion.clave as organizacion_clave,
					organizacion.nombre as organizacion_nombre,
					organizacion.eslogan as organizacion_eslogan,
					organizacion.correo as organizacion_correo,
					organizacion.telefono as organizacion_telefono,
					organizacion.logo as organizacion_logo,
					organizacion.descripcion as organizacion_descripcion,
					organizacion.perfil_administrador_clave as organizacion_perfil_administrador_clave,
					organizacion.estado as organizacion_estado
					from rel_equipo_persona
					inner join equipo on (rel_equipo_persona.equipo_clave = equipo.clave)
					inner join persona on (rel_equipo_persona.persona_clave = persona.clave)
					inner join organizacion on (equipo.organizacion_clave = organizacion.clave)
					where rel_equipo_persona.id = "'.$clave.'" LIMIT 1';
			$res = $request->consultaDatos($key,$sql);
			return ($res);
		}

		public function insert($key,$atr){
			$request = $this->open($key);
			$sql = 'INSERT INTO rel_equipo_persona(
						equipo_clave,
						persona_clave)
			 		VALUES ( upper("'.$atr['equipo_clave'].'"),
						upper("'.$atr['persona_clave'].'")
			 			)';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function modify($key,$atr){
			$request = $this->open($key);
			$sql = 'UPDATE rel_equipo_persona 
					SET equipo_clave = upper("'.$atr['equipo_clave'].'"),
					persona_clave = upper("'.$atr['persona_clave'].'")
					where id = "'.$atr['id'].'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function remove($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE rel_equipo_persona SET estado = "inactive" where id = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

		public function restore($key,$clave){
			$request = $this->open($key);
			$sql = 'UPDATE rel_equipo_persona SET estado = "active" where id = "'.$clave.'"';
			$res = $request->disparadorSimple($key,$sql);
			return ($res);
		}

	}
?>