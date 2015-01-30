<div class="well">
<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><?php echo $book->book_title; ?></h3>
    </div>
    <div class="col-lg-4">
        <button type="button" class="btn btn-success">Sprawdz</button>
        <button type="button" class="btn btn-info">Rezerwuj</button>
        <button type="button" class="btn btn-primary">Wypozycz</button>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">

        <?php echo $book->book_description; ?>
    </div>
    <div class="col-lg-4">
        <ul class="list-unstyled">
            <li>Author: <b><?php echo $book->book_author; ?></b></li>
            <li>Year: <b><?php echo $book->book_year; ?></b></li>
        </ul>
    </div>
</div>
</div>