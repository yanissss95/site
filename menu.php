<?php global $currentPage; ?>
<nav class="menu-mobile">
    <ul>
        <li class="menu-deroulant">
            <a href="#">Menu</a>


            <ul class="sous-menu">

                <li><a href="presentation.php">Présentation</a></li>
                <li><a href="auteur.php">Auteur</a></li>
                <li><a href="protagonistes.php">Protagonistes</a></li>
                <li><a href="antagonistes.php">Antagonistes</a></li>
                <li><a href="arcs.php">Les Arcs</a></li>
                <li><a href="evolution.php">L'évolution</a></li>
                <li><a href="avis.php">Avis en anglais</a></li>
                <li><a href="page8.php">PHP</a></li>
                <li><a href="page9.php">PHP 2</a></li>

            </ul>
        </li>
    </ul>
</nav>

<div class="w3-bar w3-panel w3-border menu-desktop">
    <table width="100%">
        <tbody>
        <tr>
            <th><a href="index.php"><img src="images/Le.gif" width="100px"></a></th>
            <th width="12.5%"><a href="index.php">
                    <button class="w3-button <?php echo ($currentPage === 'Accueil') ? 'w3-light-grey' : 'w3-black' ?>">Accueil</button>
                </a></th>
            <th width="12.5%"><a href="presentation.php">
                    <button
                            class="w3-button <?php echo ($currentPage === 'Présentation') ? 'w3-light-grey' : 'w3-black' ?>">Présentation
                    </button>
                </a></th>
            <th width="12.5%"><a href="auteur.php">
                    <button class="w3-button <?php echo ($currentPage === 'Auteur') ? 'w3-light-grey' : 'w3-black' ?>">Auteur</button>
                </a></th>
            <th width="12.5%"><a href="protagonistes.php">
                    <button class="w3-button <?php echo ($currentPage === 'Protagonistes') ? 'w3-light-grey' : 'w3-black' ?>">Protagonistes</button>
                </a>
            </th>
            <th width="12.5%"><a href="antagonistes.php">
                    <button class="w3-button <?php echo ($currentPage === 'Antagonistes') ? 'w3-light-grey' : 'w3-black' ?>">Antagonistes</button>
                </a>
            </th>
            <th width="12.5%"><a href="arcs.php">
                    <button class="w3-button <?php echo ($currentPage === 'Les arcs') ? 'w3-light-grey' : 'w3-black' ?>">Les arcs</button>
                </a></th>
            <th width="12.5%"><a href="evolution.php">
                    <button class="w3-button <?php echo ($currentPage === 'L\'évolution') ? 'w3-light-grey' : 'w3-black' ?>">L'évolution</button>
                </a>
            </th>
            <th width="12.5%"><a href="avis.php">
                    <button class="w3-button <?php echo ($currentPage === 'Avis en anglais') ? 'w3-light-grey' : 'w3-black' ?>">Avis en
                        anglais
                    </button>
                </a></th>
        </tr>
        </tbody>
    </table>
</div>