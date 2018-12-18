function registro(){
	document.getElementById("usuario").focus();
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var app = new Vue({
	el: '#app',
	data: {
		infoUsuario: '',
		usuario: getParameterByName('usuario'),
		inputUsuario: 'input',
		messageUsuario: 'help',
		email: getParameterByName('email'),
		inputEmail: 'input',
		infoEmail: '',
		messageEmail: 'help',
		reg: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/,
		password: '',
		inputPassword: 'input',
		messagePassword: 'help',
		infoPassword: '',
		statusUsuario: false,
		statusEmail: false,
		statusPassword: false,
		isButtonDisabled: true,
		//
		logEmailValue: '',
		logEmailInput: 'input is-medium',
		logEmailAlert: '',
		logEmailBoxAlert: 'help',
		logEmailStatus: false,
		logPasswordValue: '',
		logPasswordInput: 'input is-medium',
		logPasswordAlert: '',
		logPasswordBoxAlert: 'help',
		logPasswrodStatus: false,
		logButtonDisabled: true,
		//
		resEmailValue: '',
		resEmailInput: 'input is-medium',
		resEmailAlert: '',
		resEmailBoxAlert: 'help',
		resEmailStatus: false,
		resEmail2Value: '',
		resEmail2Input: 'input is-medium',
		resEmail2Alert: '',
		resEmail2BoxAlert: 'help',
		resEmail2Status: false,
		resButtonDisabled: true,
		//
		upEmailValue: '',
		upEmailInput: 'input is-medium',
		upEmailAlert: '',
		upEmailBoxAlert: 'help',
		upEmailStatus: false,
		upClaveValue: '',
		upClaveInput: 'input is-medium',
		upClaveAlert: '',
		upClaveBoxAlert: 'help',
		upClaveStatus: false,
		upPasswordValue: '',
		upPasswordInput: 'input is-medium',
		upPasswordAlert: '',
		upPasswordBoxAlert: 'help',
		upPasswordStatus: false,
		upPassword2Value: '',
		upPassword2Input: 'input is-medium',
		upPassword2Alert: '',
		upPassword2BoxAlert: 'help',
		upPassword2Status: false,
		upButtonDisabled: true,
		//
		acEmailValue: getParameterByName('email'),
		acEmailInput: 'input is-medium',
		acEmailAlert: '',
		acEmailBoxAlert: 'help',
		acEmailStatus: false,
		acIdValue: '',
		acIdInput: 'input is-medium',
		acIdAlert: '',
		acIdBoxAlert: 'help',
		acIdStatus: false,
		actButtonDisabled: true
	},	
	methods:{
		validarUsuario: function(){
			if(this.usuario.length >= 6){
				this.inputUsuario = 'input is-success';
				this.messageUsuario = 'help is-success';
				this.infoUsuario = 'Correcto';
				this.statusUsuario = true;
			}else{
				this.inputUsuario = 'input is-danger';
				this.messageUsuario = 'help is-danger';
				this.infoUsuario = 'Su nombre de usuario debe de tener minimo 6 caracteres';
				this.statusUsuario = false;
			}
			this.validarFormulario();
		},
		validarEmail: function(){
			if (this.reg.test(this.email)){
				this.inputEmail = 'input is-success';
				this.messageEmail = 'help is-success';
				this.infoEmail = 'Correcto';
				this.statusEmail = true;
			}else{
				this.inputEmail = 'input is-danger';
				this.messageEmail = 'help is-danger';
				this.infoEmail = 'Ingrese una dirección de correo electrónico valida';
				this.statusEmail = false;
			}
			this.validarFormulario();
		},
		validarPassword: function(){
			if (this.password.length >= 8){
					this.inputPassword = 'input is-success';
					this.messagePassword = 'help is-success';
					this.infoPassword = 'Correcto';
					this.statusPassword = true;
			}else{
					this.inputPassword = 'input is-danger';
					this.messagePassword = 'help is-danger';
					this.infoPassword = 'Su contraseña debe de tener minimo 8 caracteres';
					this.statusPassword = false;
			}
			this.validarUsuario();
			this.validarEmail();
			this.validarFormulario();
		},
		validarFormulario: function(){
			if(this.statusUsuario == true && this.statusEmail == true && this.statusPassword == true){
				this.isButtonDisabled = false;
			}else{
				this.isButtonDisabled = true;
			}
		},
		//
		logValidateEmail: function(){
			if (this.reg.test(this.logEmailValue)){
				this.logEmailInput = 'input is-success is-medium';
				this.logEmailBoxAlert = 'help is-success';
				this.logEmailAlert = 'Correcto';
				this.logEmailStatus = true;
			}else{
				this.logEmailInput = 'input is-danger is-medium';
				this.logEmailBoxAlert = 'help is-danger';
				this.logEmailAlert = 'Ingrese una dirección de correo electrónico valida';
				this.logEmailStatus = false;
			}
			this.validarLogin();
		},
		logValidatePassword: function(){
			if (this.logPasswordValue.length >= 8){
					this.logPasswordInput = 'input is-success is-medium';
					this.logPasswordBoxAlert = 'help is-success';
					this.logPasswordAlert = 'Ok';
					this.logPasswordStatus = true;
			}else{
					this.logPasswordInput = 'input is-danger is-medium';
					this.logPasswordBoxAlert = 'help is-danger';
					this.logPasswordAlert = 'Su contraseña debe de tener minimo 8 caracteres';
					this.logPasswordStatus = false;
			}
			this.validarLogin();
		},
		validarLogin: function(){
			if(this.logPasswordStatus == true && this.logEmailStatus == true){
				this.logButtonDisabled = false;
			}else{
				this.logButtonDisabled = true;
			}
		},
		//
		resValidateEmail: function(){
			if (this.reg.test(this.resEmailValue)){
				this.resEmailInput = 'input is-success is-medium';
				this.resEmailBoxAlert = 'help is-success';
				this.resEmailAlert = 'Correcto';
				this.resEmailStatus = true;
			}else{
				this.resEmailInput = 'input is-danger is-medium';
				this.resEmailBoxAlert = 'help is-danger';
				this.resEmailAlert = 'Ingrese una dirección de correo electrónico valida';
				this.resEmailStatus = false;
			}
			this.validarRecuperarCuenta();
		},
		resValidateEmail2: function(){
			if (this.resEmailValue == this.resEmail2Value){
				this.resEmail2Input = 'input is-success is-medium';
				this.resEmail2BoxAlert = 'help is-success';
				this.resEmail2Alert = 'Correcto';
				this.resEmail2Status = true;
			}else{
				this.resEmail2Input = 'input is-danger is-medium';
				this.resEmail2BoxAlert = 'help is-danger';
				this.resEmail2Alert = 'No coinciden los correos, verificar de nuevo';
				this.resEmail2Status = false;
			}
			this.validarRecuperarCuenta();
		},
		validarRecuperarCuenta: function(){
			if (this.resEmailStatus == true && this.resEmail2Status == true){
				this.resButtonDisabled = false;
			}else{
				this.resButtonDisabled = true;
			}
		},
		//
		upValidateEmail: function(){
			if (this.reg.test(this.upEmailValue)){
				this.upEmailInput = 'input is-success is-medium';
				this.upEmailBoxAlert = 'help is-success';
				this.upEmailAlert = 'Correcto';
				this.upEmailStatus = true;
			}else{
				this.upEmailInput = 'input is-danger is-medium';
				this.upEmailBoxAlert = 'help is-danger';
				this.upEmailAlert = 'Ingrese una dirección de correo electrónico valida';
				this.upEmailStatus = false;
			}
			this.validarUpdateCuenta();
		},
		upValidateClave: function(){
			if (this.upClaveValue.length >= 6) {
				this.upClaveInput = 'input is-success is-medium';
				this.upClaveBoxAlert = 'help is-success';
				this.upClaveAlert = 'Correcto';
				this.upClaveStatus = true;
			}else{
				this.upClaveInput = 'input is-danger is-medium';
				this.upClaveBoxAlert = 'help is-danger';
				this.upClaveAlert = 'La clave no cumple el formato';
				this.upClaveStatus = false;
			}
			this.validarUpdateCuenta();
		},
		upValidatePassword: function(){
			if (this.upPasswordValue.length >= 8) {
				this.upPasswordInput = 'input is-success is-medium';
				this.upPasswordBoxAlert = 'help is-success';
				this.upPasswordAlert = 'Correcto';
				this.upPasswordStatus = true;
			}else{
				this.upPasswordInput = 'input is-danger is-medium';
				this.upPasswordBoxAlert = 'help is-danger';
				this.upPasswordAlert = 'Su contraseña debe de tener minimo 8 caracteres';
				this.upPasswordStatus = false;
			}
			this.validarUpdateCuenta();
		},
		upValidatePassword2: function(){
			if (this.upPasswordValue.length >= 8 && this.upPassword2Value == this.upPasswordValue) {
				this.upPassword2Input = 'input is-success is-medium';
				this.upPassword2BoxAlert = 'help is-success';
				this.upPassword2Alert = 'Correcto';
				this.upPassword2Status = true;
			}else{
				this.upPassword2Input = 'input is-danger is-medium';
				this.upPassword2BoxAlert = 'help is-danger';
				this.upPassword2Alert = 'No coinciden y/o debe de tener minimo 8 caracteres';
				this.upPassword2Status = false;
			}
			this.validarUpdateCuenta();
		},
		validarUpdateCuenta: function(){
			if (this.upEmailStatus == true && this.upClaveStatus == true && this.upPasswordStatus == true && this.upPassword2Status) {
				this.upButtonDisabled = false;
			}else{
				this.upButtonDisabled = true;
			}
		},
		acValidateEmail: function(){
			if (this.reg.test(this.acEmailValue)){
				this.acEmailInput = 'input is-success is-medium';
				this.acEmailBoxAlert = 'help is-success';
				this.acEmailAlert = 'Correcto';
				this.acEmailStatus = true;
			}else{
				this.acEmailInput = 'input is-danger is-medium';
				this.acEmailBoxAlert = 'help is-danger';
				this.acEmailAlert = 'Ingrese una dirección de correo electrónico valida';
				this.acEmailStatus = false;
			}
			this.validarActivateCuenta();
		},
		acValidateId: function(){
			if(this.acIdValue.length >= 5){
				this.acIdInput = 'input is-success is-medium';
				this.acIdBoxAlert = 'help is-success';
				this.acIdAlert = 'Correcto';
				this.acIdStatus = true;
			}else{
				this.acIdInput = 'input is-danger is-medium';
				this.acIdBoxAlert = 'help is-danger';
				this.acIdAlert = 'Ingresar clave de activación, enviada por email';
				this.acIdStatus = false;
			}
			this.acValidateEmail();
			this.validarActivateCuenta();
		},
		validarActivateCuenta: function(){
			if (this.acEmailStatus == true && this.acIdStatus == true) {
				this.actButtonDisabled = false;
			}else{
				this.actButtonDisabled = true;
			}
		}
	}
});