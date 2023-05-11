document.addEventListener('DOMContentLoaded', function() {
	const bot = new Image()
	bot.src = 'img/v-razor.png'
	bot.style.backgroundColor = "#FFFFFF"
	bot.style.borderRadius = "100%"
	bot.style.width = '65px'
	bot.style.height = '65px'
	bot.style.position = 'absolute'
	bot.id = 'bot'

	function tamanhoTela() {
		return {
			altura: window.innerHeight,
			largura: window.innerWidth
		}
	}

	function posicaoAleatoria() {
		const botWidth = 65
		const botHeight = 125
		const maxX = tamanhoTela().largura - botWidth
		const maxY = tamanhoTela().altura - botHeight
		return {
			posicaoX: Math.floor(Math.random() * maxX),
			posicaoY: Math.floor(Math.random() * maxY)
		}
	}

	let intervalId, tempoFinal

	function adicionarBot() {
		const { posicaoX, posicaoY } = posicaoAleatoria()
		bot.style.left = posicaoX + 'px'
		bot.style.top = posicaoY + 'px'

		bot.onclick = function () {
			this.remove()
			botsClicados++
			console.log(botsClicados)
			if (botsClicados >= 20) {
				clearInterval(intervalId)
				const tempoTela = parseFloat(document.getElementById('tempo').innerText)
				localStorage.setItem("minha-pontuacao", tempoTela)
				window.location.href = "gameover.html"
			} else {
				criarBot()
			}
		}

		return bot
	}

	function criarBot() {
		const bot = adicionarBot()
		document.body.appendChild(bot)
	}

	function iniciarJogo() {
		let tempoInicial = Date.now()
		let tempoFinal
		let tempo = 0
		intervalId = null
		botsClicados = 0
		criarBot()

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
