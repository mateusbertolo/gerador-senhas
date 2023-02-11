<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>eClientTools</title>
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
                                    <div class="caracter">   
                                    <div id="rangeValue"><input type="number" readonly class="form-control" min="8" max="20" value="10" id="demo3"></div>
                                    <!-- <input type="number" class="form-control" min="8" max="20" value="10" id="quantidadenumeros"> -->
                                <div class="input-char"><button class="input-menos" id="diminuirQuantidade" type="button">-</button><input type="range" min="8" max="20" value="10"  class="form-range" id="quantidadeletras"><button class="input-mais" id="aumentaQuantidade" type="button">+</button></span></div>
                           
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
</body>
</html>








