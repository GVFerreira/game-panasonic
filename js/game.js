document.addEventListener('DOMContentLoaded', function() {
	const bot = new Image()
	bot.src = 'img/v-razor.png'
	bot.style.width = '10%'
	bot.style.position = 'absolute'
	bot.id = 'bot'

	function tamanhoTela() {
		return {
			altura: window.innerHeight,
			largura: window.innerWidth
		}
	}

	function posicaoAleatoria() {
		const botWidth = tamanhoTela().largura * 0.2
		const botHeight = tamanhoTela().altura * 0.2
		const maxX = tamanhoTela().largura - botWidth
		const maxY = tamanhoTela().altura - botHeight
		return {
			posicaoX: Math.floor(Math.random() * maxX),
			posicaoY: Math.floor(Math.random() * maxY)
		}
	}

	let intervalId, tempoFinal, botsClicados

	function adicionarBot() {
		const { posicaoX, posicaoY } = posicaoAleatoria()
		const novoBot = bot.cloneNode()
		novoBot.style.left = posicaoX + 'px'
		novoBot.style.top = posicaoY + 'px'

		novoBot.onclick = function () {
			this.remove()
			botsClicados++
			if (botsClicados >= 20) {
				clearInterval(intervalId)
				const tempoTela = parseFloat(document.getElementById('tempo').innerText)
				localStorage.setItem("minha-pontuacao", tempoTela)
				window.location.href = "gameover.html"
			} else {
				adicionarBot()
			}
		}
		document.body.appendChild(novoBot)
	}

	function criarBots() {
		for (let i = 0; i < 4; i++) {
			adicionarBot()
		}
	}

	function iniciarJogo() {
		let tempoInicial = Date.now()
		let tempoFinal
		let tempo = 0
		intervalId = null
		botsClicados = 0
		criarBots()

		intervalId = setInterval(() => {
			tempo++
			tempoFinal = (Date.now() - tempoInicial) / 1000
			if (tempo >= 60) {
				clearInterval(intervalId)
				const minhaPontuacao = tempoFinal.toFixed(3)
				localStorage.setItem("minha-pontuacao", minhaPontuacao)
				window.location.href = "gameover.html"
			}
		}, 1000)

		setTimeout(() => {
			clearInterval(intervalId)
			tempoFinal = (Date.now() - tempoInicial) / 1000
			const minhaPontuacao = tempoFinal.toFixed(2)
			localStorage.setItem("minha-pontuacao", minhaPontuacao)
			window.location.href = "gameover.html"
		}, 60 * 1000)
	}

	iniciarJogo()
})
