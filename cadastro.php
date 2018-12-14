<html>
    <head>
        
      
     
      
      <style tyle="text/css">
          .login input[type="submit"] {
  margin: 0;
  display: block;
  padding: 13px 0;
  width: 80px;
  font-size: 13px;
  font-weight: bold;
  border: 0;
  text-shadow: 0px 1px 0px rbga(255, 255, 255, 1);
  background-color: #f6ba35;
  background-image: -webkit-linear-gradient(90deg, #eca418, #ffcd4e);
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
      </style>
      <meta charset="UTF-8">
      <title>Cadastro</title>
               
    </head>
    <body>
      <table border="1" width="100%">
        <tr>
          <td>
              <form action="Cadastrou.php"> 
       
     <fieldset id="usuario"><legend>
       
       
       
        Indentificação do Cliente</legend>
         <p>CPF:<input type="texto" name="" id="cCPF" size="20" maxlength="20" placeholder="digite o CPF"></p>
         <p>Nome_Cliente:<input type="text" name="tNome_Cliente" id="cNome" size="20" maxlength="20" placeholder="digite o nome"/></p>
         <p> Email_Cliente::<input type="email" name="temail" id="cEmail_Cliente" size="20" maxlength="20" placeholder="digite o email"/></p></p>
          <p> Senha::<input type="password" name="tsenha" id="cSenha" size="20" maxlength="8" placeholder="8 digitos"/></p></p>
          <fieldset id="sexo"><legend> Sexo: </legend>
       <input type="radio" name="tMasc" id="cMasc"/>  -Masculino
         <input type="radio" name="tMasc" id="cMasc"/>  -Feminino</fieldset>
           <fieldset id="sexo"><legend> Contato Pessoal: </legend>
          <p> DataNasc: <input type="date" name="tDataNasc" id="cData"/>  </p> 
         <p> Endereco_Cliente:<input type="text" name="tendereco" id="cEndereco_Cliente" size="20" maxlength="20" placeholder="Rua,Quadra"/></p>
          <p> <label for="cEst"> Estado: </label></p>
      <select name="tEst" id="cEst">
        <option>Distrito Federal</option>
         <option>Goias</option>
      </select>
         
         <p>Cidade_Cliente:<input type="texto" cidade="tCidade_Cliente"  size="20" maxlength="20" placeholder="digite a cidade" ></p>
      </datalist>
      <p>Contato_Cliente:<input type="texto" contato="tContato_Cliente" size="20" maxlength="20" placeholder="digite seu contato" ></p>
          
       </fieldset>
    
      
      </datalist>
       </fieldset>
          <form>
       <fieldset id="mensagem"><legend> Mensagem do Cliente</legend>
         <p><label for=cMsg"> Mensagem:</label>
           <textarea name="tMsg" id="cMsg"></textarea></p>
       
          </form>
             
           </tr>
           <tr>
           
           <td>
          
           

              
              <div class="login">
  
   
  
                  <input type="submit" value="Gravar" onclick="gravar()" />
              <input type="submit" value="Excluir" onclick="excluir()"/>
             <input type="submit" value="Fechar" onclick="fechar()"/>
             <input type="submit" value="Imprimir" onclick="imprimir()"/>
         
  <div class="utilities">
           </td>
           </tr>
           </table>
              
              
          
      
        
        <script type="text/javascript">   
           function gravar() {
               confirm("Deseja realmente gravar?");
               alert("Comprar com sucesso");
               window.location.replace("index.php");
           }
           
         function excluir () {
             confirm("Deseja realmente excluir ?");
             alert("Excluido com sucesso");
             window.location.replace("index.php");
        }
        function fechar () {
            window.location.replace("index.php");
            
        }
        function imprimir () {
             confirm("Deseja realmente imprimir ?");
             
             window.location.replace("index.php");
         }
        

           </script>
        <?php
        
               
           ?>
    </body>
</html>