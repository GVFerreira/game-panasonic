var tempo = 0
var tempoMaximo = 60
var botsClicados = 0
var intervalId, largura, altura

function tamanhoTela(){
    altura = window.innerHeight
    largura = window.innerWidth
}

tamanhoTela()

function posicaoTela() {
	//Se existir um bot na tela, então...
    if(document.getElementById('bot')) {
		document.getElementById('bot').remove() //remove o bot

		//Se o tempo for maior que o tempo máximo ou a quantidade de bots clicados for maior do que 50, então...
		if (tempo > tempoMaximo || botsClicados == 50) {
			var meuTempo = tempo.toFixed(3) //define o tempo gasto no jogo e adiciona 3 casas decimais
            var meuStorage = window.localStorage.setItem("meu-tempo", meuTempo) //salva o tempo no localStorage
            clearInterval(intervalId) //limpa o intervalo que acrescenta tempo
			window.location.href = "gameover.html" //leva para página de fim de jogo
		}
	}

    var posicaoX = Math.floor(Math.random() * largura) - 180 //Posição aleatória no eixo X (horizontal)
	var posicaoY = Math.floor(Math.random() * altura) - 250 //Posição aleatória no eixo Y (vertical)

    posicaoX = posicaoX < 0 ? 0 : posicaoX //Se a posição no eixo X for menor do que 0, definir como 0
	posicaoY = posicaoY < 0 ? 0 : posicaoY //Se a posição no eixo Y for menor do que 0, definir como 0

    var bot = document.createElement('img') //Criar bot

	//Estilização do bot
    bot.src = 'img/v-razor.png'
	bot.style.backgroundColor = "#FFF"
	bot.style.borderRadius = "100%"
	bot.style.width = '6%'
	bot.style.left = posicaoX + 'px'
	bot.style.top = posicaoY + 'px'
	bot.style.position = 'absolute'
	bot.id = 'bot'
	//

	//Método que adiciona o evento de clique ao bot criado anteriormente
	bot.onclick = function () {
		this.remove() //remover bot
		botsClicados++ //adiciona 1 ao valor de bots clicados

		//se a quantidade de bots clicados for maior ou igual a 50, então...
		if (botsClicados >= 50) {
            var minhaPontuacao = tempo.toFixed(3) //define o tempo gasto no jogo e adiciona 3 casas decimais
            var meuStorage = window.localStorage.setItem("minha-pontuacao", minhaPontuacao) //salva o tempo no localStorage
            clearInterval(intervalId) //
            window.location.href = "gameover.html"
        }
	}

	document.body.appendChild(bot)
}

function iniciarJogo() {
	intervalId = setInterval(() => {
		tempo++ //incrementa o tempo
		document.getElementById('tempo').innerHTML = tempo.toFixed(3) //define na tela a variável tempo
		posicaoTela() //Invoca o método de posição, para gerar uma novaposição do bot na tela
	}, 1000)

	setTimeout(() => {
		var minhaPontuacao = tempo.toFixed(3) //define o tempo gasto no jogo e adiciona 3 casas decimais
		var meuStorage = window.localStorage.setItem("minha-pontuacao", minhaPontuacao) //salva o tempo no localStorage
		clearInterval(intervalId) //limpa o intervalo que acrescenta tempo
		window.location.href = "gameover.html" //leva para página de fim de jogo
	}, tempo * 700)
}

iniciarJogo()

