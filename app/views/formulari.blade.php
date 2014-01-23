@extends('master')
@section('menu')
            <li><a href="http://www.oasis4x4.com">Volver</a></li>
            <li><a href="Condiciones-del-sorteo">Condiciones del Sorteo</a></li>
@stop
@section('content')
      <div class="background-white">
        <div class="starter-template">
          <h1>Sorteo Oasis 4x4</h1>
          <p class="lead">
              Fantastico! Veo que estas impaciente por descubrir nuestra <b>nueva página web! </b> <br> 
              Porque estas aquí por eso verdad? No será solo por el <b>sorteo?</b> <br> 
<br> 
              Bueno, ya que estas aquí vamos a explicar un poco de que se trata:<br> 
              Para participar tan solo necesitamos tu nombre, e-mail y modelo de coche, el <b>vencedor</b> se hará público en el correo informativo que mandaremos al inaugurar la web.
          </p>
        </div> <!-- final .starter-template -->
      </div> <!-- final background-white -->
      
      <div class="background-gray">
            <div class="starter-template">
              
                  <div class="premi">
                      <div class="premi1">
                          <h3>Hechemos un vistazo al premio:</h3>
                          <img src="{{ url('images/Slinga.png')}}" alt="Imagen Slinga" class="imatge-premi">
                      </div>
                      <div class="premi2">
                          <h5>Eslinga reforzada:</h5>
                          <ul class="caracteristicas">
                            <li>Largo: 10 metros</li>
                            <li>Resistencia a la tracción: 10.000kg</li>
                          </ul>
                          
                      </div>
                  </div>
            
              
          <!-- Comienza formulario MailChimp -->
          
                  <form class="formulari"action="http://oasis4x4.us3.list-manage.com/subscribe/post?u=1137f974f007d44ae8a833b0b&amp;id=47e9176890" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                      
                      <h3>Vamos a inscribirte!</h3>
                           
                          <div class="form-group">
                              <label for="FNAME">Nombre y apellidos: * </label>
                              <input type="text" name="FNAME" class="form-control" id="mce-FNAME" placeholder='Nani Roma' autocomplete="off" autocorrect="off" spellcheck="false">
                          </div>
                          
                          <div class="form-group">
                              <label for="LNAME">Modelo de coche: * </label>
                              <input type="text" name="LNAME" class="form-control" id="mce-LNAME" autocomplete="off" autocorrect="off" spellcheck="false">
                          </div>
                            
                          <div class="form-group"> 
                              <label for="EMAIL">Email: * </label>
                              <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder='MiCorreo@electronico.com' autocomplete="off" autocorrect="off"  spellcheck="false">
                          </div>
                          
                          <p class='masinfo'>Cumpleaños:</p>
                                <div class="infoadicional">
                                      <p>No es obligatorio, pero nos gustaría felicitarte por tu cumpleaños!<br> 
                                      Quien sabe, igual incluso tenemos un detalle!
                                      </p>
                                </div>
                          
                          <div class="form-group">
                              <label for="MMERGE3">Dia </label>
                               <select name="MMERGE3" class="form-control" id="mce-MMERGE3"> 
                                                  <option value=""></option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                  <option value="6">6</option>
                                                  <option value="7">7</option>
                                                  <option value="8">8</option>
                                                  <option value="9">9</option>
                                                  <option value="10">10</option>
                                                  <option value="11">11</option>
                                                  <option value="12">12</option>
                                                  <option value="13">13</option>
                                                  <option value="14">14</option>
                                                  <option value="15">15</option>
                                                  <option value="16">16</option>
                                                  <option value="17">17</option>
                                                  <option value="18">18</option>
                                                  <option value="19">19</option>
                                                  <option value="20">20</option>
                                                  <option value="21">21</option>
                                                  <option value="22">22</option>
                                                  <option value="23">23</option>
                                                  <option value="24">24</option>
                                                  <option value="25">25</option>
                                                  <option value="26">26</option>
                                                  <option value="27">27</option>
                                                  <option value="28">28</option>
                                                  <option value="29">29</option>
                                                  <option value="30">30</option>
                                                  <option value="31">31</option>
                              </select>
                          </div> 
                          
                          <div class="form-group">
                              <label for="MMERGE4">Mes: </label>
                              <select name="MMERGE4" class="form-control" id="mce-MMERGE4">
                                                  <option value=""></option>
                                                  <option value="Enero">Enero</option>
                                                  <option value="Febrero">Febrero</option>
                                                  <option value="Marzo">Marzo</option>
                                                  <option value="Abril">Abril</option>
                                                  <option value="Mayo">Mayo</option>
                                                  <option value="Junio">Junio</option>
                                                  <option value="Julio">Julio</option>
                                                  <option value="Agosto">Agosto</option>
                                                  <option value="Septiembre">Septiembre</option>
                                                  <option value="Octubre">Octubre</option>
                                                  <option value="Noviembre">Noviembre</option>
                                                  <option value="Diciembre">Diciembre</option>
                              </select>
                          </div>
                          
                    <div id="mce-responses" class="form-group">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_1137f974f007d44ae8a833b0b_47e9176890" value=""></div>
                    
                    <input type="submit" value="Apúntame!" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success btn-block">
                    
                    <p class="asterisco">* Los campos marcados con un asterisco deben ser rellenados obligatoriamente</p>
                  </form>
          <!-- Fin formulario MailChimp -->

              </div> <!-- final .starter-template -->
      </div> <!-- final background-gray -->    
@stop