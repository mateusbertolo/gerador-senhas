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
                            
                                <!-- <h3 class="password-display" id="displaysenha">Sua senha aparecerá aqui<h3> -->
                                
                                <div class="copy-clipboard">
                                    <div class="input-group mb-3">
                                    <input class="form-control" id="displaysenha" readonly      placeholder="Sua senha aparecerá aqui"><button class="input-group-text" onclick="copyfunc()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></button>
                                </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <label for="quantidadenumeros">Quantidade de caracteres</label>
                                    <input type="range" min="8" max="20" value="10"  class="form-range" id="quantidadeletras">
                                    <!-- <input type="number" class="form-control" min="8" max="20" value="10" id="quantidadenumeros"> -->
                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected"><span class="input-group-btn input-group-prepend"><button class="btn btn-primary bootstrap-touchspin-down" id="diminuirQuantidade" type="button">-</button></span><input type="number" class="form-control" min="8" max="20" value="10" id="demo3"><span class="input-group-btn input-group-append"><button class="btn btn-primary bootstrap-touchspin-up" id="aumentaQuantidade" type="button">+</button></span></div>
                            </div>
                        </div>
                            <div class="multiselecao mt-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input success check-light-success" type="checkbox" id="incluirmaiusculas" value="option1" >
                                    <label class="form-check-label" for="incluirmaiusculas">Incluir Maiúsculas</label>
                                </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input success check-light-success" type="checkbox" id="incluirnumeros" value="option1" >
                                        <label class="form-check-label" for="incluirnumeros">Incluir Números</label>
                                    </div>
                                    
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input success check-light-success" type="checkbox" id="incluirsimbolos" value="option1" >
                                        <label class="form-check-label" for="incluirsimbolos">Incluir Símbolos</label>
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-success">Gerar a senha</button>
                        </form> 
                       
                    <!-- The button used to copy the text -->
                    </div>
    
        <script src="gerador.js"></script>
</body>
</html>








