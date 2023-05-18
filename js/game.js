function startCountdown() {
	var countdownElement = document.getElementById("countdown")
	var count = 3 // Inicia a contagem regressiva em 3
  
	// Função que atualiza o elemento de contagem regressiva
	function updateCountdown() {
	  countdownElement.textContent = count
	  count--
  
	  if (count < 0) {
		// Quando a contagem regressiva chegar a zero, inicia o jogo
		countdownElement.style.display = "none"
		startGame()
	  } else {
		// Aguarda 1 segundo e atualiza a contagem regressiva
		setTimeout(updateCountdown, 1000)
	  }
	}
  
	// Inicia a atualização da contagem regressiva
	updateCountdown()
  }
  
// Função para iniciar o jogo
function startGame() {
	let tempoInicio = 0
	let tempoDecorrido = 0
	let cronometro
	let rodando = false
	
	const tempoElemento = document.getElementById("tempo")
	
	function iniciarTimer() {
		if (!rodando) {
			rodando = true
			tempoInicio = Date.now() - (tempoDecorrido * 1000)
			cronometro = setInterval(atualizarTempo, 1)
		}
	}
	
	function atualizarTempo() {
		const agora = Date.now()
		tempoDecorrido = (agora - tempoInicio) / 1000
		tempoElemento.textContent = tempoDecorrido.toFixed(3)
	}
	
	// adicionamos esta linha para exibir o tempo decorrido assim que a página carregar
	tempoElemento.textContent = tempoDecorrido.toFixed(3)

	iniciarTimer()
	
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
			if (botsClicados >= 100) {
				clearInterval(intervalId)
				const tempoTela = parseFloat(document.getElementById('tempo').innerText).toFixed(3)
				localStorage.setItem("minha-pontuacao", tempoTela)
				localStorage.setItem("acertos", botsClicados)
				let xmlhttp = new XMLHttpRequest()
				xmlhttp.open("GET", `salvar-pontuacao.php?pontuacaoAtual=${tempoTela}&acertos=${botsClicados}`, true)
				xmlhttp.send()
				window.location.href = "gameover.php"
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
				const minhaPontuacao = 60.000.toFixed(3)
				localStorage.setItem("minha-pontuacao", minhaPontuacao)
				const acertos = window.localStorage.getItem("acertos")
				let xmlhttp = new XMLHttpRequest()
				xmlhttp.open("GET", `salvar-pontuacao.php?pontuacaoAtual=${minhaPontuacao}&acertos=${acertos}`, true)
				xmlhttp.send()
				window.location.href = "gameover.php"
			}
		}, 1000)

		setTimeout(() => {
			clearInterval(intervalId)
			tempoFinal = (Date.now() - tempoInicial) / 1000
			const minhaPontuacao = 60.000.toFixed(3)
			localStorage.setItem("minha-pontuacao", minhaPontuacao)
			const acertos = window.localStorage.getItem("acertos")
			let xmlhttp = new XMLHttpRequest()
			xmlhttp.open("GET", `salvar-pontuacao.php?pontuacaoAtual=${minhaPontuacao}&acertos=${acertos}`, true)
			xmlhttp.send()
			window.location.href = "gameover.php"
		}, 60 * 1000)
	}

	iniciarJogo()
}

// Chama a função para iniciar a contagem regressiva
startCountdown()
