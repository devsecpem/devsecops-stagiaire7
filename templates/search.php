<?php
/**
 * MediTrack - Patient Search Template
 *
 * Displays search form and results.
 */
?>
<h2>Recherche de patients</h2>
<form method="GET" action="?page=search">
    <input type="text" name="q" placeholder="Nom du patient">
    <button type="submit">Rechercher</button>
</form>

<?php if (isset($_GET['q'])): ?>
    <h3>Resultats pour : <?php echo $_GET['q']; ?></h3>
    <?php if ($results && mysqli_num_rows($results) > 0): ?>
        <table>
            <tr><th>ID</th><th>Nom</th><th>Date de naissance</th></tr>
            <?php while ($row = mysqli_fetch_assoc($results)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>Aucun patient trouve.</p>
    <?php endif; ?>
<?php endif; ?>
