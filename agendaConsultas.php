<?php

require_once './actions/config.php';

?>
<?php include './layout/header.php'; ?>

<style>
    * {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;


}


section {
    
    padding: 40px 0;
    background-color: #f9f9f9;
    text-align: center;
}

#Agenda h2{
    margin-top: 50px;
    justify-content: center;
    margin-left: 850px;
    
   }


     

button {

    padding: 10px 20px;
    margin-top: 30px;
    background:: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    max-width: 200px;
    display: flex;
    justify-content: center;
    margin-left: 850px;
    color:blue;
    width:300px;
        
}

form{
    display: flex;
    flex-direction: column;
    align-items: center;
   }

   
   .section_form{

    align-items: left;
    margin-top: 50px;
    display: flex;
    width: 100%;
    padding-top: 50px;
    background-color:blue;
    height: 400px;
    justify-content: center;
      
   }

   .input_div{

    display: flex;
    flex-direction: row;
    margin-bottom: 20px;
     
  
   }

   .input_control{
    
    display: flex;
    flex-direction: column;
    margin-right: 20px;
    text-align: left;
    color:white
  
   }
   input{
    height: 40px;
    border-radius: 12px;
    width: 500px;
    border: none;
  
   }
   
   .success-message {
    display: none;
    color: green;
  }
            
  


</style>
<div id="Agenda">

            <h2>Agendar Consulta</h2>
             
        </div>

 

<div class="container">

    <section  class="section_form d-flex justify-content-beteween mt-5">

        
            
        

        <form class="row g-3" method="POST" action="./actions/adicionar.php">

        
           

            <div class="input_div">

                    <div class="input_control">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" >
                    </div>
    
                    <div class="input_control">
                    <label for="CPF">CPF</label>
                    <input type="text" name="cpf" id="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="000.000.000-00">                  
                    </div>
                    
            </div>
    
            <div class="input_div">

                    <div class="input_control">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="email" placeholder="exemplo@dominio.com">
                    </div>                      

                    <div class="input_control">
                    <label for="Telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}" placeholder="(00) 91234-5678">
                    </div>

            </div>
    
            <div class="input_div">

                    <div class="input_control">
                    <label for="Data">Data</label>
                    <input type="date" name="data" id="data" pattern="\d{2}/\d{2}/\d{4}" placeholder="dd/mm/yyyy">

                    </div>
                           
                    <div class="input_control">
                    <label for="Horário">Horário</label>
                    <input type="time" name="hora" id="hora">
                    
                    </div>
                    
                    
            </div>

            
                   
            
            </div> <button type="submit" class="btn_salvar">Enviar</button></div>
               
                  
           
           
        </form>

        
    
</div>

