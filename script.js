var altura, largura
var vidas = 1
var tempo = 0

function tamanhoTela(){
    altura = window.innerHeight
    largura = window.innerWidth
}

tamanhoTela()

function posicaoTela() {
    if(document.getElementById('bot')) {
		document.getElementById('bot').remove()
		if (vidas > 2) {
			window.location.href = "gameover.html"
		} else {
			document.getElementById('vida' + vidas).src = "img/heart-broken.png"
			vidas++
		}
	}

    var posicaoX = Math.floor(Math.random() * largura) - 90
	var posicaoY = Math.floor(Math.random() * altura) - 90

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
	}

	document.body.appendChild(bot)
}


