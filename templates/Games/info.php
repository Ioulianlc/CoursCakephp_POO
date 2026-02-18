<?php //template/Games/infos.php ?>

<h1><?= $game->title ?></h1>

<p>Date de sortie: <?= $game->releasedate  ?></p>
        
                     //($game->multi == 1) ?'Oui' : 'Non' ceci est la version non simplifié sans table de vérité (il estime que c'esvrai par défaut donc 1 donc oui )
<p>Mutltijoueur : <?=  ($game->multi) ?'Oui' : 'Non' ?></p>

<p>Fiche créée le <?=  $game->created ?></p>
<p>Fiche modifié le <?=  $game->modified ?></p>