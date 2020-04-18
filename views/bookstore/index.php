<?php require '../views/partials/header.php' ?>
<div class="container bookstore">
    <div class=" col-md-12 filter-search">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filtrer par :
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>
    <!--/.filter-search-->
    <div class="row col-md-12 store">
        <div class="col-md-3 col-sm-6 book-container">
            <h5 class="store-book-title">
                <a href="#">Titre du livre</a>
            </h5>
            <div class="book-view book-closeview">
                <div class="cover-img">
                    <div class="front">
                        <div class="thumbnail-img">
                            <img class="card-img" src="images/extra-danse.jpg" alt="extra-danse">
                        </div>
                    </div>
                    <!--/.front-->
                    <div class="cover"></div>
                    <div class="back">
                        <h6>Titre du livre</h6>
                        <h6>Auteur</h6>
                        <p>Prix (€) : </p>
                        <a href="#" class="btn blue-gradient btn-rounded">Plus de détails</a>
                    </div>
                </div>
                <!--/.cover-img-->
            </div>
            <!--/.book-view .book-closeview-->
        </div>
    </div>
</div>
<?php require '../views/partials/footer.php' ?>