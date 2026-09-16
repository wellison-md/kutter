<h2>Cabos</h2>
<br/>

<p style="color: var(--cz2)"><?php printf("%d Registro(s) encontrado(s)", count($payload)); ?></p>
<div style="display: flex; flex-direction: row-reverse; width: 85%">
    <a href=""><img height="32px" src="/assets/icons/novo.svg" alt="novo"/></a> &nbsp;
    <a href=""><img height="32px" src="/assets/icons/filtro.svg" alt="filtrar"/></a> &nbsp;
    <a href=""><img height="32px" src="/assets/icons/csv.svg" alt="exportar como CSV"/></a> &nbsp;
    <a href=""><img height="32px" src="/assets/icons/pdf.svg" alt="exportar com PDF"/></a> &nbsp;
</div>
<br />

<table border="0" style="width:85%;">
    <thead>
        <tr class="tbl-header">
            <th style="width: 70px">id</th>
            <th>descrição</th>
            <th>seção</th>
            <th>cor</th>
            <th style="width: 150px">comprimento</th>
            <th style="width: 100px">desponte A</th>
            <th style="width: 100px">desponte B</th>
            <th style="width: 150px">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($index = 0; $index < count($payload); $index++): ?>
            <tr class="<?php echo $index % 2 == 0 ? "striped" : ""; ?>">
                <td><?php echo $payload[$index]['id'] ?></td>
                <td><?php echo strtoupper($payload[$index]['description']) ?></td>
                <td><?php printf("%.2f %s", $payload[$index]['section'], $payload[$index]['section_unit']) ?></td>
                <td><?php echo $payload[$index]['color'] ?></td>
                <td><?php echo $payload[$index]['size'] ?></td>
                <td><?php printf("%.1f", $payload[$index]['strip_a']) ?></td>
                <td><?php printf("%.1f", $payload[$index]['strip_b']) ?></td>
                <td>
                    <a href=""><img src="/assets/icons/detalhar.svg" alt="detalhar"/></a>
                    <a href=""><img src="/assets/icons/editar.svg" alt="editar"/></a>
                    <a href=""><img style="" src="/assets/icons/excluir.svg" alt="excluir"/></a>
                </td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>

<br />
<a href="" class="btns primary">Cadastrar</a>

