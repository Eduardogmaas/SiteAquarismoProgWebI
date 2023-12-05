let totalArrecadado = 0;
let metodoPagamento = 'dinheiro';

function formatarValor(valor) {
    return valor.toFixed(2);
}

function doar() {
    const valorDigitado = document.getElementById('valor').value;
    const valor = parseFloat(valorDigitado) || 0;
    totalArrecadado += valor;
    document.getElementById('totalArrecadado').textContent = totalArrecadado;
        
    document.getElementById('agradecimento').style.display = 'block';
    setTimeout(function() {    
        document.getElementById('agradecimento').style.display = 'none';
    }, 5000);


    document.getElementById('valor').value = '';
}

function atualizarMetodo() {
    metodoPagamento = document.getElementById('metodo').value;
}
