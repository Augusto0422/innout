<main class="content">
    <?php 
       renderTitle(
           'Relatório Gerencial',
           'Resumo das horas trabalhadas dos funcionários',
           'icofont-chart-histogram'
       )
    ?>

    <div class="summary-boxes">
        <div class="summary-box bg-primary">
            <i class="icofont-users icon"></i>
            <p class="title">Quantidade de funcionários</p>
            <h3 class="value"><?= $activeUsersCount?></h3>
        </div>
        <div class="summary-box bg-danger">
            <i class="icofont-patient-bed icon" ></i>
            <p class="title">Faltas</p>
            <h3 class="value"><?= count($absentUsers)?></h3>
        </div>
        <div class="summary-box bg-success">
            <i class="icofont-sand-clock icon"></i>
            <p class="title">Horas Trabalhadas no Mês</p>
            <h3 class="value"><?= $hoursInMonth?></h3>
        </div>
    </div>
    <?php if(count($absentUsers)>0) : ?>
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="card-title">Faltosos do Dia</h4>
                <p class="card-catagory mb-0">Relação dos funcionários que não bateram o ponto</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>Nome</th>
                    </thead>
                    <tbody>
                        <?php foreach($absentUsers as $name):?>
                            <tr>
                                <td><?=$name?></td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif?>
</main>