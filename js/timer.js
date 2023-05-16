// function displayTimer() {
// 	let tempoInicio = 0
// 	let tempoDecorrido = 0
// 	let cronometro
// 	let rodando = false
	
// 	const tempoElemento = document.getElementById("tempo")
	
// 	function atualizarTempo() {
// 		const agora = Date.now()
// 		tempoDecorrido = (agora - tempoInicio) / 1000
// 		tempoElemento.textContent = tempoDecorrido.toFixed(3)
// 	}
	
// 	function iniciarTimer() {
// 		if (!rodando) {
// 			rodando = true
// 			tempoInicio = Date.now() - (tempoDecorrido * 1000)
// 			cronometro = setInterval(atualizarTempo, 1)
// 		}
// 	}
	
// 	function atualizarTempo() {
// 		const agora = Date.now()
// 		tempoDecorrido = (agora - tempoInicio) / 1000
// 		tempoElemento.textContent = tempoDecorrido.toFixed(3)
// 	}
	
// 	// adicionamos esta linha para exibir o tempo decorrido assim que a página carregar
// 	tempoElemento.textContent = tempoDecorrido.toFixed(3)
// }