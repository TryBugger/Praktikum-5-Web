<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center bg-light fs-5 border rounded rounded-3 deviceTitle" style="font-weight:bold">Tabel Data Device</p>
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama Device</th>
                            <th scope="col">Brand Device</th>
                            <th scope="col">Jumlah Device</th>
                            <th scope="col">Status Device</th>
                        </tr>
                    </thead>
                    <tbody class="table-success">
                        <?php
                            foreach ($dataDevice as $listItem) {
                        ?>
                                <tr>
                                    <?php
                                        foreach ($listItem as $item) {
                                    ?>
                                        <td><?= $item ?></td>
                                    <?php
                                        }
                                    ?>
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
