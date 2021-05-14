<?php 
    $error ="Preencha todoso o campos!";
    if(count($_POST) > 0){
        $name = $_POST['name'];
        $born = $_POST['born'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $profession = $_POST['profession'];
        $ctps = $_POST['ctps'];
        $beggin_work = $_POST['beggin_work'];
        $last_aso = $_POST['last_aso'];
        $pis = $_POST['pis'];
        $electoral_number = $_POST['electoral_number'];
        $reservist_certificate = $_POST['reservist_certificate'];
        $cep = $_POST['cep'];
        $adress = $_POST['adress'];
        $phonenumber = $_POST['phonenumber'];
        $fixed_phonenumber = $_POST['fixed_phonenumber'];
        $country = $_POST['country'];
        $civil_status = $_POST['civil_status'];
        $doc = $_FILES['doc'];
        $points = $_POST['points'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="scales.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/></head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
<!-- left menu -->
    <div class="container">        
            <aside>
                    <nav><br>
                        <a href="#" id="logo"><h1><i class="fas fa-blog"></i></h1></a><br><br>
                        <ul>
                           <li onclick="openHome()" title="Inicial"><p id="btn--home"><i class="fas fa-ellipsis-h"></i>&nbsp &nbsp Deashboard</p></li> 
                           <li onclick="openRegister()" title="Registros"><p id="btn--register"><i class="far fa-user"></i>&nbsp &nbsp Cadastro</p></li>
                           <li onclick="openScales()" title="Escalas"><p id="btn--scales"><i class="fas fa-redo"></i>&nbsp &nbsp Escalas </p></h1>
                        </ul>                                                 
                    </nav>
            </aside>
            <div class="right--side--home">
                <div class="cards">
                    <div id="card1">
                        <h1><i class="fas fa-running"></i></h1>
                        <div>
                            <h4>Atrasos</h4>
                            <h4>777</h4>
                        </div>
                    </div>
                    <div id="card2">
                        <h1><i class="far fa-clock"></i></h1>
                        <div>
                            <h4>No Prazo</h4>
                            <h4>777</h4>
                        </div>
                    </div>
                    <div id="card3">
                        <h1><i class="far fa-calendar-check"></i></h1>
                        <div>
                            <h4>Horas Extras</h4>
                            <h4>777</h4>
                        </div>
                    </div>                           
                </div>
                <!-- ===charts=== -->              
               <div id="chart"></div>  
            </div>
            
            <div class="right--side--register">
                <form id="register--searching">                       
                    <p> 
                        <h4 id="form--title">PESQUISAR:</h4>
                        <input type="search" placeholder="Nome ou numero de registro" name="search">
                    <p>                    
                </form>
                <div id="register--wrapper">
                    <div class="register--form">
                        <h4 id="form--title">Cadastrar:</h4>
                        <form method="POST" anctype="multipart/form-data" action="/">
                            <p class="block">
                                <input type="text" placeholder="Nome completo" name="name" maxlength="100px">
                            </p>
                            <p>
                                <input type="date" title="Data de Nascimento" name="born">
                            </p>
                            <p>
                                <input type="email" placeholder="Email" name="email" maxlength="40">
                            </p>
                             <p>
                                <input type="text" placeholder="CPF" name="cpf" maxlength="11">
                             </p>
                             <p>
                                <input type="text" placeholder="RG" name="rg" maxlength="7">
                             </p>
                             <p>
                                <select type="options" name="function">
                                    <option disabled selected style="display: none">Função</option>
                                    <option>Vigilante</option>
                                    <option>Aux. serviços Gerais</option>
                                    <option>Supervisor Administrativo</option>
                                    <option>Ass. Administrativo</option>
                                    <option>Cordenador Operacional</option>
                                </select>                               
                             </p>
                             <p>
                                 <input type="text" placeholder="CTPS" name="ctps" maxlength="7">
                             </p>
                             <p>
                                <input type="date" title="Data inicio das atividades"  name="beggin_work">
                            </p>
                            <p>
                                <input type="date" title="Data do ultimo ASO realizado" name="last_aso">
                            </p>
                             <p>
                                 <input type="text" placeholder="PIS" name="pis" maxlength="6">
                             </p>
                             <p>
                                 <input type="text" placeholder="Titulo eleitoral" name="electoral_number" maxlength="12">
                             </p>
                             <p>
                                 <input type="text" title="Certificado Reservista" placeholder="CAM" name="reservist_certificate" maxlength="12">
                             </p>
                             <p>
                                 <input type="text" placeholder="Cep" name="cep" maxlengh="5">
                             </p>
                             <p class="block">
                                 <input type="text" placeholder="Endereço: Ex. Rua grajaú n°14, bairro Laranjeiras, Serra, Espirito Santo" name="adress" maxlength="200" >
                             </p>
                             <p>
                                <input type="tel" placeholder="Tel.celular Ex. 27 992238228" name="phonenumber" maxlength="15">
                            </p>
                            <p>
                                <input type="tel" placeholder="Tel.fixo: Ex.27 33411439" name="fixed_phonenumber" maxlength="14">
                            </p>
                            <p>
                                <input type="text" placeholder="Naturalidade" name="country">
                            </p>
                                <p>
                                   <select type="options" name="civil_status">
                                        <option disabled selected style="display: none">Estado cívil</option>
                                        <option>Casado(a)</option>
                                        <option>solteiro(a)</option>
                                        <option>Viuvo(a)</option>
                                    </select>  
                                </p>     
                            <p>
                                <input multiple  type="file">                        
                             </p>
                            <p class="block">
                                <textarea name="menssagem" rows="3" placeholder="Observações do Entrevistador" name="text"></textarea>                        
                             </p>
                            <p id="block--btns">
                                <button type="submit">Cadastrar</button>   
                                <button type="submit">Alterar</button>                            
                             </p>                                
                        </form>
                    </div>                  
                </div>             
            </div>            
        </div>
           <!-- Cadastro em escalas -->
        <div class="right--side--scales">
            <div id="scales--wrapper">
                <div class="scales--form">
                    <h4 id="form--title">Registrar escalas / Servicos Extras:</h4>
                    <form>   
                        <p class="block">
                            <input type="text" placeholder="Filial"required>
                        </p>                 
                        <p class="block">
                            <input type="text" placeholder="Posto com alteração"required>
                        </p>
                        <p class="block">
                            <input type="text" placeholder="Centro de custo"required>
                        </p>                      
                        <p>
                            <input type="text" placeholder="Matricula - Colaborador"required>
                        </p>
                        <p>
                            <input type="time" placeholder="Tempo de almoço" min="00:15" max="02:00" title="Tempo em minutos"required>
                        </p>
                        <p class="block">
                            <input type="datetime-local"  title="Entrada" placeholder="Entrada"required>
                        </p>
                        <p class="block">
                            <input type="datetime-local" title="Saída" placeholder="Saída"required>
                        </p>
                        <p class="block">
                            <input type="text" placeholder="Horas trabalhadas"required>
                        </p>
                        <p class="block">
                            <input type="datetime-local" title="Inicio da Extra"required>
                        </p>
                        <p class="block">
                            <input type="datetime-local" title="Fim da Extra"required>
                        </p>
                        <p class="block">
                            <input type="text" placeholder="Total de Extras"required>
                        </p>                     
                        <p class="block">
                            <input type="" placeholder="Código do Serviço"required>
                        </p>
                        <p class="block">
                            <input type="text" placeholder="Motivo" required>
                        </p>
                        <p class="block">
                        <input type="text" placeholder="colaborador ausente">
                        </p><br>
                        <p id="btns--scales">
                            <button type="submit"> Escalar</button>
                            <button type="submit">Excluir</button>
                        </p>
                    </form>
            </div>
        </div>
</div>

        
 
    <!-- Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"  src="chart.js"></script>
    <!-- Scripts para paginação do modal -->
    <script type="text/javascript" src="script.js"></script>   
</body>
</html>