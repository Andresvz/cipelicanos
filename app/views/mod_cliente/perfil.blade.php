
      
                   
    
<div class="container">
      
      <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-fw fa-users"></i> Peril de Usuario <small>Modificar datos </small>
            </h1>
           
        </div>
    </div>
    
    <div class="row">
    
        
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{ ' '.Auth::user()->nombre;}}{{ ' '.Auth::user()->apellido;}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                   <br>
                    <br>
                    
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> 
                    <br>
                    <br>
                   
                    <a href="#" class="btn btn-primary">Cambiar Foto</a>
                </div>               

                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre:</td>
                        <td> <input type="text" class="form-control"  placeholder="Nombre" value="{{ ' '.Auth::user()->nombre;}}"></td>
                      </tr>
                      <tr>
                        <td>Apellidos</td>
                        <td><input type="text" class="form-control"  placeholder="apellido" value="{{ ' '.Auth::user()->apellido;}}"></td>
                      </tr>
                      <tr>
                        <td>Correo Electronico</td>
                        <td><input type="text" class="form-control"  placeholder="correo" value="{{ ' '.Auth::user()->correo;}}"></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Contraseña</td>
                        <td><input type="password" class="form-control"  placeholder="contraseña" value="{{ ' '.Auth::user()->password;}}"></td>
                      </tr>
                        <tr>
                        <td>Confirmar Contraseña</td>
                        <td><input type="password" class="form-control"  placeholder="confirmacion contraseña" value="{{ ' '.Auth::user()->password;}}"></td>
                      </tr>
                      <tr>
                        <td>Telefono</td>
                        <td><input type="text" class="form-control"  placeholder="telefono" value="{{ ' '.Auth::user()->telefono;}}"></td>
                      </tr>
                        <td>Direccion</td>
                        <td><input type="text" class="form-control"  placeholder="Direccion" value="{{ ' '.Auth::user()->direccion;}}">
                        </td>
                         <tr>
                           <td>Pais</td>
                        <td><input type="text" class="form-control"  placeholder="pais" value="{{ ' '.Auth::user()->pais;}}"></td>
                      </tr>
                       <tr>
                        <td>Ciudad</td>
                        <td><input type="text" class="form-control"  placeholder="ciudad" value="{{ ' '.Auth::user()->ciudad;}}">
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>
                    <span class="pull-right">
                  <a href="#" class="btn btn-primary">Editar</a>
                  <a href="#" class="btn btn-primary">Cancelar</a>
                </span>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       
                        
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    
        
</body>
</html>
     
 