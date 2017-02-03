 <div class="row" style="padding-bottom: 20px">
    <a href="index.php?action=create"><button class="btn btn-info">Créer un sujet</button></a>
</div>
<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
            foreach ($lesSujets as $unSujet){
            ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <button type="button" class="btn btn-default"><a href="index.php?action=like&id=<?=$unSujet["id"]?>"><img src="resources/pouceVert.jpg" width="45" height="45"></a></button>
                          <?= $unSujet["titre"]?> - <?= dateToFr($unSujet["date_creation"])?>
                          <button type="button" class="btn btn-defaul"><a href="index.php?action=signal&id=<?=$unSujet["id"]?>"><img src="resources/pouceRouge.jpg" width="45" height="45"></a></button>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <?= $unSujet["description"]?>
                    </div>
                </div>        
            <?php 
            }
            ?>
            </div>    
        </div>
        <div class="col-md-2"></div>    
    </div> 
</div>