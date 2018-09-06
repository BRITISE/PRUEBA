<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class='panel panel-primary dialog-panel'>
			 <div class="modal-header"  style="background-color: #337ab7;border-color:#2e6da4;color:#fff;" >
                
				 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3>Buscar por: A T M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              	<button type="submit" Class="btn-lg btn-primary"  Height="34px" Width="77px" data-toggle="tooltip" title="Descargar Archivo BUC"><span class="glyphicon glyphicon-download-alt" ></span></button>
        
                    </h3>
               
			</div>

			
                <div class="modal-body" >
                    <div class='form-horizontal' role='form'>
                

    <form class=" form-inline">
        <div class="active" align="center">
		    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-step-backward" Height="value" pading="4px 9px"></span></button>
		    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-backward" Height="value" pading="4px 9px"></span></button>
            <input type="text" class=" form-control"  style="width:100px" align="center" id="atm" name="atm"/>
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" Height="value" pading="4px 9px"></span></button>
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-forward" Height="value" pading="4px 9px"></span></button>
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-step-forward" Height="value" pading="4px 9px"></span></button>
        </div>
    </form>
</div>

  <hr/ size="3" width="80%" size="2px">  

                        <div >
                            <div style="Width: 280px" id="cajon1" >
							
                                <table ID="Table1"   Caption="Datos del Equipo" Height="16px" Width="280px" CellPadding="20" CellSpacing="20"  class="group">
								<caption><h4>Datos del Equipo</h4></caption>
                                    <tr  ID="tr1" border="2px color: #337AB7 " >
                                        <td ID="td1" Text="Año de Adquisicion: " >Año de Adquisicion:</td>
                                        <td ID="td2" ><input class="form-control" id="año_ad" type="text"  style="width:75px" align="center"/>  </td>
                                    </tr>

                                    <tr ID="tr2" runat="server">
                                        <td ID="td3" Text="ID Anterior: " >ID Anterior:</td>
                                        <td ID="td4" ><input class="form-control" id="Text1" type="text" style="width:75px" />  </td>
                                    </tr>

                                    <tr ID="tr3" runat="server">
                                        <td ID="td5" Text="No. Serie: " HorizontalAlign="Right">No. Serie:</td>
                                        <td ID="td6" Width="20px" ><input class="form-control" id="Text3" type="text" style="width:75px"  />  </td>
                                    </tr>

                                    <tr ID="tr4" runat="server">
                                        <td ID="td7" Text="Inventario Staff: " HorizontalAlign="Right">Inventario Staff:</td>
                                        <td ID="td8" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text4" type="text" style="width:75px"  />  </td>
                                    </tr>

                                    <tr ID="tr5" runat="server">
                                        <td ID="td9" Text="Status ATM: " HorizontalAlign="Right">Status ATM:</td>
                                        <td ID="td10" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text5" type="text" style="width:75px"  />  </td>
                                    </tr>


                                    <tr ID="tr6" runat="server">
                                        <td ID="td11" Text="1ra. Instalacion: " HorizontalAlign="Right">1ra. Instalacion:</td>
                                        <td ID="td12" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text6" type="text" style="width:75px"  />  </td>
                                    </tr>
                                </table>
                            </div>


                            <div style="Width: 280px" id="cajon2">
                                <Table ID="Table2" Class="group" Height="16px" Width="280px" ><caption><h4>Datos de la Banca</h4></caption>
                                    <tr ID="tr7" runat="server">
                                        <td ID="td13" >Banca:</td>
                                        <td ID="td14" HorizontalAlign="Center"><input class="form-control" id="Text7" type="text"  style="width:75px"/>  </td>
                                    </tr>
                                    <tr ID="tr8" runat="server">
                                        <td ID="td15">División:</td>
                                        <td ID="td16" HorizontalAlign="Center"><input class="form-control" id="Text8" type="text" style="width:75px" />  </td>
                                    </tr>
                                    <tr ID="tr9" runat="server">
                                        <td ID="td17" >Zona:</td>
                                        <td ID="td18" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text9" type="text" style="width:75px"  />  </td>
                                    </tr>
                                    <tr ID="tr10" runat="server">
                                        <td ID="td19" >CR:</td>
                                        <td ID="td20" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text10" type="text" style="width:75px"  />  </td>
                                    </tr>
                                    <tr ID="tr11" runat="server">
                                        <td ID="td21">Nominas</td>
                                        <td ID="td22" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text11" type="text" style="width:75px"  />  </td>
                                    </tr>
                                    <tr ID="tr12" runat="server">
                                        <td ID="td23" >Proyecto:</td>
                                        <td ID="td24" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text12" type="text" style="width:75px"  />  </td>
                                    </tr>
                                </Table>
                                                      </div>
                            
                            <div style="Width: 280px" id="cajon3">
                                <Table ID="Table3" class="group" ><caption><h4>Herramientas</h4></caption>
                                    <tr ID="tr13" runat="server">
                                        <td ID="td25" >SEP:</td>
                                        <td ID="td26" HorizontalAlign="Center"><input class="form-control" id="Text13" type="text"  style="width:75px"/>  </td>
                                    </tr>
                                    <tr ID="tr14" runat="server">
                                        <td ID="td27" Text="CHECKER: " HorizontalAlign="right">CHECKER:</td>
                                        <td ID="td28" HorizontalAlign="Center"><input class="form-control" id="Text14" type="text" style="width:75px" />  </td>
                                    </tr>
                                    <tr ID="tr15" runat="server">
                                        <td ID="td29" Text="RKL: " HorizontalAlign="Right">RKL:</td>
                                        <td ID="td30" Width="20px" HorizontalAlign="Center"><input class="form-control" id="Text15" type="text" style="width:75px"  />  </td>
                                    </tr>

                                </Table>
                            </div>
                           </div>
            

                <div class='panel-body'>
                    <div class='form-horizontal' role='form'>
                         <br />
                        <br />
                        <br />
                        <br />
                          <div  id="Div1">
                             <Table ID="Table4" class="group"><caption><h4>Datos del Equipo de Autoservicio</h4></caption>
                                    <tr ID="tr16" runat="server">
                                        <td ID="td31" HorizontalAlign="Right" >Dirección:&nbsp;&nbsp;</td>
                                        <td ID="td32" colspan="3" style="width:570px"><input  class="form-control" id="Text16" type="text"  style="width:570px"/>  </td>
										<td ID="td33" >No.Exterior:</td>
										<td ID="td34" Align="right" ><input class="form-control" id="Text17" type="text"  style="width:100px"/>  </td>
										
									</tr>
                                    <tr ID="tr17" runat="server">
                                        <td ID="td35" Align="left" >Calle:</td>
                                        <td ID="td36"  ><input colspan="2"class="form-control" id="Text19" type="text19" style="width:240px" />  </td>
										<td ID="td37"  >Colonia:</td>
                                        <td ID="td38"  ><input colspan="2" class="form-control" id="Text20" type="text" style="width:240px" />  </td>
										<td ID="td39" >Local:</td>
                                        <td ID="td40" Align="right"><input class="form-control" id="Text18" type="text" style="width:100px" />  </td>
                                    </tr>
                                    <tr ID="tr18" runat="server">
                                        <td ID="td41"  >Estado:</td>
                                        <td ID="td42" Width="20px" HorizontalAlign="Center"  ><input colspan="2" class="form-control" id="Text21" type="text" style="width:240px"  />  </td>
										<td ID="td43" >Ciudad:</td>
                                        <td ID="td44" ><input class="form-control"  colspan="2"id="Text22" type="text" style="width:240px" />  </td>
										<td ID="td45"  >Institución:</td>
                                        <td ID="td46" ><input class="form-control" id="Text23" type="text" style="width:100px" />  </td>
										
                                    </tr>
                                    <tr ID="tr19" runat="server">
										<td ID="td47" >Grupo:</td>
                                        <td ID="td48" ><input class="form-control" id="Text24" type="text" style="width:240px" />  </td>
                                        <td ID="td49" >Georeferencia:</td>
                                        <td ID="td50" ><input class="form-control" id="Text25" type="text" style="width:240px" />  </td>
										<td ID="td52" >ATM en site:</td>
                                        <td ID="td53" ><input class="form-control" id="Text26" type="text" style="width:100px" />  </td>
									                                    </tr>
                                    <tr ID="tr20" runat="server">
                                        <td ID="td54" >Giro:</td>
                                        <td ID="td55" ><input class="form-control" id="Text27" type="text" style="width:240px" />  </td>
										 <td ID="td56" >Sitio:</td>
                                        <td ID="td57" ><input class="form-control" id="Text28" type="text" style="width:240px" />  </td>
										 <td ID="td58" >Lat. Capital:</td>
                                        <td ID="td59" ><input class="form-control" id="Text29" type="text" style="width:100px" />  </td>
                                    </tr>
                                         <tr ID="tr21" runat="server">
                                        <td ID="td60" >Log. Capital:</td>
                                        <td ID="td61" ><input class="form-control" id="Text30" type="text" style="width:240px" />  </td>
										 <td ID="td62" >Distancia Capital:</td>
                                        <td ID="td63" ><input class="form-control" id="Text31" type="text" style="width:240px" />  </td>
										 <td ID="td64" >CP:</td>
                                        <td ID="td65" ><input class="form-control" id="Text32" type="text" style="width:100px" />  </td>
                                    </tr>
                                </Table>
                        </div>
                    </div>
				</div>
				
				 <div class='panel-body'>
                    <div class='form-horizontal' role='form'>
                      
                          <div  id="Div3">
                             <Table ID="Table6" class="group"><caption><h4>Especificaciones Tecnicas</h4></caption>
                                    <tr ID="tr22" runat="server">
                                        <td ID="td66" >Fecha Instalacion:</td>
                                        <td ID="td67" ><input class="form-control" id="Text34" type="text" style="width:120px" />  </td>
										<td ID="td68" >Marca:</td>
                                        <td ID="td69" ><input class="form-control" id="Text35" type="text" style="width:120px" />  </td>
										<td ID="td70" >Modelo:</td>
                                        <td ID="td71" ><input class="form-control" id="Text36" type="text" style="width:120px" />  </td>
										<td ID="td72" >Plataforma:</td>
                                        <td ID="td73" ><input class="form-control" id="Text37" type="text" style="width:120px" />  </td>
									</tr>
									 <tr ID="tr23" runat="server">
                                        <td ID="td74" >Tipo Autoservicio:</td>
                                        <td ID="td75" ><input class="form-control" id="Text38" type="text" style="width:120px" />  </td>
										<td ID="td76" >Vision Multivendor:</td>
                                        <td ID="td77" ><input class="form-control" id="Text39" type="text" style="width:120px" />  </td>
										<td ID="td78" >Configuración:</td>
                                        <td ID="td79" ><input class="form-control" id="Text40" type="text" style="width:120px" />  </td>
										<td ID="td80" >Carga:</td>
                                        <td ID="td81" ><input class="form-control" id="Text41" type="text" style="width:120px" />  </td>
									</tr>
									<tr ID="tr24" runat="server">
                                        <td ID="td82" >IP:</td>
                                        <td ID="td83" ><input class="form-control" id="Text42" type="text" style="width:120px" />  </td>
										<td ID="td84" >Monitor:</td>
                                        <td ID="td85" ><input class="form-control" id="Text43" type="text" style="width:120px" />  </td>
										<td ID="td86" >Garantia:</td>
                                        <td ID="td87" ><input class="form-control" id="Text44" type="text" style="width:120px" />  </td>
										<td ID="td88" >CSOS:</td>
                                        <td ID="td89" ><input class="form-control" id="Text45" type="text" style="width:120px" />  </td>
									</tr>
									<tr ID="tr25" runat="server">
                                        <td ID="td90" >Enlace:</td>
                                        <td ID="td91" ><input class="form-control" id="Text48" type="text" style="width:120px" />  </td>
										<td ID="td92" >ESQ:</td>
                                        <td ID="td93" ><input class="form-control" id="Text49" type="text" style="width:120px" />  </td>
										<td ID="td94" >Supresor de Picos:</td>
                                        <td ID="td95" ><input class="form-control" id="Text50" type="text" style="width:120px" />  </td>
										<td ID="td96" >CDO:</td>
                                        <td ID="td97" ><input class="form-control" id="Text51" type="text" style="width:120px" />  </td>
									</tr>
									<tr ID="tr26" runat="server">
                                        <td ID="td98" >UPS:</td>
                                        <td ID="td99" ><input class="form-control" id="Text52" type="text" style="width:120px" />  </td>
										<td ID="td100" >Kits Bateria Extra:</td>
                                        <td ID="td101" ><input class="form-control" id="Text53" type="text" style="width:120px" />  </td>
										<td ID="td102" >Telecontrol:</td>
                                        <td ID="td103" ><input class="form-control" id="Text54" type="text" style="width:120px" />  </td>
										<td ID="td104" >Fecha Sub Picos:</td>
                                        <td ID="td105" ><input class="form-control" id="Text55" type="text" style="width:120px" />  </td>
									</tr>
									<tr ID="tr27" runat="server">
                                        <td ID="td106" >Fecha Incio Instalacion:</td>
                                        <td ID="td107" ><input class="form-control" id="Text56" type="text" style="width:120px" />  </td>
										<td ID="td108" >Fecha UPS:</td>
                                        <td ID="td109" ><input class="form-control" id="Text57" type="text" style="width:120px" />  </td>
										<td ID="td110" >Sistema Operativo:</td>
                                        <td ID="td111" ><input class="form-control" id="Text58" type="text" style="width:120px" />  </td>
										<td ID="td112" >Referencia Telmex:</td>
                                        <td ID="td113" ><input class="form-control" id="Text59" type="text" style="width:120spx" />  </td>
									</tr>
                                   
                                </Table>
                        </div>
                    </div>
				</div>
				
				
				
				 <div class='panel-body'>
                    <div class='form-horizontal' role='form'>
                      
                          <div  id="Div3">
                             <Table ID="Table6" class="group"><caption><h4>Especificaciones para el Acceso</h4></caption>
                                    <tr ID="tr28" runat="server">
                                        <td ID="td114" >ID identificador:</td>
                                        <td ID="td115" ><input class="form-control" id="Text69" type="text" style="width:200px" />  </td>
										<td ID="td116" >Acuerdo Acceso:</td>
                                        <td ID="td117" ><input class="form-control" id="Text61" type="text" style="width:200px" />  </td>
										<td ID="td118" >Ubicación:</td>
                                        <td ID="td119" ><input class="form-control" id="Text62" type="text" style="width:200px" />  </td>
										
									</tr>
									 <tr ID="tr29" runat="server">
									    <td ID="td120" >Tipo Sitio:</td>
                                        <td ID="td121" ><input class="form-control" id="Text63" type="text" style="width:200px" />  </td>
                                        <td ID="td122" >Celula:</td>
                                        <td ID="td123" ><input class="form-control" id="Text64" type="text" style="width:200px" />  </td>
										<td ID="td124" >Fin Semana:</td>
                                        <td ID="td125" ><input class="form-control" id="Text65" type="text" style="width:200px" />  </td>
										
									</tr>
									<tr ID="tr41">
									<td ID="td126" >#Días Ingreso:</td>
                                        <td ID="td127" ><input class="form-control" id="Text66" type="text" style="width:200px" />  </td>
										<td ID="td128" >Fecha Ingreso:</td>
                                        <td ID="td129" ><input class="form-control" id="Text67" type="text" style="width:200px" />  </td>
									</tr>
									<tr ID="tr30" runat="server">
                                        <td ID="td130" >Ubicación de ATM:</td>
                                        <td ID="td131" colspan="6"><input class="form-control" id="Text68" type="text" style="width:750px" />  </td>
									</tr>
									
														
									<tr ID="tr37" runat="server">
                                        <td ID="td153" >ETV:</td>
                                        <td ID="td154" ><input class="form-control" id="Text78" type="text" style="width:200px" />  </td>
										<td ID="td155" >Días ETV:</td>
                                        <td ID="td156" ><input class="form-control" id="Text79" type="text" style="width:200px" />  </td>
										<td ID="td157" >Horario ETV:</td>
                                        <td ID="td158" ><input class="form-control" id="Text80" type="text" style="width:200px" />  </td>
										
									</tr>
									<tr ID="tr38" runat="server">
                                        <td ID="td159" >Condiciones ETV:</td>
                                        <td ID="td160" colspan="6"><input class="form-control" id="Text81" type="text" style="width:750px; height:150px" />  </td>
								
									</tr>
									
									<tr ID="tr39" runat="server">
                                        <td ID="td161" IDC:</td>
                                        <td ID="td162" ><input class="form-control" id="Text82" type="text" style="width:200px" />  </td>
										<td ID="td163" >Días IDC:</td>
                                        <td ID="td164" ><input class="form-control" id="Text83" type="text" style="width:200px" />  </td>
										<td ID="td165" >Horario IDC:</td>
                                        <td ID="td166" ><input class="form-control" id="Text84" type="text" style="width:200px" />  </td>
										
									</tr>
									<tr ID="tr40" runat="server">
                                        <td ID="td167"  >Condiciones IDC:</td>
                                        <td ID="td168" colspan="6"><input class="form-control" id="Text85" type="text" style="width:750px; height:150px" />  </td>
									</tr>
												<tr ID="tr31" runat="server">
									
                                        <td ID="td132" colspan="7" align="center"><h4>Contacto No. 1</h4></td>
                                    </tr>
									<tr ID="tr4" runat="server">
                                       	<td ID="td133" >Nombre:</td>
                                        <td ID="td134" ><input class="form-control" id="Text69" type="text" style="width:200px" />  </td>
										<td ID="td135" >Telefono:</td>
                                        <td ID="td136" ><input class="form-control" id="Text70" type="text" style="width:200px" />  </td>
										<td ID="td137" >Mail:</td>
                                        <td ID="td138" ><input class="form-control" id="Text71" type="text" style="width:200px" />  </td>
									</tr>
									
									<tr ID="tr33" runat="server">
                                        <td ID="td139" colspan="7" align="center"><h4>Contacto No. 2</h4></td>
                                    </tr>
									<tr ID="tr34" runat="server">
                                       	<td ID="td140" >Nombre:</td>
                                        <td ID="td141" ><input class="form-control" id="Text72" type="text" style="width:200px" />  </td>
										<td ID="td142" >Telefono:</td>
                                        <td ID="td143" ><input class="form-control" id="Text73" type="text" style="width:200px" />  </td>
										<td ID="td144" >Mail:</td>
                                        <td ID="td145" ><input class="form-control" id="Text74" type="text" style="width:200px" />  </td>
									</tr>
									
									<tr ID="tr35" runat="server">
                                        <td ID="td146" colspan="7" align="center"><h4>Contacto No. 3</h4></td>
                                    </tr>
									<tr ID="tr36" runat="server">
                                       	<td ID="td147" >Nombre:</td>
                                        <td ID="td148" ><input class="form-control" id="Text75" type="text" style="width:200px" />  </td>
										<td ID="td149" >Telefono:</td>
                                        <td ID="td150" ><input class="form-control" id="Text76" type="text" style="width:200px" />  </td>
										<td ID="td151" >Mail:</td>
                                        <td ID="td152" ><input class="form-control" id="Text77" type="text" style="width:200px" />  </td>
									</tr>
                                   
                                </Table>
                        </div>
                    </div>
				</div>
				
								                <div class='panel-body'>
                    <div class='form-horizontal' role='form'>
                
                        <div id="map"><h4>Ubicación Geografica</h4></div>
						
    <script>