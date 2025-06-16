<section id="contato" class="text-center">
    <h2>Agendamento</h2>
    <p class="mb-4">Preencha o formulário abaixo para reservar seu horário.</p>
    <form class="mt-3" id="form-agendamento">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Seu nome" required>
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" id="data" required>
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">Horário</label>
            <select class="form-select" id="hora" required>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="local" class="form-label">local de atendimento</label>
            <input type="text" class="form-control" id="local" placeholder="atendimento a domicilio ou no salão" required>
        </div>
        


        <div class="mb-3">
            <label for="pagamento" class="form-label">Forma de pagamento</label>
            <select class="form-select" id="pagamento" required>
                <option value="Pix">Pix</option>
                <option value="Dinheiro">Dinheiro</option>
                <option value="Cartão débito">Cartão débito</option>
                <option value="Cartão crédito">Cartão crédito </option>
            </select>
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" rows="3" placeholder="Alguma observação?" required></textarea>
        </div>
        <button type="submit" class="btn btn-pink text-white">Reservar</button>
    </form>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form-agendamento');
    const dataInput = document.getElementById('data');
    const horaInput = document.getElementById('hora');
    const feriados = [
        '2025-01-01', '2025-04-21', '2025-05-01', '2025-09-07',
        '2025-10-12', '2025-11-02', '2025-11-15', '2025-12-25'
    ];
    const horariosPermitidos = [
        '09:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'
    ];

    // Validação de data
   dataInput.addEventListener('input', function () {
    const dataSelecionada = new Date(this.value);
    const diaSemana = dataSelecionada.getDay() ; // 0 = Domingo, 6 = Sábado
    console.log(diaSemana)
    if (diaSemana !== 5 && diaSemana !== 6) {
        alert('Agendamentos só são permitidos aos sábados e domingos.');
        this.value = '';
    }
});

    // Validação de horário
    horaInput.addEventListener('input', function () {
        if (!horariosPermitidos.includes(this.value)) {
            alert('Por favor, selecione um horário entre 09:00 e 11:00 ou entre 13:00 e 18:00.');
            this.value = '';
        }
    });

    // Envio do formulário via WhatsApp
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const pagamento = document.getElementById('pagamento').value;
        const nome = document.getElementById('nome').value;
        const data = dataInput.value;
        const hora = horaInput.value;
        const mensagem = document.getElementById('mensagem').value;
        const numeroWhatsApp = "5542999521974";
        const texto = `Olá, meu nome é ${nome}. Gostaria de agendar para o dia ${data} às ${hora} forma de pagamento ${pagamento}. Observação: ${mensagem}`;
        const url = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(texto)}`;
        window.open(url, '_blank');
    });
});
</script>
