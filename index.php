<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>eClientTools</title>
    <style>
        .form-range::-webkit-slider-thumb{
    -webkit-appearance: none;
    appearance: none;
    height:20px;
    width:20px;
    border-radius: 50%;
    background: rgb(240, 7, 150);

}
.form-range::-moz-range-thumb{
-webkit-appearance: none;
    appearance: none;
     
}
.b1{
   padding: 5px;
   font-weight: bold;
   color: #00B4FF;
}
#marker{
    position:relative;
    right:0px;
    height:20px;
    width:30px;
    z-index:100;
}
.fa{
    font-size: 38px;
    color: #00B4FF;
    text-align: center;
}
#para{
    height:20px;
    width:30px;
   margin-left: -23px; 
    position: absolute;
    padding:5px 0px;
    font-weight: bold;
}
    </style>
</head>
<body>
    <div id="header">
        <div class="logoecliente">
            <img src="Panel-white-detail2 1.png" alt="">
        </div>
        <div class="logomenu">
            <img src="Vector.png" alt="">
        </div>
       

    </div> 
        <div>
            <h1>Gerador de Senhas Fortes</h1>
        </div>
        <div .class="subtitulo">
            <h2>Crie senhas fortes e seguras para <br> proteger as suas contas na internet.</h2>
        </div>
                    <div class="card-body">
                        
                        <form id="geradorform" class="form">
                                <div id="senhacontainer">
                                    <input class="form-control" id="displaysenha" readonly placeholder="Sua senha aparecerá aqui"><button class="botaocopy" onclick="copyfunc()"><label>Copiar</label><img src="Vector (1).png" alt=""></button>
                                </div> 
                                <div class="labelcar">
                                    <label for="quantidadenumeros">Quantidade de caracter:</label>
                                </div>   
                                <div  id="marker"><i class="fa fa-map-marker"></i><span id="para">10</span></div>
                                    <div class="caracter">   
                                    <div id="rangeValue"><input type="number" readonly class="form-control" min="8" max="20" value="10" id="demo3"></div>
                                <div class="input-char"><button class="input-menos" id="diminuirQuantidade" type="button">-</button>
                                <span class="b1">8</span>
                                <input type="range" min="8" max="20" value="10"  class="form-range" id="quantidadeletras" oninput="prize()">
                                <span class="b1">20</span>
                                <button class="input-mais" id="aumentaQuantidade" type="button">+</button></span></div>
                                    <div id="emoji"></div>
                                <div class="labelcar">
                                    <label for="quantidadenumeros">Caracteres Ultilizados:</label>
                                </div> 
                                <div class="multiselecao">
                                    <div class="checkbutton">
                                        <input class="check" type="checkbox" id="incluirmaiusculas" value="option1" >
                                        <label class="label-check" for="incluirmaiusculas">ABCabc</label>
                                    </div>
                                    <div class="checkbutton">
                                        <input class="check" type="checkbox" id="incluirnumeros" value="option1" >
                                        <label class="label-check" for="incluirnumeros">1234</label>
                                    </div>
                                    
                                    <div class="checkbutton">
                                        <input class="check" type="checkbox" id="incluirsimbolos" value="option1" >
                                        <label class="label-check" for="incluirsimbolos">!@#*$</label>
                                    </div>
                            </div>
                            <div id="conteiner-btn">
                                <button type="submit" id="btn-gerar-senha">Gerar a senha</button>
                            </div>
                        </form> 
                        
                    </div>
        <script src="gerador.js"></script>
        <script>
               var msg=document.getElementById("para");
                    var SLI=document.getElementById("quantidadeletras");
                    var val=document.getElementById("quantidadeletras").value;
                    var MARKER=document.getElementById("marker");
                    MARKER.style="left: calc(" + val.value + "% - 17px";
                    MARKER.style.opacity="1";

                    function prize(){
                        var msg=document.getElementById("para");
                        var val=document.getElementById("quantidadeletras").value;
                        var MARKER=document.getElementById("marker");
                        msg.innerText=val;
                        MARKER.style="left: calc(" + val.value + "% - 17px";
                        MARKER.style.opacity="1";
                    }

        </script>
</body>
</html>

















