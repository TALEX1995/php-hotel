<table class="table">
    <thead>
        <tr>
            <?php foreach ($hotel_data as $data) : ?>
                <th scope="col"><?= str_replace('_', ' ', ucfirst($data)) ?></th>
            <?php endforeach ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hotels as $hotel) : ?>

            <?php if ((($want_parking == $hotel['parking']) || ($want_parking === '')) && (($search_hotel_vote == $hotel['vote']) || ($search_hotel_vote === ''))) : ?>
                <tr>
                    <?php foreach ($hotel as $data => $info) : ?>

                        <?php if (($data === 'parking') && ($info === true)) : ?>
                            <td>Yes</td>

                        <?php elseif (($data === 'parking') && ($info === false)) : ?>
                            <td>No</td>

                        <?php else : ?>
                            <td><?= $info ?></td>
                        <?php endif ?>

                    <?php endforeach ?>
                </tr>
            <?php endif ?>
        <? endforeach ?>
    </tbody>
</table>