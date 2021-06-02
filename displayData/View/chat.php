<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col" class="col-2"></th>
            <th scope="col" class="col-2"></th>
            <th scope="col" class="col-8"></th>
        </tr>
    </thead>
    <tbody>
    <!-- Dans une premier temps faites une boucle pour afficher "en dur" plusieurs messages (plusieurs fois le même) -->
            
        <?php
                for ($i = 0; $i < 5; $i++) {
                ?>
                    <tr class="table-light">
                     <td class="col-2">01/06/2021</td>
                        <td class="col-2">camile</td>
                        <td class="col-8">Salut !</td>
                    </tr>
            <?php
            }
            ?>

    </tbody>


</table>