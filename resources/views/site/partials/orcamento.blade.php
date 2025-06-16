<div class="container py-5" id="orcamento">
    <h1 class="text-center mb-4 fw-bold text-primary">Solicite um Orçamento</h1>
    <p class="text-center text-muted mb-5">Preencha o formulário abaixo e entraremos em contato o mais breve possível.
    </p>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('orcamento.enviar') }}" method="POST" class="needs-validation bg-white p-4 rounded shadow-lg"
        novalidate>
        @csrf
        <div class="row g-3 mb-3">
            <!-- Nome -->
            <div class="col-md-6">
                <label for="nome" class="form-label fw-semibold">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control"
                    placeholder="Digite seu nome completo" required>
                <div class="invalid-feedback">
                    Por favor, insira seu nome.
                </div>
            </div>
            <!-- Email -->
            <div class="col-md-6">
                <label for="email" class="form-label fw-semibold">E-mail</label>
                <input type="email" name="email" id="email" class="form-control"
                    placeholder="Seu e-mail para contato" required>
                <div class="invalid-feedback">
                    Por favor, insira um e-mail válido.
                </div>
            </div>
        </div>
        <div class="row g-3 mb-3">
            <!-- Telefone -->
            <div class="col-md-4">
                <label for="telefone" class="form-label fw-semibold">Telefone</label>
                <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="(XX) XXXXX-XXXX"
                    required>
                <div class="invalid-feedback">
                    Por favor, insira seu telefone.
                </div>
            </div>
            <!-- Serviço -->
            <div class="col-md-4">
                <label for="servico" class="form-label fw-semibold">Serviço</label>
                <select name="servico" id="servico" class="form-select" required>
                    <option value="" selected disabled>Selecione um serviço</option>
                    <option value="instalacao">Instalação</option>
                    <option value="manutencao">Manutenção</option>
                    <option value="higienizacao">Higienização</option>
                    <option value="projeto">Projeto</option>
                </select>
                <div class="invalid-feedback">
                    Por favor, selecione um serviço.
                </div>
            </div>
            <!-- Opção Imóvel -->
            <div class="col-md-4">
                <label for="imovel" class="form-label fw-semibold">Opção</label>
                <select name="imovel" id="imovel" class="form-select" required>
                    <option value="" selected disabled>Selecione um tipo</option>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="comercial">Estabelecimento Comercial</option>
                </select>
                <div class="invalid-feedback">
                    Por favor, selecione uma opção.
                </div>
            </div>
        </div>
        <!-- Mensagem -->
        <div class="mb-4">
            <label for="mensagem" class="form-label fw-semibold">Mensagem</label>
            <textarea name="mensagem" id="mensagem" rows="5" class="form-control"
                placeholder="Descreva seu projeto ou necessidade" required></textarea>
            <div class="invalid-feedback">
                Por favor, insira uma mensagem.
            </div>
        </div>
        <!-- Botão de Enviar -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg px-5">Enviar Solicitação</button>
        </div>
    </form>
</div>
