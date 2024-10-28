<?php
    session_start();
    if(isset($_SESSION['login_aluno']) && $_SESSION['login_aluno'] === TRUE){
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="Pasta_css/justifica.css">
            <title>JUSTIFICAÇÃO DE FALTA</title>
        </head>

        <body>
        
        <div class="topo">
            <div class="tarja">
                <img src="Imagens/tarja.jpg" alt="error" width="100%" height="150px">
            </div>

            <div class="logo">
                <img src="Imagens/nav.jpg" alt="error" width="100%" height="200px">
            </div>
        </div>

        <div class="back">
            <a href="menu_aluno.php">
                <button>VOLTAR AO MENU</button>
            </a>
        </div>

            <center>

                <H1>ENVIO DE JUSTIFICATIVAS</H1>
                <br>
                <div class="box-user_1">
                    <div class="aviso">
                        Conforme Manual do Aluno, é direito do aluno valer-se de justificativas de falta, desde que <br>
                        o documento seja apresentado no prazo-limite de até (05) cinco dias consecutivos, contados a partir da 1ª data da falta. <br> <br>
                        <b>Caso necessário, será solicitado a apresentação do documento original para fins de autenticação.</b>
                    </div>
                </div>

                <form method="POST" action="arq_justifica.php" enctype="multipart/form-data">
                    <div class="box-user_2">     
                        <h3>INFORME O CPF:</h3>
                        <input type="text" class="cpf_texto" name="cpf" id="cpf">
                    </div> 

                    <div class="box-user_3"> 
                        <h3>QUAL A MODALIDADE DO CURSO?</h3>

                        <select name="modalidade" id="modalidade">
                            <option value="Aperfeiçoamento Profissional">Aperfeiçoamento Profissional</option>
                            <option value="Aprendizagem Industrial">Aprendizagem Industrial</option>
                            <option value="Curso Técnico">Curso Técnico</option>
                            <option value="Qualificação Profissional">Qualificação Profissional</option>
                            <option value="Iniciação Profissional">Iniciação Profissional</option>
                        </select>
                    </div>

                    <div class="box-user_4"> 
                        <h3>Sua justificativa se refere a:</h3>
                        <input type="radio" name="motivo" id="motivo" value="Entrada em Atraso"> Entrada em Atraso <br>
                        <input type="radio" name="motivo" id="motivo" value="Saída Antecipada"> Saída Antecipada <br>
                        <input type="radio" name="motivo" id="motivo" value="Faltas"> Falta <br>
                    </div>
                    
                    <div class="box-user_5">
                        <h3>INFORME A DATA DO ATESTADO</h3>
                        Data: <Input Type="date" Name="data" Id="data">
                    </div>

                    <div class="box-user_6">
                        <h3>ANEXE AQUI SUA JUSTIFICATIVA</h3>
                        Verifique se sua digitalização está legível. <br> Documentos com baixa resolução ou ilegíveis não serão aceitos. <br>
                        <br>
                        <label for="arquivo"> Anexar Arquivo <i class='bx bx-upload'></i></label>
                        <input type="file" name="arquivo" id="arquivo" class="doc">
                    </div>

                    <h3>Observações</h3>
                    <textarea name="observacoes" id="observacoes" cols="30" rows="8"></textarea>

                    <div class="enviar">
                        <input type="submit">
                    </div>
                </form>
                
            </center>
        </body>
        </html>

<?php
    } else {
        header("location:index.php");
}
?>