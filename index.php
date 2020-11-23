<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino Hard Academias - Chatbot</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/svg"  href="icon/icon.svg">
</head>

<body>
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <h4 style="text-align: center;">Treino Hard Academias - Chatbot</h4>
                <br>
                <p style="text-align: center;">Faça a sua Pergunta Abaixo ou Escolha uma das opções!</p>
            </div>

            <div class="body" id="chatbody">
                <div class="scroller"></div>
            </div>

            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Digite sua mensagem aqui...">
                </div>
                <div>
                    <input type="submit" value="Enviar" id="btn">
                </div>
            </form>

        </div>
    </div>
    <script src="app.js"></script>

    <script>
        divCpu = document.createElement("div");
        chatBody = document.querySelector(".scroller");
        divCpu.className = "bot visible";
        divCpu.innerHTML = "Bom dia, selecione as opções:<br><br>1 - Pedido<br>2 - Consultar Pedido";
        chatBody.append(divCpu);
    </script>

</body>

</html>