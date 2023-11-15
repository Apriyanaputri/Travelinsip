<html>

<head>
    <title>Travelinsip | Mode Admin</title>
    <link rel="icon" href="../image/Logo Pesawat.png">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
</head>

<body>
    <?php include "nav.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col s5">
                <div class="card-panel white-text blue">
                    <h5>Jenis Transportasi</h5>
                    <table>
                        <thead style="background-color: rgba(0, 0, 0, 0.25);" class="white-text">
                            <tr>
                                <td>Deskripsi</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="white-text">
                            <?php include "koneksi.php";
                            $sql = mysqli_query($conn, 'select * from type_trans ');
                            while ($dtt = mysqli_fetch_array($sql)) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $dtt['description']; ?>
                                    </td>
                                    <td>
                                        <a href="type_trans_d.php?id_trans_type=<?= $dtt['id_trans_type']; ?>"
                                            onclick="return confirm('Sure, want to delete?');"><button
                                                class="red btn waves-effect"><i class="ion-trash-b"></i></button></a>
                                        <a href="type_trans_u.php?id_trans_type=<?= $dtt['id_trans_type']; ?>"><button
                                                class="yellow btn waves-effect"><i class="ion-edit"></i></button></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col s7">
                <div class="card-panel">
                    <h3><i class="ion-plus"></i> Tambahkan Jenis Transportasi</h3>
                    <form method="post" action="type_trans_t.php">
                        <div class="input-field">
                            <input type="text" name="description" id="desc" required>
                            <label for="desc">Deskripsi</label>
                        </div>
                        <button class="btn waves-effect green"><i class="ion-plus"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <a href="index.php" onclick="window.close();"><button class="btn waves-effect red"><i
                    class="ion-close"></i></button></a>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>
