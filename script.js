var tempo = 30
var pontuacao = 0
var intervalId, largura, altura

function tamanhoTela(){
    altura = window.innerHeight
    largura = window.innerWidth
}

tamanhoTela()

function posicaoTela() {
    if(document.getElementById('bot')) {
		document.getElementById('bot').remove()
		if (tempo < 0) {
			window.location.href = "gameover.html"
		}
	}

    var posicaoX = Math.floor(Math.random() * largura) - 180
	var posicaoY = Math.floor(Math.random() * altura) - 250

    posicaoX = posicaoX < 0 ? 0 : posicaoX
	posicaoY = posicaoY < 0 ? 0 : posicaoY

    var bot = document.createElement('img')
    bot.src = 'img/v-razor.png'
	bot.style.width = '6%'
	bot.style.left = posicaoX + 'px'
	bot.style.top = posicaoY + 'px'
	bot.style.position = 'absolute'
	bot.id = 'bot'

	bot.onclick = function () {
		this.remove()
		pontuacao++
		document.getElementById('pontuacao').innerHTML = pontuacao
	}

	document.body.appendChild(bot)
}



function iniciarJogo() {
	intervalId = setInterval(() => {
		tempo--
		document.getElementById('tempo').innerHTML = tempo
		posicaoTela()
	}, 1000)

	setTimeout(function() {
		var meuStorage = window.localStorage.setItem("minha-pontuacao", pontuacao)
		clearInterval(intervalId)
		window.location.href = "gameover.html"
	}, tempo * 1000)
}

iniciarJogo()
