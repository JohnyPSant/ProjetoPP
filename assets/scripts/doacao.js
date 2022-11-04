const inputDoacao = document.getElementById('inputDoacao');
const inputValor = document.getElementById('inputValor')
const inputQuantidade = document.getElementById('inputQuantidade')

// Ao mudar de opcao dispara um evento
inputDoacao.addEventListener('change', () => {
    const value = inputDoacao.value;

    if (value == "mantimentos") {
        setDisable(inputValor)
        removeDisable(inputQuantidade)
        inputFocus(inputQuantidade)
    } else if (value == "dinheiro") {
        setDisable(inputQuantidade)
        removeDisable(inputValor)
        inputFocus(inputValor)
    } else {
        setDisable(inputValor)
        setDisable(inputQuantidade)
    }

})

function removeDisable(input) {
    input.removeAttribute("disabled")
}

function setDisable(input) {
    input.setAttribute("disabled", "")
}

function inputFocus(input) {
    input.focus();
}