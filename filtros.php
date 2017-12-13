<section id="filtros">
    <input type="hidden" id="filtrosUsu" value="<?php echo(@$dados); ?>">
    <form method="POST" action="CFiltros.php">
        <section id="carac_quartos">
            <label>Quartos</label>
        </section>

        <section id="carac_suites">
            <label>Suítes</label>
        </section>

        <section id="carac_banheiros">
            <label>Banheiros</label>
        </section>

        <section id="carac_garagens">
            <label>Garagem</label>
        </section>

        <section id="carac_churrasqueiras">
            <input type="checkbox" id="churrasqueiras" name="churrasqueiras">
            <label for="churrasqueiras">Churrasqueira</label>
        </section>

        <section id="carac_dispensas">
            <input type="checkbox" id="dispensas" name="dispensas">
            <label for="dispensas">Dispensa</label>
        </section>

        <section id="carac_salastv">
            <input type="checkbox" id="salas_tv" name="salas_tv">
            <label for="salas_tv">Sala de TV/Som</label>
        </section>

        <section id="carac_escritorios">
            <input type="checkbox" id="escritorios" name="escritorios">
            <label for="escritorios">Escritório</label>
        </section>

        <section id="carac_empregadas">
            <input type="checkbox" id="empregada" name="empregada">
            <label for="empregada">Suíte para empregada</label>
        </section>

        <section id="carac_porao">
            <input type="checkbox" id="porao" name="porao">
            <label for="porao">Porão</label>
        </section>

        <section id="carac_piscinas">
            <input type="checkbox" id="piscinas" name="piscinas">
            <label for="piscinas">Piscina</label>
        </section>

        <input type="hidden" name="processo" value="filtrar">
        <button type="submit" value="buscar">Filtrar</button>
    </form>
</section>