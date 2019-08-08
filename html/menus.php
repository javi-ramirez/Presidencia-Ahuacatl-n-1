<?php
  function menu()
  {
   include 'getInfo.php';
   if($idRol==1)
   {
    echo'               <div class="nav-collapse collapse">
                  <div class="menu-menu-principal-container">
                    <ul id="menu-menu-principal-2" class="nav">
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                        <a href="indexAdministrador.php?pagina=1">
                          Inicio
                        </a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-172">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Usuarios
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2226">
                            <a href="registro.php">
                              Agregar Nuevo Usuario
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2226">
                            <a href="#">
                              Modificar Usuario
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-327">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Roles
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2242">
                            <a href="altaRol.php">
                              Agregar Nuevo Rol
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2242">
                            <a href="#">
                              Modificar Rol
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-383">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Dependencias
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2261">
                            <a href="altaDependencia.php">
                              Agregar Nueva Dependencia 
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2793">
                            <a href="#">
                              Modificar Dependencia
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-383">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                        Plan de desarrollo
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2261">
                            <a href="insertarPlanDesarrollo.php">
                              Agregar Nuevo Plan de desarrollo
                            </a>
                          </li>
                        </ul>
                      </li>
                       <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                           <a href="logout.php">
                               Logout
                           </a>
                       </li>
                    </ul>
                  </div>
                </div>';  
   }
   elseif ($idRol==2) 
   {
       echo'               <div class="nav-collapse collapse">
                  <div class="menu-menu-principal-container">
                    <ul id="menu-menu-principal-2" class="nav">
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                        <a href="indexAdministrador.php?pagina=1">
                          Inicio
                        </a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-172">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Usuarios
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2226">
                            <a href="registro.php">
                              Agregar Nuevo Usuario
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2226">
                            <a href="#">
                              Modificar Usuario
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-327">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Roles
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2242">
                            <a href="altaRol.php">
                              Agregar Nuevo Rol
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2242">
                            <a href="#">
                              Modificar Rol
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-383">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Dependencias
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2261">
                            <a href="altaDependencia.php">
                              Agregar Nueva Dependencia 
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2793">
                            <a href="#">
                              Modificar Dependencia
                            </a>
                          </li>
                        </ul>
                      </li>
                       <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                           <a href="logout.php">
                               Logout
                           </a>
                       </li>
                    </ul>
                  </div>
                </div>'; 
   }
  elseif ($idRol==3) {
      echo'               <div class="nav-collapse collapse">
                  <div class="menu-menu-principal-container">
                    <ul id="menu-menu-principal-2" class="nav">
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                        <a href="indexDirecciones.php">
                          Inicio
                        </a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-172">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Actividades
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2226">
                            <a href="insertarActividad.php">
                              Nueva Actividad
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2226">
                            <a href="#">
                              Modificar Actividades
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-327">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                         Informes
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2242">
                            <a href="generarinforme.php">
                              Generar Nuevo informe
                            </a>
                          </li>
                        </ul>
                      </li>
                       <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                           <a href="logout.php">
                               Logout
                           </a>
                       </li>
                    </ul>
                  </div>
                </div>'; 
  }
elseif($idRol==4)
  {
    echo'               <div class="nav-collapse collapse">
                  <div class="menu-menu-principal-container">
                    <ul id="menu-menu-principal-2" class="nav">
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                        <a href="indexAdministrador.php?pagina=1">
                          Inicio
                        </a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-172">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Usuarios
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2226">
                            <a href="registro.php">
                              Agregar Nuevo Usuario
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2226">
                            <a href="#">
                              Modificar Usuario
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-327">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Roles
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2242">
                            <a href="altaRol.php">
                              Agregar Nuevo Rol
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2242">
                            <a href="#">
                              Modificar Rol
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-383">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Dependencias
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2261">
                            <a href="altaDependencia.php">
                              Agregar Nueva Dependencia 
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2793">
                            <a href="#">
                              Modificar Dependencia
                            </a>
                          </li>
                        </ul>
                      </li>
                       <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                           <a href="logout.php">
                               Logout
                           </a>
                       </li>
                    </ul>
                  </div>
                </div>'; 
  }
  elseif ($idRol="") {
      echo'               <div class="nav-collapse collapse">
                  <div class="menu-menu-principal-container">
                    <ul id="menu-menu-principal-2" class="nav">
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                        <a href="indexAdministrador.php?pagina=1">
                          Inicio
                        </a>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-172">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Usuarios
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2226">
                            <a href="registro.php">
                              Agregar Nuevo Usuario
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2226">
                            <a href="#">
                              Modificar Usuario
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-327">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Roles
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2242">
                            <a href="altaRol.php">
                              Agregar Nuevo Rol
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2242">
                            <a href="#">
                              Modificar Rol
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-383">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                          Dependencias
                        </a>
                        <ul class="dropdown-menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2261">
                            <a href="altaDependencia.php">
                              Agregar Nueva Dependencia 
                            </a>
                          </li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2793">
                            <a href="#">
                              Modificar Dependencia
                            </a>
                          </li>
                        </ul>
                      </li>
                       <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170">
                           <a href="logout.php">
                               Logout
                           </a>
                       </li>
                    </ul>
                  </div>
                </div>';
  }
}
?>