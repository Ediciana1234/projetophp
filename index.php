<?php

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

nav {

    display: flex;
    justify-content: space-between;
    
    
    }

nav ul a {

text-decoration: none;
font-size: 15px;
margin-left: 05px;
margin-right: 20px;
padding: 15px;
color:bluecornflowerblue;
text-align: center;

  
    
} 


.section_img{

    display: flex;
    width: 100%;
    height: 600px;
    background-color: #fff;
    margin-bottom: 50px;

}
.area_esquerda{

     display: flex;
     flex: 1;
     flex-direction: column;
     justify-content: center;
     padding-left: 50px;
      

}
.titulo_area{

    max-width: 500px;
    margin-bottom: 30px;

}

.texto_area{
    max-width: 500px;
    margin-bottom: 30px;
    margin-top: 20px;
}

.titulo_area span{
    font-size: 40px;
    font-weight: 600;
}

.texto_area span{
    font-size: 20px;
    font-weight: 400;
    margin-top: 20px;

}

.btn_area button{
    display: flex;
    margin-left: 150px;
    margin-top: 100px;
    width: 200px;
    height: 40px;
    border-radius: 12px;
    background-color: #007bff;
    border: 1px solid blue;
    cursor: pointer;
    color: white;
    
    &:hover{
        background-color: blue;
        color: white;
    }
}

.area_direita{

    display: flex;
    flex: 1;
    background-position: center;
   
     
   
}


.area3 { 

 
    padding: 100px;
       
}

#services .area3 h3{
    margin-top: 30px;

    
}

#services .area3 h4{
    margin-top: 30px;
    color: cornflowerblue;

    
}


section {
    
    padding: 40px 0;
    background-color: #f9f9f9;
    text-align: center;
}
section img {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
}


.cards_remedio{


    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #fff;
    height: 500px;

}

.linha_remedio{
    
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
    height: 600px;
}

.card {

    margin-top: 20px;
    width: 300px;
    height: 300px;
    background-color: #fff;
    margin-right: 20px;
    border-radius: 12px;
    border: 1px solid #ccc;
    box-shadow: 5px 6px 4px 0px #ccc;
    display: flex;
    flex-direction: column;
    padding: 20px;
    justify-content: space-evenly;
}

.card_titulo span {
    font-size: 20px;
    font-weight: 600;


}

.card_texto span{

    font-size: 12px;
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
    margin-left: 50px;
    color:blue;
    
    
    
    
}

form{

    
    display: flex;
    flex-direction: column;
    align-items: center;
     
   }

   .section_form h2{

    margin-bottom: 20px;
   }
   .section_form{

    align-items: left;
    margin-top: 400px;
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
   
   .btn_salvar{
    width: 200px;
    height: 40px;
    border-radius: 12px;
    background-color: none;
    border: 1px solid red;
    cursor: pointer;
    &:hover{
        background-color: blue;
        color:white;
    }
   }

   #Agenda h2{
    margin-top: 50px;
    
    
    
    
    
   }
           
   .direita{

    display: flex;
    flex: 1;
    flex-direction: column;
    justify-content: center;
    padding-left: 50px;

   }

#traco h4{

    display: flex;
    margin-left: 200px;
    


}




.quadro_footer{


    display: flex;
    flex-direction: column;
    background-color: rgb(42, 128, 165);
    height: 300px;
    

}



.linha_footer{
    
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
    margin-top: 50px;

}
    
    

.quadro {

    
    width: 300px;
    height: 200px;
    display: flex;
    flex-direction: column;
    padding: 20px;
    color:white;
    margin-bottom: 50px;
    
}
   

.quadro_texto span{

    font-size: 12px;
    
    
}

</style>
 <!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

</head>-->

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">

  <div class="container-fluid">
  
    <a class="navbar-brand" href="#"><img src="./images/logo.png" alt=""></a>
    
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item mt-2">
         <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li> 

        <li class="nav-item mt-2">
          <a class="nav-link" href="agendaConsultas.php">Agendar consulta</a>
        </li>

        <li class="nav-item mt-2">
          <a class="nav-link" href="listarConsultas.php">Listar consultas</a>
        </li>
         
      </ul>
    </div>
  </div>
</nav>

  
    <section class="section_img">

        <div class="area_esquerda">

             <div class="titulo_area">

                <span>Virtual healthcare for you</span>

             </div>

             <div class="texto_area">

                <span>Trafalgar provides progressive, and affordable healthcare,
                    acessible on mobile and online
                    for everyone</span>
             </div>

             <div class="btn_area">

                <button>Consult today</button>

             </div>

        </div>

        <div class="area_direita">       
            
            <div><img src="./images/imagem1.png" alt=""></div>
       
        </div>
                

                

              
    </section>


    <section id="services">

        <div class="area3">
            <h2>Our Services</h2>
            <h3>__________</h3>
            <h4>We provide to you best choice for you. Adjust it to your health needs
                and make sure your undergo treatment with our highly qualified doctors
                you can consult with us wich type of service is suitable for your health</h4>
            
        </div>

    </section>

    <section class="cards_remedio"> 

        <h2>Remedios</h2>

        

        <div class="linha_remedio">

            <div class="card">

                <div card_img>
                
                    <img src="./images/busca.png" alt="">
                
                </div>

                <div class="card_titulo">

                    <span>Seach doctor</span>

                </div>

                <div class="card_texto">

                    <span>Choose your doctor from thousands of specialist,
                        general, and trusted hospital</span>
                </div>

            </div>
                 
             <div class="card">

                <div card_img>
                
                    <img src="./images/frasco.png" alt="">
                
                </div>

                <div class="card_titulo">

                    <span>Online pharmacy</span>

                </div>

                <div class="card_texto">
                    
                    <span>Buy your medicines with our mobile application
                        with a simple delivery</span>
                </div>

            </div>
                
                <div class="card">

                    <div card_img>
                    
                        <img src="./images/consulta.png" alt="">
                    
                    </div>
    
                    <div class="card_titulo">
    
                        <span>Consultation</span>
    
                    </div>
                
    
                    <div class="card_texto">
                        
                        <span>Free consultation with our trusted
                            doctors and get the best recomendations</span>
                    </div>

                </div>
                                  
                
            </div>



            <div class="linha_remedio">

                <div class="card">

                     <div card_img>
    
                     <img src="./images/ficha.png" alt="">
    
                     </div>

                    <div class="card_titulo">

                     <span>Details info</span>

                    </div>

                    <div class="card_texto">

                     <span>Free consultation with our trusted
                     doctors and get the best recomendations</span>
                    </div>
                </div>


                    
                        <div class="card">

                             <div card_img>
            
                             <img src="./images/remedio.png" alt="">
            
                             </div>

                        <div class="card_titulo">

                             <span>Emergency Care</span>

                        </div>

                        <div class="card_texto">

                             <span>You can get 24/7 urgent care for 
                                yourself or your children and you lovely
                                family
                             </span>
                        </div>
                    </div>
                    
             
                        <div class="card">

                            <div card_img>
            
                            <img src="./images/remedio.png" alt="">
            
                            </div>

                            <div class="card_titulo">

                             <span>Emergency care</span>

                             </div>

                            <div class="card_texto">
                
                            <span>You can get 24/7 urgent care for
                            tourself or your children and your
                            lovely family</span>

                             </div>

                             
                        </div>    
                        
                        

    
         </div>

                        
         

            

         </div>
                        <div>

                         <button>Learn more</button>

                        </div>



        </div>

        <!--<div id="Agenda">

            <h2>Agendar Consulta</h2>
            <h3>__________</h3>

        </div>
        
         
            

    </section>

    


    <section  class="section_form">
 
       <form class="row g-3" >
        
            <div class="input_div">

                    <div class="input_control">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" >
                    </div>
    
                    <div class="input_control">
                    <label for="CPF">CPF</label>
                    <input type="text" name="cpf" id="cpf" >
                    </div>
                    
            </div>
    
            <div class="input_div">

                    <div class="input_control">
                    <label for="Email">Email</label>
                    <input type="text" name="email" id="email">
                    </div>                      

                    <div class="input_control">
                    <label for="Telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone">
                    </div>

            </div>
    
            <div class="input_div">

                    <div class="input_control">
                    <label for="Data">Data</label>
                    <input type="text" name="data" id="data">
                    </div>
                           
                    <div class="input_control">
                    <label for="Horário">Horário</label>
                    <input type="text" name="hora" id="hora">
                    </div>
                   
                    
            </div>
            
            <div> <button type="submit" class="btn_salvar">Enviar</button></div>
            </div>
                    
            
                    
            
           

        </form>

    </section> -->

    

    <section class="section_img">

        <div class="area_esquerda">

            <div><img src="./images/imagem2.png" alt=""></div>

             

        </div>

        <div class="direita">  
            
            <div class="titulo_area">

                <span>Leadind healthcare providers</span>

             </div>
             <div id="traco">

                <h4>__________</h>
    
            </div>

             <div class="texto_area">

                <span>Traflgar provides progressive, and affordable
                     healthcare, accessible on online for 
                     evione. To us, it´s not just,work. We take pride
                      in the solutions we deliver</span>
             </div>

             <div class="btn_area">

                <button>Consult today</button>

             </div>
            
            
       
        </div>
                

                

              
    </section>

    

    <footer class="quadro_footer"> 

                        

        <div class="linha_footer">

            <div class="quadro">

                <div quadro_img>
                
                    <img src="./images/logo.png" alt="">
                
                </div>

                <div class="quadro_texto">

                    <span>Trafegar Provides progressive, and affordable
                        heatth carec, acessible on mobile and online
                        for everyone</span>

                </div>

                <div class="quadro_texto">

                    <span>@Trafegar PTY LTD 2020. All rights reserved</span>
                </div>
            </div>

                <div class="quadro">

                    <div quadro_titulo>
                    
                        <span>Company</span>
                    
                    </div>
    
                    <div class="quadro_texto">
    
                        <span>About</span>
    
                    </div>
    
                    <div class="quadro_texto">
    
                        <span>Testimonials</span>
                    </div>
    
                    <div class="quadro_texto">
    
                        <span>Find a doctor</span>

                    </div>

                    <div class="quadro_texto">
    
                        <span>Apps</span>
                    </div>

            </div>

            <div class="quadro">

                <div quadro_titulo>
                
                    <span>Region</span>
                
                </div>

                <div class="quadro_texto">

                    <span>Indonesia</span>

                </div>

                <div class="quadro_texto">

                    <span>Singapore</span>
                </div>

                <div class="quadro_texto">

                    <span>Hongkong</span>

                </div>

                <div class="quadro_texto">

                    <span>Canada</span>
                </div>

        </div>

        <div class="quadro">

            <div quadro_titulo>
            
                <span>Help</span>
            
            </div>

            <div class="quadro_texto">

                <span>Help center</span>

            </div>

            <div class="quadro_texto">

                <span>Contact support</span>
            </div>

            <div class="quadro_texto">

                <span>Instructions</span>

            </div>

            <div class="quadro_texto">

                <span>How it works</span>
            </div>

    </div>
        
    </footer>

    
    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous"></script>
</body>
</html>




