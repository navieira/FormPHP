<form action="salva.php" method="post">
<fieldset class="grupo">
        <div class="campo">
            <label for="N°">N°</label>
            <input type="text", name="n°", id="n°", size="20" required>
        </div>

        <div class="campo">
            <label for="data">Data</label>
            <input type="date", name="date", id="date", size="20">
        </div>

        <div class="campo">
            <label for="firma">Firma</label>
            <input type="text", name="firma", id="firma", size="20" required>
        </div>
    </fieldset>

    <fieldset class="grupo">
        <div class="campo">
            <label for="endereço">Endereço</label>
            <input type="text", name="endereço", id="endereço", size="20" required>
        </div>

        <div class="campo">
            <label for="complemento">Complemento</label>
            <input type="text", name="complemento", id="complemento", size="20">
        </div>

        <div class="campo">
            <label for="bairro">Bairro</label>
            <input type="text", name="bairro", id="bairro", size="20" required>
        </div>
    </fieldset>

    <fieldset>
        <div class="campo">
            <label for="cidade">Cidade</label>
            <input type="text", name="cidade", id="cidade", size="20" required>
        </div>

        <div class="campo">
            <label for="uf">UF</label>
            <select required>
                <option value="">Selecione</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>   
            </select>
        </div>
    </fieldset>

    <fieldset class="grupo">
        <div class="campo">
            <label for="cep">CEP</label>
            <input type="text", name="CEP", id="CEP", size="20" required>
        </div>
    
        <div class="campo">
            <label for="cnpj">CNPJ</label>
            <input type="text", name="CNPJ", id="CNPJ", size="20" required>
        </div>
    
        <div class="campo">
            <label for="inscr">Inscr</label>
            <input type="text", name="Inscr", id="Inscr", size="20" required>
        </div>
    
    </fieldset>
    
    <fieldset class="grupo">
        <div class="campo">
            <label for="tel">Tel</label>
            <input type="tel", name="Tel", id="Tel", size="20" required>
        </div>

        <div class="campo">
            <label for="celular">Celular</label>
            <input type="tel", name="Tel", size="20">
        </div>

        <div class="campo">
            <label for="email">Email</label>
            <input type="email", name="email", id="email", size="20">
        </div>
    </fieldset>

    <div class="campo">
        <br>
        <label for="obs">OBS</label>
        <textarea rows="6" style="width: 26em" id="observação" name="obs"></textarea>
    </div>
    

    <button class="botão" type="submit">Concluido</button>
    <input type="reset">